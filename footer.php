<?php
 //Template Name: footer
?>

<!-- Start Footer Section -->
<section class="footer bg-dark text-light">
        <div class="container">
          <div class="row p-5">
            <div class="col-md-3 col-12 pt-3">
              <h3 class=""><?php echo get_field('footer_one_title','option'); ?></h3>
              <p><?php echo get_field('footer_one_name1','option'); ?></p>
            </div>
            <div class="col-md-3 col-12 pt-3">
              <h3><?php echo get_field('footer_two_title','option'); ?></h3>
              <p><?php echo get_field('footer_two_name1','option'); ?></p>
              <p><?php echo get_field('footer_two_name2','option'); ?></p>
              <p><?php echo get_field('footer_two_name3','option'); ?></p>
              <p><?php echo get_field('footer_two_name4','option'); ?></p>
              <p><?php echo get_field('footer_two_name5','option'); ?></p>
            </div>
            <div class="col-md-3 col-12 pt-3">
              <h3><?php echo get_field('footer_three_title','option'); ?></h3>
              <p class="text-light"><i class="bi bi-envelope-open-heart"></i> <?php echo get_field('footer_three_name1','option'); ?></p>
              <p class="text-light"><i class="bi bi-telephone"></i> <?php echo get_field('footer_three_name2','option'); ?></p>
              <p class="text-light"> <i class="bi bi-telephone"></i> <?php echo get_field('footer_three_name3','option'); ?></p>
            </div>
            <div class="col-md-3 col-12 pt-3">
              <h3><?php echo get_field('footer_four_title','option'); ?></h3>
              <p><a class="text-decoration-none text-light" href="https://www.facebook.com/"><i class="bi bi-facebook"></i> <?php echo get_field('footer_four_name1','option'); ?></a></p>
              <p><a class="text-decoration-none text-light" href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i> <?php echo get_field('footer_four_name2','option'); ?></a></p>
              <p><a class="text-decoration-none text-light" href="https://twitter.com/md_arifhosain"><i class="bi bi-twitter"> </i> <?php echo get_field('footer_four_name3','option'); ?></a></p>
              <p><a class="text-decoration-none text-light" href="https://join.skype.com/invite/VKJuXrUrF23X"><i class="bi bi-skype"></i> <?php echo get_field('footer_four_name4','option'); ?></a></p>
            </div>
          </div> 
        </div>
       </section>
       <section class="bg-dark text-light border-top">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center p-3">
              <p><a class="text-light" href="https://arifcv.netlify.app/" class="text-light m-1" target="_blank"><?php echo get_field('copy_right','option'); ?></a></p>
            </div>
           </div>
        </div>
       </section><hr>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>

            <?php wp_footer();  ?>

            <!-- End Footer Section -->

