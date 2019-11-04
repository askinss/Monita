<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

//use abhimanyu\systemInfo\os\Linux;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
//$this->title = SystemInfo::getInfo()::getHostname();

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Monita is Your Server Monitoring Reporter
    </p>

    

   
</div>
