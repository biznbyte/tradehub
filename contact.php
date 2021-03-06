<!DOCTYPE html>
<html>
   <head>
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
      <meta http-equiv="cache-control" content="no-cache" />
      <title>Mobile Website - HTML5 & CSS3</title>
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/jquery.mobile-1.0.min.js" type="text/javascript"></script>
      <link href="css/layout.css" type="text/css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <!-- Supersized Slider -->
      <link rel="stylesheet" type="text/css" href="css/supersized.css" />
      <link rel="stylesheet" type="text/css" href="css/supersized.shutter.css" />
      <!--Toggle Menu-->
      <script type="text/javascript">
         $(function() {
         	$('#navigation').click(function() {
         		$('.navigation').slideToggle('fast');
         		return false;
         	});
         });
      </script>
      <!--ToTop-->
      <script type="text/javascript" src="js/totop/totop.js"></script>
      <script type="text/javascript" src="js/totop/jquery_004.js"></script>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
   <body>
      <div data-role="page" data-theme="a" id="contact-us">
         <!-- Navigation Starts -->
         <div class="navigation center" style="display:none;">
            <ul>
               <li><a href="about-us.html" rel="external">ABOUT US </a></li>
               <li><a href="services.html" rel="external">SERVICES</a></li>
               <li><a href="blog.html" rel="external">BLOG</a></li>
               <li><a href="gallery.html" rel="external">GALLERY</a></li>
               <li><a href="typography.html" rel="external">TYPOGRAPHY</a></li>
               <li><a href="contact.php" rel="external">CONTACT US</a></li>
            </ul>
            <!-- Social Like Buttons-->
            <div class="ui-grid-b social-like">
               <!-- Facebook Like Button -->
               <div class="ui-block-a">
                  <div id="fb-root">
                  </div>
                  <script>(function(d, s, id) {
                     var js, fjs = d.getElementsByTagName(s)[0];
                     if (d.getElementById(id)) return;
                     js = d.createElement(s); js.id = id;
                     js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1";
                     fjs.parentNode.insertBefore(js, fjs);
                     }(document, 'script', 'facebook-jssdk'));
                  </script>
                  <div class="fb-like" data-href="http://www.facebook.com/envato" data-send="false" data-layout="button_count" data-width="" data-show-faces="false">
                  </div>
               </div>
               <!-- /Facebook Like Button -->
               <!--Google Plus Button-->
               <div class="ui-block-b">
                  <!-- customized for a specific address -->
                  <g:plusone href="http://envato.com/" size="Medium"></g:plusone>
                  <!-- include the JS file -->
                  <script src="https://apis.google.com/js/plusone.js"></script>
               </div>
               <!--/Google Plus Button-->
               <!-- Twitter Like Button -->
               <div class="ui-block-c">
                  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitter.com/#!/envato" data-text="http://twitter.com/#!/envato" data-via="envato" data-related="envato" data-hashtags="envato">Tweet</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
               </div>
               <!-- /Twitter Like Button -->
            </div>
            <!-- /Social Like Buttons-->
         </div>
         <!-- /Navigation --><!--Header Starts -->
         <div id="header">
            <div class="strip">
               <!--Logo and Icons-->
               <div class="icons f_left">
                  <a href="#" data-transition="slide" data-icon="arrow-l" data-direction="reverse" data-rel="back"><img src="images/icon-back.png" alt="back" border="0" /></a>
               </div>
               <span><a href="index.html" rel="external"><img src="images/logo.png" alt="Logo" width="215" height="70" /></a></span>			
               <div class="icons f_right" id="navigation">
                  <a href="#"><img src="images/icon-menu.png" alt="Menu" border="0" /></a>
               </div>
               <!--/Logo and Icons-->			       
            </div>
         </div>
         <!-- /Header -->      
         <div class="clear">
         </div>
         <div class="white-bg">
         <div data-role="content">
            <h2>Contact us</h2>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.<br />
            <div>
               <div class="f_left">
                  <h2>Postal Address</h2>
                  <strong>Envato</strong><br />
                  PO Box 21177 <br />
                  Little Lonsdale St, Melbourne <br />
                  Victoria 8011 Australia<br />
                  <br />
                  Tel: +61 (0) 3 8376 6284 <br />
                  Fax: +61 (0) 3 8376 6284 <br />
                  Email: <a href="mailto:abc@abc.com" target="_blank">abc@abc.com</a>
               </div>
               <div class="f_right"><br />
                  <a href="map.html" rel="external"><img src="images/map.jpg" alt="" style="max-width:100%" /></a>
               </div>
            </div>
            <div class="clear"></div>
            <h2>General Inquiries</h2>
                        <div id="contact-form">
                              <form id="contact-us" action="contact.php" method="post" />
                  * Required Fields.<br /><br />
                  <div style="margin-bottom:12px">
                     <label>Name *</label>
                     <input type="text" name="contactName" id="contactName" value="" class="txt requiredField" placeholder="Name:" />
                                       </div>
                  <div style="margin-bottom:12px">
                     <label>Email *</label>
                     <input type="text" name="email" id="email" value="" class="txt requiredField email" placeholder="Email:" />
                                       </div>
                  <div style="margin-bottom:12px">
                     <label>Message *</label>
                     <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"></textarea>
                                       </div>
                  <button name="submit" type="submit" class="subbutton">Send</button>
                  <input type="hidden" name="submitted" id="submitted" value="true" />
               </form>
            </div>
                     </div>
         <!-- /Contents -->
         </div>

         <div class="clear">
         </div>
         <div id="footer">
            <div class="strip">
               <strong>Envato</strong><br />
               PO Box 21177 <br />
               Little Lonsdale St, Melbourne <br />
               Victoria 8011 Australia<br />
               <br />
               <div class="f_left">
                  <img src="images/icon-footer-phone.png" alt="" border="0" />
               </div>
               <div class="f_left">
                  +61 (0) 3 8376 6284
               </div>
               <br />
               <div class="clear">
               </div>
               <div class="f_left">
                  <img src="images/icon-footer-contacts.png" alt="" border="0" />
               </div>
               <div class="f_left">
                  <a href="mailto:abc@abc.com" target="_blank">abc@abc.com</a>
               </div>
               <br />
               <br />
               © 2013 Mobile Website | <a href="privacy-policy.html" rel="external">Privacy Policy</a>
               <br />
               <br />
               <!--ToTop Starts-->
               <div id="scroll-to-top"><a href="#top" id="top-link"><img src="images/to-top.png" alt="" border="0" /></a></div>
               <!--ToTop Ends-->
            </div>
            <div class="clear"></div>
         </div>
      </div>
      <!-- /footer -->
      
      <!-- / page -->
      <script type="text/javascript" src="js/contact.js"></script>
      <!-- Supersized Slider
         ================================================== --> 
      <script type="text/javascript" src="js/supersized/jquery.easing.min.js"></script> 
      <script type="text/javascript" src="js/supersized/supersized.3.2.7.min.js"></script> 
      <script type="text/javascript" src="js/supersized/supersized.shutter.min.js"></script> 
      <script type="text/javascript" src="js/supersized/supersized-images.js"></script>
   </body>
</html>
