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
    /**
     * 注册模板中需要的资源
     *
     * @param object $view    模板实例
     * @param array  $options 参数
     *
     */
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

    public static function registerAll($view)
    {
        $opt = \Yii::$container->get('app\assets\Asset');
        $cls = new \app\assets\Asset();
        $cls->js = $opt->js;
        $cls->css = $opt->css;
        $cls->depends = $opt->depends;
        $cls->jsOptions = $opt->jsOptions;

        $view->registerAssetBundle('app\assets\Asset');
    }

    //定义按需加载JS方法，注意加载顺序在最后
    public static function addScript($view, $jsFile,$position) {
        if(is_array($jsFile)){
            foreach($jsFile as $v){
                $view->registerJsFile($v, [AssetBundle::className(), 'depends' => 'frontend\assets\common\AssetBundle'],['position' => $position]);
            }
        }else{
            $view->registerJsFile($jsFile, [AssetBundle::className(), 'depends' => 'frontend\assets\common\AssetBundle'],['position' => $position]);
        }
    }

    //定义按需加载css方法，注意加载顺序在最后
    public static function addCss($view, $cssFile,$position) {
        if(is_array($cssFile)){

            foreach($cssFile as $v){
                $view->registerCssFile($v, [AssetBundle::className(), 'depends' => 'frontend\assets\common\AssetBundle'],['position' => $position]);

            }
        }else{
            $view->registerJsFile($cssFile, [AssetBundle::className(), 'depends' => 'frontend\assets\common\AssetBundle'],['position' => $position]);
        }
    }
}