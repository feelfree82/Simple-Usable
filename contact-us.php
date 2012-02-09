<?php 

/*

Template name: Contact us 

*/ 

?> 

<?php get_header(); ?>  

<div id="main-container">
<div id="about-us-content"></div>

  <div id="contact-us">
    <h3>Get in touch</h3>
    <div id="contact-form">
      <form name="contact-form" method="post" action="">
        <fieldset>
          <legend class="visuallyhidden">Contact form</legend>
 
          <label for="your-name">Your Name:</label>
          <input id="your-name" name="your-name" type="text" autofocus>
 
          <label for="your-email">Your Email Address:</label>
          <input id="your-email" name="your-email" type="text">
 
          <label for="your-comments">Your Message</label>
          <textarea id="your-comments" name="your-comments" type="text" cols"10" rows="10"></textarea>
 
          <button class="submit" type="submit">Send Message</button>
        </fieldset>
      </form>
    </div>
   
    <?php
                if(isset($_POST['your-email'])) {
                $email_to = "echo of_get_option ('contact-email-address)";
            	$email_subject = "You've got a mail!";
               
                function died($error) {
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
        }
               
                  // validation expected data exists
        if(!isset($_POST['your-name']) ||
        !isset($_POST['your-email']) ||
        !isset($_POST['your-comments'])) {
                    died('We are sorry, but there appears to be a problem with the form you submitted.');      
        }
               
                $name = $_POST['your-name']; // required
                $email = $_POST['your-email'];
                $comments = $_POST['your-comments'];
               
                $error_message = "";
                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                if(!preg_match($email_exp,$email)) {
                    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
                }
               
                $string_exp = "/^[A-Za-z .'-]+$/";
                if(!preg_match($string_exp,$name)) {
                $error_message .= 'The Name you entered does not appear to be valid.<br />';
                }
               
                if(strlen($comments) < 2) {
                $error_message .= 'The Comments you entered do not appear to be valid.<br />';
                }
               
                if(strlen($error_message) > 0) {
                died($error_message);
                }
               
                $email_message = "Form details below.\n\n";
               
           function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
       }
           
           $email_message .= "Your-Name: ".clean_string($name)."\n";
           $email_message .= "Your-Email: ".clean_string($email)."\n";     
           $email_message .= "Your-Comments: ".clean_string($comments)."\n";
               
                // create email headers
                $headers = 'From: '.$email_from."\r\n".
                'Reply-To: '.$email_from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                @mail($email_to, $email_subject, $email_message, $headers);            
               
                  ?>
              <!-- succes msg --> 
 
                Cheers for that. We will be in touch soon.
       
                <?php
                }
                ?>
 
 
 
 
    <!-- end of form -->
  </div>
  <!-- end of contact us -->
  
  <div id="location">
    <div id="address">
      <h3><?php echo of_get_option ('address-head') ?></h3>
      <span id="address"><?php echo of_get_option ('address-head1') ?></br>
      <?php echo of_get_option ('address-body1') ?></br>
      </br>
      Phone:<?php echo of_get_option ('address-body2') ?></br>
      Fax:<?php echo of_get_option ('address-body3') ?></span> </div>
    <!-- end of address -->
    
    <div id="show-map"> <img src="/img/images/map.png" title="Location: London Office"> </div>
  </div>  <!--end of location -->  
  </div> <!--end of main container -->  
  
<aside>
<hr class="clearfix"/>
  <div id="about-us"> <a href="#">
    <h5>About us</h5>
    </a>
    <p><?php echo of_get_option('about_us_excerpt')?></p>
    <input type="hidden" name="greeting" id="greeting" value="<?php echo of_get_option('about_us_content')?>" />
	<a href="#" id="push-me">Read More</a>

   
  </div>
  <!--end of About us --> 
</aside>

<?php get_footer(); ?> 