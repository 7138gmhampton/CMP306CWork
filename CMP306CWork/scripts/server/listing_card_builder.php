<?php
function buildListingCard($id_no, $title, $author, $text)
{
    echo '<div class="card">';
    echo '  <div class="card-header">';
    echo '      <a class="card-title h5" href ="article.php?id='.$id_no.'">'.$title.'</a>';
    echo '      <h6 class="card-subtitle">'.$author.'</h6>';
    echo '  </div>';
    echo '  <div class="card-body>';
    echo '      <p class="card-text">'.truncateForSummary($text).'</p>';
    echo '  </div>';
    echo '</div>';
}
?>