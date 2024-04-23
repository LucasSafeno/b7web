<?php
class Post
{
  public $likes = 0;
  public $comments = [];
  public $author;

  public function aumentarLike()
  {
    $this->likes += 1;
  }
}

$post1 = new Post();
echo "Post1 Likes " . $post1->likes;
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
echo "<br> Post1 Likes " . $post1->likes;
