<?php
require_once __DIR__.'/GetConnection.php';
require_once __DIR__.'/Model/Comment.php';
require_once __DIR__.'/Repository/CommentRepository.php';

use Model\Comment;
use Repository\CommentRepositoryImpl;

$connection = getConnection();

//$comment    = new Comment(email: 'repository@test.com',comment: 'Hai');
$repository = new CommentRepositoryImpl($connection);

//$commentObj = $repository->insert($comment);
$commentObj = $repository->findById(1);

var_dump($commentObj);

$connection = null;