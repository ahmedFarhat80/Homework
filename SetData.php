<!DOCTYPE HTML>
<html>
<head>
    <style type="text/css">


        .button {
            text-align: center;
            font-family: "Arial Black", Gadget, sans-serif;
            font-size: 20px;
            border-top: 1px solid #96d1f8;
            background: #65a9d7;
            background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
            background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
            background: -moz-linear-gradient(top, #3e779d, #65a9d7);
            background: -ms-linear-gradient(top, #3e779d, #65a9d7);
            background: -o-linear-gradient(top, #3e779d, #65a9d7);
            padding: 8px 16px;
            -webkit-border-radius: 17px;
            -moz-border-radius: 17px;
            border-radius: 17px;
            -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
            -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
            box-shadow: rgba(0,0,0,1) 0 1px 0;
            text-shadow: rgba(0,0,0,.4) 0 1px 0;
            color: white;
            text-decoration: none;
            vertical-align: middle;
        }
        .button:hover {
            border-top-color: #28597a;
            background: #28597a;
            color: #ccc;
        }
        .button:active {
            border-top-color: #6f42c1;
            background: #1b265c;
        }




        a{
            text-decoration : none;}
        a:hover {
            color: orange;
        }

        .input{ height: 25px;  width: 80%;font-size: 1rem; line-height: 1.5;  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; border: 1px solid #000000;}
        form { width: 25% ; height: 40% ;text-align: center }
        legend {
            text-align: left;
            display: block;
            padding-left: 2px;
            padding-right: 2px;
            border: 2px black;
        }
        .error {color: #FF0000;}
    </style>

    <title> برنامج شئون الطلاب - ادخال البينات </title>
</head>
<body dir="rtl">
<div align="center">  <h2> برنامج شؤون الطلاب  </h2> </div>
<hr>
<?php
include 'Data.php';

$nameErr = $NameErr = $majorErr =  $DatErr =$numperErr =$emailErr = "";
$name = $Name = $major =  $Dat =$numper =$email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["num"])) {
        $nameErr = "الحقل مطلوب";
    } else {
        $name = test_input($_POST["num"]);
    }

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Name"])) {
        $NameErr = "الحقل مطلوب";
    } else {
        $name = test_input($_POST["Name"]);
    }

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["major"])) {
        $majorErr = "الحقل مطلوب";

    } else {
        $name = test_input($_POST["major"]);
    }

}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Dat"])) {
        $DatErr = "الحقل مطلوب";

    } else {
        $name = test_input($_POST["Dat"]);
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["numper"])) {
        $numperErr = "الحقل مطلوب";


    } else {
        $name = test_input($_POST["numper"]);
    }

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "الحقل مطلوب";

    } else {
        $name = test_input($_POST["email"]);
    }

}




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div align="center">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
        <table width="314" border="0px">
            <tr>
                <th height="39">
                    الرقم الجامعي :</th><th>

                    <input type="text" name="num" class="input" required>
                    <span class="error"><?php echo $nameErr;?></span><br>
                </th>
            <tr>
                <th width="95" height="38">
                    اسم الطالب :
                </th>
                <th width="209">
                    <input type="text" name="Name"required class="input" >
                    <span class="error"><?php echo $NameErr;?></span><br>
                </th>
            </tr>
            <tr>  <th width="95" height="36">
                    التخصص :</th><th>
                    <input type="text" class="input"  name="major"required>
                    <span class="error"><?php echo $majorErr;?></span><br>

                </th></tr>
            <tr>      <th height="35">
                    تاريخ الميلاد :</th><th>
                    <input type="date" name="Dat"required class="input" >
                    <span class="error"><?php echo $DatErr;?></span><br>
                </th></tr>

            <tr>
                <th height="39">
                    رقم الهاتف :</th><th>
                    <input type="tel" name="numper"required class="input" >
                    <span class="error"><?php echo $numperErr;?></span><br>

                </th></tr>
            <tr> <th height="57">
                    البريد الالكتروني :</th><th>
                    <input type="email" name="email" required class="input" >
                    <span class="error"><?php echo $emailErr;?></span><br>
                </th></tr>

        </table>
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        <input type="submit" name="set" value="أدخال " class="button">
        &nbsp;
        &nbsp;
        <input type="submit" name="no4" value="الغاء "  id="no4"class="button" >
    </form>
    &nbsp;&nbsp;
    <div align="center"> &nbsp  &nbsp  <a href="Hom.php"> العودة الى الصفحة الرئيسية   </a>  </div>

</div>
<?php

if(isset($_POST['set']))
{
    $std_id = $_POST['num'];
    $std_name = $_POST['Name'];
    $major = $_POST['major'];
    $birthdate = $_POST['Dat'];
    $telephone = $_POST['numper'];
    $email = $_POST['email'];

    $obj = new  Data();
    $obj->SetData($std_id, $std_name, $major, $birthdate, $telephone, $email);

}
?>
</body>
</html>