<?php
/** @var array $post */
/** @var array $author */
?>   
            
            <p class="mb-5">
              <img src="images/<?php echo $post['image'];?>" alt="" class="img-fluid">
            </p>

            <h1 class="mb-3 h1"><?php echo $post['title'];?></h1>
            <p><?php echo $post['content'];?></p>
            
        <!--tags list-->

            <?php
            include_once '../app/controllers/tagsController.php';
            $tags = App\Controllers\TagsController\indexByPostIdAction($connexion, $post['id']); 
            include '../app/views/templates/tags/indexByPostId.php';
            ?>

        <!--Author info-->

            <?php
            include '../app/views/templates/authors/show.php';
            ?>

        <!--Comments section--> 
        <?php
            include_once '../app/controllers/commentsController.php';
            App\Controllers\CommentsController\indexByPostIdAction($connexion, $post['id']);
        ?>

              <!-- END comment-list -->
              <!-- FORMULAIRE -->
              <?php include '../app/views/templates/comments/_addForm.php'; ?>


         
            

            