
<!doctype html>
<?php include 'Data.php' ?>

<html lang="en">
<head>
<
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style type="text/css">
        a{
            text-decoration : none;}
        a:hover {
            color: orange;
        }
tr {text-align: center}
th{text-align: center ; direction: rtl}

    </style>

    <title> برنامج شئون الطلاب - عرض البينات </title>
</head>
<body>
<div align="center">  <h2> برنامج شؤون الطلاب  </h2> </div>
<hr>

<h3 align="center" style="color: #9d1ab4; font-family: 'Arabic Typesetting';font-size: 50px">  صفحة عرض بينات الطلبة   </h3>


<?php
$con = new mysqli("localhost", "root", "", "college");
$pre = $con->prepare("select * from students ");
$pre->execute();
$res = $pre->get_result();
echo "<table border='1' dir='rtl' align='center'>";
echo "<tr>".
    "<td>"." الرقم الجامعي "."</td>"
    ."<td>"."   اسم الطالب "."</td>"
    ."<td>"." التخصص "."</td>"
    ."<td>"." تاريخ الميالد"."</td>"
    ."<td>"." رقم الهاتف"."</td>"
    ."<td>"."  البريد االإلكتروني "."</td>";
echo "</tr>";

while ($row = $res-> fetch_assoc() ){

    echo "<tr>" ."<td>".$row['std_id']."</td>";
    echo "<td>".$row['std_name']."</td>";
    echo "<td>".$row['major']."</td>";
    echo "<td>".$row['birthdate']."</td>";
    echo "<td>".$row['telephone']."</td>";
    echo "<td>".$row['email']."</td>";
  echo "</tr>";

}
echo "</table>";
?>

 <p  align="center"> <a href="Hom.php"> العودة الى الصفحة الرئيسية   </a></p>

</body>
</html>