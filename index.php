<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "fraoltesfaye.ft@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FraolTesfaye Portfolio Website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" 
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
	<link rel="index.html" href="index.html">
        <div class="contact-section">

            <h1>Let's connect</h1>
            <div class="border"></div>
            <form class="contact-form" action="index.html" method="GET">
              <input type="text" class="contact-form-text" placeholder="Your name">
              <input type="email" class="contact-form-text" placeholder="Your email">
              <input type="text" class="contact-form-text" placeholder="Your phone">
              <textarea class="contact-form-text" placeholder="Your message"></textarea>
              <input type="submit" class="contact-form-btn" value="Send">
            </form>
          </div>
	<footer>
        </footer>
    </body>
</html>

