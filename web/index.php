<?php
require('../vendor/autoload.php');
?>

<?php
$_POST = json_decode(file_get_contents('php://input'), true);

$msg = "";
if (isset($_POST)) {


    $username =  $_POST['username'];
    $khudkaemail =  $_POST['meraemail'];
    $khudkapassword =  $_POST['merapswd'];
    $email =  $_POST['email'];
    $subject =  $_POST['subject'];
    $html =  $_POST['contents'];


    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = $khudkaemail;
    $mail->Password = $khudkapassword;
    $mail->SetFrom($khudkaemail);
    $mail->addAddress($email);
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if ($mail->send()) {
        $msg = "mail has been sent";
    } else {
        $msg = "mail has not been sent";
    }
}if (isset($_POST['submit'])) {


    $username =  $_POST['username'];
    $khudkaemail =  $_POST['meraemail'];
    $khudkapassword =  $_POST['merapswd'];
    $email =  $_POST['email'];
    $subject =  $_POST['subject'];
    $html =  $_POST['contents'];


    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = $khudkaemail;
    $mail->Password = $khudkapassword;
    $mail->SetFrom($khudkaemail);
    $mail->addAddress($email);
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if ($mail->send()) {
        $msg = "mail has been sent";
    } else {
        $msg = "mail has not been sent";
    }
}



 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTAL ! EMAILSAPI</title>
    <style>
        form {
            border: 3px solid #f1f1f1;
            height: auto;
        }

        input[type=text],
        input[type=password],
        input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 20px 0px 20px 0px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 40.8;
            color: rgb(0, 0, 0);
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 30%;
            border-radius: 50%;
        }

        .container {
            padding: 50px;
        }
    </style>
</head>

<body>
    <h1>SERVER IS LIVE</h1>
    <form method="POST">
        <div class="imgcontainer">
            <img src= "vinay.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div>
                <label for="username">
                    <h3>
                        USERNAME
                    </h3>
                </label>
                <input type="text" name="username" id="" placeholder="USERNAME" >

            </div>
            <div>
                <label for="meraemail">
                    <h3>
                       OWN EMAIL
                    </h3>
                </label>
                <input type="email" name="meraemail" id="" placeholder="OWN EMAIL" required>

            </div>
            <div>
                <label for="merapswd">
                    <h3>
                       OWN PASSWORD
                    </h3>
                </label>
                <input type="password" name="merapswd" id="" placeholder="OWN PASSWORD" required>
            </div>

            <div>
                <label for="email">
                    <h3>
                       CLIENT EMAIL
                    </h3>
                </label>
                <input type="email" name="email" id="" placeholder="CLIENT EMAIL" required>

            </div>


            <div>
                <label for="subject">
                    <h3>
                        SUBJECT
                    </h3>
                </label>
                <input type="text" name="subject" id="" placeholder="SUBJECT" >

            </div>
            <div>
                <label for="contents">
                    <h3>
                        CONTENTS
                    </h3>
                </label>
                <input type="text" name="contents" id="" placeholder="CONTENTS" >

            </div>



            <div>
                <button type="submit" name="submit">
                    <h4>
                        SUBMIT
                    </h4>
                </button>
        
         
            </div>
        </div>
    </form>
</body>

</html>