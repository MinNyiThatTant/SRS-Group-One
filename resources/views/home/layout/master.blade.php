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

    <section class="section">
        @yield('content')
    </section>

    <a href="#" class="back-to-top" aria-label="Back to top" title="Back to top">
        <span class="material-icons" aria-hidden="true">arrow_upward</span>
    </a>


    </div>



    <!--footer------------->
    <footer>
        <p>Copyright (C) - <span id="year"></span> | Developed By <a href="#">e-Service (Group-1) </a> </p>
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
