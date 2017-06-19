<?php
namespace tooma\yii2\api;
use Yii;
use yii\authclient\Collection;
use yii\base\BootstrapInterface;
use yii\console\Application as ConsoleApplication;

class Bootstrap implements BootstrapInterface{
	
    public function bootstrap($app)
    {
           exit("TOOMA EXPRESS");
    }
}