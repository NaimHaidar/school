function validSign() {
    
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;
   
  
    if (username == "" || email == "" || password == "" || password2 == "") {
      alert("Please fill in all fields.");
      return false;
    }
  
    if (password != password2) {
      alert("Passwords do not match.");
      return false;
    }
    return true;
  }
  function validLogin() {
    var name = document.getElementById('user').value;
    var pass = document.getElementById('pass').value;
    if(name==""||pass==""){
        alert("Please fill in all fields.");
        return false;
    }
   return true;

  }

  function validcontact() {
 
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('mail').value;
    var country = document.getElementById('country').value;
    var message =document.getElementById('message')
   
    var test = true;
  
   
    if (fname === '' || lname === '' || email === '' || country === ''|| message=='') {
      test= false;
    }
  
    
    if (test) {
      alert('we will reply to you as soon as possible');
    } else {
      alert('Please fill out all fields before submitting');
    }
  }








  