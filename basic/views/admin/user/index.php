<?php

 \app\assets\AdminAppAsset::registerAssets($this,['js'=>['/statics/js/admin/select2.min.js','/statics/js/admin/jquery.dataTables.js', '/statics/js/admin/DT_bootstrap.js', '/statics/js/admin/app.js','/statics/js/admin/table-editable.js','/statics/js/admin/user.js'] ]);
?>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-edit"></i>Editable Table
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="clearfix">
                    <div class="btn-group">
                        <button id="sample_editable_1_new" class="btn green">
                            Add New
                            <i class="icon-plus"></i>
                        </button>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div>
                </div>
                <div id="sample_editable_1_wrapper" class="dataTables_wrapper form-inline" role="grid">

                    <table class="table table-striped table-hover table-bordered dataTable user-table" id="sample_editable_1" aria-describedby="sample_editable_1_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Username" style="width: 157.048px;">
                                用户名称
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 222.048px;">
                                权限
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 122.048px;">
                                邮箱
                            </th>
                            <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-sort="descending" aria-label="Notes: activate to sort column ascending" style="width: 153.048px;">
                                状态
                            </th>
                            <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-sort="descending" aria-label="Notes: activate to sort column ascending" style="width: 153.048px;">
                                创建时间
                            </th>
                            <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-sort="descending" aria-label="Notes: activate to sort column ascending" style="width: 153.048px;">
                                最后登录时间
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 87.0476px;">
                                编辑
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 124.048px;">
                                删除
                            </th>
                        </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach($userList as $k=>$v){ ?>
                        <tr class="even" td-id="<?= $v['id'] ?>">
                            <td class="center sorting_1 td-username">
                                <?= $v['username'] ?>
                            </td>
                            <td class="center sorting_1 td-role">
                                <?= $v['role'] ?>
                            </td>
                            <td class="center sorting_1 td-email">
                                <?= $v['email'] ?>
                            </td>
                            <td class="center sorting_1 td-status">
                                <?= $v['status'] ?>
                            </td>
                            <td class="center sorting_1 td-created_at">
                                <?= date('Y-m-d H:i:s',$v['created_at']) ?>
                            </td>
                            <td class="center sorting_1 td-updated-at">
                                <?= date('Y-m-d H:i:s',$v['updated_at']) ?>
                            </td>
                            <td class="">
                                <a class="edit" href="javascript:;">Edit</a>
                            </td>
                            <td class=" ">
                                <a class="delete" href="javascript:;">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>

<script>
    jQuery(document).ready(function() {
        App.init();
        TableEditable.init();
    });
</script>
