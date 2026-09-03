
              <div class="categories">
                <h3>Categories</h3>
                <?php 
                  include_once '../app/models/categoriesModel.php';
                  $categories = \App\Models\CategoriesModel\findAll($connexion);
                  foreach ($categories as $category) : ?>
                  <li><a href="?category=show&id=<?php echo $category['id'];?>"><?php echo $category['name']; ?> <span class="ion-ios-arrow-forward"></span></a></li>
                <?php endforeach; ?>

              </div>
            