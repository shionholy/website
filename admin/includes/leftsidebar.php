<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

    <div id="sidebar-menu">
        <ul>
        <li class="menu-title">ĐIỀU HƯỚNG</li>

        <li class="has_sub">
            <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
        </li>

<?php if($_SESSION['utype']=='1'):?>

        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Nhà báo </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
                <li><a href="add-subadmins.php">Thêm nhà báo</a></li>
                <li><a href="manage-subadmins.php">Quản lý nhà báo</a></li>
            </ul>
        </li>

        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Chuyên mục </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
                <li><a href="add-category.php">Thêm chuyên mục</a></li>
                <li><a href="manage-categories.php">Quản ký chuyên mục</a></li>
            </ul>
        </li>

        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Bình luận </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
                <li><a href="unapprove-comment.php">Đợi duyệt </a></li>
                <li><a href="manage-comments.php">Đã duyệt</a></li>
            </ul>
        </li>

        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Thông tin </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact us</a></li>
            </ul>
        </li>

<?php endif;?>
<?php if($_SESSION['utype']=='0'):?>

        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Chuyên mục phụ </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
                <li><a href="add-subcategory.php">Thêm chuyên mục phụ</a></li>
                <li><a href="manage-subcategories.php">Quản lý chuyên mục phụ</a></li>
            </ul>
        </li>

        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Tin tức </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
                <li><a href="add-post.php">Đăng bài</a></li>
                <li><a href="manage-posts.php">Quản lý bài đăng</a></li>
                <li><a href="trash-posts.php">Bài đăng đã xoá</a></li>
            </ul>
        </li>
<?php endif;?>
        </ul>
    </div>
                    <!-- Sidebar -->
    <div class="clearfix"></div>
    
    </div>
                <!-- Sidebar -left -->
</div>