<?php
 //Template Name: Home
?>
<!-- Start Header Section --> 
<?php 
    get_header(); 
  ?>
  <!-- End Header Section --> 

  <!-- Start Banner Section -->
  <?php 
    $banner_img=get_field('banner_bg_img');
  ?>

        <section class="hero-section pt-5">
            <div class="container">
             <div class="row">
                <div class="col-md-6 col-12 p-4">
                <p class="text-danger text-decoration-none"><a href="book.php" class="text-danger text-decoration-none"><?php the_field('banner_sub_title'); ?> </a></p>
                <p class="h1"><?php the_field('banner_title'); ?></p>
                <p><?php echo get_field('banner_description'); ?></p>

                <button class="btn btn-info mt-4 text-light text-decoration-none"><a class="text-decoration-none text-light" href="<?php echo get_field('banner_btn_url');?>"><?php echo get_field('banner_btn'); ?> </a></button>
                </div>

                <div class="col-md-6 col-12 pb-5">
                  <img src="<?php if($banner_img!=''){echo $banner_img['url'];}  else {echo get_template_directory_uri().'/img/Frame.png';} ?>" class="img-fluid p-5" alt="">
                </div>
                 
             </div>
            </div>
       </section>
        <!-- End Banner Section -->

        <!-- Start Service Section -->
        <?php 
    $learnimg1=get_field('learn_one_bg_img');
    $learnimg2=get_field('learn_two_bg_img');
    $learnimg3=get_field('learn_three_bg_img');
    $learnimg4=get_field('learn_four_bg_img');
  ?>
       <section class="feature">
        <div class="container w-100 text-center ps-3">
          <div class="d-flex justify-content-center pt-5 pb-5 flex-wrap">
              <div class="p-5 bg-light text-center rounded-4 feature-content m-2">
                <div class="arifaa">
                <img src="<?php if($learnimg1!=''){echo $learnimg1['url'];} else {echo get_template_directory_uri().'/img/image 1.png'; } ?>" class="img-fluid m-2" srcset="">
                <h4 class="pt-3"><?php echo get_field('learn_one_title');?></h4>
                <p class="pb-5"><?php echo get_field('learn_one_description');?></p>
                </div>
              </div>

              <div class="p-5 bg-light text-center rounded-4 feature-content m-2">
                <div class="arifa">
                <img src="<?php if($learnimg2!=''){echo $learnimg2['url'];} else {echo get_template_directory_uri().'/img/image 1.png'; } ?>" class="img-fluid" srcset="">
                <h4 class="pt-3"><?php echo get_field('learn_two_title');?></h4>
                <p class="pb-5"><?php echo get_field('learn_two_description');?></p>
                </div>
              </div>

              <div class="p-5 bg-light text-center rounded-4 feature-content m-2">
                <div class="arifa">
                <img src="<?php if($learnimg3!='') {echo $learnimg3['url'];} else{ echo get_template_directory_uri().'/img/image 3.png';}?>" class="img-fluid" srcset="">
                <h4 class="pt-3"><?php echo get_field('learn_three_title');?></h4>
                <p class="pb-5"><?php echo get_field('learn_three_description');?></p>
                </div>
              </div>

              <div class="p-5 bg-light text-center rounded-4 feature-content m-2">
                <div class="arifa">
                <img src="<?php if($learnimg4!=''){echo $learnimg4['url'];} else{ echo get_template_directory_uri().'/img/image 4.png';}?>" class="img-fluid" srcset="">
                <h4 class="pt-3"><?php echo get_field('learn_four_title');?></h4>
                <p class="pb-5"><?php echo get_field('learn_four_description');?></p>
                </div>
              </div>
          </div>
        </div>
       </section>
               <!-- End Service Section -->


               <!-- Start Online Course Section --> 
  <?php 
    $courseimg1=get_field('course_one_bg_img');
    $courseimg2=get_field('course_two_bg_img');
    $courseimg3=get_field('course_three_bg_img');
    $testimonialimg= get_field('testimonial_bg_img');
  ?> 
       <section class="online">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center pt-5">
              <div class="h1"><?php echo get_field('course_main_title'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
              <div class="col">
                <div class="card p-4">
                  <img src="<?php if($courseimg1!=''){echo $courseimg1['url'];} else{ echo get_template_directory_uri().'/img/Rectangle 6.png';} ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_field('course_one_name'); ?></h5>
                    <p class="card-text"><?php echo get_field('course_one_description'); ?></p>
                    <div class="btn btn-info text-light"><a class="text-decoration-none text-light" href="<?php echo get_field('course_three_btn_url'); ?>"><?php echo get_field('course_one_btn'); ?></a></div>

                    <div class="d-flex justify-content-between pt-3">
                      <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i> <?php echo get_field('course_one_date'); ?></p>
                      <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i> <?php echo get_field('course_one_seat'); ?> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card p-4">
                  <img src="<?php if ($courseimg2!=''){echo $courseimg2['url'];} else{echo get_template_directory_uri().'/img/Rectangle 13.png';}?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_field('course_two_name'); ?></h5>
                    <p class="card-text"><?php echo get_field('course_two_description'); ?></p>
                    <div class="btn btn-info text-light"><a class="text-decoration-none text-light" href="<?php echo get_field('course_three_btn_url'); ?>"><?php echo get_field('course_two_btn'); ?></a></div>

                    <div class="d-flex justify-content-between pt-3">
                      <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i> <?php echo get_field('course_two_date'); ?></p>
                      <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i> <?php echo get_field('course_two_seat'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card p-4">
                  <img src="<?php if($courseimg3!=''){echo $courseimg3['url'];} else{echo get_template_directory_uri().'/img/Rectangle 15.png';}?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_field('course_three_name'); ?></h5>
                    <p class="card-text"><?php echo get_field('course_three_description'); ?></p>
                    <div class="btn btn-info text-light"><a class="text-decoration-none text-light" href="<?php echo get_field('course_three_btn_url'); ?>"><?php echo get_field('course_three_btn'); ?></a></div>

                    <div class="d-flex justify-content-between pt-3">
                      <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i> <?php echo get_field('course_three_date'); ?></p>
                      <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i> <?php echo get_field('course_three_number'); ?> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </section>
       <!-- End Online Course Section --> 


    <!-- Start Testimonial Section -->  
   <?php
    $testimonialimg= get_field('testimonial_bg_img');
   ?> 
       <section>
        <div class="container">
          <div class="row">
            <div class="col-12 text-center p-5">
              <h2><?php echo get_field('testimonial_main_title');?></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12 text-center ps-5 pb-5">
              <img src="<?php if($testimonialimg!=''){echo $testimonialimg['url'];} else{echo get_template_directory_uri().'/img/Ellipse 5.png';}?>"  class="img-fluid ms-3" srcset="">
            </div>
            <div class="col-md-9 col-sm-6 col-12 ps-0"> 
              <p class="ms-5"><?php echo get_field('testimonial_description'); ?></p> 
            </div>
          </div>
        </div>
       </section>
<!-- End Testimonial Section -->  

<!-- Start Footer Section -->  
       <?php 
        get_footer();
       ?>
<!-- Start Footer Section --> 