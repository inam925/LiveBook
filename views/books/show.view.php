<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-3">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">

                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Author
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <?= htmlspecialchars($book['author']) ?>
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">

                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Status
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <?= htmlspecialchars($book['status']) ?>
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Date
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <?= htmlspecialchars($book['date']) ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <p class="col-span-2 text-lg font-semibold text-gray-700 dark:text-gray-200 text-center text-justify">
                <?= htmlspecialchars($book['description']) ?>
            </p>
            <div class="col-span-1 relative hidden w-96 h-full mr-3 md:block">
                <img class="object-cover w-full h-full rounded " src="images/<?= $book['image'] ?>" alt="" loading="lazy" />
                <div class="absolute inset-0  shadow-inner" aria-hidden="true"></div>
            </div>
        </div>

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>