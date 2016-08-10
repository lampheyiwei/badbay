<?php
use yii\helpers\Url;
\app\assets\AdminAppAsset::registerAssets($this,['js'=>[ '/statics/js/admin/bootstrap-datetimepicker.js','/statics/js/admin/jquery.multi-select.js','/statics/js/admin/jquery.input-ip-address-control-1.0.min.js','/statics/js/admin/jquery.inputmask.bundle.min.js','/statics/js/admin/select2.min.js','/statics/js/admin/app.js','/statics/js/admin/form-components.js'] ]);
?>

<!--<form action="--><?//= Url::to(['admin/banner/upload'])?><!--" method="post" enctype ="multipart/form-data">-->
<!--    <input type="file" name="img">-->
<!--    <input type="submit" value="文件上传">-->
<!--</form>-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet box blue tabbable">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-reorder"></i>
                    <span class="hidden-480">Banner管理</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="tabbable portlet-tabs">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="#portlet_tab3" data-toggle="tab">banner添加</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_tab1">
                            <!-- BEGIN FORM-->
                            <form action="<?=Url::to(['admin/banner/add'])?>" class="form-horizontal"  method = 'post' enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">中文标题</label>
                                    <div class="controls">
                                        <input type="text" placeholder="中文标题..." class="m-wrap large" name="title">
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">英文标题</label>
                                    <div class="controls">
                                        <input type="text" placeholder="英文标题...." class="m-wrap large" name="title_en">
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">跳转地址</label>
                                    <div class="controls">
                                        <input type="text" placeholder="跳转地址...." class="m-wrap large" name="url">
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Order By</label>
                                    <div class="controls">
                                        <select class="medium m-wrap" tabindex="1" name="order">
                                            <option value="1">Order By 1</option>
                                            <option value="2">Order By 2</option>
                                            <option value="3">Order By 5</option>
                                            <option value="4">Order By 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="/statics/image/banner/default.jpg" alt="">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input type="file" class="default" name="banner"></span>
                                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-important">NOTE!</span>
											<span>
											Attached image thumbnail is
											supported in Latest Firefox, Chrome, Opera,
											Safari and Internet Explorer 10 only
											</span>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">中文描述</label>
                                    <div class="controls">
                                        <textarea class="large m-wrap" rows="5" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">英文描述</label>
                                    <div class="controls">
                                        <textarea class="large m-wrap" rows="5" name="description_en"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <button type="button" class="btn">Cancel</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>

<script>
    jQuery(document).ready(function() {
        App.init();
        FormComponents.init();
    });
</script>
