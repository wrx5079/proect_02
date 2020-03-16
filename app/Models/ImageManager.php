<?php
namespace App\Models;

use Intervention\Image\ImageManagerStatic as Image;

class ImageManager
{
    private $folder;

    public function __construct()
    {
        $this->folder = 'uploads/';
    }

    public function uploadImage($image, $currentImage = null)
    {
        if(!is_file($image['tmp_name']) && !is_uploaded_file($image['tmp_name'])) { return $currentImage; }

        $this->deleteImage($currentImage);

        $filename = strtolower(rand(0,50)) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        $image = Image::make($image['tmp_name']);
        $image->save($this->folder . $filename);

        return $filename;
    }

    public function checkImageExists($path)
    {
        if($path != null && is_file($this->folder . $path) && file_exists($this->folder . $path)) {
            return true;
        }
    }

    public function deleteImage($image)
    {
        if($this->checkImageExists($image)) {
            unlink($this->folder . $image);
        }
    }

}