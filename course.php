
<?php
 //Template Name: course 
?>
<!-- Header Link -->
<?php 
    get_header();
  ?>
  <!-- End Header link -->

  <!-- Start Course Page -->
<?php 
    $course1=get_field('course_one_img');
    $course2=get_field('course_two_img');
    $course3=get_field('course_three_img');
    $course4=get_field('course_four_img');
    $course5=get_field('course_five_img');
    $course6=get_field('course_six_img');
  ?>
    <div class="container">
              <div class="row">
                <p class="h1 bold text-center p-5"><?php echo get_field('course_main_title'); ?></p>
              </div>
            </div>

          <section class="course">
            <div class="container">
             <div class="row">
                <div class="col-sm-1 text-center">
                  <img src="<?php if($course1!=''){echo $course1['url'];} else{echo get_template_directory_uri().'/img/1.jpg';}?>" class="img-fluid pt-5 w-75" alt="" srcset="">
                </div>
                <div class="col-sm-3 pb-5">
                  <h2 class="text-secondary p-2"><?php echo get_field('course_one_title'); ?></h2>
                  <?php echo get_field('course_one_content'); ?>
                </div>


                <div class="col-sm-1 text-center">
                  <img src="<?php  if($course2!=''){echo $course2['url'];} else{echo get_template_directory_uri().'/img/2.jpg';}?>" class="img-fluid pt-5 w-75" alt="" srcset="">
                </div>
                <div class="col-sm-3 pb-5">
                  <h2 class="text-secondary pt-2"><?php echo get_field('course_two_title'); ?></h2>
                  <?php echo get_field('course_two_content'); ?>
                </div>


                <div class="col-sm-1 text-center">
                  <img src="<?php  if($course3!=''){echo $course3['url'];} else{ echo get_template_directory_uri().'/img/3.jpeg';}?>" class="img-fluid pt-5 w-75" alt="" srcset="">
                </div>
                <div class="col-sm-3 pb-5">
                  <h2 class="text-secondary p-2"><?php echo get_field('course_three_title'); ?></h2>
                  <?php echo get_field('course_three_content'); ?>
                </div>
            </div>
           </div>
        </section>
        <section class="course">
          <div class="container">
           <div class="row">
              <div class="col-sm-1 text-center">
                <img src="<?php  if($course4!=''){echo $course4['url'];} else{echo get_template_directory_uri().'/img/4.jpeg';}?>" class="img-fluid pt-5 w-75 " alt="" srcset="">
              </div>
              <div class="col-sm-3 pb-5">
                <h2 class="text-secondary p-2"><?php echo get_field('course_four_title'); ?></h2>
                <?php echo get_field('course_four_content'); ?>
              </div>


              <div class="col-sm-1 text-center">
                <img src="<?php  if($course5!=''){echo $course5['url'];} else{ echo get_template_directory_uri().'/img/5.jpg';}?>" class="img-fluid pt-5 w-75" alt="" srcset="">
              </div>
              <div class="col-sm-3 pb-5">
                <h2 class="text-secondary p-2"><?php echo get_field('course_five_title'); ?></h2>
                <?php echo get_field('course_five_content'); ?>
              </div>


              <div class="col-sm-1 text-center">
                <img src="<?php  if($course6!=''){echo $course6['url'];} else{ echo get_template_directory_uri().'/img/6.jpeg';}?>" class="img-fluid pt-5 w-75" alt="" srcset="">
              </div>
              <div class="col-sm-3 pb-5">
                <h2 class="text-secondary p-2"><?php echo get_field('course_six_title'); ?></h2>
                <?php echo get_field('course_six_content'); ?>
              </div>
          </div>
         </div>
      </section>
 <!-- End Course Page -->

<!-- Footer Link -->
<?php 
    get_footer();
  ?>
  <!-- End Footer -->