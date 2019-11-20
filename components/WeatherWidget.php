<?php
namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
class WeatherWidget extends Widget {
    public $message;
    public function init() {
        // your logic here
        parent::init();
      
    }
    public function run(){
        $url = "https://api.darksky.net/forecast/d4d71efd80cba5452d7ecdc87a942601/30.7046,76.71787259";
        $weather = file_get_contents($url);
        $weatherReport = json_decode($weather);
        
        // you can load & return the view or you can return the output variable
        return $this->render('weather', ['weatherReport' => $weatherReport]);
    }
}
?>