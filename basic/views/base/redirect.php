<script>
    $(function(){
        if(confirm('<?=$msg?>')){
            // 以下方式定时跳转
            setTimeout('javascript:location.href= <?=$url?>', <?=$time?>);
        }
    });
</script>
