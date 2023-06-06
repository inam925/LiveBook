<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Hello <?= $_SESSION['user']['email'] ?? 'Reader' ?>, Welcome to LiveBook.</p>
    </div>
    <div class="grid gap-6 mb-8 md:grid-cols-4 px-5 pb-5">
        <?php foreach ($books as $book) : ?>
            <?php if ($book['status'] == 'Draft') : ?>
                <?php continue ?>
            <?php elseif ($book['status'] == 'Published') : ?>
                <a href="/book?id=<?= $book['id'] ?>" class="bg-gray-300 rounded-lg shadow-xs dark:bg-gray-800 oddcard h-96 overflow-hidden">
                    <div class="min-w-0 p-4">
                        <div class="relative hidden w-100 h-100 mr-3 md:block">
                            <img class="object-cover w-96 h-40 rounded " src="images/<?= $book['image'] ?>" alt="" loading="lazy" />
                            <div class="absolute inset-0  shadow-inner" aria-hidden="true"></div>
                        </div>
                        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300 text-center">
                            <?= $book['name'] ?>
                        </h4>
                        <p class="text-gray-600 dark:text-gray-400 text-justify">
                            <?= $book['description'] ?>
                        </p>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>