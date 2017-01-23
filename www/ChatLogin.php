<?php

    $useremail = $_REQUEST["useremail"];
    $password = $_REQUEST["password"];
    
   

    $con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
    $sql = "SELECT * FROM Login WHERE Email = '".$useremail."'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        $password = md5($password);
        while ($row = mysqli_fetch_assoc($result))
        {
            if ($row['IsLogin'] == 0)
            {
                if ($password == $row['Password'])
                {
                    $sql = "UPDATE Login SET IsLogin = '1' WHERE Email = '".$useremail."'";
                    $result = mysqli_query($con, $sql);
                    
                    if (isset($_REQUEST["from_web"]))
                    {
                       header("Location: http://sunsign.su/");
                       die;
                    }
                    else
                    die("Login-Success");
                
                }
                else
                    die("Email or Password is Incorrect");
            }
            else
                die("User is already logged in");
        }
    }
    else
    die("Email or Password is Incorrect");

?>