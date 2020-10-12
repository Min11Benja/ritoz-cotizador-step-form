<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RitozImports | Cotizador en linea | Pedidos mayoreo">
    <meta name="author" content="min11benja">
    <title>RitozImports | Cotizador en linea | Pedidos mayoreo</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!-- BASE CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script type="text/javascript">
        function delayedRedirect() {
            window.location = "index.html"
        }

    </script>

</head>

<body onLoad="setTimeout('delayedRedirect()', 5000)">

    <?php
						$mail = $_POST['email'];
						$to = "min11benja@gmail.com";	/* YOUR EMAIL HERE */
						$subject = "Cotizacion de parte del cotizador automatizado RitozImports";
						$headers = "From: Cotizador Automatizado <noreply@ritozimports.com>";
						$message = "DETALLES DE PEDIDO\n";
    
						/*$message .= "Sombreros: " . $_POST['answer_group_1'] . "\n";*/                    
                        $message .= "\nSombreros:\n" ;
						foreach($_POST['answers_1'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
    
						/*$message .= "Accesorios: " . $_POST['answer_group_2'] . "\n";*/
                        $message .= "\nAccesorios:\n" ;
						foreach($_POST['answers_2'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
    
						/*$message .= "Gorras: " . $_POST['answer_group_3'] . "\n";*/
                        $message .= "\nGorras:\n" ;
						foreach($_POST['answers_3'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
    
				       /*$message .= "Carteras: " . $_POST['answer_group_4'] . "\n";*/
	                   $message .= "\nCarteras:\n" ;
						foreach($_POST['answers_4'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
    
						$message .= "\nCinturones:\n" ;
						foreach($_POST['answers_5'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
    
                        $message .= "\nDisplays:\n" ;
						foreach($_POST['answers_6'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
	
						$message .= "\nTOTAL PRODUCTOS: " . $_POST['hidden_total'] . "\n";
						$message .= "\nDETALLES DEL USUARIO" ;
						$message .= "\nName and Lastname: " . $_POST['first_last_name'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelephone " . $_POST['telephone'];
						$message .= "\nCountry: " . $_POST['country'];
						$message .= "\nTerms and conditions accepted: " . $_POST['terms'] . "\n";
												
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Gracias";
						$userheaders = "From: info@ritozimports.com\n";
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Gracias por tu tiempo. Su solicitud de pedido se envió correctamente. Responderemos a la brevedad.\n\nBELOW A SUMMARY\n\n$message"; 
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>
    <!-- END SEND MAIL SCRIPT -->
    <div id="success">
        <div class="icon icon--order-success svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
            </svg>
        </div>
        <h4><span>¡Pedido enviado con éxito!</span>Gracias por tu tiempo</h4>
        <small>Serás redirigido de vuelta en 5 segundos.</small>
    </div>

</body>

</html>
