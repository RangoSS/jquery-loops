

function checkDate(){
	
	 var date_from = document.forms["myForm"]["date_from"].value;
	 var date_to = document.forms["myForm"]["date_to"].value;

   if(date_from=="" && date_to==""){
   //	alert("fill in your date");
   window.location.href = "homes.php";
   	return false;
   }

	//alert("ghghghghghghghghgh");
}