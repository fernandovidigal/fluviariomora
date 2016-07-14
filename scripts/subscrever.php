<?php

    if(isset($_POST['enviado']))
    {
        $dbReqPage = true;
        require_once("../includes/config.inc.php");
        $erros = array();
        
        if(isset($_POST['email']) && strlen($_POST['email']) > 0 && !empty($_POST['email']))
        {
            if(preg_match('/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/', trim($_POST['email'])))
            {
                $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
            } else {
                $erros[] = "Deve indicar um endereço de email válido.";
            }
            
            if(count($erros) == 0)
            {
                $query = "SELECT email FROM flunewsletter WHERE email = '$email'";
                $result = mysqli_query($dbc, $query);
                
                if(mysqli_num_rows($result) > 0)
                {
                    header("Location: ../newsletterMsg.php?err=4");
                } else {
                    $query = "INSERT INTO flunewsletter (email, data) VALUES ('$email', NOW())";
                    $result = mysqli_query($dbc, $query);

                    if(mysqli_affected_rows($dbc) > 0)
                    {
                        header("Location: ../newsletterMsg.php?err=0");
                    } else 
                    {
                        header("Location: ../newsletterMsg.php?err=3");
                    }
                }
            } else {
                header("Location: ../newsletterMsg.php?err=2");
            }
            
        } else {
            header("Location: ../newsletterMsg.php?err=1");
        }
    } else {
        header("Location: ../index.php");
    }

?>