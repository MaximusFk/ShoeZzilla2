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

namespace app\controllers\catalog;

use yii\web\Controller;

/**
 * Description of CartController
 *
 * @author maximusfk
 */
class CartController extends Controller {
    
    public function actionView() {
        
    }
    
    public function actionOrders() {
        
    }

    //
    // Ajax methods for managing current session's cart
    // --------------------------------------------------------------
    
    public function actionAdd($product_id, array $sizes) {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        
        if(!\Yii::$app->session->isActive) {
            \Yii::$app->session->open();
        }
        
        $session = \Yii::$app->session;
        
        $cart_id = $session['cart_id'];
        
        $item = \app\models\Shoes::findById($product_id);
        $cart = \app\models\Cart::findById($cart_id);
        if(!$cart) {
            $cart = \app\models\Cart::build();
            $cart->save();
        }
        $cart->addItem($item, $sizes);
        $cart->save();
        
        \Yii::$app->session->close();
        return [
            'status' => 'done',
            'count' => $cart->getCount(),
            'price' => $cart->getPriceSum(),
            'cart_id' => $cart->getId()
        ];
    }
    
    public function actionRemove($product_id) {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'status' => 'not supported'
        ];
    }
    
    public function actionClear() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'status' => 'not supported'
        ];
    }
    
}
