<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion) : array
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
            LIMIT 10;";

    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

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