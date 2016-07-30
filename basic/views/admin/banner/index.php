<?php
\app\assets\AdminAppAsset::registerAssets($this,['js'=>[ '/statics/js/admin/app.js'] ]);
?>
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
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">中文标题</label>
                                    <div class="controls">
                                        <input type="text" placeholder="中文标题..." class="m-wrap large">
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">英文标题</label>
                                    <div class="controls">
                                        <input type="text" placeholder="英文标题...." class="m-wrap large">
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Huge Input</label>
                                    <div class="controls">
                                        <input type="text" placeholder="huge" class="m-wrap huge">
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Order By</label>
                                    <div class="controls">
                                        <select class="medium m-wrap" tabindex="1">
                                            <option value="1">Order By 1</option>
                                            <option value="2">Order By 2</option>
                                            <option value="3">Order By 5</option>
                                            <option value="4">Order By 4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">banner上传</label>
                                    <div class="controls">
                                        <a href="" class="btn control-labe green"><i class="icon-plus"></i> Upload</a>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">banner预览</label>
                                    <div class="controls">
                                        <div class="span3">
                                            <div class="item">
                                                <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="media/image/image3.jpg">
                                                    <div class="zoom">
                                                        <img src="/statics/image/home/0570_126_93_王丢兜(3).jpg" alt="Photo">
                                                        <div class="zoom-icon"></div>
                                                    </div>
                                                </a>
                                                <div class="details">
                                                    <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                                                    <a href="#" class="icon"><i class="icon-link"></i></a>
                                                    <a href="#" class="icon"><i class="icon-pencil"></i></a>
                                                    <a href="#" class="icon"><i class="icon-remove"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">中文描述</label>
                                    <div class="controls">
                                        <textarea class="large m-wrap" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">英文描述</label>
                                    <div class="controls">
                                        <textarea class="large m-wrap" rows="5"></textarea>
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
    });
</script>
