<?php
use yii\grid\GridView;
?>
<section>
    <?=
    GridView::Widget([
        'dataProvider' => $data_provider,
        'columns' => [
            'id',
            'name',
            'color',
            'price_whole',
            'price_retail',
            'size_min',
            'size_max',
            'season',
            'category',
            'gender',
            'brand'
        ]
    ]);
    ?>
</section>

