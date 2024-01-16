<?php
 //Template Name: others
?>
<!-- Header Link -->
<?php 
    get_header();

    $book1=get_field('books_img_one');
    $book2=get_field('books_img_two');
    $book3=get_field('books_img_three');
    $book4=get_field('books_img_four');
    $book5=get_field('books_img_five');
    $book6=get_field('books_img_six');
  ?>


        <section class="p-5 ">
            <div class="container">
              <div class="row">
                <p class="h1 bold text-center p-5"><?php echo get_field('others_main_title'); ?></p>
              </div>
            <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.php" target="_blank" class="text-decoration-none">
                    <img class="img-fluid w-100 h-auto" src="<?php if($book1!=''){echo $book1['url'];} else{echo get_template_directory_uri().'/img/bb.png';}?>" alt="Lights">
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.php" target="_blank" class="text-decoration-none">
                    <img class="img-fluid w-100 h-auto" src="<?php if($book2!=''){echo $book2['url'];} else{echo get_template_directory_uri().'/img/bbb.jpg';}?>"  alt="Nature">
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.php" target="_blank" class="text-decoration-none">
                    <img class="img-fluid w-100 h-auto" src="<?php if($book3!=''){echo $book3['url'];} else{echo get_template_directory_uri().'/img/bb.png';}?>" alt="Fjords">
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
                    <a href="books.php" target="_blank" class="text-decoration-none">
                    <img class="img-fluid w-100 h-auto" src="<?php if($book4!=''){echo $book4['url'];} else{echo get_template_directory_uri().'/img/computer.jpeg';}?>" alt="Lights" >
                      
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.php" target="_blank" class="text-decoration-none">
                    <img class="img-fluid w-100 h-auto" src="<?php if($book5!=''){echo $book5['url'];} else{echo get_template_directory_uri().'/img/sc.jpeg';} ?>" alt="Nature">
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="books.php" target="_blank" class="text-decoration-none">
                    <img class="img-fluid w-100 h-50" src="<?php if($book6!=''){echo $book6['url'];} else{ echo get_template_directory_uri().'/img/social.jpeg';}?>"   alt="Fjords">
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </section>
	




 <!-- Footer Link -->
 <?php 
    get_footer();
  ?>