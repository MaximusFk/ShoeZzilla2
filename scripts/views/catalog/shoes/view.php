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
use app\assets\ProductViewAsset;

ProductViewAsset::register($this);
?>
<section class="container-fluid">
    <section class="product-view row">
        <section class="col-xs-12 col-md-6 col-sm-6 col-lg-5">
            <?= Html::img($item->getImageHeadFullPath(), ['class' => 'img-rounded product-image']); ?>
            <section class="item-thumbnails">
            <?php foreach (array_filter($item->getImageList(), function ($file) { return fnmatch('*100*', $file); }) as $img_file) : ?>
                <?= Html::img($item->getImageFullPath($img_file), ['class' => 'img-thumbnail product-thumbnail']); ?>
            <?php endforeach; ?>
            </section>
        </section>
        <section class="col-xs-12 col-md-6 col-sm-6 col-lg-7">
            <section class="col-xs-12 col-md-7 col-sm-6 col-lg-9">
                <h1 class="product-name">
                    <?= Html::encode($item->getDisplayName()); ?>
                </h1>
            </section>
            <section class="col-xs-7 col-md-5 col-sm-6 col-lg-3 product-controls">
                <h3 class="product-price"><?= Html::encode($item->getPriceRetail()) . ' &#8372'; ?></h3>
                <button class="btn btn-lg btn-primary">
                    <?= Html::tag('span', ' ' . Yii::t('button', 'To cart'), ['class' => 'fa fa-cart-arrow-down']); ?>
                </button>
            </section>
        </section>
        <section class="description">
                <p>
                    <strong><?= Yii::t('shoes', 'Allow sizes'); ?>:</strong>
                    <span><?= Html::encode(implode(', ', $item->getSizes())); ?></span>
                </p>
                <p>
                    <strong><?= Yii::t('shoes', 'Gender'); ?>:</strong>
                    <span><?= Yii::t('shoes', $item->getGender()); ?></span>
                </p>
            </section>
    </section>
</section>