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
}
?>