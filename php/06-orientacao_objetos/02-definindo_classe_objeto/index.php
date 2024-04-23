<?php
class Post
{
  public $likes = 0;
  public $comments = [];
  public $author;
}

$post1 = new Post();
$post1->likes = 3;


$post2 = new Post();

echo "Post 1 : " . $post1->likes . "<br>";
echo "Post 2 : " . $post2->likes . "<br>";
