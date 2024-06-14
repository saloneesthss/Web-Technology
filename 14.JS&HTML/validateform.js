function validateForm() {
    const frm=document.register;
    
    if(frm.firstname.value===''){
        alert("Please enter your first name.");
        return false;
    }
    
    if(frm.lastname.value==='') {
        alert("Please enter your last name.");
        return false;
    }
}