<!DOCTYPE html>
<html lang="fr">

<head>
    <title>GREEN IT</title>
    <!-- Meta description pour un meilleur SEO, donc va dans le sens du GREEN IT -->
    <meta name="description" content="TARTOPRALINES, votre boulanger, pâtissier à CHARVONNEX, depuis 1970">
    <meta name="description" content="Vente de pains, pains spéciaux, pâtisseries, viennoiseries">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fichiers CSS proscrits -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <!-- Utilisation d'un CDN pour utiliser le framework CSS Tailwind, pas de stockage serveur -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="container mx-auto m-8 bg-yellow-700">
    <header id="navBar" class="flex flex-row flex-nowrap justify-between mx-4 p-4 bg-gray-100 rounded-xl">
        <div class="">
            <h1 class="text-base text-yellow-700 text-2xl font-bold">TARTOPRALINES</h1>
        </div>
        <div class="">
            <a href="#breads" class="js-scrollTo text-lg font-semibold text-yellow-700 hover:text-yellow-500 px-2">
                Les pains
            </a>
            <a href="#pastries" class="js-scrollTo text-lg font-semibold text-yellow-700 hover:text-yellow-500 px-2">
                Les pâtisseries
            </a>
            <a href="#viennoiseries" class="js-scrollTo text-lg font-semibold text-yellow-700 hover:text-yellow-500 px-2">
                Les viennoiseries
            </a>
        </div>
    </header>
    <main class="container">
        <!-- Des images au format webp, pour des images légères et adaptées au web -->
        <section id="home" class="flex h-screen mx-4 my-8 p-4 bg-gray-100 rounded-xl">
            <img class="mx-auto" src="./assets/medias/img/vitrine.webp" alt="" width="1920" height="1080">
        </section>
        <section id="breads" class="flex h-5/6 mx-4 my-16 p-4 bg-gray-100 rounded-xl">
            <div class="pt-16 text-center space-y-4">
                <blockquote>
                    <p class="text-lg font-semibold">
                        “Tous nos pains sont fabriqués de façon artisanale et traditionnelle au levain,
                        avec des farines et des ingrédients issus exclusivement de l'agriculture biologique.”
                    </p>
                </blockquote>
                <figcaption class="font-medium pt-16">
                    <div class="text-cyan-600">
                        Anakin SKYWALKER
                    </div>
                    <div class="text-gray-500">
                        Boulanger, CHARVONNEX
                    </div>
                </figcaption>
                <button type="button" class="bg-yellow-500 rounded w-36 h-14">
                    <a class="js-scrollMenu" href="#navBar">
                        <p class="text-white font-bold">Les pains</p>
                    </a>
                </button>
            </div>
            <img class="mx-auto" src="./assets/medias/img/pains.webp" alt="" width="1280" height="650">
        </section>
        <section id="pastries" class="flex h-5/6 mx-4 my-16 p-4 bg-gray-100 rounded-xl">
            <img class="mx-auto" src="./assets/medias/img/patisseries.webp" alt="" width="1280" height="650">
            <div class="pt-16 text-center space-y-4">
                <blockquote>
                    <p class="text-lg font-semibold">
                        “Toutes nos pâtisseries sont fabriquées de façon artisanale et traditionnelle,
                        avec des produits et des ingrédients achetés aux producteurs locaux pour un circuit court
                        et issus exclusivement de l'agriculture biologique.”
                    </p>
                </blockquote>
                <figcaption class="font-medium pt-16">
                    <div class="text-cyan-600">
                        Leïa SKYWALKER
                    </div>
                    <div class="text-gray-500">
                        Pâtissière, CHARVONNEX
                    </div>
                </figcaption>
                <button type="button" class="bg-yellow-500 rounded w-36 h-14">
                    <a class="js-scrollMenu" href="#navBar">
                        <p class="text-white font-bold">Les pâtisseriess</p>
                    </a>
                </button>
            </div>
        </section>
        <section id="viennoiseries" class="flex h-5/6 mx-4 my-16 p-4 bg-gray-100 rounded-xl">
            <div class="pt-16 text-center space-y-4">
                <blockquote>
                    <p class="text-lg font-semibold">
                        “Toutes nos viennoiseries sont fabriquées de façon artisanale et traditionnelle,
                        avec des produits et des ingrédients de qualité, pour des saveurs exceptionnelles
                        et issus exclusivement de l'agriculture biologique.”
                    </p>
                </blockquote>
                <figcaption class="font-medium pt-16">
                    <div class="text-cyan-600">
                        Luke SKYWALKER
                    </div>
                    <div class="text-gray-500">
                        Patissier, CHARVONNEX
                    </div>
                </figcaption>
                <button type="button" class="bg-yellow-500 rounded w-36 h-14">
                    <a class="js-scrollMenu" href="#navBar">
                        <p class="text-white font-bold">Les viennoiseries</p>
                    </a>
                </button>
            </div>
            <img class=" mx-auto" src="./assets/medias/img/viennoiseries.webp" alt="" width="1280" height="650">
        </section>
    </main>
    <footer class="bg-gray-200 rounded-xl text-center mx-4 p-4">
        <p class="text-lg font-semibold">Copyright &copy; 1970<script>
                new Date().getFullYear() > 1970 && document.write("-" + new Date().getFullYear());
            </script>, TARTOPRALINES Famille SKYWALKER</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./assets/scripts/greenIT.js" async defer></script>
</body>

</html>