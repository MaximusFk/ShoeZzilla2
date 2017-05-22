<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * Description of Move
 *
 * @author maximusfk
 */
class Move extends ActiveRecord {
    
    public static function tableName() {
        return '_Moves_';
    }
    
}
