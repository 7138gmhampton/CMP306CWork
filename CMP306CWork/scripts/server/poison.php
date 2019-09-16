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
}
?>