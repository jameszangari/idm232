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
    
<div class="headerBox">
    <ol class="navMenu">
        <?php 
            if ($page == "Home") { ?>
                <li><a href="index.php" class="selected">Home</a></li>
        <?php } 
            else { ?>
                <li><a href="index.php">Home</a></li><?php 
        } ?>


        <?php 
            if ($page == "Meat") { ?>
                <li><a href="meat.php" class="selected">Meat</a></li>
        <?php } 
            else { ?>
                <li><a href="meat.php">Meat</a></li><?php 
        } ?>


        <?php 
            if ($page == "Fish") { ?>
                <li><a href="fish.php" class="selected">Fish</a></li>
        <?php } 
            else { ?>
                <li><a href="fish.php">Fish</a></li><?php 
        } ?>


        <?php 
            if ($page == "Vegetarian") { ?>
                <li><a href="vegetarian.php" class="selected">Vegetarian</a></li>
        <?php } 
            else { ?>
                <li><a href="vegetarian.php">Vegetarian</a></li><?php 
        } ?>
    </ol>
    <form action="search.php" method="POST">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="What are you looking for?" name="query">
            <button type="submit" class="searchButton" name="search-submit" value="Search">
            <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>