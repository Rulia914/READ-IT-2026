<?php

namespace App\Models\TagsModel;

use \PDO;

function findAll(PDO $connexion) : array
{
    $sql = "SELECT *, COUNT(pht.post_id) AS post_count
            FROM tags t
            LEFT JOIN posts_has_tags pht ON pht.tag_id = t.id
            group BY t.id
            ORDER BY COUNT(pht.post_id) ASC ;";

    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
function findAllByPostId(PDO $connexion, int $postId) : array
{
    $sql = "SELECT *
            FROM tags t
            INNER JOIN posts_has_tags pht ON t.id = pht.tag_id
            WHERE pht.post_id = :postId
            ORDER BY t.name ASC;";

$rs = $connexion->prepare($sql);
$rs->bindValue(':postId', $postId, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}
