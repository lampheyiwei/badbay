/**
 * Created by Heyiwei on 2016/7/17.
 */
var user = {
    edit_url: null,
    del_url: null,
    add_url: null,
}
user.common = {
    //编辑用户
    edit:function(){
        $('#sample_editable_1').on('click','.edit',function(){

            if(this.innerHTML == 'Save'){
                var obg = $(this).parents('tr');
                //修改的字段和参数
                var id = obg.attr('td-id');
                var username = obg.find('.td-username input').val();
                var email = obg.find('.td-email input').val();
                var status = obg.find('.td-status input').val();
                var created_at = obg.find('.td-created_at input').val();
                var updated_at = obg.find('.td-updated-at input').val();
                var role = obg.find('.td-role input').val();
                $.post(user.edit_url,{
                    id:id,
                    username:username,
                    email:email,
                    status:status,
                    created_at:created_at,
                    updated_at:updated_at,
                    role:role
                },function( d ){

                })
            }
        })
    },
    //删除用户
    del:function(){

    },
    //添加用户
    add:function(){

    }
}