<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_image.php';
require_once ROOT.'scripts/server/view/image.php';

class ImageView extends ViewController
{
    public static function allForArticle($article_id)
    {
        $image_array = json_decode(ImageAPI::getAllImagesForArticle(
            self::scrub($article_id)), true);
        $all_images = array();

        foreach ($image_array as $each_image) {
            $image = new Image(
                $each_image['image'],
                $each_image['source'],
                $each_image['title'],
                $each_image['alttext']);
            array_push($all_images, $image);
        }

        return $all_images;
    }
}
?>