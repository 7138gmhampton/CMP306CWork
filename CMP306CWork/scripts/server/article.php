<?php
class Article
{
    private $article;
    private $title;
    private $author;
    private $video;
    private $text;

    //Access Functions
    public function getID() { return $this->article; }
    public function getTitle() { return $this->title; }
    public function getAuthor() { return $this->author; }
    public function getVideo() { return $this->video; }
    public function getText() { return $this->text; }

    //Other Functions
    public function getSummary()
    {
        $no_of_chars = strlen($this->text);
        $summary = null;

        if ($no_of_chars > 200) {
            $summary = substr($this->text, 0, 197);
            $summary = $summary . '...';
        }
        else $summary = $this->text;

        return $summary;
    }

    public function buildCard()
    {
        echo '<div class="card">';
        echo '  <div class="card-header">';
        echo '      <a class="card-title h5" href ="article.php?id='.$this->article.'">'.
            $this->title.'</a>';
        echo '      <h6 class="card-subtitle">'.$this->author.'</h6>';
        echo '  </div>';
        echo '  <div class="card-body>';
        echo '      <p class="card-text">'.$this->getSummary().'</p>';
        echo '  </div>';
        echo '</div>';
    }
}
?>