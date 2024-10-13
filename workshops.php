<!DOCTYPE html>
<html lang="en_US">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Workshops - Inventors India Technologies</title>
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
               <div class="col-lg-7">
                  <div class="bannr-text">
                     <h4>Workshops</h4>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Workshops</li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="bannr-img">
                     <img src="assets/img/robotic-proces.png" alt="robotic-proces">
                  </div>
               </div>
            </div>
         </div>
      </section>
      
	  <section class="gap">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <div class="heading pb-3">
                     <div class="heading-shap"></div>
                     <p>Workshops</p>
                     <h2></h2>
                  </div>
                  <div class="solutions-two">
                     <h2><b>Workshops at Inventors India Technologies</b></h2>
                     <p>At Inventors India Technologies, we are committed to sparking curiosity and nurturing innovation through our dynamic, hands-on workshops. Designed for students, educators, and technology enthusiasts, our workshops blend theoretical knowledge with real-world applications to create an immersive learning experience. Whether you're a beginner looking to explore the basics of robotics or a seasoned educator seeking to bring cutting-edge STEM concepts into the classroom, our workshops offer a platform to develop valuable technical skills, solve real-world problems, and inspire creative thinking. With a strong focus on practical learning, we empower participants to not only understand technology but also apply it in meaningful ways.</p>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="solution-img">
                     <img src="images/workshop/workshop-top1.jpg" class="solution_imgs" alt="img">
                  </div>
               </div>
            </div>           
         </div>
      </section>  
	  
	  <section class="gap" style="background-image:url(assets/img/background.jpg)">
         <div class="container">
            <div class="row ">             
               <div class="col-lg-12 col-md-12">
                  <h2><strong>Key Highlights</strong></h2>
                  <ol class="featuresol">
                   <li><strong>Hands-on Learning:</strong> Our workshops are based on practical, project-based learning, ensuring that participants not only understand the theory but also apply it through hands-on projects.</li>
                   <li><strong>Expert Trainers:</strong> Our sessions are led by experienced trainers who bring both academic knowledge and industry experience, ensuring high-quality education and real-world insights.
</li>
                   <li><strong>Customizable Programs:</strong> We offer workshops tailored for different skill levels and age groups, from beginners to advanced learners, and for school students to educators.
</li>
                   <li><strong>Real-World Applications:</strong> Participants work on projects that mirror real-world challenges, allowing them to see how STEM and robotics can be applied to solve everyday problems.</li>
				   <li><strong>Collaboration and Innovation:</strong> Our workshops encourage teamwork and creative thinking, as participants collaborate on projects and share ideas to build innovative solutions.</li>
                  </ol>
               </div>            
            </div>
         </div>
      </section>

<section class="portfolio gap">
         <div class="container">
            <div class="row">
              
               <div class="col-lg-12">                 
                  <div class="box-container">
                     
					 <div class="portfolio-item image Lab" style="">
                        <img src="images/workshop/workshop-second.jpg" alt="Portfolio-Image">
                        <div class="content">
                           <div class="link-container">
                              <a class="view" href="images/workshop/workshop-second.jpg"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></a>           
                           </div>
                        </div>
                     </div>
					 <div class="portfolio-item image Lab" style="">
                        <img src="images/workshop/workshop3.jpg" alt="Portfolio-Image">
                        <div class="content">
                           <div class="link-container">
                              <a class="view" href="images/workshop/workshop3.jpg"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></a>           
                           </div>
                        </div>
                     </div>
					 <div class="portfolio-item image Lab" style="">
                        <img src="images/workshop/workshop4.jpg" alt="Portfolio-Image">
                        <div class="content">
                           <div class="link-container">
                              <a class="view" href="images/workshop/workshop4.jpg"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></a>           
                           </div>
                        </div>
                     </div>
									 
                     
                  </div><!--box-container end-->
               </div>
            </div>
         </div>
      </section>	  
	  
      <!-- footer -->
      <?php include('includes/footer.php');  ?>
      <!-- footer end -->   
<script src="assets/js/gallery-jquery.magnific-popup.min.js"></script>
      <script>
         $(document).ready(function(){         
          $(".portfolio .button").click(function(){
              $(this).addClass("active").siblings().removeClass("active");         
              var filter = $(this).attr("data-filter");          
              if (filter == "all"){
                  $(".portfolio .image").show(400);
              }
              else{
                  $(".portfolio .image").not("."+filter).hide(200);
                  $(".portfolio .image").filter("."+filter).show(400);
              }
          })
         
          //MAGNIFIC-POPUP
          $(".portfolio").magnificPopup({              
              delegate: ".view",
              type: "image",
              removalDelay: 500, //delay removal by X to allow out-animation
              gallery:{
                  enabled: true
              },         
          })                  
         });
      </script>	  
   </body>