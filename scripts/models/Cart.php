<?php
namespace app\models;

use yii\db\ActiveRecord;
/**
 * Description of Cart
 *
 * @author maximusfk
 */
class Cart extends ActiveRecord {
    
    public static function tableName() {
        return '_Carts_';
    }
    
}
