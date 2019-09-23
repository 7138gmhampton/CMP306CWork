<?php
include_once ROOT.'scripts/server/model/api_poison.php';

class Poison
{
    private $poison;
    private $name;
    private $alternative;
    private $description;
    private $source;
    private $title;
    private $alttext;

    function __construct($poison, $name, $alternative, $description, $source, $title, $alttext)
    {
        $this->poison = $poison;
        $this->name = $name;
        $this->alternative = $alternative;
        $this->description = $description;
        $this->source = $source;
        $this->title = $title;
        $this->alttext = $alttext;
    }

    //Access Functions
    public function getID() { return $this->poison; }
    public function getName() { return $this->name; }
    public function getAlternative() { return $this->alternative; }
    public function getDescription() { return $this->description; }
    public function getMainPic() { return $this->source; }
    public function getPicTitle() { return $this->title; }
    public function getPicAltText() { return $this->alttext; }

    //Other Functions
    public function buildCard()
    {
        echo '<div class="card m-3 border">';
        echo '  <img class="card-img-top" src="' . $this->source . '" title="'.
            $this->title.'" alt="'.$this->alttext.'" />';
        echo '  <div class="card-body">';
        echo '      <h5 class="card-title">' . $this->name . '</h5>';
        echo '      <h6 class="card-subtitle text-muted">' . $this->alternative . '</h6>';
        echo '      <p class="card-text">' . $this->description . '</p>';
        echo '  </div>';
        echo '  <div class="card-body justify-content-center">';
        echo '      <a class="btn btn-primary" href="listing.php?id='.$this->poison.
            '">Go to Articles</a>';
        echo '  </div>';
        echo '</div>';
    }
}

function collatePoisons()
{
    $poison_data = PoisonAPI::getAllPoisons();
    //var_dump($poison_data);
    $array_of_poisons = json_decode($poison_data, true);
    //var_dump($array_of_poisons);
    $all_poisons = array();

    foreach ($array_of_poisons as $each_poison) {
        $next_poison = new Poison();
        foreach ($each_poison as $key => $value) $next_poison->{$key} = $value;
        array_push($all_poisons, $next_poison);
    }

    return $all_poisons;
}
?>