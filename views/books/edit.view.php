<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<head>
    <style>
        input[type=file] {
            width: 110px;
            color: transparent;
        }
    </style>
    <script>
        window.pressed = function() {
            var a = document.getElementById('img');
            if (a.value == "") {
                fileLabel.innerHTML = "Choose a file";
            } else {
                var theSplit = a.value.split('\\');
                fileLabel.innerHTML = theSplit[theSplit.length - 1];
            }
        };
    </script>
</head>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST" action="/book">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="<?= $book['id'] ?>">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Book Title</span>
                                <input id="name" name="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Book Title goes here" value="<?= $book['name'] ?>" required />
                                <?php if (isset($errors['name'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
                                <?php endif; ?>
                            </label>

                            <label class="pt-2 block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Author Name</span>
                                <input id="author" name="author" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Author Name goes here" value="<?= $book['author'] ?>" required />
                                <?php if (isset($errors['author'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['author'] ?></p>
                                <?php endif; ?>
                            </label>

                            <div class="mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Status
                                </span>
                                <div class="mt-2">
                                    <label for="status" class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                        <input id="status" name="status" type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="status" value="Published" <?= ($book['status'] == 'Published') ?  "checked" : "";  ?> />
                                        <span class="ml-2">Published</span>
                                        <?php if (isset($errors['status'])) : ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['status'] ?></p>
                                        <?php endif; ?>
                                    </label>

                                    <label id="status" name="status" for="status" class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                        <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="status" value="Draft" <?= ($book['status'] == 'Draft') ?  "checked" : "";  ?> />
                                        <span class="ml-2">Draft</span>
                                    </label>
                                    <?php if (isset($errors['status'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['status'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <label for="date" class="pt-2 block text-sm">
                                <input id="date" name="date" type="hidden" name="date" value="<?= date("Y-m-d h:i:s"); ?>">
                            </label>

                            <label for="description" class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Description</span>
                                <textarea id="description" name="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Provide some description for the book."><?= $book['description'] ?></textarea>
                                <?php if (isset($errors['description'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['description'] ?></p>
                                <?php endif; ?>
                            </label>
                            <form method="post" enctype="multipart/form-data">
                                <label for="image" id="fileLabel">Select Image:</label>
                                <input type='file' name="image" title="Choose a file" id="img" onchange="pressed()">
                            </form>
                        </div>

                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex gap-x-4 justify-end">
                            <a href="/books" class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Cancel
                            </a>
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>