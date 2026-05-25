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



const login_form=document.getElementById('login-form');
const btn_login=document.getElementById('btn-login');

login_form.addEventListener('submit',(e)=>{
   btn_login.classList.remove("bg-gradient-to-br");
   btn_login.classList.remove("from-[#059669]");
   btn_login.classList.remove("to-[#10b981]");
   btn_login.classList.add("bg-[#b5ac99]");
   btn_login.value="Validating Credentials..."
})
