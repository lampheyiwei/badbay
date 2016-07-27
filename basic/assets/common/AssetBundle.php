<?php
/**
 * Created by DealMoon
 * User: SteveLee
 * Date: 2016/1/4
 * Time: 16:15
 */
namespace app\assets\common;

class AssetBundle extends \yii\web\AssetBundle
{
    public static function registerAssets($view, $options = [])
    {
        $cls = get_called_class();
        $cls = \Yii::$container->get($cls);

        if ( $options ) {
            foreach ( $options as $key => $val ) {
                if ( isset($val) && $key != 'from' ) {
                    $cls->$key = array_merge( $cls->$key, $val );
                }
            }
        }


        \Yii::$container->set( $cls->className(), ['js' => $cls->js, 'css' => $cls->css, 'depends' => $cls->depends,'jsOptions'=>$cls->jsOptions] );
    }
}