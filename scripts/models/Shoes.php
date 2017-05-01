<?php
namespace app\models;

use yii\db\ActiveRecord;
/**
 * Description of Shoes
 *
 * @author maximusfk
 */
class Shoes extends ActiveRecord {
    
    public static function tableName() {
        return '_Shoes_';
    }
}
