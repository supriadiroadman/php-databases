<?php
namespace Repository;

use Model\Comment;

interface CommentRepository {
    function insert(Comment $comment): Comment;
}

class CommentRepositoryImpl implements CommentRepository
{
    // Mengambil koneksi dengan Promote construction
    public function __construct(private \PDO $connection)
    {
    }

    public function insert(Comment $comment): Comment
    {
        $sql = "INSERT INTO comments (email,comment) VALUES (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$comment->getEmail(),$comment->getComment()]);

        $id = $this->connection->lastInsertId();
        $comment->setId($id);

        return $comment;
    }
}
