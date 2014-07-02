<!DOCTYPE HTML>
<html>
    <head>
       <?php
     include $_SERVER['DOCUMENT_ROOT'].'/Main Templates/head.php';
     ?>
    </head>    
    <body>
        
        <div class="header">
              <header>
                  <a href="http://halfpennypost.com/index.php"><img src="/images/halfpennylogoheader.gif" alt="Main Logo"></a>
                  <h1>Images</h1>
              <?php
     include $_SERVER['DOCUMENT_ROOT'].'/Main Templates/header.php';
     ?>
              </header>
        </div>   
        <main class="main">
            <div id="content">
              <p>Today I am going to present on images. Images are something that can really enhance your users experience on your web page.
                  They can even contain the main content of your web page.</p>
              <h2>Examples:</h2>
              
                  <p>Here is an image being used on a web page.</p>
                  <img src="/images/image18.jpg" alt="Image example">
                  <p>Here is the code example for uploading this image &lt;img src="/images/image18.jpg" alt="Image example"&gt;</p>
                  <h2>Important information</h2>
                  <p>It is very important to include the <b>path</b> of the image. For example in this string of code, the path is in bold.</p>
                  <ul>
                  <li>&lt;img <b>src="/images/image18.jpg"</b> alt="Image example"&gt;</li>
                  <li>
                      If you don't include the right path to the image, this will appear.
                  </li>
                  </ul>
                  <img src="/images/images18.jpg" alt="Image example">
                  <p>What will show up is the alt tag in the string of code. The alt replaces the image when the path can not be found. In our code example from earlier, we find the alt in bold.</p>
                  <ul>
                  <li>&lt;img src="/images/image18.jpg" <b>alt="Image example"&gt;</b></li>
                  </ul>
              
              
              
                  
                  
            </div>     
        </main>
        
       
         <footer>
          <?php
     include $_SERVER['DOCUMENT_ROOT'].'/Main Templates/footer.php';
     ?>
         </footer>
        
          </body>
          
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

