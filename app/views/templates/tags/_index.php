<?php
/** @var array $tags */

?>

<h3>Tag Cloud</h3>
    <div class="tagcloud">

        <?php 
        include_once '../app/models/tagsModel.php';
        $tags = \App\Models\TagsModel\findAll($connexion);
        foreach ($tags as $tag) : ?>
            <a href="?tag=show&id=<?php echo $tag['id'];?>" class="tag-cloud-link"><?php echo $tag['name']; ?></a>  
        <?php endforeach; ?>
        
    </div>