 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

  <?php 

$indexSlider = $db->from('slider')                  
                  ->first();

$resim = explode(",", $indexSlider['slider_url']);
$toplamresim =count($resim);



   ?>


                <div class="carousel-inner">
                  <div class="carousel-item active" style= "max-height:350px; background-image: url('<?php echo public_url("slider/").$resim[3]; ?>');">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white font-weight-bold"><?= $meta['breadcrumb'];?></h3>                  
                      </div>
                    </div> 
                  
                  <?php  $i=0;  foreach ($resim as $row ) { ?> 
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style= "max-height:350px; background-image: url('<?php echo public_url("slider/").$resim[$i];?>');">
                       <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white font-weight-bold"><?= $meta['breadcrumb'];?></h3>                  
                      </div>
                    </div>
                  <?php $i++; } ?>   

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
         </div>