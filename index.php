<style><?php include "assets/css/style.css"; ?></style>
<!--<img src="--><?php //echo file_get_contents("assets/images/doodleLogo.png") ; ?><!--">-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Search the web for sites and images.">
    <meta name="keywords" content="Search engine, doodle, websites">
    <meta name="author" content="Valerii Voronkov">
    <title>Welcome to Doodle</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper index-page">
        <div class="main-section">
            <div class="logo-container">
                <img src="assets/images/doodleLogo.png"
                     title="Doogle logo"
                    alt="doogle logo"
                    srcset="assets/images/doodleLogo.png">
            </div>

            <div class="search-container">
                <form action="search.php" method="GET">
                    <input type="text" class="search-box" name="term">
                    <input type="submit" class="search-button" value="Search" placeholder="Enter a search text">
                </form>
            </div>
        </div>
    </div>

</body>
</html>