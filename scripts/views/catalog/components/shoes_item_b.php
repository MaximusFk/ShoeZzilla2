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
use yii\helpers\Html;

$item = $model;
?>
<article class="product-item col-xs-12 col-md-4 col-sm-6 col-lg-3">
    <a href="<?= $item->getLinkR(); ?>">
        <img src="<?= $item->getImageHeadFullPath('400'); ?>"/>
    </a>
    <h3><?= Html::encode($item->getDisplayName()); ?></h3>
    <section class="item-description">
        <span>Lorem Ipsum</span>
    </section>
    <section class="item-button-set btn-group">
        <a href="<?= $item->getLinkR(); ?>" class="btn btn-lg btn-default"><?= Yii::t('button', 'Detail'); ?></a>
        <button class="btn btn-lg btn-default"><?= Html::tag('span', '', ['class' => 'fa fa-heart-o']); ?></button>
        <button class="btn btn-lg btn-success"><?= Html::tag('span', Html::tag('b', ' ' . $item->getPriceRetail()), ['class' => 'fa fa-cart-arrow-down']); ?></button>
    </section>
</article>