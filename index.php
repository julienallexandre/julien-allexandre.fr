<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Julien Allexandre | Portfolio</title>
    <link rel="stylesheet" href="assets/styles/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
<header>
    <nav class="menu">
        <h4 class="menu__logo">JA</h4>
        <ul class="menu__bar" id="menu_bar">
            <li class="menu__item">
                <a href="#competences" class="menu__link">Compétences</a>
            </li>
            <li class="menu__item">
                <a href="" class="menu__link">Réalisations</a>
            </li>
            <li class="menu__item menu__contact">
                <a href="" class="menu__link">Me contacter</a>
            </li>
        </ul>
        <div class="menu__mobile" id="menu_mobile">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>
<section class="presentation">
    <div class="presentation__img">
        <img src="assets/images/singe.png" alt="Image d'un singe">
    </div>
    <div class="presentation__bloc">
        <div class="presentation__text">
            <p class="presentation__text-title">Bonjour, je suis</p>
            <h1 class="presentation__text-name">Julien Allexandre</h1>
            <p class="presentation__text-job">Développeur Web PHP</p>
            <p class="presentation__text-info">Je suis à l'écoute de toutes opportunités dans le développement web.</p>
        </div>
        <div class="presentation__btn">
            <a href="" class="presentation__btn-link">Mes réalisations</a>
            <a href="" class="presentation__btn-link">Me contacter</a>
        </div>
    </div>
</section>
<section class="competences" id="competences">
    <div class="competences__title">
        <h2 class="competences__title-item">Mes compétences</h2>
        <span class="competences__title-space"></span>
    </div>
    <div class="competences_infos">
        <p>Je continue sans cesse de me tenir à jour sur les nouveautés et j'essaye de toucher un peu à d'autres langages.</p>
    </div>
    <div class="competences__bloc">
        <div class="competence">
            <h4 class="competence__title">Front-End</h4>
            <div class="competence__bloc">
                <p class="competence__description">Pour rendre votre application réactive et dynamique j'utilise principalement VueJS</p>
                <ul class="competence__list">
                    <li class="competence__list-item">VueJS</li>
                    <li class="competence__list-item">TailwindCSS</li>
                    <li class="competence__list-item">HTML</li>
                    <li class="competence__list-item">CSS</li>
                    <li class="competence__list-item">JS</li>
                </ul>
            </div>
        </div>
        <div class="competence">
            <h4 class="competence__title">Back-End</h4>
            <div class="competence__bloc">
                <p class="competence__description">Pour développer votre application web j'utilise principalement le framework Symfony</p>
                <ul class="competence__list">
                    <li class="competence__list-item">Symfony</li>
                    <li class="competence__list-item">PHP</li>
                    <li class="competence__list-item">MySQL</li>
                </ul>
            </div>
        </div>
        <div class="competence">
            <h4 class="competence__title">Intégration</h4>
            <div class="competence__bloc">
                <p class="competence__description">Vous avez une maquette à intégrer ?</p>
                <p class="competence__description">Je suis capable de concevoir le site lié à celle-ci en respectant les normes du web et le responsive.</p>
            </div>
        </div>
    </div>
</section>
<section class="realisations" id="realisations">
    <div class="realisations__title">
        <h2 class="realisations__title-item">Mes réalisations</h2>
        <span class="realisations__title-space"></span>
    </div>
    <div class="realisations__bloc">
        <div class="realisation">
            <div class="realisation__title">
                <h4 class="realisation__title-item">Mon Portfolio</h4>
                <span class="realisation__title-space"></span>
            </div>
            <div class="realisation__bloc">
                <img src="assets/images/portfolio.jpg" alt="" class="realisation__img">
                <p class="realisation__description">Un site simple pour me présenter globalement.</p>
                <ul class="realisation__lang">
                    <li class="realisation__lang-item">HTML</li>
                    <li class="realisation__lang-item">CSS</li>
                    <li class="realisation__lang-item">JS</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/index.js"></script>
</body>
</html>