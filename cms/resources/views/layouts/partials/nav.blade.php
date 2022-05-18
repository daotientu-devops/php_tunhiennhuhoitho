<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Quản lý</h3>
        <ul class="nav side-menu">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>Dashboard </a></li>
            <li><a href="{{ url('/category') }}"><i class="fa fa fa-list"></i>Danh mục</a></li>
            <li><a href="{{ url('/posts') }}"><i class="fa fa-file-text"></i>Danh sách bài viết</a></li>
            <li><a><i class="fa fa-user"></i>Quản lý user <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/users') }}">Danh sách user</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/setting') }}"><i class="fa fa-gear"></i>Cấu hình website</a></li>
            <li><a href="{{ url('/contact') }}"><i class="fa fa-globe"></i>Quản lý thông tin website</a></li>
            <li><a href="{{ url('/customer') }}"><i class="fa fa-users"></i>Quản lý người dùng đăng ký</a></li>
            <li><a href="{{ url('/solution') }}"><i class="fa fa fa-cube"></i>Quản lý giải pháp</a></li>
            <li><a href="{{ url('/banner') }}"><i class="fa fa fa-picture-o"></i>Quản lý banner</a></li>
            <li><a><i class="fa fa-laptop"></i>QL nội dung trang chủ<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/banner') }}">Header banner</a></li>
                    <li><a href="{{ url('/widgets/homepage/slogan_text') }}">Slogan text</a></li>
                    <li><a href="{{ url('/solution') }}">BẠN ĐANG MONG MUỐN CÓ GIẢI PHÁP</a></li>
                    <li><a href="{{ url('/partner') }}">Quản lý đối tác</a></li>
                    <li><a href="{{ url('/comment') }}">Quản lý bình luận</a></li>
                    <li><a href="{{ url('/founder') }}">Quản lý nhà sáng lập</a></li>
                    <li><a href="{{ url('/widgets/homepage/author') }}">TÁC GIẢ MÔ HÌNH</a></li>
                    <li><a href="{{ url('/widgets/homepage/slogan_banner') }}">Slogan banner</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-laptop"></i>QL nội dung về chúng tôi<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/banner') }}">Header banner</a></li>
                    <li><a href="{{ url('/widgets/aboutus/content1') }}">Nội dung 1</a></li>
                    <li><a href="{{ url('/widgets/aboutus/author') }}">TÁC GIẢ MÔ HÌNH</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-laptop"></i>QL nội dung hoạt động<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/banner') }}">Header banner</a></li>
                    <li><a href="{{ url('/widgets/activity/slogan_banner') }}">Slogan banner</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-laptop"></i>QL nội dung chi tiết HĐ<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/banner') }}">Header banner</a></li>
                    <li><a href="{{ url('/widgets/activity_detail/slogan_banner') }}">Slogan banner</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-laptop"></i>QL nội dung giải pháp<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/solution') }}">Header banner</a></li>
                    <li><a href="{{ url('/widgets/solution/content1') }}">Nội dung 1</a></li>
                    <li><a href="{{ url('/widgets/solution/slogan1') }}">Slogan 1</a></li>
                    <li><a href="{{ url('/widgets/solution/content2') }}">Nội dung 2</a></li>
                    <li><a href="{{ url('/widgets/solution/slogan_banner') }}">Slogan banner</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
