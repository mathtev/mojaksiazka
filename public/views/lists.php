<!DOCTYPE html>
<head>
    <script data-require="jquery@*" data-semver="2.1.4" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://kit.fontawesome.com/36713509a2.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/queries/style.css">

    <title>LISTS</title>
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
                    <a href="authors" class="navbutton">authors</a>
                </li>
                <li>
                    <i class="fas fa-scroll"></i>
                    <a href="#" class="navbutton">lists</a>
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
            <section class="lists-section">
                <div class="book-lists">
                    <a href="#"><h1 class="list-title">1st list title</h1></a>
                    <div class="book-list">
                        <a class="book-cover" href="#">
                            <img src="public/img/uploads/book-cover.jpg" alt="book img">
                        </a>
                        <a class="book-cover" href="#">
                            <img src="public/img/uploads/book-cover.jpg" alt="book img">
                        </a>
                        <a class="book-cover" href="#">
                            <img src="public/img/uploads/book-cover.jpg" alt="book img">
                        </a>
                        <a class="book-cover" href="#">
                            <img src="public/img/uploads/book-cover.jpg" alt="book img">
                        </a>
                    </div>
                    <a href="#"><h1 class="list-title">2nd list title</h1></a>
                    <div class="book-list">
                        <a class="book-cover" href="#">
                            <img src="public/img/uploads/book-cover.jpg" alt="book img">
                        </a>
                        <a class="book-cover" href="#">
                            <img src="public/img/uploads/book-cover.jpg" alt="book img">
                        </a>
                        <a class="book-cover" href="#">
                            <img src="public/img/uploads/book-cover.jpg" alt="book img">
                        </a>
                        <a class="book-cover" href="#">
                            <img src="public/img/uploads/book-cover.jpg" alt="book img">
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>