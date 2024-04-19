<?php
class Post
{
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  private string $author;

  public function aumentarLike()
  {
    $this->likes++;
  }

  public function setAuthor($n)
  {
    if (strlen($n) >= 3) {
      $this->author = ucfirst($n);
    }
  }

  public function getAuthor()
  {
    return $this->author ?? 'Visitante';
  }
} // Post

$post1 = new Post();
$post1->setAuthor('lucas');


$post2 = new Post();


echo "POST 1 : " . $post1->likes . " likes - " . $post1->getAuthor() . "<br>";
echo "POST 2 : " . $post2->likes . " likes - " . $post2->getAuthor() . "<br>";
