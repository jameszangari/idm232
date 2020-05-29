<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recipes.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="application/javascript" href="javascript.js">
    <script src="https://kit.fontawesome.com/080c06f1d6.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="./media/logos/thewoodenspoonFavicon.png"/>
    <title><?php echo $title; ?></title>
</head>
<body>

<div class="header">
    <button onclick="myFunction()" id="darkMode">
      <i class="fas fa-moon" id="moon"></i>
    </button>

    <script>
    function myFunction() {
       var element = document.body;
       element.classList.toggle("dark-mode");
    }
    </script>
    <a href="index.php" id="logoHyperlink"><h1 id="headerH1">The Wooden Spoon</h1>
    <img src="./media/logos/woodenSpoon.png" alt="Spoon" id="spoon"></a>
</div>

<!-- <div class="logoBackground">
    <a href="index.php"><img src="./media/logos/thewoodenspoonLogo2.png" alt="The Wooden Spoon Logo" class="mainLogo"></a>
</div> -->
    
<div class="headerBox">
    <div class="navMenu">
        <a class="selected" href="index.php">Home</a>
        <a class="navItem" href="">Meat</a>
        <a class="navItem" href="">Fish</a>
        <a class="navItem" href="">Vegetarian</a>
    </div>
    <form action="search.php" method="POST">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="What are you looking for?" name="query">
            <button type="submit" class="searchButton" name="search-submit" value="Search">
            <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>