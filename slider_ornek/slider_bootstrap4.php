         <?php 


        $indexPost   = $db->from('posts')
                          ->all();

        $indexSlider = $db->from('posts')
                          ->where('post_categories',7)
                          ->all();
        $totalRecord = $db->from('posts')
                          ->where('post_categories',7)
                          ->select('count(post_id) as total')
                          ->total();



          ?>


         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">            
              <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active" style= "max-height:300px; background-image: url('<?php echo public_url("vendor/slider/slider4.jpg") ?>');">
                  <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-white font-weight-bold">Bahçe Servisleri</h3>                  
                  </div>
                </div>
                <?php foreach ($indexSlider as $row ) { $resim = explode(",", $row['post_images']); $i=0;  ?> 
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item" style= "max-height:300px; background-image: url('<?php echo public_url("img/").$resim[$i];?>');">
                  <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-white font-weight-bold"><?php echo $row['post_title']; ?></h3>
                    
                  </div>
                </div>
              <?php $i++; } ?>                
              </div>

                <ol class="carousel-indicators">
                   <?php for($sayi = 0; $sayi < $totalRecord; $sayi++) {?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $sayi; ?>" class="active"></li>
                   <?php } ?>
                </ol>
           
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>