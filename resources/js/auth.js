


const registration_form=document.getElementById('registration-form');
const btn_create_acccount=document.getElementById('btn-create-acccount');

registration_form.addEventListener('submit',(e)=>{
    btn_create_acccount.classList.remove("bg-gradient-to-br");
    btn_create_acccount.classList.remove("from-[#059669]");
    btn_create_acccount.classList.remove("to-[#10b981]");
    btn_create_acccount.classList.add("bg-[#b5ac99]");
    btn_create_acccount.value="Creating Account..."
})



