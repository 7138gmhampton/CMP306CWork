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
    public function getUser() { return $this->user; }

    //Other Functions
    public function buildRow()
    {
        echo '<tr>';
        echo '  <td>'.$this->username.'</td>';
        echo '  <td>'.$this->content.'</td>';
        echo '</tr>';
    }

    public function buildEditableRow()
    {
        //echo '<form action="">';
        echo '<tr>';
        echo '  <td>'.$this->username.'</td>';
        echo '  <td>'.$this->content.'</td>';
        echo '  <td>';
        //echo '      <form>';
        //echo '          <input id="commentId" type="hidden" value="'.$this->comment.'" />';
        echo '      <button id="btnEdit'.$this->comment.'">Edit</button>';
        echo '  </td>';
        echo '</tr>';
        //echo '</form>';
    }
}
?>