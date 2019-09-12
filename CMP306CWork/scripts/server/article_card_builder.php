<?php
function buildArticleCard($name,$image,$image_title,$description)
{
    echo '<div class="card">';
    echo ' <img class="card-img-top" src="'.$image.'" title="'.$image_title.'" />';
    echo '  <div class="card-body">';
    echo '      <h5 class="card-title">' . $name . '</h5>';
    echo '      <p class="card-text">' . $description . '</p>';
    echo '  </div>';
    echo '</div>';
}
?>