<?php
require_once __DIR__.'/GetConnection.php';
require_once __DIR__.'/Model/Comment.php';
require_once __DIR__.'/Repository/CommentRepository.php';

use Model\Comment;
use Repository\CommentRepositoryImpl;

$connection = getConnection();

$comment    = new Comment(email: 'repository@test.com',comment: 'Hai');
$repository = new CommentRepositoryImpl($connection);

$commentObj = $repository->insert($comment);
var_dump($commentObj->getId());

$connection = null;