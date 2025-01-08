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
    <main class="over">
        <div class="boven">
            <div class="tekst">
                <h3>Over mij</h3>
                <p>Ik ben Thijmen Uittenbroek, een softwareontwikkelaar met een passie voor coderen.
                    Ik richt me op het bouwen van efficiënte en robuuste oplossingen, met oog voor detail en kwaliteit.
                    Mijn aanpak is professioneel en toegankelijk: ik zorg ervoor dat complexe technologie begrijpelijk
                    en bruikbaar wordt.
                    Samen maken we ideeën werkelijkheid!</p>
            </div>
            <div class="foto">
                <img src="images/pasfoto.png" alt="pasfoto">
            </div>
        </div>
        <div class="onder">
            <div class="links">
                <h3>Tools</h3>
                <div class="tools">
                    <div class="tool-frame">
                        <div><img class="frame-logo" src="images/html-logo.png" alt=""></div>
                        <div>HTML</div>
                        <div class="latofont">websites</div>
                    </div>
                    <div class="tool-frame">
                        <div><img class="frame-logo" src="images/css-logo.png" alt=""></div>
                        <div>CSS</div>
                        <div class="latofont">styling</div>
                    </div>
                    <div class="tool-frame">
                        <div><img class="frame-logo" src="images/java-logo.png" alt=""></div>
                        <div>Java</div>
                        <div class="latofont">programming</div>
                    </div>
                </div>
            </div>
            <div class="rechts">
                <h3>Skills</h3>
                <h4>HTML</h4>
                <div class="procentbar">
                    <div class="skills-links-html"></div>
                    <div class="skills-rechts-html"></div>
                </div>
                <h4>CSS</h4>
                <div class="procentbar">
                    <div class="skills-links-css"></div>
                    <div class="skills-rechts-css"></div>
                </div>
                <h4>Java</h4>
                <div class="procentbar">
                    <div class="skills-links-java"></div>
                    <div class="skills-rechts-java"></div>
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