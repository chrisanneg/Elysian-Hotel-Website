
  var name=document.myform.name.value;  
  var pass=document.myform.pass.value;  
   
  if (name==null || name==""){  
    alert("Name can't be blank");  
    return false;  
  }else if(pass.length<6){  
    alert("Password must be at least 6 characters long.");  
    return false;  
    }
  
  var firstpass=document.myform.pass.value;
  var secondpass=document.myform.pass2.value;
  if(firstpass=secondpass){
  return true;
  }
  else{
  alert("password must be same!");
  return false;
  }
  
  var phone=document.myform.phone.value;
  if (isNaN(phone)){
    document.getElementById("phone").innerHTML="   !!!!Enter Numeric value only!!!  ";
    return false;
  }else{
    return true;
    }
  
  var x=document.myform.email.value;  
  var atposition=x.indexOf("@");  
  var dotposition=x.lastIndexOf(".");  
  if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
    return false;  
    }  
  
  