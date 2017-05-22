<?php
namespace app\controllers\catalog;

use yii\web\Controller;
use yii\data\ActiveDataProvider;

use app\models\Shoes;

/**
 * Description of ShoesController
 *
 * @author maximusfk
 */
class ShoesController extends Controller {
    
    public function actionList() {
        $shoes = Shoes::find()->orderBy('name');
        
        $provider = new ActiveDataProvider([
            'query' => $shoes
        ]);
        
        return $this->render('list', [
            'shoes_query' => $shoes,
            'data_provider' => $provider
        ]);
    }
    
}
