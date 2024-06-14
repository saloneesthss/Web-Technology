function validateForm() {
    const frm=document.register;
    
    if(frm.username.value===''){
        alert("Please enter your username.");
        return false;
    }
    
    if(frm.pwd.value==='') {
        alert("Please enter your password.");
        return false;
    }
}