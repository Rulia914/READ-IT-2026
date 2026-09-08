<?php

namespace App\Models\CommentsModel;

use \PDO;

function findAllByPostId(PDO $connexion, int $postId) : array
{
    $sql = "SELECT *
            FROM comments
            WHERE post_id = :postId
            ORDER BY created_at DESC;";

$rs = $connexion->prepare($sql);
$rs->bindValue(':postId', $postId, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}
