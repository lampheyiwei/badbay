/**
 * Created by Heyiwei on 2016/7/4.
 */
var common = {

}
//顶部js特效
common.top = {
    //顶部banner显示
    banner: function(){

        //顶部banner渐渐隐藏
        setInterval(function(){
            $('#top-banner').fadeOut('slow');
        },10000);

    }
}