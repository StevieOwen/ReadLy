//upload file
const dropZone = document.getElementById('drop-zone');
const fileInput = document.getElementById('file-input');
const browseBtn = document.getElementById('browse-btn');

// Click zone or button to trigger hidden file input
const triggerClick = () => fileInput.click();
browseBtn.addEventListener('click', (e) => {
  e.stopPropagation(); // Prevents double firing since it's nested inside dropZone
  triggerClick();
});
dropZone.addEventListener('click', triggerClick);

// Drag & Drop visual feedback states
['dragenter', 'dragover'].forEach(eventName => {
  dropZone.addEventListener(eventName, (e) => {
    e.preventDefault();
    dropZone.classList.add('bg-[#f3ede2]', 'border-[#a39786]');
  }, false);
});

['dragleave', 'drop'].forEach(eventName => {
  dropZone.addEventListener(eventName, (e) => {
    e.preventDefault();
    dropZone.classList.remove('bg-[#f3ede2]', 'border-[#a39786]');
  }, false);
});

// Handle dropped or selected files
dropZone.addEventListener('drop', (e) => {
  const files = e.dataTransfer.files;
  if (files.length) handleFiles(files[0]);
});

fileInput.addEventListener('change', (e) => {
  if (e.target.files.length) handleFiles(e.target.files[0]);
});

function handleFiles(file) {
  console.log(`File accepted: ${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)`);
  // Add your upload pipeline or state handling logic here!
}


// display modal containing the form for uploading book

const modal_book_upload=document.getElementById('modal-book-upload');
const btn_display_modal=document.getElementById('btn-display-modal');
const close_btn=document.getElementById('close-btn');
const cancel=document.getElementById('cancel');

btn_display_modal.addEventListener('click',(e)=>{
  e.preventDefault();
  modal_book_upload.classList.remove('hidden');

})

close_btn.addEventListener('click',(e)=>{
  e.preventDefault();  
  modal_book_upload.classList.add('hidden');
})

cancel.addEventListener('click',(e)=>{
  e.preventDefault();  
  modal_book_upload.classList.add('hidden');
})
