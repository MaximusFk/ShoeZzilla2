<?php
use yii\widgets\ListView;
?>
<section class="shoes-list">
    <?= ListView::widget([
        'dataProvider' => $data_provider,
        'itemView' => '//catalog/components/shoes_item_b'
    ]);
    ?>
</section>

