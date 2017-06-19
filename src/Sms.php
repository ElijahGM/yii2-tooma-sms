<?php
namespace tooma\yii2\api;
use Yii;
use yii\base\Component;
use tooma/sms-api/
class Sms extends Component{
	public $apiKey;
	public $sslPath=null;
	private $sender;


    /** @inheritdoc */
    public function init()
    {
        $this->sender = new Tooma($this->apiKey,$this->sslPath);;
        parent::init();
    }
	public function _call($method,$args)
	{
		if(method_exists($this->sender, $method)){
			return call_user_method_array($method, $this->sender, $args);
		}
		throw new ToomaMethodException("No method '$method' defined in our interface", 5689);
		
	}
}