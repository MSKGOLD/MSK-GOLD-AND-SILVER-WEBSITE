<?php
define('DB_HOST','127.0.0.1');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";
dbname=".DB_NAME,DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>
<?php
if(isset($_POST['b1']))
  {	
	
	
	$FullName=$_POST['t1'];
	$hallticket=$_POST['t2'];
	$Email=$_POST['t3'];
	$PhoneNumber=$_POST['t4'];
  $Games=$_POST['t5'];
  $Degreecoures=$_POST['t6'];
  $genderdetails=$_POST['t7'];
	$sql1="insert into enroll(FullName,hallticket,Email,Phone Number,Games,Degreecoures,genderdetails)
	values(:a1,:a2,:a3,:a4,:a5,:a6,:a7);";
	$query1 = $dbh -> prepare($sql1);
	$query1-> bindParam(':a1', $FullName, PDO::PARAM_STR);
	$query1-> bindParam(':a2', $hallticket, PDO::PARAM_STR);
	$query1-> bindParam(':a3', $Email, PDO::PARAM_STR);
	$query1-> bindParam(':a4', $PhoneNumber, PDO::PARAM_STR);
  $query1-> bindParam(':a5', $Games, PDO::PARAM_STR);
  $query1-> bindParam(':a6', $Degreecoures, PDO::PARAM_STR);
  $query1-> bindParam(':a7', $genderdetails, PDO::PARAM_STR);
	$query1->execute();

  }
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding:10px;
  background-color: #000d1a;
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: white;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: black;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

</style>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name"  required name="t1">
          </div>
          <div class="input-box">
            <span class="details">hallticket</span>
            <input type="text" placeholder="Enter your hallticket Number"  required name="t2">
          </div>
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="text" placeholder="Enter your email"  required name="t3">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number"  required name="t3">
          </div>
          <div class="input-box">
            <span class="details">Games</span>
            <input type="text" placeholder="basketball,swimming,football..."  required name="t4">
          </div>
    
          <div class="input-box">
          <span class="details">year</span>
          <input type="text" placeholder="Enter  year"  required name="t5">
          </div>
          <div class="input-box">
          <span class="details">Degree coures</span>
         <select id= Degeecoures name="t6">
         <option value="Degree coures">Degree coures</option>
         <option value="MPCS">MPCS</option>
         <option value="MPC">MPC</option>
         <option value="MSCS">MSCS</option>
         <option value="MECS">MECS</option>
<option value="B.COM(general)">B.COM(general)</option>
<option value="B.COM(ca)">B.COM(ca)</option>
<option value="BBA">BBA</option>
<option value="BA">BA</option>
<option value="BTMC">BTMC</option>
<option value="BZC">BZC</option>
</select>
 </div>
        </div>
        <div class="gender-details"  required name="t7">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>