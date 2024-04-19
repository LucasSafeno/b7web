<?php
class Post
{
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function aumentarLike()
  {
    $this->likes += 1;
  }
}

$post1 = new Post();
$post1->likes = 10;
echo "Post1 Likes " . $post1->likes;
