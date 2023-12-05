<?php
namespace yohantoro\adminlte2\helpers;

use Yii;

class AdminLteHelper
{
    /**
     * It allows you to get the name of the css class.
     * You can add the appropriate class to the body tag for dynamic change the template's appearance.
     * Note: Use this fucntion only if you override the skin through configuration. 
     * Otherwise you will not get the correct css class of body.
     * 
     * @return string
     */
    public static function skinClass()
    {
        /** @var \yohantoro\adminlte2\web\AdminLteAsset $bundle */
        $bundle = Yii::$app->assetManager->getBundle('yohantoro\adminlte2\web\AdminLteAsset');

        return $bundle->skin;
    }
}
