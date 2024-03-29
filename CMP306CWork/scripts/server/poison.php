<?php
class Poison
{
    private $poison;
    private $name;
    private $alternative;
    private $description;
    private $source;
    private $title;
    private $alttext;

    //Access Functions
    public function getID() { return $this->poison; }
    public function getName() { return $this->name; }
    public function getAlternative() { return $this->alternative; }
    public function getDescription() { return $this->description; }
    public function getMainPic() { return $this->source; }
    public function getPicTitle() { return $this->title; }
    public function getPicAltText() { return $this->alttext; }

    //Other Functions
    public function buildCard()
    {
        echo '<div class="card m-3 border">';
        echo '  <img class="card-img-top" src="' . $this->source . '" title="'.
            $this->title.'" alt="'.$this->alttext.'" />';
        echo '  <div class="card-body">';
        echo '      <h5 class="card-title">' . $this->name . '</h5>';
        echo '      <h6 class="card-subtitle text-muted">' . $this->alternative . '</h6>';
        echo '      <p class="card-text">' . $this->description . '</p>';
        echo '  </div>';
        echo '  <div class="card-body justify-content-center">';
        echo '      <a class="btn btn-primary" href="listing.php?id='.$this->poison.
            '">Go to Articles</a>';
        echo '  </div>';
        echo '</div>';
    }
}
?>