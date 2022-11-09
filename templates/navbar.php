<style>

    .navbar {
        background-color: #fff;
        padding: 30px 50px;
    }

    .navbar-brand {
        height: auto;
        width: 180px;
    }

    .navbar-nav a {
        font-size: 26px;
        color: var(--primary-color) !important;
        font-weight: 700 !important;
        padding: 0px 30px !important;
        margin-top: auto;
        margin-bottom: auto;
    }

    .navbar-nav .active,
    .navbar-nav a:hover {
        color: var(--secondary-color) !important;
        text-decoration: 7px underline solid var(--secondary-color);
    }

    .navbar-nav .active {
        font-weight: 700 !important;
    }

    .fa-circle-user {
        font-size: 70px;
    }
</style>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light pt-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../logos/hr-logo.png" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center">
                <!-- <a class="nav-link text-capitalize mx-3 active" aria-current="page" href="#">Home</a> -->
                <a class="nav-link text-capitalize mx-3" href="#">About</a>
                <a class="nav-link text-capitalize mx-3" href="#">courses</a>
                <a class="nav-link text-capitalize mx-3" href="#">workshop</a>
                <a class="nav-link text-capitalize mx-3" href="#">
                    <i class="fa-regular fa-circle-user"></i>
                </a>
            </div>
        </div>
    </div>
</nav>