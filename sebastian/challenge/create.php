<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="ajax-script.js"></script>

   <title>Document</title>
</head>
<body>

   <form id="form">
       <input type="text" id="firstname" name="fname" placeholder="first name"> <br><br>
       <input type="text" id="lastname" name="lname" placeholder="last name"><br><br>
       <input type="text" id="email" name="email" placeholder="Email"><br><br>
       <input type="submit" value="submit">
   </form>
   
   <?php
    $conn=mysqli_connect('localhost','root','','ajaxTest');
    $sql = "SELECT email FROM `users` WHERE e"
   ?>

   <script>
       document.getElementById("form").addEventListener("submit", insertName);
    //POST with Inserting user into db

       function insertName(e){
           e.preventDefault(); //this prevents the page from refreshing after submitting
           let fname=document.getElementById("firstname").value; //saving the firstname value
           let lname=document.getElementById("lastname").value; //saving the lastname value
           let email=document.getElementById("email").value; //saving the lastname value
           let params=`fname=${fname}&lname=${lname}&email=${email}`; //creating the parameters for the POST method
           console.log(params)
           let request=new XMLHttpRequest(); //creating new request

           request.open("POST", "process.php",true); //connecting to the process.php file
           request.setRequestHeader("Content-type","application/x-www-form-urlencoded"); //setting header for POST method
           request.onload=function(){
               if(this.status==200){
               console.log(this.responseText)
           }
           }
           request.send(params); //send parameters to be further processed by php
       }

   </script>
</body>
</html>