const showTxtIcon = document.getElementById('show-pwd');
const hideTxtIcon = document.getElementById('hide-pwd');
const passwordInput = document.getElementById('password');

hideTxtIcon.addEventListener('click', (e) => {
  e.preventDefault();

  // Flip input visibility to plain text
  passwordInput.setAttribute('type', 'text');
  
  // Toggle Tailwind UI elements
  showTxtIcon.classList.remove('hidden');
  hideTxtIcon.classList.add('hidden');
});

showTxtIcon.addEventListener('click', (e) => {
  e.preventDefault();
  
  // Flip input visibility back to protected text
  passwordInput.setAttribute('type', 'password');
  
  // Toggle Tailwind UI elements
  showTxtIcon.classList.add('hidden');
  hideTxtIcon.classList.remove('hidden');
});


const registration_form=document.getElementById('registration-form');
const btn_create_acccount=document.getElementById('btn-create-acccount');

registration_form.addEventListener('submit',(e)=>{
    btn_create_acccount.classList.remove("bg-gradient-to-br");
    btn_create_acccount.classList.remove("from-[#059669]");
    btn_create_acccount.classList.remove("to-[#10b981]");
    btn_create_acccount.classList.add("bg-[#b5ac99]");
    btn_create_acccount.value="Creating Account..."
})