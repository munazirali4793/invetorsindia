<?php
if (isset($_POST['Submit_btn'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Email recipient
    $to = "inventorsindiatech@gmail.com"; // Replace with your email address
    $subject = "Inventors India Technologies Contact Form Enquiry";

    // Prepare the HTML email body
    $email_body = "<table width='100%' style='background-color: #f5f5f5;color: #333;width: 95%;padding: 10px;' align='center' cellpadding='5' cellspacing='5' style='font-family:Arial, Helvetica, sans-serif;font-size:12px; padding:5px;'>";
   
    $email_body .= "<tr style='background: #000;padding: 5px;'>";
    $email_body .= "<td colspan='2'></td>";
    $email_body .= "</tr>"; 
	
    $email_body .= "<tr>";
    $email_body .= "<td>Dear Mr./Ms. $name, <br>Thank you for reaching out. Our representative will stay connected with you soon.</td>";
    $email_body .= "</tr>";
	
    $email_body .= "<tr>";
    $email_body .= "<td><strong>Name</strong>:&nbsp;&nbsp;" . $name . "</td>";
    $email_body .= "</tr>";
	
    $email_body .= "<tr>";
    $email_body .= "<td><strong>Email id</strong>:&nbsp;&nbsp;" . $email . "</td>";
    $email_body .= "</tr>";
	
    $email_body .= "<tr>";
    $email_body .= "<td><strong>Mobile No.</strong>:&nbsp;&nbsp;" . $mobile . "</td>";
    $email_body .= "</tr>";
	
    $email_body .= "<tr>";
    $email_body .= "<td><strong>Message</strong>:&nbsp;&nbsp;" . $message. "</td>";
    $email_body .= "</tr>";
	
    $email_body .= "<tr>";
    $email_body .= "<td><p>If you find any difficulty, please contact <b style='color:red;'>inventorsindiatech@gmail.com</b> or WhatsApp at <b style='color:#333;'>+91 954-057-3556</b>.</p>Thanks & Regards,<br>Inventors India Technologies Support Team</td>";
    $email_body .= "</tr>";
	
	$email_body .= "<tr style='background: #000;padding: 5px;'>";
    $email_body .= "<td colspan='2'></td>";
    $email_body .= "</tr>"; 
	
    $email_body .= "</table>";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";  // Ensure the email is sent in HTML format

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
		 echo "<script language='javascript'>alert('Message sent successfully! Our representative will contact you soon.') 
		 window.location.href='contact-us'</script>";         
    } else {
        echo "<script language='javascript'>alert('Failed to send message')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en_US">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact Us - Inventors India Technologies</title>
      <?php include('includes/meta.php'); ?>
   </head>
   <body>
      <header class="three p10">
         <?php include('includes/desktopnav.php'); ?>
         <?php include('includes/mobilenav.php'); ?>
      </header>
      <section class="bannr" style="background-image:url(assets/img/background-three.jpg)">
         <div class="container">
            <div class="row align-items-end">
               <div class="col-lg-6">
                  <div class="bannr-text">
                     <h4>Contact Us</h4>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="bannr-img">
                     <img src="assets/img/robotic-proces.png" alt="robotic-proces">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gap">
         <div class="container">
            <div class="heading">
               <div class="heading-shap two"></div>
               <p>Let’s Get In Touch!</p>
               <h2></h2>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="content-page">
                     <h3>Let’s Get In Touch!</h3>
                     <div class="content-text">
                        <div>
                           <i>
                              <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_273_3133)">
                                    <path d="M18.9998 33.4463C11.0345 33.4463 4.55469 26.9655 4.55469 19C4.55469 11.0345 11.0345 4.55518 18.9998 4.55518C26.9658 4.55518 33.4459 11.0351 33.4459 19.0006C33.4459 19.6726 32.9017 20.2165 32.23 20.2165C31.558 20.2165 31.0141 19.6726 31.0141 19.0006C31.0141 12.3763 25.624 6.987 18.9998 6.987C12.3756 6.987 6.98647 12.3763 6.98647 19.0006C6.98647 25.6249 12.3762 31.0136 18.9998 31.0136C19.6719 31.0136 20.2157 31.5583 20.2157 32.2304C20.2157 32.9021 19.671 33.4463 18.9998 33.4463Z" fill="white"/>
                                    <path d="M19 38.001C8.52254 38.001 0 29.4783 0 19.0013C0 8.52425 8.52254 0.000976562 19 0.000976562C29.4774 0.000976562 37.9999 8.52425 37.9999 19.0013C37.9993 29.4783 29.4768 38.001 19 38.001ZM19 2.4328C9.86425 2.4328 2.43178 9.8654 2.43178 19.0013C2.43178 28.1371 9.86425 35.5697 19 35.5697C28.1357 35.5697 35.5681 28.1371 35.5681 19.0013C35.5681 9.8654 28.1357 2.4328 19 2.4328Z" fill="white"/>
                                    <path d="M24.2866 25.5025C23.975 25.5025 23.6648 25.3839 23.4264 25.1468L18.1399 19.8607C17.912 19.6322 17.7842 19.3226 17.7842 19.0005V10.4317C17.7842 9.75999 18.3283 9.21582 19.0001 9.21582C19.6721 9.21582 20.216 9.76057 20.216 10.4317V18.4966L25.1468 23.4264C25.6217 23.9019 25.6217 24.6713 25.1468 25.1453C24.9091 25.3839 24.5983 25.5025 24.2866 25.5025Z" fill="white"/>
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_273_3133">
                                       <rect width="38" height="38" fill="white"/>
                                    </clipPath>
                                 </defs>
                              </svg>
                           </i>
                        </div>
                        <div>
                           <h6>Opening Hours:</h6>
                           <h5>Mon - Sat:   09:00 - 19:00  /  Sunday: Closed</h5>
                        </div>
                     </div>
                     <div class="content-text">
                        <div>
                           <i>
                              <svg height="112" viewBox="0 0 24 24" width="112" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-rule="evenodd" fill="rgb(255255,255)" fill-rule="evenodd">
                                    <path d="m7 2.75c-.41421 0-.75.33579-.75.75v17c0 .4142.33579.75.75.75h10c.4142 0 .75-.3358.75-.75v-17c0-.41421-.3358-.75-.75-.75zm-2.25.75c0-1.24264 1.00736-2.25 2.25-2.25h10c1.2426 0 2.25 1.00736 2.25 2.25v17c0 1.2426-1.0074 2.25-2.25 2.25h-10c-1.24264 0-2.25-1.0074-2.25-2.25z"></path>
                                    <path d="m10.25 5c0-.41421.3358-.75.75-.75h2c.4142 0 .75.33579.75.75s-.3358.75-.75.75h-2c-.4142 0-.75-.33579-.75-.75z"></path>
                                    <path d="m9.25 19c0-.4142.33579-.75.75-.75h4c.4142 0 .75.3358.75.75s-.3358.75-.75.75h-4c-.41421 0-.75-.3358-.75-.75z"></path>
                                 </g>
                              </svg>
                           </i>
                        </div>
                        <div>
                           <h6>Phone No:</h6>
                           <a href="callto:(+84)012345678">
                              <h5>+91 954-057-3556</h5>
                           </a>
                        </div>
                     </div>
                     <div class="content-text">
                        <div>
                           <i>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1 15.25C0.585786 15.25 0.25 15.5858 0.25 16C0.25 16.4142 0.585786 16.75 1 16.75H4C4.41421 16.75 4.75 16.4142 4.75 16C4.75 15.5858 4.41421 15.25 4 15.25H1Z" fill="white"></path>
                                 <path d="M1 18.25C0.585786 18.25 0.25 18.5858 0.25 19C0.25 19.4142 0.585786 19.75 1 19.75H7C7.41421 19.75 7.75 19.4142 7.75 19C7.75 18.5858 7.41421 18.25 7 18.25H1Z" fill="white"></path>
                                 <path d="M3.10885 5.09007L3 5C3.3084 4.57553 3.6366 4.26331 4.06107 3.95491C5.3754 3 7.25027 3 11 3H13C16.7497 3 18.6246 3 19.9389 3.95491C20.3634 4.26331 20.6657 4.54132 20.9741 4.96579L20.8485 5.0907L18.5406 7.39861C16.8589 9.08027 15.6499 10.287 14.6071 11.0827C13.5816 11.8651 12.8055 12.1789 11.9999 12.1789C11.1942 12.1789 10.4181 11.8651 9.39261 11.0827C8.3498 10.287 7.14079 9.08027 5.45913 7.39861L3.51587 5.45535L3.10885 5.09007Z" fill="white"></path>
                                 <path d="M2 12.0004C2 9.36045 2 7.64983 2.33322 6.40984L2.48385 6.54503L4.43904 8.50021C6.07131 10.1325 7.35049 11.4117 8.48274 12.2756C9.64167 13.1598 10.7344 13.6793 11.9999 13.6793C13.2653 13.6793 14.3581 13.1598 15.517 12.2756C16.6492 11.4117 17.9284 10.1325 19.5607 8.50023L21.6634 6.39746C22 7.63843 22 9.35166 22 12.0004C22 15.7501 22 17.625 21.0451 18.9393C20.7367 19.3638 20.3634 19.7371 19.9389 20.0455C18.6246 21.0004 16.7497 21.0004 13 21.0004H11C9.57164 21.0004 8.41532 21.0004 7.45841 20.9476C8.34204 20.7404 9 19.9472 9 19.0004C9 17.8958 8.10457 17.0004 7 17.0004H5.73244C5.90261 16.7062 6 16.3647 6 16.0004C6 14.8958 5.10457 14.0004 4 14.0004H2.00721C2 13.3993 2 12.7359 2 12.0004Z" fill="white"></path>
                              </svg>
                           </i>
                        </div>
                        <div>
                           <h6>Email Us:</h6>
                           <h5>inventorsindiatech@gmail.com </h5>
                        </div>
                     </div>
                     <div class="content-text">
                        <div>
                           <i>
                              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M17.4997 9.77051C15.0331 9.77051 13.0264 11.7773 13.0264 14.2438C13.0264 16.7104 15.0331 18.7171 17.4997 18.7171C19.9663 18.7171 21.973 16.7104 21.973 14.2438C21.973 11.7773 19.9662 9.77051 17.4997 9.77051Z" fill="white"/>
                                 <path d="M27.9679 4.33576C25.172 1.53979 21.4545 0 17.5005 0C13.5464 0 9.82899 1.53979 7.03309 4.33576C4.23706 7.1318 2.69727 10.8492 2.69727 14.8032C2.69727 22.8021 10.2605 29.4552 14.3238 33.0295C14.8884 33.5262 15.376 33.9551 15.7644 34.3178C16.2512 34.7727 16.8757 35 17.5004 35C18.1251 35 18.7498 34.7726 19.2365 34.318C19.625 33.9551 20.1125 33.5262 20.6771 33.0295C24.7404 29.4552 32.3036 22.8022 32.3036 14.8032C32.3036 10.8492 30.7638 7.1318 27.9679 4.33576ZM17.5005 20.7674C13.9033 20.7674 10.977 17.841 10.977 14.2438C10.977 10.6467 13.9033 7.7203 17.5005 7.7203C21.0976 7.7203 24.024 10.6467 24.024 14.2438C24.024 17.841 21.0976 20.7674 17.5005 20.7674Z" fill="white"/>
                              </svg>
                           </i>
                        </div>
                        <div>
                           <h6>Location:</h6>
                           <h5>Ncr/Delhi</h5>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <form class="help w-100" method="post" style="background-image: url(assets/img/work-background.jpg);">
                     <h4>We'd Love to Hear From You</h4>
                     <p>Feel free to reach out to us to learn more about how we can collaborate to elevate STEM education together!</p>
                     <input type="text" name="name" placeholder="Name">
                     <input type="text" name="email" placeholder="Email id">
					 <input type="text" name="mobile" placeholder="Mobile No.">
                     <textarea name="message" placeholder="Message"></textarea>
                     <button name="Submit_btn" class="button">Send Message</button>					 
                  </form>
               </div>
            </div>
            
         </div>
      </section>
	  
      <!-- footer -->
      <?php include('includes/footer.php');  ?>
      <!-- footer end -->     
   </body>