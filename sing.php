
<?php
 //Template Name:sing
?>
<!-- Header Link -->
<?php 
    get_header();
  ?>
<!--End Header Link -->

<!-- Start Sing Page -->

        <section class="bg-light">
            <div class="container">
              <div class="row">
                <!-- <p class="h1 bold text-center p-5 bg-light">Application Form</p> -->
              </div>
              <form action="/action_page.php">
                  <?php echo apply_shortcodes( '[contact-form-7 id="c9abe34" title="Application form"]' ); ?>
              </form>
            </div>
        </section>
<!-- End Sing Page -->

<!-- Footer Link -->
<?php 
    get_footer();
  ?>
  <!-- End Footer Link -->