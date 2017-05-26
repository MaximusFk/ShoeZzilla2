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
use yii\web\IdentityInterface;

/**
 * Description of User
 *
 * @author maximusfk
 */
class User extends ActiveRecord implements IdentityInterface {
    
    public static function tableName() {
        return '_Accounts_';
    }
    
    public static function findIdentity($id) {
        return static::findOne($id);
    }
    
    public static function findIdentityByAccessToken($token, $type = null) {
        return null;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getAuthKey() {
        
    }

    public function validateAuthKey($authKey) {
        
    }

}
