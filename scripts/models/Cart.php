<?php
namespace app\models;

use yii\db\ActiveRecord;
use app\models\ShoesEntry;
/**
 * Description of Cart
 *
 * @author maximusfk
 */
class Cart extends ActiveRecord {
    
    public static function tableName() {
        return '_Carts_';
    }
    
    
    /*
     * Additing object Shoes item into database table 'Cart' and create element in table ShoesEntries
     * parameters: $item -> Shoes object
     *             $sizes -> sizes array => [size1 => count1, sizeN => countN]
     * return: true if success else false
     */
    public function addItem($item, array $sizes) {
        if(!$item) {
            return false;
        }
        $entry = ShoesEntry::findEntry($item, $this);
        if(!$entry) {
            $entry = ShoesEntry::buildEntry($item, $this);
        }
        $entry->addSizes($sizes);
        $entry->save();
        
        return true;
    }
    
    //*** Model table getters ***//
    public function getId() {
        return $this->id;
    }
    
    //^^^ model table getters ^^^//
    
}
