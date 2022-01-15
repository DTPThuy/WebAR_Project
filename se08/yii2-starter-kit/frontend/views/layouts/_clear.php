<?php
/**
 * @var yii\web\View $this
 * @var string $content
 */

use yii\helpers\Html;
use frontend\assets\CustomAsset;

\frontend\assets\FrontendAsset::register($this);

$customPath = CustomAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php echo Html::csrfMetaTags() ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description" content="Interactive 3D walkthrough">

    <link rel="icon" href="<?php echo $customPath->baseUrl; ?>/favicon.ico">

    <meta property="og:image" content="<?php echo $customPath->baseUrl; ?>/thumbnail.jpg" />

    <link href="<?php echo $customPath->baseUrl; ?>/webwalk/style.css" rel="stylesheet" type="text/css">

    <style>
        @font-face {
            font-family: 'Noto Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Noto Sans'), local('NotoSans'),
            url('<?php echo $customPath->baseUrl; ?>/webwalk/font/noto-sans-v6-latin-regular.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
            url('<?php echo $customPath->baseUrl; ?>/webwalk/font/noto-sans-v6-latin-regular.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        /* Original font awesome font-family names have been replaced to not rely on
           font-weight when determining actual symbol, as it didn't work well
           when rendering using 2D canvas features, and also to avoid spaces in
           the names. */

        @font-face {
            font-family: 'FontAwesomeBrands';
            src: url("<?php echo $customPath->baseUrl; ?>/webwalk/font/fa-brands-400.woff2") format("woff2"),
            url("<?php echo $customPath->baseUrl; ?>/webwalk/font/fa-brands-400.woff") format("woff");
        }

        @font-face {
            font-family: 'FontAwesomeRegular';
            src: url("<?php echo $customPath->baseUrl; ?>/webwalk/font/fa-regular-400.woff2") format("woff2"),
            url("<?php echo $customPath->baseUrl; ?>/webwalk/font/fa-regular-400.woff") format("woff");
        }

        @font-face {
            font-family: 'FontAwesomeSolid';
            src: url("<?php echo $customPath->baseUrl; ?>/webwalk/font/fa-solid-900.woff2") format("woff2"),
            url("<?php echo $customPath->baseUrl; ?>/webwalk/font/fa-solid-900.woff") format("woff");
        }

        #cover-image {
            background-image: url("<?php echo $customPath->baseUrl; ?>/cover.jpg");
        }

        .ext-popup-close-button {
            background-image: url("<?php echo $customPath->baseUrl; ?>/webwalk/img/close.svg");
        }
    </style>

<!--    <title>3D scene</title>-->
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
    <?php echo $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
