<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reader</title>
    <!-- Put these inside the <head> tags of your reader template -->
    <!-- PDF.js Reader Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';</script>

    <!-- ePub.js Reader Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/epubjs/dist/epub.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body>

    <header class="text-[#1C1A15] bg-[#F8F6F1CC] font-body flex items-center justify-between py-1 px-4">
        <div class="flex items-center space-x-3">
            <a href="/dashboard">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d='M16.5 12h-9m3.5 3.5L7.5 12 11 8.5'/>
                <path d='M3 9.4c0-2.24 0-3.36.436-4.216a4 4 0 0 1 1.748-1.748C6.04 3 7.16 3 9.4 3h5.2c2.24 0 3.36 0 4.216.436a4 4 0 0 1 1.748 1.748C21 6.04 21 7.16 21 9.4v5.2c0 2.24 0 3.36-.436 4.216a4 4 0 0 1-1.748 1.748C17.96 21 16.84 21 14.6 21H9.4c-2.24 0-3.36 0-4.216-.436a4 4 0 0 1-1.748-1.748C3 17.96 3 16.84 3 14.6z'/>
                </svg>
            </a>

            <div >
            <h4 class="font-bold font-black font-display text-[clamp(1rem,3vw,1.5rem)]">Readly</h4>
            </div>
        </div>

        <div  class="rounded-[10px] p-1 transition-color duration-[500ms] hover:bg-white">
            
            <button type="button" id="light-btn">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <path d='M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0M3 12h1m1-7 .707.707M19 5l-.707.707M5 19l.707-.707M19 19l-.707-.707M12 3v1m0 17v-1m8-8h1'/>
                </svg>
            </button>
        </div>

    </header>
    
    <main id="main" 
          class="w-full flex-1" 
          data-file-path="{{ asset('storage/' . $book->file_path) }}" // [!code highlight]
          data-file-format="{{ $book->format }}">
          

    </main>


    @vite('resources/js/reader.js')
</body>
</html>