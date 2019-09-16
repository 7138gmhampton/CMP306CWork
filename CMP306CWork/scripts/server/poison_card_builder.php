<?php
include 'scripts/server/poison.php';

function buildPoisonCard($name, $alt_name, $image, $description)
{
    echo '<div class="card">';
    echo '  <img class="card-img-top" src="' . $image . '" />';
    echo '  <div class="card-body">';
    echo '      <h5 class="card-title">' . $name . '</h5>';
    echo '      <h6 class="card-subtitle text-muted">' . $alt_name . '</h6>';
    echo '      <p class="card-text">' . $description . '</p>';
    echo '  </div>';
    echo '</div>';
}

function buildSummaryCard($id,$name, $alt_name, $description, $pic_source, $pic_title, $pic_alt_text)
{
    echo '<div class="card">';
    echo '  <img class="card-img-top" src="' . $pic_source . '" title="'.$pic_title.'" alt="'.
        $pic_alt_text.'" />';
    echo '  <div class="card-body">';
    echo '      <h5 class="card-title">' . $name . '</h5>';
    echo '      <h6 class="card-subtitle text-muted">' . $alt_name . '</h6>';
    echo '      <p class="card-text">' . $description . '</p>';
    echo '  </div>';
    echo '  <div class="card-body justify-content-center">';
    echo '      <a class="btn btn-primary" href="#">Go to Articles</a>';
    echo '  </div>';
    echo '</div>';
}

function buildPoisonSummaryCard($poison)
{
    echo '<div class="card">';
    echo '  <img class="card-img-top" src="' . $poison->getMainPic() . '" title="'.
        $poison->getPicTitle().'" alt="'.$poison->getPicAltText().'" />';
    echo '  <div class="card-body">';
    echo '      <h5 class="card-title">' . $poison->getName() . '</h5>';
    echo '      <h6 class="card-subtitle text-muted">' . $poison->getAlternative() . '</h6>';
    echo '      <p class="card-text">' . $poison->getDescription() . '</p>';
    echo '  </div>';
    echo '  <div class="card-body justify-content-center">';
    echo '      <a class="btn btn-primary" href="listing.php?id='.$poison->getID().
        '">Go to Articles</a>';
    echo '  </div>';
    echo '</div>';
}
?>