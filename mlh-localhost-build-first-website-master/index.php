<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Personal Page</title>
    <!--  <link rel="stylesheet" type="text/css" href="public/reset.css">-->
    <link href="public/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Bitter|Lobster" rel="stylesheet">
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" rel="stylesheet"/>
    <meta content="width=device-width,initial-scale=1.0" name="viewport">
</head>

<body>
<header>
    <!--    <div class="logo">-->
    <!--      <img id="logo" src="public/img/mlh-logo.png" />-->
    <!--    </div>-->
    <!--    <div class="headline">-->
    <h1>Julie K. Asato</h1>
    <!--        <h2>I'm a Software Developer.</h2>-->
    <!--    </div>-->
    <nav>
        <ul>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<!--<main>-->
<!--    <div class="welcome">-->
<!--        <h1>Hi, I'm Julie K. Asato!</h1>-->
<!--        <h2>I'm a Software Developer.</h2>-->
<!--    </div>-->
<!--</main>-->

<section class="main">
    <section id="about">
        <div class="left">
            <h2>About</h2>
            <p>I graduated from CSU Monterey Bay with a Bachelor's of Science
                degree in Computer Science. I am currently looking for new
                opportunities</p>
            <img src="public/img/julie.jpg">
        </div>
    </section>

    <section id="projects">
        <div class="right">
            <h2>Projects</h2>
            <div class="row">
                <div class="col">
                    <img src="public/img/hackathon-project.png"/>
                    <a href="#">Hackathon Projects</a>
                </div>
                <div class="col">
                    <img src="public/img/school-project.png"/>
                    <a href="#">School Projects</a>
                </div>
                <div class="col">
                    <img src="public/img/personal-project.png"/>
                    <a href="#">Personal Projects</a>
                </div>
            </div>
<!--            <ul>-->
<!--                <li><h3>Project1</h3></li>-->
<!--                <li><h3>Project2</h3></li>-->
<!--                <li><h3>Project3</h3></li>-->
<!--            </ul>-->
        </div>
    </section>
</section>

<footer>
    <h3 id="contact">Contact</h3>
    <p>
        Julie K. Asato | jasato@csumb.edu | @jkasato
    </p>
    <div>
        <i aria-hidden="true" class="fa fa-github fa-3x"></i>
        <a href="linkedin.com/in/jkasato" target="_blank">
            <i aria-hidden="true" class="fa fa-linkedin fa-3x"></i>
        </a>
        <i aria-hidden="true" class="fa fa-twitter fa-3x"></i>
        <i aria-hidden="true" class="fa fa-facebook fa-3x"></i>
        <i aria-hidden="true" class="fa fa-envelope fa-3x"></i>
    </div>
</footer>

</body>
</html>
