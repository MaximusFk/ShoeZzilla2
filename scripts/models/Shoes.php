<?php
namespace app\models;

use yii\db\ActiveRecord;
/**
 * Description of Shoes
 *
 * @author maximusfk
 */
class Shoes extends ActiveRecord {
    
    private $IMAGE_EXT = '.jpg';


    public static function tableName() {
        return '_Shoes_';
    }
    
    public function getImagePath() {
        return $this->image_path;
    }
    
    public function getImageHead($size = '800') {
        return $this->image_head . '_' . $size . $this->IMAGE_EXT;
    }
    
    public function getImageFullPath($size = '800') {
        return '/resources/shoes/photos/thumbnails/' . $this->getImagePath() . '/' . $this->getImageHead($size);
    }
 }
