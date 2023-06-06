<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST" action="/books">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <label class="block text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Book Title</span>
                                    <input id="name" name="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Book Title goes here" required /><?= $_POST['name'] ?? '' ?>
                                    <?php if (isset($errors['name'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
                                    <?php endif; ?>
                                </label>

                                <label class="pt-2 block text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Author Name</span>
                                    <input id="author" name="author" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Author Name goes here" required /><?= $_POST['author'] ?? '' ?>
                                    <?php if (isset($errors['author'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['author'] ?></p>
                                    <?php endif; ?>
                                </label>

                                <label for="date" class="pt-2 block text-sm">
                                    <input id="date" name="date" type="hidden" name="date" value="<?= date("Y-m-d h:i:s"); ?>">
                                </label>

                                <label for="description" class="block mt-4 mb-4 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Description</span>
                                    <textarea id="description" name="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Provide some description for the book."><?= $_POST['description'] ?? '' ?></textarea>
                                    <?php if (isset($errors['description'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['description'] ?></p>
                                    <?php endif; ?>
                                </label>
                                <form method="post" enctype="multipart/form-data">
                                    <label>Select Image File:</label>
                                    <input type="file" name="image">
                                    <input type="submit" name="submit" value="">
                                </form>
                                <div>
                                </div>

                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <label for="status" class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                        <button name="status" type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-100 py-2 px-4 text-sm font-medium text-green-700 shadow-sm hover:text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 mx-3" value="Published"><?= $_POST['status'] ?? '' ?>Publish</button>

                                        <button name="status" type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-orange-100 py-2 px-4 text-sm font-medium text-orange-700 shadow-sm hover:text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2" value="Draft"><?= $_POST['status'] ?? '' ?>Draft</button>
                                    </label>
                                    <?php if (isset($errors['status'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['status'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>