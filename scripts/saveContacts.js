
var saveContactBtn = document.getElementById("saveContactBtn");
saveContactBtn.addEventListener("click", saveContact, false);

function saveContact(e){
	//takes all variables and sends it to the php script
	var xhr = new XMLHttpRequest();

	alert("I am in");
	
	xhr.onreadystatechange = function(e){     
		alert("in");
		console.log(xhr.readyState);     
		if (this.readyState == 4 && this.status == 200){  
			//alert("JSON");
			//alert(xhr.responseText);      
			console.log(xhr.responseText);// modify or populate html elements based on response.
			var responseJSON = JSON.parse(xhr.responseText);
			console.log(responseJSON);
			console.log(responseJSON.success);

			if(responseJSON.success == "true"){
				alert("suceess!");
				document.getElementById("contactForm").innerHTML ="";
				document.getElementById("confirmation").innerHTML = "Thank you for your interest! Welcome to browse our articles.";
				//alert("I am here");
				alert(document.getElementById("confirmation").innerHTML);

			}
		}
	};

	var firstname = document.forms[0]["firstname"];
	var lastname = document.forms[0]["lastname"];
	var email = document.forms[0]["email"];
	var phone = document.forms[0]["phone"];
	var category = document.forms[0]["category"];
	var email = document.forms[0]["role"];
	var phone = document.forms[0]["comments"];


	// //alert("firstname="+firstname.value+"&lastname="+lastname.value+"&email="+email.value
	// 			+"&phone="+phone.value+"&category="+category.value
	// 			+"&role="+role.value
	// 			+"&comments="+comments.value);



	//console.log(nom.value, esrb.value, rating.value);
	

	xhr.open("POST", "contactProcessing.php", true); //true means it is asynchronous // Send variables through the url
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	xhr.send("firstname="+firstname.value+"&lastname="+lastname.value+"&email="+email.value
				+"&phone="+phone.value+"&category="+category.value+"&role="+role.value
				+"&comments="+comments.value);
}

