<?php
require_once ROOT.'scripts/server/model/api_iamge.php';
require_once ROOT.'scripts/server/view/image.php';

class ImageView
{
    public static function allForArticle($article_id)
    {
        $image_array = json_decode(ImageAPI::getAllImagesForArticle($article_id));
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