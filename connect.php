<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    // FORMS ELEMENTS
    $nome = $_POST["name"];
    $empresa = $_POST["company"];
    $email = $_POST["email"];
    $telefone = $_POST["phone"];
    $mensagem = $_POST["msg"];

    // MAIL SENDER
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'exemple@exemple.com.br';
    $mail->Password = 'wbf**********';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;    

    // DB CONEXION
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "**********";
    $dbname = "contato";
    
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    if(mysqli_connect_error()){
        die('connect Error('. mysqli_connect_errno() .')'.mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO clientes(nome,empresa,email,telefone,mensagem) 
        values('$nome','$empresa','$email','$telefone','$mensagem')";
        if($conn->query($sql)){

            $mail->setFrom('exemple@exemple.com.br');
            $mail->addAddress('exemple@exemple.com.br');
            $mail->isHTML(true);

            $mail->Subject = "Novo Contato pelo Site";
            $mail->Body = "
        <!DOCTYPE html>

        <html lang=\"en\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:v=\"urn:schemas-microsoft-com:vml\">
            
            <head>
                <title></title>
                <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
                <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
                <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
                <style>
                    * {
                        box-sizing: border-box;
                    }
            
                    body {
                        margin: 0;
                        padding: 0;
                    }
            
                    a[x-apple-data-detectors] {
                        color: inherit !important;
                        text-decoration: inherit !important;
                    }
            
                    #MessageViewBody a {
                        color: inherit;
                        text-decoration: none;
                    }
            
                    p {
                        line-height: inherit
                    }
            
                    .desktop_hide,
                    .desktop_hide table {
                        mso-hide: all;
                        display: none;
                        max-height: 0px;
                        overflow: hidden;
                    }
            
                    @media (max-width:620px) {
                        .desktop_hide table.icons-inner {
                            display: inline-block !important;
                        }
            
                        .icons-inner {
                            text-align: left;
                        }
            
                        .icons-inner td {
                            margin: 0 auto;
                        }
            
                        .fullMobileWidth,
                        .image_block img.big,
                        .row-content {
                            width: 100% !important;
                        }
            
                        .mobile_hide {
                            display: none;
                        }
            
                        .stack .column {
                            width: 100%;
                            display: block;
                        }
            
                        .mobile_hide {
                            min-height: 0;
                            max-height: 0;
                            max-width: 0;
                            overflow: hidden;
                            font-size: 0px;
                        }
            
                        .desktop_hide,
                        .desktop_hide table {
                            display: table !important;
                            max-height: none !important;
                        }
                    }
                </style>
            </head>
            
            <body style=\"background-color: #343a40; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;\">
                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"nl-container\" role=\"presentation\"
                    style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #343a40;\" width=\"100%\">
                    <tbody>
                        <tr>
                            <td>
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-1\"
                                    role=\"presentation\"
                                    style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #343a40;\" width=\"100%\"; >
                                </table>
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-2\"
                                    role=\"presentation\"
                                    style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #343a40;\" width=\"100%\" >
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
                                                    class=\"row-content stack\" role=\"presentation\"
                                                    style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: ##343a40; background-position: center top; color: #000000; width: 600px;\"
                                                    width=\"600\">
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"column column-1\"
                                                                style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 10px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\"
                                                                width=\"100%\">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-3\"
                                    role=\"presentation\"
                                    style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #343a40; ;
                                    width=\"100%\">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
                                                    class=\"row-content stack\" role=\"presentation\"
                                                    style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eee; color: #000000; width: 600px;\"
                                                    width=\"600\">
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"column column-1\"
                                                                style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\"
                                                                width=\"100%\">
                                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
                                                                    class=\"heading_block block-1\" role=\"presentation\"
                                                                    style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\"
                                                                    width=\"100%\">
                                                                    <tr>
                                                                        <td class=\"pad\"
                                                                            style=\"padding-bottom:5px;padding-top:25px;text-align:center;width:100%;\">
                                                                            <h1
                                                                                style=\"margin: 0; color: #555555; direction: ltr; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 36px; font-weight: normal; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;\">
                                                                                <strong>Novo Contato!</strong></h1>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
                                                                    class=\"text_block block-2\" role=\"presentation\"
                                                                    style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\"
                                                                    width=\"100%\">
                                                                    <tr>
                                                                        <td class=\"pad\"
                                                                            style=\"padding-bottom:20px;padding-left:15px;padding-right:15px;padding-top:20px;\">
                                                                            <div style=\"font-family: sans-serif\">
                                                                                <div class=\"\"
                                                                                    style=\"font-size: 20px; mso-line-height-alt: 25.2px; color: #737487; line-height: 1.8; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                                    <p style=\"margin: 0; font-size: 20px; text-align: left; padding-bottom: 10px;\">
                                                                                        Nome: ${nome}
                                                                                    </p>
                                                                                    
                                                                                    <p style=\"margin: 0; font-size: 20px; font-family: sans-serif ;text-align: left; padding-bottom: 10px;\">
                                                                                        Empresa: ${empresa}
                                                                                    </p>
                                                                                    
                                                                                    <p style=\"margin: 0; font-size: 20px; font-family: sans-serif ;text-align: left; padding-bottom: 10px;\">
                                                                                        Email de contato: ${email}
                                                                                    </p>
                                                                                    
                                                                                    <p style=\"margin: 0; font-size: 20px; font-family: sans-serif ;text-align: left; padding-bottom: 10px;\">
                                                                                        Telefone: ${telefone}
                                                                                    </p>
                                                                                    
                                                                                    <p style=\"margin: 0; font-size: 20px; font-family: sans-serif ;text-align: left; padding-bottom: 10px;\">
                                                                                        Mensagem: ${mensagem}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table><!-- End -->
            </body>
            
        </html>
            ";

            $mail->send();

            header("Location: /thankyou.html");
        }
        else{
            echo "Error ".$sql."".$conn->error;
        }
        $conn->close();
    }
