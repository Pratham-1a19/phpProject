<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dev-styles.css">
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;800&family=Tiro+Devanagari+Hindi&display=swap');

        *{
            font-family: 'Poppins',sans-serif;
        }
        .genre, .home {
    margin-right: 10px; /* Adjust this value as needed */
}

    </style>
</head>

<body class="sb-nav-fixed bg-black">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="./home.php" style="font-weight: bold; font-size: x-large;">Stream Verse</a>
        <!-- <a class="navbar-brand ps-3" href="index.html">Home</a> -->
        <!-- Sidebar Toggle-->
        <button class="btn btn-sm order-1 order-lg-0 me-4 me-lg-0 dev-font-3 navbar-brand home mr-2" id="sidebarToggle" href="./home.php">Home</button>
        <button class="btn btn-sm order-1 order-lg-0 me-4 me-lg-0 dev-font-3 navbar-brand genre mr-2" id="sidebarToggle" href="#!">Genre</button>

        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" id="searchMovie" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-danger" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="profile.php">Your Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Genres</div>
                        <a class="nav-link" href="../public/scienceFiction.html">
                            <div class="sb-nav-link-icon"></div>
                            Science Fiction
                        </a>
                        <a class="nav-link" href="../public/crime.html">
                            <div class="sb-nav-link-icon"></div>
                            Crime
                        </a>
                        <a class="nav-link" href="../public/thriller.html">
                            <div class="sb-nav-link-icon"></div>
                            Thriller
                        </a>
                        <a class="nav-link" href="../public/romantic.html">
                            <div class="sb-nav-link-icon"></div>
                            Romantic
                        </a>
                        <a class="nav-link" href="../public/drama.html">
                            <div class="sb-nav-link-icon"></div>
                            Drama
                        </a>
                        <a class="nav-link" href="../public/comedy.html">
                            <div class="sb-nav-link-icon"></div>
                            Comedy
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="movieContainer" id="dev-movie">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active dev-image" data-bs-interval="10000">
                            <img src="https://res.cloudinary.com/dvj3i9gog/image/upload/v1711571741/sacredGames_cogmbv.jpg"
                                class=" w-100 dev-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="https://www.youtube.com/watch?v=AkUgf2jIPyI" class="btn btn-danger">
                                    <h3>Watch Trailer</h3>
                                </a>
                                <h3 class="text-light mt-3">A link in their pasts leads an honest cop to a fugitive gang
                                    boss, whose cryptic warning spurs the officer on a quest to save Mumbai from
                                    cataclysm.</h3>
                            </div>
                        </div>
                        <div class="carousel-item dev-image" data-bs-interval="2000">
                            <img src="https://res.cloudinary.com/dvj3i9gog/image/upload/v1713006061/SpecialOps_kb7uis.jpg"
                                class="w-100 dev-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="https://www.youtube.com/watch?v=SOXWc32k4zA" class="btn btn-danger">
                                    <h3>Watch Trailer</h3>
                                </a>
                                <h3 class="text-light mt-3">The series follows Himmat Singh of Research and Analysis
                                    Wing who draws similar patterns in terrorist attacks and is convinced a single
                                    person is behind all the attacks. His task force team of five agents living in
                                    various parts of the world aim to catch the mastermind.</h3>
                            </div>
                        </div>
                        <div class="carousel-item dev-image">
                            <img src="https://res.cloudinary.com/dvj3i9gog/image/upload/v1713003546/Scam-1992_lwwhvd.webp"
                                class="w-100 dev-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="https://www.youtube.com/watch?v=AkUgf2jIPyI" class="btn btn-danger">
                                    <h3>Watch Trailer</h3>
                                </a>
                                <h3 class="text-light">Set in 1980's and 90's Bombay, it follows the life of Harshad
                                    Mehta, a stockbroker who took the stock market to dizzying heights and his
                                    catastrophic downfall.</h3>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div>
                <h1 class="mt-5 mx-5 px-3 text-light" id="latest">Latest Shows</h1>
                <div id="latestMovieContainer" class="mx-5 row gap-5 flex-wrap">

                </div>
                <h1 class="mt-5 mx-5 px-3 text-light" id="popular">Popular Shows</h1>
                <div id="PopularMovieContainer" class="mx-5 row gap-5 flex-wrap">

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
    <!-- <script src="js/script.js"></script> -->
    <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
<script>
    window.onload = getMovies;

    async function getMovies() {
        const response = await fetch('../js/API/latest.json');
        const data = await response.json();
        displayLatestMovies(data.Latest);
        getPopularMovies();
    }

    function displayLatestMovies(movies) {
        const latestMovieContainer = document.getElementById('latestMovieContainer');
        latestMovieContainer.innerHTML = ''; // Clear existing content
        movies.forEach((movie, index) => {
            const card = createMovieCard(movie, index);
            latestMovieContainer.appendChild(card);
        });
    }

    async function getPopularMovies() {
        const response = await fetch('../js/API/popular.json');
        const data = await response.json();
        displayPopularMovies(data.Popular);
    }

    const popularMovieContainer = document.getElementById('PopularMovieContainer');
    function displayPopularMovies(movies) {
        popularMovieContainer.innerHTML = ''; // Clear existing content
        movies.forEach((movie, index) => {
            const card = createMovieCard(movie, index);
            popularMovieContainer.appendChild(card);
        });
    }

    function createMovieCard(movie, index) {
        const card = document.createElement('div');
        card.classList.add('card');
        card.classList.add('mt-5');
        card.classList.add('dev-card');
        card.style.width = '20rem';
        card.innerHTML = `
            <div class="dev-card col" data-bs-toggle="modal" data-bs-target="#modal-${index}">
                <img src=${movie.img_url} alt="..." class="card-img">
            </div>
        
            <div class="modal fade" id="modal-${index}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h1 class="modal-title text-light fs-5" id="staticBackdropLabel">${movie.title}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-light">${movie.description}</p>
                            <div class="d-flex">
                                <div class="text-light">Available on: </div>
                                <div><a class="badge bg-secondary dev-badge" href=${movie.platform_url}>${movie.platform}</a></div>
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-danger" href=${movie.trailer_url}>Watch Trailer on youtube</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        return card;
    }

    let searchMovie = document.getElementById('searchMovie');
    let btnNavbarSearch = document.getElementById('btnNavbarSearch');
    let devMmovie = document.getElementById('dev-movie');
    let popular = document.getElementById('popular');
    btnNavbarSearch.addEventListener('click', () => {
        let searchValue = searchMovie.value;
        searchMovies(searchValue);
    });

    async function searchMovies(searchValue) {
        const response = await fetch('../js/API/movieAPI.json');
        const data = await response.json();
        const searchResult = data.movies.filter(movie => movie.title.toLowerCase().includes(searchValue.toLowerCase()));
        displaySearchResult(searchResult);
        
    }

    function displaySearchResult(movies) {
        const searchResultContainer = document.getElementById('latestMovieContainer');
        const latest = document.getElementById('latest');
        searchResultContainer.innerHTML = ''; // Clear existing content
        movies.forEach((movie, index) => {
            const card = createMovieCard(movie, index);
            searchResultContainer.appendChild(card);
        });
        devMmovie.style.display = 'none';
        popular.style.display = 'none';
        latest.innerHTML = 'Your Search Result'
        popularMovieContainer.style.display = 'none';
    }
</script>

</html>