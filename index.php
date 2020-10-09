
<!doctype html>
<?php include 'Data.php'

# include ("../اسم المجلد الي بدي افتحو/ ");

?>

<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style type="text/css">
        .input{ height: 25px;  width: 60%;font-size: 1rem; line-height: 1.5;  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; border: 1px solid #000000;}
        form { width: 25% ; height: 40% ;text-align: center }
        legend {
            text-align: left;
            display: block;
            padding-left: 2px;
            padding-right: 2px;
            border: 2px black;
        }
    </style>

    <title>  برنامج شؤون الطلاب  </title>
</head>
<body>
<div align="center">  <h2> برنامج شؤون الطلاب  </h2> </div>
<hr>
<div align="center">
    <form action="index.php" method="post" >
        <fieldset >
            <legend> <p dir="ltr" >  تسجيل الدخول </p> </legend>
            <input type="text" id="username" name="userName" class="input">  أسم المستخدم<br> <br>
            <input type="password" id="password"  name="Password"  class="input" >   كلمة المرور
            <br>
            <br>
            <div align="center"> <input type="submit" name="submit" value="دخول"></div>
        </fieldset>

    </form>
</div>
<?php
if(isset($_POST['submit'])){
    $username=$_POST['userName'];
    sha1($password=$_POST['Password']);
    $obj = new  Data();
    $obj -> login($username,$password );
}

?>


</body>
</html>