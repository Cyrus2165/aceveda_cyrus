<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-teal-200 via-teal-100 to-cyan-300 min-h-screen flex items-center justify-center font-sans">

  <div class="bg-white shadow-2xl rounded-3xl p-8 w-full max-w-lg">
    <h2 class="text-2xl font-bold text-teal-600 mb-6 text-center">✏️ Update User</h2>

    <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-5">
      <div>
        <label class="block text-gray-700 mb-2 font-medium">First Name</label>
        <input type="text" name="first_name" value="<?=html_escape($user['first_name'])?>" required
          class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-gray-700 mb-2 font-medium">Last Name</label>
        <input type="text" name="last_name" value="<?=html_escape($user['last_name'])?>" required
          class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-gray-700 mb-2 font-medium">Email</label>
        <input type="email" name="email" value="<?=html_escape($user['email'])?>" required
          class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>

      <button type="submit"
        class="w-full bg-cyan-500 hover:bg-cyan-600 text-white py-3 rounded-xl font-semibold shadow-lg transition">
        Update User
      </button>
    </form>

    <div class="text-center mt-6">
      <a href="<?=site_url('users')?>" class="text-teal-600 hover:underline font-medium">← Back to List</a>
    </div>
  </div>

</body>
</html>
