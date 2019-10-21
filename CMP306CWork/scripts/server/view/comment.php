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
    public function getID() { return $this->comment; }
    public function getUser() { return $this->user; }
    public function getContent() {return $this->content; }

    //Other Functions
    public function buildRow()
    {
        echo '<tr>';
        echo '  <td>'.$this->username.'</td>';
        echo '  <td><textarea class="comment-box" readonly cols="80">'.$this->content.
            '</textarea></td>';
        echo '</tr>';
    }

    public function buildEditableRow()
    {
        echo '<tr>';
        echo '  <td>'.$this->username.'</td>';
        echo '  <td><textarea class="comment-box" readonly cols="80">'.$this->content.
            '</textarea></td>';
        echo '  <td>';
        echo '      <button id="btnEdit'.$this->comment.'" class="btn btn-primary">'.
            'Edit</button>';
        echo '      <button id="btnDelete'.$this->comment.'" class="btn btn-danger">'.
            'Delete</button>';
        echo '  </td>';
        echo '</tr>';
    }
}
?>