<?php
 //Template Name: book
?>

<!-- Start Header Section -->
  <?php 
    get_header(); 
  ?>
<!-- End Header Section --> 

  <!-- Start Banner Section -->
 <?php 
    $book1=get_field('books_img_one');
    $book2=get_field('books_img_two');
    $book3=get_field('books_img_three');
    $book4=get_field('books_img_four');
    $book5=get_field('books_img_five');
    $book6=get_field('books_img_six');
  ?>
            <div class="container">
              <div class="row">
                <p class="h1 bold text-center p-5"><?php echo get_field('books_main_title'); ?></p>
              </div>
            <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.php" target="_blank" class="text-decoration-none">
                    <img class="img-fluid w-100 h-auto" src="<?php if($book1!=''){echo $book1['url'];} else{echo get_template_directory_uri().'/img/bb.png';}?>" alt="Lights">
                      <div class="caption">
                        <h3 class="text-center text-danger p-4"><?php echo get_field('books_name_one'); ?></h3>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.php" target="_blank" class="text-decoration-none">
                    <img class="img-fluid w-100 h-auto" src="<?php if($book2!=''){echo $book2['url'];} else{echo get_template_directory_uri().'/img/bbb.jpg';}?>"  alt="Nature">
                      <div class="caption">
                        <h3 class="text-center text-danger p-4"><?php echo get_field('books_name_two'); ?></h3>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.php" target="_blank" class="text-decoration-none">
                      <img class="img-fluid w-100 h-auto" src="<?php if($book3!=''){echo $book3['url'];} else{echo get_template_directory_uri().'/img/bb.png';}?>" alt="Fjords">
                      <div class="caption">
                        <h3 class="text-center text-danger p-4"><?php echo get_field('books_name_three'); ?></h3>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section class="p-5 ">
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.html" target="_blank" class="text-decoration-none">
                      <img class="img-fluid w-100 h-auto" src="<?php if($book4!=''){echo $book4['url'];} else{echo get_template_directory_uri().'/img/computer.jpeg';}?>" alt="Lights" >
                      <div class="caption">
                        <h3 class="text-center text-danger p-4"><?php echo get_field('books_name_four'); ?></h3>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.html" target="_blank" class="text-decoration-none">
                      <img class="img-fluid w-100 h-auto" src="<?php if($book5!=''){echo $book5['url'];} else{echo get_template_directory_uri().'/img/sc.jpeg';} ?>" alt="Nature">
                      <div class="caption">
                        <h3 class="text-center text-danger p-4"><?php echo get_field('books_name_five'); ?></h3>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.html" target="_blank" class="text-decoration-none">
                      <img class="img-fluid w-100 h-50" src="<?php if($book6!=''){echo $book6['url'];} else{ echo get_template_directory_uri().'/img/social.jpeg';}?>"   alt="Fjords">
                      <div class="caption">
                        <h3 class="text-center text-danger p-4"><?php echo get_field('books_name_six'); ?></h3>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </section>
<!-- Start Banner Section -->

<!--Start Footer Link -->
<?php 
    get_footer();
?>