<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion, int $limit = 10) : array
{
    $sql = "SELECT 
                p.id,
                p.title,
                p.content,
                p.image,
                p.created_at,
                a.id AS author_id,
                a.firstname AS author_firstname,
                a.lastname AS author_lastname
            FROM posts p
            INNER JOIN authors a ON p.author_id = a.id
            ORDER BY p.created_at DESC
            LIMIT :limit;";

        $rs = $connexion->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_ASSOC);
} 
//De cette façon, on peut récupérer les 10 derniers articles publiés, mais on peut aussi récupérer les 5 derniers articles en appelant la fonction avec un paramètre de limite différent.

function findAllByDate(PDO $connexion) : array
{
    $sql = "SELECT 
                p.id,
                p.title,
                p.content,
                p.image,
                p.created_at,
                a.id AS author_id,
                a.firstname AS author_firstname,
                a.lastname AS author_lastname
            FROM posts p
            INNER JOIN authors a ON p.author_id = a.id
            ORDER BY p.created_at DESC
            LIMIT 3;";

    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id) : array
{
    $sql = "SELECT 
                p.id,
                p.title,
                p.content,
                p.image,
                p.created_at,
                a.id AS author_id,
                a.firstname AS author_firstname,
                a.lastname AS author_lastname
            FROM posts p
            INNER JOIN authors a ON p.author_id = a.id
            WHERE p.id = :id;";
$rs = $connexion->prepare($sql);
$rs->bindValue(':id', $id, PDO::PARAM_INT);
$rs->execute();
return $rs->fetch(PDO::FETCH_ASSOC);
}

function findAllRecents(PDO $connexion) : array
{
    $sql = "SELECT 
                p.id,
                p.title,
                p.image,
                p.created_at,
                a.id AS author_id,
                a.firstname AS author_firstname,
                a.lastname AS author_lastname,
                COUNT(c.id) AS comment_count
            FROM posts p
            INNER JOIN authors a ON p.author_id = a.id
            LEFT JOIN comments c ON c.post_id = p.id
            GROUP BY p.id
            ORDER BY p.created_at DESC
            LIMIT 3;";

    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
    