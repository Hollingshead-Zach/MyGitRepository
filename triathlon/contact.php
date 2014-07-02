<!DOCTYPE HTML>
<html>
    <head>
       <?php
     include $_SERVER['DOCUMENT_ROOT'].'/triathlon/modules/head.php';
     ?>
    </head>     
    <body>
        
        <div>
              <header>
              <?php
     include $_SERVER['DOCUMENT_ROOT'].'/triathlon/modules/header.php';
     ?>
                  <h1>Contact</h1>
              </header>
        </div>   
        <main class='main'>
            <div class='contact'>
               <?php  
                if(!empty($reply)){
      echo "<p class='notify'>$reply</p>";
    }
    unset($reply);
                
                ?>
                <p>Please fill out the form below if you have any questions about the Prison to Prison Triathlon or if you are wanting to register.</p>
                <p><i>All fields are required.</i></p>
              <form method="post" action="index_3.php" id="contactform">
<fieldset>
<label for="firstname">First Name:</label>
<input type="text" name="firstname" id="firstname" size="10" value="<?php  
echo $firstname; ?>" required><br>
<label for="lastname">Last Name:</label>
<input type="text" name="lastname" id="lastname" size="15" value="<?php echo $lastname; ?>" required><br>
<label for="email">Email Address:</label>
<input type="email" name="email" id="email" size="30" value="<?php echo $email; ?>" required><br>
<label for="subject">Subject:</label>
<input type="text" name="subject" id="subject" size="60" value="<?php echo $subject; ?>" required><br>
<label for="message">Message:</label><br>
<textarea name="message" id="message" rows="10" cols="60" required><?php echo $message; ?></textarea><br>
<p>Answer the following CAPTCHA question in the box below.</p>
<label for="captcha">What color is a red apple?</label>
<input type="text" name="captcha" id="captcha" size="5" required><br>
<label for="action">&nbsp;</label>
<input type="submit" name="action" id="action" value="Send">
</fieldset>
</form>
                  
                 
                      
                  
            </div>     
        </main>
    <footer>
       <?php
     include $_SERVER['DOCUMENT_ROOT'].'/triathlon/modules/footer.php';
     ?>
    </footer>
          </body>
          
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    



