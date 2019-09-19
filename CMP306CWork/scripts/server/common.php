<?php
function truncateForSummary($text)
{
    $no_of_chars = strlen($text);
    $summary = null;

    if ($no_of_chars > 200) {
        $summary = substr($text, 0, 197);
        $summary = $summary . '...';
    }
    else $summary = $text;

    return $summary;
}
?>