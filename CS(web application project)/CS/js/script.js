function empty(){
	var uname = document.getElementById("uname")
	var pwd = document.getElementById("pwd");
	var cpwd = document.getElementById("cpwd");
	
	if(pwd.value!=cpwd.value){
		document.getElementById('er1').innerHTML="Password does not Match.";
		return false
	}
	else{
		true;
	}
	
	if(uname.value=="" || pwd.value==""){
		document.getElementById('er1').innerHTML="Username or Password cannot be empty.";
		return false;
	}
	else{
		true;
	}

}

