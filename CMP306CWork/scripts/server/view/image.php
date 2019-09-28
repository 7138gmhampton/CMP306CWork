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
}
?>