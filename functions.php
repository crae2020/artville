<?php

function check_login($conn)
{
    if(isset($_SESSION['login_id']))
    {
        $id = $_SESSION['login_id'];
        $query = "SELECT * FROM login WHERE login_id = '$id' limit 1";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirecting user to login
    header("Location: login.php");
    die;
}

?>