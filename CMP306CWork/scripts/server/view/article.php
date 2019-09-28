<?php
class Article
{
    private $article;
    private $title;
    private $author;
    private $video;
    private $text;
    private $image;

    function __construct($article, $title, $author, $video, $text, $image=null, $source=null,
        $img_title=null,$alttext=null)
    {
        $this->article = $article;
        $this->title = $title;
        $this->author = $author;
        $this->video = $video;
        $this->text = $text;
        
    }

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
        echo '      <a class="card-title h5" href ="display_article.php?id='.$this->article.'">'.
            $this->title.'</a>';
        echo '      <h6 class="card-subtitle">'.$this->author.'</h6>';
        echo '  </div>';
        echo '  <div class="card-body">';
        echo '      <p class="card-text">'.$this->getSummary().'</p>';
        echo '  </div>';
        echo '</div>';
    }

    public function buildCardWithPic()
    {
        echo '<div class="card">';
        echo '  <div class="row no-gutters">';
        echo '      <div class="col-lg-4">';
        echo '          <img src="'
        echo '      </div>';
        echo '      <div class="col-lg-8">';
        echo '          <div class="card-header">';
        echo '              <a class="card-title h5" href ="display_article.php?id='.
                                $this->article.'">'.$this->title.'</a>';
        echo '              <h6 class="card-subtitle">'.$this->author.'</h6>';
        echo '          </div>';
        echo '          <div class="card-body">';
        echo '              <p class="card-text">'.$this->getSummary().'</p>';
        echo '          </div>';
        echo '      </div>';
        echo '  </div>';
    }
}
?>