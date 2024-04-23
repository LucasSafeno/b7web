<?php
class Post
{
  private int $id;
  private int $likes = 0;

  protected function setId($i)
  {
    $this->id = $i;
  }

  public function getId()
  {
    return $this->id;
  }

  protected function setLikes($n)
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
    $this->setLikes(12);
  }

  public function getUrl()
  {
    return $this->url;
  }
} // Foto

$foto = new Foto(20);

echo "FOTO : " . $foto->getId() . " - " . $foto->getLikes();;
