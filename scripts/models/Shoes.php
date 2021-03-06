<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;
/**
 * Description of Shoes
 *
 * @author maximusfk
 */
class Shoes extends ActiveRecord {
    
    const IMAGE_EXT = '.jpg';
    const IMAGE_PATH = '/resources/shoes/photos';
    const IMAGE_THUMBS_PATH = self::IMAGE_PATH . '/thumbnails';


    public static function tableName() {
        return '_Shoes_';
    }
    
    public static function findById($id) {
        $shoes = static::findOne($id);
        
        return $shoes;
    }

    public static function getById($id) {
        $shoes = static::findOne($id);
        
        return $shoes;
    }
    
    public function getLinkR() {
        return '/catalog/shoes/view?id=' . $this->getId();
    }
    
    public function getLinkPublish() {
        return 'https://shoezzilla.com.ua' . $this->getLinkR();
    }
    
    public function getImageList() {
        $dir = '../web' . self::IMAGE_THUMBS_PATH . '/' . $this->getImagePath() . '/';
        $fs_dir = opendir($dir);
        $result = [];
        if($fs_dir) {
            while (false !== ($file = readdir($fs_dir))) {
                if(fnmatch('*.jpg', $file)) {
                    $result[] = $file;
                }
            }
        }
        return $result;
    }
    
    public function getSizes() {
        for($i = $this->getSizeMin(); $i <= $this->getSizeMax(); ++$i) {
            $sizes[] = $i;
        }
        return $sizes;
    }
    
    public static function array_concat_sum(array ...$arrays) {
        $result = [];
        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                $result[$key] = key_exists($key, $result) ? $result[$key] + $value : $value;
            }
        }
        return $result;
    }

    //*** Model table getters ***//
    public function getImagePath() {
        return $this->image_path;
    }
    
    public function getImageHead($size = '800') {
        return $this->image_head . '_' . $size . self::IMAGE_EXT;
    }
    
    public function getImageFullPath($image_name = '') {
        return self::IMAGE_THUMBS_PATH . '/' . $this->getImagePath() . '/' . $image_name;
    }

    public function getImageHeadFullPath($size = '800') {
        return self::IMAGE_THUMBS_PATH . '/' . $this->getImagePath() . '/' . $this->getImageHead($size);
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getPriceRetail() {
        return $this->price_retail;
    }
    
    public function getPriceWhole() {
        return $this->price_whole;
    }
    
    public function getDisplayName() {
        return $this->display_name;
    }
    
    public function getShortName() {
        return $this->name;
    }
    
    public function getSizeMin() {
        return $this->size_min;
    }
    
    public function getSizeMax() {
        return $this->size_max;
    }
    
    public function getGender() {
        return $this->gender;
    }
    //^^^ model table getters ^^^//
 }
