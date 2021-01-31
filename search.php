<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Doodle</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo-container">
                <a href="index.php">
                    <img src="assets/images/doodleLogo.png" alt="doodle logo" 
                        srcset="assets/images/doodleLogo.png">
                </a>
            </div>

            <div class="search-container">
                <form action="search.php" method="get">
                    <div class="search-bar-container">
                        <input type="text" class="searchbox" name="term">

                        <button>Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>