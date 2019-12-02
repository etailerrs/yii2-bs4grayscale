<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$asset = etailerrs\bs4grayscale\EtailerrsAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head(); ?>
</head>

<body id="page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container">
                        <a class="navbar-brand js-scroll-trigger" href="/">Start Bootstrap</a>
                        <button class="navbar-toggler navbar-toggler-right" type="button"
                                data-toggle="collapse" data-target="#navbarResponsive"
                                aria-controls="navbarResponsive" aria-expanded="false"
                                aria-label="Toggle navigation">

                                Menu
                                <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger" href="#about">About</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
                                        </li>
                                        
                                        
                                        <?php
                                                if(Yii::$app->user->isGuest) {
                                                        echo '<li class="nav-item">';
                                                        echo '<a class="nav-link js-scroll-trigger" href="login">Login</a>';
                                                        echo '</li>';

                                                } else {
                                                        echo '<li class="nav-item dropdown">';
                                                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">';
                                                        echo '<i class="fas fa-cog"></i> ('.Yii::$app->user->identity->username .')';
                                                        echo '</a>';

                                                        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                                                        echo '<!--div class="dropdown-divider"></div-->';
                                                        echo '<a class="dropdown-item" href="settings">Settings</a>';
                                                         print Html::beginForm(['logout'], 'post')
                                                . Html::submitButton(
                                                'Sign Out',
                                                        ['class' => 'dropdown-item text-primary']
                                                        )
                                                        . Html::endForm();

                                                        echo '</div>';
                                                        echo '</li>';

                                                }


                                        ?>


                                </ul>
                        </div>
                </div>
        </nav>


        <?= $content ?>
<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
</footer>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage() ?>
