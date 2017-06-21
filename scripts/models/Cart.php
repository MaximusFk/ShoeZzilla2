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
    
    public static function findById($id) {
        return static::findOne($id);
    }
    
//    public static function findBySession($session_id) {
//        return static::findOne(['session_id' => $session_id]);
//    }

    public static function build() {
        $cart = new Cart();
        $cart->setCount(0);
        $cart->setPriceSum(0.0);
        return $cart;
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
        
        $count = array_sum($sizes);
        $this->setCount($this->getCount() + $count);
        $this->setPriceSum($this->getPriceSum() + ($item->getPriceRetail() * $count));
        
        return true;
    }
    
    public function removeItem($item_id) {
        $entry = ShoesEntry::findPRaw($item_id, $this->tableName(), $this->getId());
        if(!$entry) {
            return false;
        }
        $entry->delete();
        return true;
    }
    
    //*** Model table setters ***//
    
    public function setCount($count) {
        $this->item_count = $count;
    }
    public function setPriceSum($price) {
        $this->price_sum = $price;
    }
    
    //^^^ model table setters ^^^//
    //-----------------------------
    //*** Model table getters ***//
    
    public function getId() {
        return $this->id;
    }
    
    public function getCount() {
        return $this->item_count;
    }
    
    public function getPriceSum() {
        return $this->price_sum;
    }
    
    //^^^ model table getters ^^^//
    
}
