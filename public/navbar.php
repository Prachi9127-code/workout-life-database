
<?php 
session_start();
$loggedin = false;
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){
    $loggedin = true;
}else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Workout Life</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Blogs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="workout.php">Workout</a></li>
                        <li><a class="dropdown-item" href="lifestyle.php">Lifestyle</a></li>
                        <li><a class="dropdown-item" href="yoga.php">Yoga</a></li>
                        <li><a class="dropdown-item" href="food.php">Healthy Recipes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Support
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="suggestions.php">Suggestion</a></li>
                        <li><a class="dropdown-item" href="feedback.php">Feedback</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="testimonial.php">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact Us.php">Contact Us</a>
                </li>

            </ul>
            <form class="d-flex" role="search" method="get" action="search.php">
            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success me-2" type="submit">Search</button>';
            if(!$loggedin){

            echo '<a class="btn btn-success me-2" type="submit" href="login.php">Login</a>
            <a class="btn btn-success me-2" type="submit" href="signup.php">Signup</a>';
            }
            if($loggedin){
            echo '<a class="btn btn-success me-2" type="submit" href="logout.php">Logout</a>';
            }
            echo '</form>
            </div>
        </div>
    </div>
</nav>';
?>