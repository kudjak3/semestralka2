<style>
    nav {
        background-color:  #18518e;
    }

    #dropdownMenuButton {
        color: white;
        background-color: #18518e;
        border-color: #18518e;
    }

    .btn-outline-success {
        color: #f8f9fa;
        border-color: #f8f9fa;
    }
    .d-block{
        height: 700px;
    }
    #carouselExampleIndicators{
        height: 700px;
    }
    #logo{
        width: 40px;
        height: 40px;
    }

</style>
<html>
    <head>
        <title>Chelsea London</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Home/Home.css">
    </head>
    <body>
        <div >
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
                <a class="navbar-brand" href="?c=Home">Chelsea London
                    <img id="logo" src="https://upload.wikimedia.org/wikipedia/fr/thumb/5/51/Logo_Chelsea.svg/600px-Logo_Chelsea.svg.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="?c=Fans&a=register">Register</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="?c=Fans&a=login">Login</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >Team</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                    <a class="dropdown-item" href="?c=Home&a=squad">Squad</a>
                                    <a class="dropdown-item" href="?c=Home&a=trainer">Trainer</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
    </body>
</html>
