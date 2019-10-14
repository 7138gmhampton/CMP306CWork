<?php
class Comment
{
    private $comment;
    private $article;
    private $user;
    private $username;
    private $content;

    function __construct($comment, $article, $user, $username, $content)
    {
        $this->comment = $comment;
        $this->article = $article;
        $this->user = $user;
        $this->username = $username;
        $this->content = $content;
    }

    //Access Functions

    //Other Functions
    public function buildRow()
    {
        echo '<tr>';
        echo '  <td>'.$this->username.'</td>';
        echo '  <td>'.$this->content.'</td>';
        echo '</tr>';
    }
}
?>