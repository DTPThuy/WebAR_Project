<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Frontend application asset
 */
class FEImageAsset extends AssetBundle
{
  /**
   * @var string
   */
  public $sourcePath = '@frontend/web/img';

  /**
   * @var array
   */
  public $depends = [];
}
