<?php
namespace app\controllers\catalog;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use Yii;

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
            'query' => $shoes,
            'pagination' => [
                'pageSize' => 20,
            ]
        ]);
        
        return $this->render('list', [
            'shoes' => $shoes->all(),
            'data_provider' => $provider
        ]);
    }
    
    public function actionView($id) {
        
        $shoes = Shoes::getById($id);
        
        if ($shoes) {
            return $this->render('view', [
                'item' => $shoes
            ]);
        }
        else {
            return $this->render('/default/error', [
                'name' => Yii::t('message', 'Not found'),
                'message' => Yii::t('message', 'Product not found')
            ]);
        }
    }
    
}
