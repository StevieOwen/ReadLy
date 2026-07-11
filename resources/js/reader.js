// dark or light mode
const light_btn = document.querySelector('#light-btn');
const main = document.getElementById('main');

light_btn.addEventListener('click', (e) => {
    if (!main.classList.contains('bg-[#0e0d0a]')) {
        main.classList.add('bg-[#0e0d0a]', 'text-white');
        // If an epub rendition is active, we can also tell it to change its internal theme colors
        if (window.epubRendition) {
            window.epubRendition.themes.override("color", "#fff");
            window.epubRendition.themes.override("background", "#0e0d0a");
        }
    } else {
        main.classList.remove('bg-[#0e0d0a]', 'text-white');
        if (window.epubRendition) {
            window.epubRendition.themes.override("color", "#1c1611");
            window.epubRendition.themes.override("background", "#f8f6f1");
        }
    }
});

// reading 
document.addEventListener('DOMContentLoaded', () => {
    const mainCanvas = document.getElementById('main');
    
    if (mainCanvas) {
        const fileUrl = mainCanvas.dataset.filePath;
        const fileFormat = mainCanvas.dataset.fileFormat ? mainCanvas.dataset.fileFormat.toLowerCase() : '';

        console.log(`Loading document: ${fileUrl} [Format: ${fileFormat}]`);
        
        // Show a temporary clean loading message inside your main workspace canvas container
        mainCanvas.innerHTML = `<div id="reader-loading" class="flex items-center justify-center h-48 text-[#b5ac99] font-medium text-sm">Loading book canvas layer...</div>`;

        // Routing engine execution based on the book file format extension parameter string
        if (fileFormat === 'pdf') {
            renderPDF(fileUrl, mainCanvas);
        } else if (fileFormat === 'epub' || fileFormat === 'mobi') {
            renderEPUB(fileUrl, mainCanvas);
        } else {
            mainCanvas.innerHTML = `<div class="p-8 text-center text-red-500">Unsupported format: ${fileFormat}</div>`;
        }
    }
});

/**
 * PDF Render Engine Pipeline (Renders all pages smoothly on a vertical scroll)
 */
function renderPDF(url, container) {
    if (typeof pdfjsLib === 'undefined') {
        container.innerHTML = '<div class="p-8 text-center text-red-500">PDF.js library failed to load in window context.</div>';
        return;
    }

    pdfjsLib.getDocument(url).promise.then(pdf => {
        // Clear the initial loader template text state and create a scrolling canvas view frame
        container.innerHTML = '<div id="pdf-viewer" class="overflow-y-auto h-[calc(100vh-60px)] p-4 flex flex-col items-center space-y-6 bg-transparent"></div>';
        const viewer = document.getElementById('pdf-viewer');

        // Loop through and print every document layer element sequentially inside the scrollbox
        for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
            pdf.getPage(pageNum).then(page => {
                const canvas = document.createElement('canvas');
                canvas.className = "shadow-lg max-w-full bg-white rounded-[4px] border border-[#e3ded5]/20";
                const ctx = canvas.getContext('2d');
                
                // Adjusting display target rendering viewport ratio metrics context to 1.5x crisp definition
                const viewport = page.getViewport({ scale: 1.5 });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                viewer.appendChild(canvas);

                const renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                page.render(renderContext);
            });
        }
    }).catch(error => {
        console.error('PDF Canvas engine error branch execution logic context:', error);
        container.innerHTML = `<div class="p-8 text-center text-red-500">Error opening document. Please verify storage path accessibility parameters.</div>`;
    });
}

/**
 * EPUB/MOBI Render Engine Pipeline (Handles pagination spreads and left/right button navigations)
 */
function renderEPUB(url, container) {
    if (typeof ePub === 'undefined') {
        container.innerHTML = '<div class="p-8 text-center text-red-500">ePub.js library failed to load in window context.</div>';
        return;
    }

    // Build the structural book wrapper layout view framing layer elements inside main canvas container tag 
    container.innerHTML = `
        <div class="relative h-[calc(100vh-60px)] flex items-center justify-between px-4 select-none">
            <button id="prev-page" class="absolute left-6 z-30 p-3 bg-white hover:bg-[#1c1611] text-[#726252] hover:text-white border border-[#b5ac99]/40 rounded-full shadow-sm transition-all duration-300 active:scale-95 cursor-pointer">←</button>
            <div id="epub-viewer" class="w-full h-full max-w-2xl mx-auto flex items-center justify-center"></div>
            <button id="next-page" class="absolute right-6 z-30 p-3 bg-white hover:bg-[#1c1611] text-[#726252] hover:text-white border border-[#b5ac99]/40 rounded-full shadow-sm transition-all duration-300 active:scale-95 cursor-pointer">→</button>
        </div>
    `;

    // Instantiate and inject the context maps downstream to frame render windows
    const book = ePub(url);
    const rendition = book.renderTo("epub-viewer", {
        width: "100%",
        height: "100%",
        spread: "always"
    });

    // Make the instance globally visible to our mode toggler execution maps
    window.epubRendition = rendition;

    // Render the initial document section view node
    rendition.display();

    // Bind interaction logic paths directly onto control targets 
    document.getElementById('prev-page').addEventListener('click', () => rendition.prev());
    document.getElementById('next-page').addEventListener('click', () => rendition.next());

    // Connect standard key controls for smooth reading loops on desktops
    window.addEventListener("keyup", (e) => {
        if (e.key === "ArrowLeft") rendition.prev();
        if (e.key === "ArrowRight") rendition.next();
    });
}