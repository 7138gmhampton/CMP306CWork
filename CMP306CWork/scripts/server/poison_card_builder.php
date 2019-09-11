<?php
function buildPoisonCard($name, $alt_name, $image, $description)
{
    echo '<div class="card">';
    echo '  <img class="card-img-left" src="' . $image . '" />';
    echo '  <div class="card-body">';
    echo '      <h5 class="card-title">' . $name . '</h5>';
    echo '      <h6 class="card-subtitle text-muted">' . $alt_name . '</h6>';
    echo '      <p class="card-text"><small>' . $description . '</small></p>';
    echo '  </div>';
    echo '</div>';
}
?>