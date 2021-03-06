<!DOCTYPE html>
<head>
    <script data-require="jquery@*" data-semver="2.1.4" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://kit.fontawesome.com/36713509a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/queries/style.css">

    <title>AUTHORS</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <script src="public/scripts/script.js"></script>
</head>

<body>
    <div class="base-container">
        <nav id="navigation">
            <img src="public/img/logo.svg">
            <ul>
                <li>
                    <i class="fas fa-book"></i>
                    <a href="books" class="navbutton">books</a>
                </li>
                <li>
                    <i class="fas fa-pen-alt"></i>
                    <a href="#" class="navbutton">authors</a>
                </li>
                <li>
                    <i class="fas fa-scroll"></i>
                    <a href="lists" class="navbutton">lists</a>
                </li>
                <li>
                    <i class="fas fa-archive"></i>
                    <a href="#" class="navbutton">bookshelf</a>
                </li>
                <li>
                    <i class="fas fa-cog"></i>
                    <a href="#" class="navbutton">settings</a>
                </li>
            </ul>
        </nav>
        <main>
            <header class="big-screen-header">
                <div class="search-bar">
                    <form>
                        <input placeholder="Search for books">
                    </form>
                </div>
                <div class="user-details">
                    <a href="user">
                        <img src="public/img/uploads/user.png" alt="user img">
                    </a>
                    <a class="username" href="#">Username</a>
                    <a class="logout" href="login">Logout</a>
                </div>
            </header>
            <header class="small-screen-header">
                <div class="upper-header">
                    <div class="upper-list">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="upper-logo">
                        <img src="public/img/logo.svg">
                    </div>
                    <div class="user-details">
                        <a href="user">
                            <img src="public/img/uploads/user.png" alt="user img">
                        </a>
                    </div>
                </div>
                <div id="lower-header" class="lower-header">
                    <div class="search-bar">
                        <form>
                            <div class="form-content">
                                <input placeholder="Szukaj książek">
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
                
            </header>
            <section class="authors-section">
                <h2>Popular authors</h2>
                <hr>
                <div id="myCarousel" class="carousel slide" data-ride="carouse1">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="public/img/uploads/author1.jpg" alt="Los Angeles">
                      </div>
                
                      <div class="item">
                        <img src="public/img/uploads/author2.jpg" alt="Chicago">
                      </div>
                    
                      <div class="item">
                        <img src="public/img/uploads/author3.jpg" alt="New york">
                      </div>
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
                <hr>
                <div class="authors-list">
                    <h2>A-Z list</h2>
                    <ul>
                        <li><a href="#">Aaron Smith</a></li>
                        <li><a href="#">Ben Robins</a></li>
                        <li><a href="#">Clara Erics</a></li>
                        <li><a href="#">Pablo Coelho</a></li>
                        <li><a href="#">Wiesław Pietruszka</a></li>
                    </ul>
                </div>
            </section>
        </main>
    </div>

</body>