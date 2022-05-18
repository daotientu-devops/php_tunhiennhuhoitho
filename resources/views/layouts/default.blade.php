@include('layouts.common.head')
</head>
<body class="homev2">
@include('layouts.partials.header')
@yield('content')
@include('layouts.partials.footer')
<div class="back-to-top d-none"></div>
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the header
    var header = document.getElementById("navigation");
    var navbar = document.getElementById("navbar");
    var navbar_toggler_icon = document.getElementById("navbar_toggler_icon");
    var logo_pc = document.getElementById("logo_pc");
    var logo_pc_s = document.getElementById("logo_pc_s");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            header.style.display = "flex";
            header.style.boxShadow = "0 0 11px #6b6b6b";
            navbar.style.backgroundColor = "white";
            navbar_toggler_icon.style.backgroundImage = "url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E\")";
            logo_pc.style.display = "none";
            logo_pc_s.style.display = "block";
        } else {
            header.classList.remove("sticky");
            header.style.display = "none";
            navbar.style.backgroundColor = "transparent";
            navbar_toggler_icon.style.backgroundImage = "url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E\")";
            logo_pc.style.display = "block";
            logo_pc_s.style.display = "none";
        }
    }
    var server_public = '{{env('SERVER_PUBLIC')}}', folder_public = '{{env('FOLDER_PUBLIC')}}';
    const a = document.querySelectorAll('img');
    document.addEventListener('DOMContentLoaded', function (event) {
        a.forEach((elem) => {
            const src= elem.getAttribute('src');
            if ( src.includes(server_public) ) {
                elem.setAttribute('src', src.replace(server_public, folder_public));
            }
        })
    });
</script>
</body>
</html>
