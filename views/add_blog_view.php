<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Blog Form</title>
  <!-- Add the Tailwind CSS CDN or include your compiled CSS file here -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">

  <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Ajoute Blog</h2>

    <form action="#" method="post" class="space-y-4">
      <!-- Content Title -->
      <div>
        <label for="title" class="block text-sm font-medium text-gray-600">Content Title</label>
        <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md">
      </div>

      <!-- Image Blog -->
      <div>
        <label for="image" class="block text-sm font-medium text-gray-600">Image Blog URL</label>
        <input type="file" id="image" name="image" class="mt-1 p-2 w-full border rounded-md">
      </div>

      <!-- Description Blog -->
      <div>
        <label for="description" class="block text-sm font-medium text-gray-600">Description Blog</label>
        <textarea id="description" name="description" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
      </div>

      <!-- Buttons -->
      <div class="flex justify-between items-center">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
          Send
        </button>

        <button type="button" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-green-300">
          Ajoute Multi Blog
        </button>
      </div>
    </form>

  </div>

</body>
</html>
