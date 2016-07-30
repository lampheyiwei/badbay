<?php
use yii\helpers\Url;
?>
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone">
            </div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search...">
                    <input type="button" class="submit" value=" ">
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="start active ">
            <a href="index.html">
                <i class="icon-home"></i>
                <span class="title">网站概括预览</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="<?php if($this->context->id == 'admin/user') echo 'open'; ?>">
            <a href="javascript:;">
                <i class="icon-user"></i>
                <span class="title">用户管理</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu" style="display:<?php if($this->context->id == 'admin/user') echo 'block'; ?>">
                <li>
                    <a href="login.html">
                        添加用户
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['admin/user/index'])?>">
                        用户列表
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-bookmark-empty"></i>
                <span class="title">活动管理</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="ui_general.html">
                        General
                    </a>
                </li>
                <li>
                    <a href="ui_buttons.html">
                        Buttons
                    </a>
                </li>
                <li>
                    <a href="ui_modals.html">
                        Enhanced Modals
                    </a>
                </li>
                <li>
                    <a href="ui_tabs_accordions.html">
                        Tabs &amp; Accordions
                    </a>
                </li>
                <li>
                    <a href="ui_jqueryui.html">
                        jQuery UI Components
                    </a>
                </li>
                <li>
                    <a href="ui_sliders.html">
                        Sliders
                    </a>
                </li>
                <li>
                    <a href="ui_tiles.html">
                        Tiles
                    </a>
                </li>
                <li>
                    <a href="ui_typography.html">
                        Typography
                    </a>
                </li>
                <li>
                    <a href="ui_tree.html">
                        Tree View
                    </a>
                </li>
                <li>
                    <a href="ui_nestable.html">
                        Nestable List
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-comments-alt"></i>
                <span class="title">评论管理</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="form_layout.html">
                        Form Layouts
                    </a>
                </li>
                <li>
                    <a href="form_samples.html">
                        Advance Form Samples
                    </a>
                </li>
                <li>
                    <a href="form_component.html">
                        Form Components
                    </a>
                </li>
                <li>
                    <a href="form_wizard.html">
                        Form Wizard
                    </a>
                </li>
                <li>
                    <a href="form_validation.html">
                        Form Validation
                    </a>
                </li>
                <li>
                    <a href="form_fileupload.html">
                        Multiple File Upload
                    </a>
                </li>
                <li>
                    <a href="form_dropzone.html">
                        Dropzone File Upload
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-columns  "></i>
                <span class="title">文章管理</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="page_timeline.html">
                        <i class="icon-time"></i>
                        Timeline
                    </a>
                </li>
                <li>
                    <a href="page_coming_soon.html">
                        <i class="icon-cogs"></i>
                        Coming Soon
                    </a>
                </li>
                <li>
                    <a href="page_blog.html">
                        <i class="icon-comments"></i>
                        Blog
                    </a>
                </li>
                <li>
                    <a href="page_blog_item.html">
                        <i class="icon-font"></i>
                        Blog Post
                    </a>
                </li>
                <li>
                    <a href="page_news.html">
                        <i class="icon-coffee"></i>
                        News
                    </a>
                </li>
                <li>
                    <a href="page_news_item.html">
                        <i class="icon-bell"></i>
                        News View
                    </a>
                </li>
                <li>
                    <a href="page_about.html">
                        <i class="icon-group"></i>
                        About Us
                    </a>
                </li>
                <li>
                    <a href="page_contact.html">
                        <i class="icon-envelope-alt"></i>
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="page_calendar.html">
                        <i class="icon-calendar"></i>
                        Calendar
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-group"></i>
                <span class="title">合作商管理</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="extra_profile.html">
                        User Profile
                    </a>
                </li>
                <li>
                    <a href="extra_lock.html">
                        Lock Screen
                    </a>
                </li>
                <li>
                    <a href="extra_faq.html">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="inbox.html">
                        Inbox
                    </a>
                </li>
                <li>
                    <a href="extra_search.html">
                        Search Results
                    </a>
                </li>
                <li>
                    <a href="extra_invoice.html">
                        Invoice
                    </a>
                </li>
                <li>
                    <a href="extra_pricing_table.html">
                        Pricing Tables
                    </a>
                </li>
                <li>
                    <a href="extra_image_manager.html">
                        Image Manager
                    </a>
                </li>
                <li>
                    <a href="extra_404_option1.html">
                        404 Page Option 1
                    </a>
                </li>
                <li>
                    <a href="extra_404_option2.html">
                        404 Page Option 2
                    </a>
                </li>
                <li>
                    <a href="extra_404_option3.html">
                        404 Page Option 3
                    </a>
                </li>
                <li>
                    <a href="extra_500_option1.html">
                        500 Page Option 1
                    </a>
                </li>
                <li>
                    <a href="extra_500_option2.html">
                        500 Page Option 2
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-cogs"></i>
                <span class="title">网站配置</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                        导航栏管理
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?= Url::to(['admin/nav/index'])?>"><i class="icon-edit"></i>  导航栏添加</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> 导航栏列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                         banner管理
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?= Url::to(['admin/banner/index'])?>"><i class="icon-edit"></i> banner添加</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> banner列表</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    <!-- END SIDEBAR MENU -->
</div>
