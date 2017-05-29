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
?>

<section class="product-view row">
    <section class="col-lg-1">
        <?php foreach (array_filter($item->getImageList(), function ($file) { return fnmatch('*100*', $file); }) as $img_file) : ?>
        <div class="row">
            <?= Html::img($item->getImageFullPath($img_file), ['class' => 'img-thumbnail']); ?>
        </div>
        <?php endforeach; ?>
    </section>
    <section class="col-lg-5">
        <?= Html::img($item->getImageHeadFullPath(), ['class' => 'img-rounded', 'width' => '600px']); ?>
    </section>
</section>