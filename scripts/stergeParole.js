function alertConfirm() {
    var confirmare = prompt("Introduce PIN-ul pentru confirmare");
	confirmare = confirmare.replace(/\s/g,'');		

	
	if((confirmare.length = 0) or (confirmare.length = null)){
		//document.getElementById("alert").innerHTML = "PIN introdus gresit";


		
		
		
	}else{
		//document.getElementById("alert").innerHTML = "Parola s-a sters cu succes.";
	   document.getElementById("alert").innerHTML = confirmare;
    }
	
	
	}


//function myFunction() {
//    var person = prompt("Please enter your name", "Harry Potter");
//    
//    if (person != null) {
//        document.getElementById("demo").innerHTML =
//        "Hello " + person + "! How are you today?";
//    }
//}