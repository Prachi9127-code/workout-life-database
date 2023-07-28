<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workout life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<?php include 'navbar.php'?>
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="loginAlert" style="display: none;">
  <strong>Alert:</strong> You need to login first to access the Workout page!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1613122707368-802083d1b602?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjE5ODkxMDY2&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1400"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Welcome to WorkOut Life</b></h5>
                    <p><b>NO PAIN NO GAIN</b></p>
                    <button type="button" class="btn btn-danger">Workout</button>
                    <button type="button" class="btn btn-primary">Lifestyle</button>
                    <button type="button" class="btn btn-warning">Yoga</button>
                    <button type="button" class="btn btn-success">Healthy Recipes</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="second.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?lifestyle" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    
    <div class="container my-4">
        <div class="row mb-2">
        <div class="col-md-6" onclick="checkLogin()">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Exercise</strong>
                    <h3 class="mb-0">Workout</h3>
                    <div class="mb-1 text-muted">April 22</div>
                    <p class="card-text mb-auto">The last three or four reps is what makes the muscle grow. This
                        area of pain divides a champion from someone who is not a champion.</p>
                        <!-- User is logged in, allow them to go to "workout.php" -->
                        <a href="#" class="stretched-link">View Blogs</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250"
                        src="https://images.unsplash.com/photo-1618168228501-670e372b6ca3?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=250&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjE5ODkwMjQ1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200">
                </div>
            </div>
        </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Plan</strong>
                        <h3 class="mb-0">Lifestyle</h3>
                        <div class="mb-1 text-muted">April 22</div>
                        <p class="mb-auto">If you want to live a happy life, tie it to a goal, not to people or
                            things.</p>
                        <a href="lifestyle.php" class="stretched-link">View blogs</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250"
                            src="https://images.unsplash.com/photo-1619679347986-dc7b1c423e67?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=250&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjE5ODkwNTI3&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200">

                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Exercise</strong>
                        <h3 class="mb-0">Yoga</h3>
                        <div class="mb-1 text-muted">May 1</div>
                        <p class="card-text mb-auto">Yoga is a light, which once lit will never dim. The better your
                            practice, the
                            brighter your flame.</p>
                        <a href="yoga.php" class="stretched-link">View Blogs</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250"
                            src="https://images.unsplash.com/photo-1617372591452-9adad3e8070e?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=250&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjE5ODkwNjI4&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Plan</strong>
                        <h3 class="mb-0">Healthy Recipes</h3>
                        <div class="mb-1 text-muted">May 4</div>
                        <p class="mb-auto">Your diet is a bank account. Good food choices are good investments.</p>
                        <a href="food.php" class="stretched-link">View Blogs</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250"
                            src="https://images.unsplash.com/photo-1495147466023-ac5c588e2e94?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=250&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjE5ODkwNzM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.html'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
    <script>
        function checkLogin() {
            // You need to set this variable based on your PHP session variable that determines if the user is logged in.
            const isLoggedIn = <?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>;
        if (!isLoggedIn) {
            document.getElementById("loginAlert").style.display = "block";
            // You can redirect the user to the login page here if you want
            //window.location.href = "login.php";
        } else {
            // If the user is logged in, perform the desired action here, like redirecting to the workout page
            window.location.href = "workout.php";
        }
    }
</script>
</body>
</html>