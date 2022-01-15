<?php
/**
 * @var yii\web\View $this
 */
$this->title = Yii::$app->name;
?>
<div class="site-index">
    <div class="container">
<!--        --><?php //echo \common\widgets\DbCarousel::widget([
//            'key' => 'index',
//            'assetManager' => Yii::$app->getAssetManager(),
//            'options' => [
//                'class' => 'slide', // enables slide effect
//            ],
//        ]) ?>

        <div class="jumbotron" style="background-color: rebeccapurple;">
            <h1>Chào mừng tới Se08-26.1!!!</h1>

            <?php
                if (Yii::$app->user->isGuest) {
                    echo '<a class="lead" href="' . \yii\helpers\Url::to(["/user/sign-in/login"]) . '">Vui lòng đăng nhập để khám phá các sence >>></a>';
                } else {
                    echo '<a class="lead" href="' . \yii\helpers\Url::to(["/scene/index"]) . '">Bắt đầu khám phá các sence đẹp tuyệt vời nào >>></a>';
                }
            ?>

        </div>

        <!-- <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div> -->

    </div>
</div>
