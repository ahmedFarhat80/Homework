
<!doctype html>
<?php include 'Data.php' ?>

<html lang="en">
<head>
    <style type="text/css">
        a{
            text-decoration : none;}
        a:hover {
            color: orange;
        }
        .Ahmed_Farhar{
            text-align: center ; background: darkgray; border-radius: 20px ;  border: 2px solid black; width: 80%; height:60px;}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>  برنامج شؤون الطلاب - الصفحة الرئيسية   </title>
</head>
<body>


<div align="center">  <h2> برنامج شؤون الطلاب  </h2> </div>
<hr>

<?php echo  "<p dir='rtl' style='font-size: 20px'>"  . " مرحبا بك  " .  $_SESSION['userName']  .  "  في الصفحة الرئيسية" ."</p>"; ?>
<div align="center">
<div class="Ahmed_Farhar">
    <table width="985" height="59" border="0">
        <tbody>
        <tr>

            <td width="37%"> <p>        <a href="SetData.php""> إدخال بيانات طالب جديد </a></p>    </td>
            <td width="37%"> <p>        <a href=""> تعديل بيانات طالب    </a></p>    </td>
            <td width="37%"> <p>        <a href="getData.php"> عرض بيانات طالب  </a></p>    </td>

        </tr>
        </tbody>
    </table>
</div>
</div>
<a href="logout.php"> <p style="text-align: center"> تسجيل الخروج  </p> </a>

</body>
</html>