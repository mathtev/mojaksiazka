<!DOCTYPE html>
<head>
    <script data-require="jquery@*" data-semver="2.1.4" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://kit.fontawesome.com/36713509a2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/queries/style.css">

    <title>USER</title>
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
                    <a href="#">
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
                        <a href="#">
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
            <section class="user-section">
                <h2>Username</h2>
                <hr>
                <div>
                    <img src="public/img/uploads/user.png">
                    <div>
                        <div class="user-stats">
                            <ul>
                                <li>books on shelf: 10</li>
                                <li>followers:  2</li>
                                <li>following:  3</li>
                            </ul>
                        </div>
                        <div class="about-me">
                            <div>
                                <h3>About me</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quia delectus explicabo iusto quisquam itaque magni ut. Accusantium, fugit. Velit magnam rem voluptatum a quia assumenda repellat ducimus corporis explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </section>
        </main>
    </div>

</body>