<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #333738;">
    <img src="https://www.shareicon.net/data/128x128/2015/10/05/112472_development_512x512.png" width="30" height="30" class="d-inline-block align-top">
        <span class="navbar-brand mb-0 h1">Laravel</span>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Back</a>
                </li>
            </ul>
            <span><a class="btn btn-success" type="submit" href="/blog/create">Create</a></span>
            <a href="/blog/restore" class="btn btn-secondary" role="button">Restore</a>
        </div>
    </nav>
    </header>
    <div class="container-fluid" style="background-color: #757d8b;">@yield('content')</div>
    <footer>
        <div class="container-fluid">&copy Laravel & Belajar Laravel 2018</div>
    </footer>
</body>
</html>