<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\NavAsset;
use yii\helpers\Url;

NavAsset::register($this);
$this->title = 'Navigation';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="text"></div>
    <div id="particles-js"></div>

    <header>
        <a href="<?php echo Url::to(['/site/index']) ?>" class="Home animated slideInDown" id="abc" onmouseover="display()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            HOME
        </a>
        <a href="<?php echo Url::to(['/site/aboutus']) ?>" class="animated slideInDown">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            ABOUT US
        </a>
        <a href="<?php echo Url::to(['/event/index']) ?>" class="animated zoomIn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            EVENTS
        </a>

        <a href="<?php echo Url::to(['/site/registration']) ?>" class="animated slideInUp">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Register
        </a>

        <a href="<?php echo Url::to(['/site/contactus']) ?>" class="animated slideInUp">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Contact us
        </a>
    </header>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>