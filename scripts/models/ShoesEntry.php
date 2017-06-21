<?php

/*
 * Copyright (C) 2017 maximusfk
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Description of ShoesEntry
 *
 * @author maximusfk
 */
class ShoesEntry extends ActiveRecord {
    
    public static function tableName() {
        return '_ShoesEntries_';
    }
    
    public static function buildEntry($shoes_item, $parent_table) {
        $entry = new ShoesEntry();
        $entry->item_id = $shoes_item->getId();
        $entry->parent_id = $parent_table->getId();
        $entry->parent_table = $parent_table->tableName();
        return $entry;
    }
    
    public static function findEntry($shoes_item, $parent_table) {
        $entry = static::find()->where([
            'item_id' => $shoes_item->getId(), 
            'parent_table' => $parent_table->tableName(), 
            'parent_id' => $parent_table->getId()
        ])->one();
        return $entry;
    }
    
    public static function findPRaw($shoes_id, $parent_table_name, $parent_table_id) {
        $entry = static::find()->where([
            'item_id' => $shoes_id, 
            'parent_table' => $parent_table_name, 
            'parent_id' => $parent_table_id
        ])->one();
        return $entry;
    }

    public function addSizes(array $sizes) {
        $current = $this->size_data != '' ? json_decode($this->size_data, true) : [];
        $result = \app\models\Shoes::array_concat_sum($current, $sizes);
        $this->size_data = json_encode($result);
        $this->count += array_sum($sizes);
    }
    
}
