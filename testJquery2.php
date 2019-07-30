<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><!--this comes first-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->



<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head><br>
<body>
	<div class="container">
    <div class="mb-2">
      <?php include "insert_user.php";?>
      <p id="errmsgzip"></p>
    </div>
		<div class="row">
			<div class="col-sm-4 border border-primary">
    <h1>task For loop</h1>
    <form class="form">
    	<select id="selMe" class="browser-default custom-select" style="width: 30%;">
         <option selected>Selection Menu</option>
         <option value="3">3</option>
         <option value="50">50</option>
         <option value="100">100</option>
         <option value="200">200</option>
         <option value="all">more than 200</option>
    	</select><br>
        <input class="btn-primary" type="button" name="" value="submit" onclick="getRed();">
    </form>
     
     <div id="demo"></div>
</div>
<div class="col-sm-4 border border-secondary">
   <h1>task while loop</h1>
    <form class="form">
      <select id="selwhile" class="browser-default custom-select" style="width: 30%;">
         <option selected>Selection Menu</option>
         <option value="3">3</option>
         <option value="50">50</option>
         <option value="100">100</option>
         <option value="200">200</option>
         <option value="all">more than 200</option>
      </select><br>
        <input class="btn-primary" type="button" name="" value="submit" onclick="getWhile();">
    </form>
     
     <div id="listWhile"></div>

</div>
<div class="col-sm-4 border border-warning">
  <h1>String Replace</h1>
    <form class="form">
      <select id="selReplace" class="browser-default custom-select" style="width: 30%;">
         <option selected>Selection Menu</option>
         <option value="3">3</option>
         <option value="50">50</option>
         <option value="100">100</option>
         <option value="200">200</option>
         <option value="all">more than 200</option>
      </select><br>
        <input class="btn-primary" type="button" name="" value="submit" onclick="getReplace();">
    </form>
     
     <div id="listReplace"></div>
</div>
</div>
</div>
</body>
</html>
<script>

 
    
    $(document).ready(function(){
    var first_name=document.getElementById("first_name").value;
    var last_name=document.getElementById("last_name").value;
    var cellphone=document.getElementById("cellphone").value;
    var job=document.getElementById("job").value;
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;
console.log(first_name);


     $("#first_name").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
           // $("#lblError").html("");
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#first_name").css("border-color","red");
            }
            else{

               $("#first_name").css("border-color","grey");
            }
 
            
        });
////////////////////////////////////////////////////////////////////////////////////////
 $("#last_name").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#last_name").css("border-color","red");
            }
            else{
               $("#last_name").css("border-color","grey");
            }
 
            
        });
        ///////////////////////////////////////////////////////////////////////////////////////

         $("#job").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
           // $("#lblError").html("");
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#job").css("border-color","red");
            }
            else{
               $("#job").css("border-color","grey");
            }
 
            
        });


        ////////////////////////////////////////////////////////////////////////////////////////

        $("#email").keyup(function(){

     var email = $("#email").val();
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

     if (!filter.test(email)) {
      
         $("#email").css("border-color","red");
        
         email.focus;
    } else {
      
       $("#email").css("border-color","grey");
    }

 });

      

/////////////////////////////////////////////////////////////////////////////////////////////
 $('#cellphone').keypress(function(event){

       if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
           event.preventDefault(); //stop character from entering input
           $("#cellphone").css("border-color","red");
           alert("please enter number");
       }else{

          $("#cellphone").css("border-color","grey");
       }
    });


 });//closing ready document

/*
 function validateAfter(){
     
  var pswd=document.getElementById("password").value;
   //validate the length
if ( pswd== "" || pswd.length < 8) {
    alert("password cannot be emty or less than 8");
}else if(!pswd.match(/[A-z]/)){
    alert("password must contain atleast one small letter");
}else if(! pswd.match(/[A-Z]/)){
   alert("password must contain atleast one capital letter");
}else if( !pswd.match(/\d/)){
   alert("password must contain atleast one Number");
}

 else {
 
 }
 */
/////////////////////////////////////////////////////////////////////////////////////
function getRed(){	

$.ajax({

	url:"dbClass2.php",
	method:"post",
	 beforeSend: function()
          {
            console.log("loading .......");
          
          },
	data:{action:'myResults'},
	async: true,

    success:function(response){
      var ret=JSON.parse(response);
      var ret1=ret.Valid;
      //console.log(ret);
      //console.log(ret1);
     var showme="";
     var result_limit = document.getElementById('selMe').value;
 

for (var i = 0; i < result_limit; i++) {
  
  
     
       showme+="<tr><td> "+ret1[Math.floor(Math.random() * ret1.length )].cellphone+" </td>";
       showme+="<td> "+ret1[Math.floor(Math.random() * ret1.length )].date_logged+" </td>";
      // showme+="<td> "+ret1[2].date_logged+" </td>";

       "</tr>";

  	 
    }

    console.log(showme);
    
    $("#demo").html(showme);
    
    //return ret1;
}
	
});

} 
///////////////////////////////////////////////////////////////////////////////////////////////////////////
function getWhile(){

 $.ajax({
 url:"dbClass2.php",
  method:"post",
   beforeSend: function()
          {
            console.log("loading .......");
          
          },
  data:{action:'myResults'},
  async: true,

    success:function(response){
      var ret=JSON.parse(response);
      var ret1=ret.Valid;
      //console.log(ret);
      //console.log(ret1);
     var showhile="";
     var result_while = document.getElementById('selwhile').value;
 
    var i=0;
  while(i <= result_while){

     showhile+="<tr><td> "+ret1[Math.floor(Math.random() * ret1.length )].cellphone+" </td>";
       showhile+="<td> "+ret1[Math.floor(Math.random() * ret1.length )].date_logged+" </td>";
      // showme+="<td> "+ret1[2].date_logged+" </td>";

       "</tr>";

       i++;

  }


    console.log(showhile);
    
    $("#listWhile").html(showhile);

    
    //return ret1;
}
  
});

}  

</script>






 