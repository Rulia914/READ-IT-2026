<?php
/** @var array $posts */

?>
<h3>Recent Blog</h3>

    <?php 
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAllRecents($connexion);
    foreach ($posts as $post) : 
    $created_at = strtotime($post['created_at']);?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/<?php echo $post['image']?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="?post=show&id=<?php echo $post['id'];?>"><?php echo $post['title']; ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo date('M. d, Y', $created_at); ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php echo $post['author_firstname'];?> <?php echo $post['author_lastname'];?> </a></div>
                    <div><a href="#"><span class="icon-chat"></span> <?php echo $post['comment_count'];?></a></div>
                  </div>
                </div>
              </div>
    <?php endforeach; ?>  