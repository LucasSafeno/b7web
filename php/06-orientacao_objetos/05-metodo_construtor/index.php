<?php
class Post
{
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function __construct($qntdLikes)
  {
    $this->likes = $qntdLikes;
  }
  public function aumentarLike()
  {
    $this->likes++;
  }
}

$post1 = new Post(25);
echo "Quantidade de Likes : " . $post1->likes;
