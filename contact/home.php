<?php
if(isset($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
    //your site secret key
        $secret = '6Le8IicUAAAAAGWcDERWpN_cumEnmLdKhs5MHK5b';
    //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
    
    $name = !empty($_POST['name'])?$_POST['name']:'';
    $email = !empty($_POST['email'])?$_POST['email']:'';
    $message = !empty($_POST['message'])?$_POST['message']:'';
        if($responseData->success):
      //contact form submission code
      $to = 'nick.agarcia103@gmail.com';
      $subject = 'New contact form have been submitted';
      $htmlContent = "
        <h1>Contact request details</h1>
        <p><b>Name: </b>".$name."</p>
        <p><b>Email: </b>".$email."</p>
        <p><b>Message: </b>".$message."</p>
      ";
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      // More headers
      $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
      //send email
      @mail($to,$subject,$htmlContent,$headers);
      
            $succMsg = 'Your contact request have submitted successfully.';
      $name = '';
      $email = '';
      $message = '';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Please click on the reCAPTCHA box.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
  $name = '';
  $email = '';
  $message = '';
endif;
?>


		<h2>Get in touch</h2>
    <p>Fill out the form below and I'll reply as soon as possible. You can also email me at <script language="JavaScript">
var username = "nick.agarcia103";
var hostname = "gmail.com";
var linktext = username + "@" + hostname ;
document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + linktext + "</a>");
</script></p>

    <?php if(!empty($errMsg)): ?><div class="errMsg"><?php echo $errMsg; ?></div><?php endif; ?>
        <?php if(!empty($succMsg)): ?><div class="succMsg"><?php echo $succMsg; ?></div><?php endif; ?>
			<form action="" method="POST">
        <input type="text" class="text" value="<?php echo !empty($name)?$name:''; ?>" placeholder="Your full name" name="name" required="" >
        <input type="text" class="text" value="<?php echo !empty($email)?$email:''; ?>" placeholder="Email adress" name="email" required="" >
        <textarea type="text" placeholder="Message..." required="" name="message"><?php echo !empty($message)?$message:''; ?></textarea>
        <div class="g-recaptcha" data-sitekey="6Le8IicUAAAAAMdpB5QI58QcQu8HWypDUGISeEu2"></div>
        <input type="submit" name="submit" value="SUBMIT" class="btn">
    	</form>


<script language="JavaScript">
var username = "nick.agarcia103";
var hostname = "gmail.com";
var linktext = username + "@" + hostname ;
document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + linktext + "</a>");
</script>
