<?php 
    $title = "";
    switch($_SERVER['PHP_SELF']){
        case "/index.php": $title = "Home"; break;
        case "/pages/projects.php": $title = "Projects"; break;
        case "/pages/portfolio.php": $title = "Portfolio"; break;
        case "/pages/about-me.php": $title = "About me"; break;
        case "/pages/contact.php": $title = "Contact"; break;
        default: $title = "Project";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vitor G.S.Ruffo | <?php echo $title;?></title>
        <meta charset="UTF-8">
        <!-- this meta tag tells the browser how to control the page's dimensions and scalling so that it can adapt in different viewports-->
        <!-- a viewport is the webpage visible area to the user. Different devices have different viewports, so the page needs to adapt itself to fit in the viewports.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- width=device-width: sets the width of the page to be equal to the width of the device that the user is using to see the page.-->
        <!-- initial-scale=1.0: sets the zoom level of the page-->
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../styles/reset-default-style.css"> 
        <link rel="stylesheet" href="../styles/style.css">
    </head>
    <body>
        <header> <!--container for introductory content or a set of navigational links.-->
            <a href="../index.php" class="logo">Vitor G.S Ruffo</a>
            <nav>  <!--section of a page whose purpose is to provide navigation links, either within the current document or to other documents-->
                <ul>
                    <li><a href="../pages/portfolio.php">Portfolio</a></li>
                    <li><a href="../pages/about-me.php">About me</a></li>
                    <li><a href="../pages/contact.php">Contact</a></li>
                </ul>

                <a href="../pages/projects.php" class="projects-button">Projects</a>
            </nav>
        </header>