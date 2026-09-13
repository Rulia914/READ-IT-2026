<?php
/** @var array $categories */
?>
              <div class="categories">
                <h3>Categories</h3>
                <?php 
                 
                  foreach ($categories as $category) : ?>
                  <li><a href="?category=show&id=<?php echo $category['id'];?>"><?php echo $category['name']; ?> <span class="ion-ios-arrow-forward"></span></a></li>
                <?php endforeach; ?>

              </div>
            