<?php
class Post
{
  private int $id;
  private int $likes = 0;

  public function setId($i)
  {
    $this->id = $i;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setLikes($n)
  {
    $this->likes = $n;
  }

  public function getLikes()
  {
    return $this->likes;
  }
} // Post

class Foto extends Post
{
  private $url;

  public function __construct($id)
  {
    $this->setId($id);
  }

  public function getUrl()
  {
    return $this->url;
  }
} // Foto

$foto = new Foto(20);
$foto->setLikes(12);
echo "FOTO : " . $foto->getId() . " - " . $foto->getLikes();;
