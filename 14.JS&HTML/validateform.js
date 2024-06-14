function validateForm() {
    const frm=document.register;
    let firstname=document.getElementById('firstname').value;
    let lastname=document.getElementById('lastname').value;

    let errorMessage="";
    let isValid=true;
    if(frm.firstname.value===""){
        errorMessage+='<br>'+'Please enter your name';
        isValid=false;
    }
    
    if(frm.lastname.value==='') {
        alert("Please enter your last name.");
        return false;
    }
}