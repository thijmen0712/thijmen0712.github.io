<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- fonts toevoegen -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- header toevoegen met php -->
    <header>
        <?php include 'header.php' ?>
    </header>
    <!-- start pagina -->
    <main class="projecten">
        <h3>Projecten</h3>
        <div class="projects">
            <div class="project-boven">
                <div class="project-frame">
                    <img class="project-img" src="images/pinkgoose.png" alt="pink goose site">
                    <img class="github-logo" src="images/github.png" alt="github-logo">
                </div>
                <div class="project-frame">
                    <img class="project-img" src="images/waalsprong.png" alt="waalsprong site">
                    <img class="github-logo" src="images/github.png" alt="github-logo">
                </div>
            </div>
            <div class="project-onder">
                <div class="project-frame">
                    <img class="project-img" src="images/mastermind.png" alt="mastermind script">
                    <img class="github-logo" src="images/github.png" alt="github-logo">
                </div>
            </div>
        </div>
    </main>
    <!-- einde pagina -->
    <!-- footer toevoegen met php -->
    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

</html>