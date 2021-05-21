function validate(form){
    var re = /^[\w ]+$/;
    if (form.name.value == "") {
      alert("Error: You haven't written your name!");
      form.name.focus();
      return false;
  }
  if (!re.test(form.name.value)) {
    alert("Error: Your name contains invalid characters!");
    form.name.focus();
    return false;
  }
  
  if (isNaN(form.name.value) == false) {
    alert("Error: Your name is number!");
    form.name.focus();
    return false;
  }
  if (form.email.value == "") {
    alert("Error: You haven't written your email!");
    form.email.focus();
    return false;
  }
if (form.address.value == "") {
    alert("Error: You haven't written your address!");
    form.address.focus();
    return false;
  }
  
  if (!re.test(form.address.value)) {
    alert("Error: Your contains invalid characters!");
    form.address.focus();
    return false;
  }
  
  if (isNaN(form.address.value) == false) {
    alert("Error: Your ddress is number!");
    form.address.focus();
    return false;
  }
  if (form.city.value == "") {
    alert("Error: You haven't written your city!");
    form.city.focus();
    return false;
  }
  
  if (!re.test(form.city.value)) {
    alert("Error: Your city contains invalid characters!");
    form.city.focus();
    return false;
  }
  
  if (isNaN(form.city.value) == false) {
    alert("Error: Your city is number!");
    form.city.focus();
    return false;
  }
  if (form.state.value == "") {
    alert("Error: You haven't written your state!");
    form.state.focus();
    return false;
  }
  
  if (!re.test(form.state.value)) {
    alert("Error: Your state contains invalid characters!");
    form.state.focus();
    return false;
  }
  
  if (isNaN(form.state.value) == false) {
    alert("Error: Your state is number!");
    form.state.focus();
    return false;
  }
  if (form.zip.value == "") {
    alert("Error: You haven't written your zip!");
    form.zip.focus();
    return false;
  }
  
  if (!re.test(form.zip.value)) {
    alert("Error: Your zip contains invalid characters!");
    form.zip.focus();
    return false;
  }
  if (form.cname.value == "") {
    alert("Error: You haven't written your cname!");
    form.cname.focus();
    return false;
  }
  
  if (!re.test(form.cname.value)) {
    alert("Error: Your cname contains invalid characters!");
    form.cname.focus();
    return false;
  }
  
  if (isNaN(form.cname.value) == false) {
    alert("Error: Your cname is number!");
    form.cname.focus();
    return false;
  }
  if (form.ccnum.value == "") {
    alert("Error: Card number is missing!");
    form.ccnum.focus();
    return false;
}

if (form.expmonth.value == "") {
    alert("Error: Expiry date is missing!");
    form.expmonth.focus();
    return false;
}
if (form.expyear.value == "") {
    alert("Error: Expiry date is missing!");
    form.expyear.focus();
    return false;
}

if (form.cvc.value == "") {
    alert("Error: CVC is missing!");
    form.cvc.focus();
    return false;
}
}