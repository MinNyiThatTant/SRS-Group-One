<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Home page</title>

    <!-- for top arrow -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />


    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/toparrow.css" />
    <!--fav-icon-->
    <link rel="shortcut icon" href="images/favicon.png" />

</head>

<body>



        <nav>
            <a href="#" class="logo">
                <img src="images/logo.png" width="320px" />
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
                <li><a href="readme.html">အသုံးပြုနည်း</a></li>
                <li><a href="{{route('home.index')}}">Home</a></li>
                <li><a href="{{route('home.department')}}">Departments</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{route('home.univ-info')}}">University-Info</a></li>
                <li><a href="{{route('home.courses')}}">Courses</a></li>
                <li><a href="{{route('home.contact')}}">Contact</a></li>


                <li><a class="active" href="login.php" onclick="document.getElementById('id01').style.display='block'"
                        style="width:auto; border-radius: 5px; cursor: pointer;">Login</a></li>
                
                </li>
            </ul>
            <div class="btn-group" role="group">
                <a href="?lang=en" class="btn btn-sm btn-primary">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/20px-Flag_of_the_United_Kingdom.svg.png"
                        alt="English" class="flag-icon" title="English">
                </a>
                <a href="?lang=mm" class="btn btn-sm btn-primary">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Flag_of_Myanmar.svg/20px-Flag_of_Myanmar.svg.png"
                        alt="မြန်မာ" class="flag-icon" title="မြန်မာ">
                </a>
            </div>
        </nav>


        

    <section class="section">
        @yield('content')
    </section>

    <a href="#" class="back-to-top" aria-label="Back to top" title="Back to top">
        <span class="material-icons" aria-hidden="true">arrow_upward</span>
    </a>


    </div>



    <!--footer------------->
    <footer>
        <p>Copyright (C) - <span id="year"></span> | Developed <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span> By <a href="#">e-Service (Group-1) </a> </p>
    </footer>


    <script>
        /* for copyright footer - date */
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>


    <script src="js/toparrow.js"></script>

    <script src="js/text.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
