<?php
 //Template Name: blog
?>
<!-- Header Link -->
<?php 
    get_header();
  ?>
<!-- End Header -->

  <!-- Start Blog Section -->
  <?php 
    $blog1=get_field('blog_one_img');
    $blog2=get_field('blog_two_img');
    $blog3=get_field('blog_three_img');
    $courseimg1=get_field('course_one_bg_img');
    $courseimg2=get_field('course_two_bg_img');
    $courseimg3=get_field('course_three_bg_img');
  ?>
        <section class="p-5 ">
            <div class="container">
              <div class="row">
                <p class="h1 bold text-center p-3"><?php echo get_field('blog_main_title'); ?></p>
              </div>
              <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4 pb-1">
                  <div class="col">
                    <div class="card p-4">
                      <img src="<?php if($blog1!=''){echo $blog1['url'];} else{echo get_template_directory_uri().'/img/Rectangle 13.png';}?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="btn btn-light text-danger"><?php echo get_field('blog_one_name'); ?></div>
                        <h5 class="card-title pt-3"><?php echo get_field('blog_one_description'); ?></h5>
                        <div class="d-flex justify-content-between pt-3">
                          <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i> <?php echo get_field('blog_one_date'); ?></p>
                          <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i> <?php echo get_field('blog_one_seat'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card p-4">
                      <img src="<?php if($blog2!=''){echo $blog2['url'];} else{ echo get_template_directory_uri().'/img/learling.png';}?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="btn btn-light text-danger"><?php echo get_field('blog_two_name'); ?></div>
                        <h5 class="card-title pt-3"><?php echo get_field('blog_two_description'); ?></h5>
                        <div class="d-flex justify-content-between pt-3">
                          <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i> <?php echo get_field('blog_two_date'); ?></p>
                          <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i> <?php echo get_field('blog_two_seat'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card p-4">
                      <img src="<?php if($blog3!=''){echo $blog3['url'];}else{ echo get_template_directory_uri().'/img/health.jpeg';}?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="btn btn-light text-danger"><?php echo get_field('blog_three_name'); ?></div>
                        <h5 class="card-title pt-3"><?php echo get_field('blog_three_description'); ?></h5>
                        <div class="d-flex justify-content-between pt-3">
                          <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i> <?php echo get_field('blog_three_date'); ?></p>
                          <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i><?php echo get_field('blog_three_seat'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
                  <div class="col">
                    <div class="card p-4">
                    <img src="<?php if($courseimg1!=''){echo $courseimg1['url'];} else{ echo get_template_directory_uri().'/img/Rectangle 6.png';} ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="btn btn-light text-danger"><?php echo get_field('blog_four_name'); ?></div>
                        <h5 class="card-title pt-3"><?php echo get_field('blog_three_description'); ?></h5>
                        <div class="d-flex justify-content-between pt-3">
                          <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i><?php echo get_field('blog_four_date'); ?></p>
                          <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i> <?php echo get_field('blog_four_seat'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card p-4">
                    <img src="<?php if ($courseimg2!=''){echo $courseimg2['url'];} else{echo get_template_directory_uri().'/img/Rectangle 13.png';}?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="btn btn-light text-danger"><?php echo get_field('blog_five_name'); ?></div>
                        <h5 class="card-title pt-3"><?php echo get_field('blog_three_description'); ?></h5>
                        <div class="d-flex justify-content-between pt-3">
                          <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i><?php echo get_field('blog_five_date'); ?> </p>
                          <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i> <?php echo get_field('blog_five_seat'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card p-4">
                    <img src="<?php if($courseimg3!=''){echo $courseimg3['url'];} else{echo get_template_directory_uri().'/img/Rectangle 15.png';}?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="btn btn-light text-danger"><?php echo get_field('blog_six_name'); ?></div>
                        <h5 class="card-title pt-3"><?php echo get_field('blog_three_description'); ?></h5>
                        <div class="d-flex justify-content-between pt-3">
                          <p class="m-0 p-0"><i class="bi bi-backpack4-fill m-0 p-0"></i> <?php echo get_field('blog_six_date'); ?></p>
                          <p class="m-0 p-0"><i class="bi bi-people-fill m-0 p-0"></i> <?php echo get_field('blog_six_seat'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </section>
 <!-- End Blog Page -->


 <!-- Footer Link -->
 <?php 
    get_footer();
  ?>
  <!-- End Footer -->
