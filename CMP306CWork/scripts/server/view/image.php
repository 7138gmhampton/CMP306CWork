<?php
class Image
{
    private $image;
    private $source;
    private $title;
    private $alttext;

    function __construct($image, $source, $title, $alttext)
    {
        $this->image = $image;
        $this->source = $source;
        $this->title = $title;
        $this->alttext = $alttext;
    }

    //Access Functions
    public function getID() { return $this->image; }
    public function getSource() { return $this->source; }
    public function getTitle() { return $this->title; }
    public function getAltText() { return $this->alttext; }

    //Other Functions
    public function buildCarousel($first)
    {
        $active =  $first ?  ' active' : '';

        echo '<div class="carousel-item'.$active.'">';
        echo '  <img class="d-block w-100" src="'.$this->source.'" title="'.$this->title.'" '.
            'alt="'.$this->alttext.'" />';
        echo '</div>';
    }
}
?>