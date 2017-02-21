<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
namespace fecshop\app\appfront\modules\Payment\controllers\paypal;
use Yii;
use fec\helpers\CModule;
use fec\helpers\CRequest;
use fecshop\app\appfront\modules\AppfrontController;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class StandardController extends AppfrontController
{
    public $enableCsrfValidation = false;
	
	public function actionStart(){
		Yii::$service->page->theme->layoutFile = 'blank.php';
		$data = $this->getBlock()->getLastData();
		return $this->render($this->action->id,$data);
	}
	
	
	public function actionSuccess(){
		
	}
	
	public function actionIpn(){
		Yii::$service->payment->paypal->receiveIpn();
	}
	
	public function actionCancel(){
		Yii::$service->order->cancel();
		Yii::$service->url->redirectByUrlKey('checkout/onepage');
		exit;
	}
	
	
}
















