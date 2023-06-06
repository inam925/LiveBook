<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<head>
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/2177482/pexels-photo-2177482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            height: 100vh;
        }

        <?php require "css/style.css" ?>
    </style>

</head>

<main>
    <div id="home" class="home-image home">
        <h1 class="text-center text-4xl pt-4 title">Changing lives through love of books</h1>
        <p class="text-white p-5 home-text text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At unde, aliquam, itaque id a voluptas doloribus dolorem et amet quisquam, recusandae neque. Quae accusantium et enim, mollitia obcaecati aut! Porro facilis, voluptates repudiandae voluptas expedita facere sunt ratione maxime animi totam magni deleniti iure saepe fugit modi earum at suscipit?</p>
        <a class="mx-5" href="/trending"><button class="px-5 mt-5 about-button">Access Our Collection</button></a>
    </div>
</main>

<?php require('partials/footer.php') ?>