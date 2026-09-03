<?php
/** @var array $posts */

?>
<h3>Recent Blog</h3>

    <?php 
    include_once '../app/models/PostsModel.php';
    $posts = \App\Models\PostsModel\findAllByDate($connexion);
    foreach ($posts as $post) : ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="?post=show&id=<?php echo $post['id'];?>"><?php echo $post['title']; ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
    <?php endforeach; ?>  