<script>

</script>

<div class="container">
            <h3>Popular Destinations</h3>
            <div class="row">
              <ul>
              <?php
                foreach($hotels as $hotel){
                  ?>
                    
                       <li class="col-sms-6 col-sm-6 col-md-3">
                           <a href="detail.php?id=<?php echo $hotel['id'];?>" target="_blank">
                            <img src="<?php echo $hotel['img_src'];?>">
                       </a>
                       <div class="article">
                          <h4 id="hotel_title"><?php echo $hotel['title'];?></h4>
                          <p><?php echo $hotel['destination'];?></p>
                       </div>     
                    <?php
                }    
              ?>
              </ul>            
            </div> 
</div>