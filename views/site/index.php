<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use askinss\serverStat\ServerStat;
//use abhimanyu\systemInfo\SystemInfo;
use miloschuman\highcharts\Highcharts;

$this->title = 'Monita!';

$name = ServerStat::getStat()::getHostname();
//$kver = SystemInfo::getInfo()::getKernelVersion();
//$osver = SystemInfo::getInfo()::getOS();
//$cpuinfo = SystemInfo::getInfo()::getLoad();
//$uptime = SystemInfo::getInfo()::getUpTime();




?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Monita!</h1>

        <p class="lead">Yii-powered Monitor Application.</p>

        <p><a class="btn btn-lg btn-success" href="http://#">Your Server Stats</a></p>

        <h2>Server Name: <?= Html::encode($name) ?></h2>
        <!--h2>OS is: <?= Html::encode($osver) ?></h2>
        <h2>KernelVersion: <?= Html::encode($kver) ?></h2>
        <h2>CPU Core: <?= Html::encode($cpuinfo) ?></h2>
        <h2>Uptime: <?= Html::encode($uptime) ?></h2-->
    </div>

    <div class="body-content">

        <div class="row">

           
            
        </div>
</div>
