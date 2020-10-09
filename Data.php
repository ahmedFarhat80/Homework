<?php
session_start();

class Data
    {
    function login($username,$password)
    {
        $con = new mysqli("localhost", "root", "", "college");
        $pre = $con->prepare("select * from users Where username=?  and password= ?");
        $pre->bind_param("ss", $username, $password);
        $pre->execute();
        $res = $pre->get_result();
        if ($res->num_rows > 0) {
            $_SESSION['userName'] = $username;
            header("Location: Hom.php ");
        } else {
            echo " <p style='text-align: center ; color: red';>  أسم المستخدم او كلمة المرور غير صحيحة   </p> ";
        }
    }
        function SetData($std_id,$std_name ,$major, $birthdate, $telephone, $email)
        {
            $con = new mysqli("localhost", "root", "", "college");
            $pre = $con->prepare("insert into students value(?,?,?,?,?,?)");
            $pre->bind_param("isssis", $std_id,$std_name, $major, $birthdate, $telephone, $email);
            $pre->execute();

        }




}