<?php
    session_start();
    
    //dang ky
    function insert_taikhoan($Username,$Password,$Email,$Tel,$Role){
        $sql="INSERT INTO `tai_khoan` ( `Username`, `Password`, `Email`, `Tel`, `Role`) VALUES ( '$Username', '$Password', '$Email', '$Tel', '$Role') ";
        pdo_execute($sql);
    }

    function loadall_taikhoan(){
        $sql="select * from tai_khoan order by ID_User desc";
        $listtaikhoan=pdo_query($sql);
        return  $listtaikhoan;
    }

    function dangnhap($Username,$Password) {
        $sql="SELECT * FROM tai_khoan WHERE Username='$Username' and Password='$Password'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            $_SESSION['Username'] = $Username;
        } else {
            return "Thông tin tài khoản sai";
        }
    }

    function dangxuat() {
        if (isset($_SESSION['Username'])) {
            unset($_SESSION['Username']);
        }
    }

    function sendMail($Email) {
        $sql="SELECT * FROM tai_khoan WHERE Email='$Email'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            sendMailPass($Email, $taikhoan['Username'], $taikhoan['Password']);
            
            return "gui email thanh cong";
        } else {
            return "Email bạn nhập ko có trong hệ thống";
        }
    }

    function sendMailPass($Email, $Username, $Password) {
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '6bda0a4c1abcfc';                     //SMTP username
            $mail->Password   = '4430da6c8b9967';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('duanmau@example.com', 'DuAnMau');
            $mail->addAddress($Email, $Username);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nguoi dung quen mat khau';
            $mail->Body    = 'Mau khau cua ban la' .$Password;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
