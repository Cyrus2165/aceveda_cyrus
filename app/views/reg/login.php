<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-teal-400 to-cyan-500 min-h-screen flex items-center justify-center font-sans">

  <div class="bg-white shadow-2xl rounded-3xl p-10 w-full max-w-md">
    <h2 class="text-3xl font-bold text-center text-teal-600 mb-8">🔐 Welcome Back</h2>

    <form action="<?=site_url('auth/login')?>" method="POST" class="space-y-6">
      <div>
        <label class="block text-gray-700 mb-2 font-medium">Email</label>
        <input type="email" name="email" required
          class="w-full px-5 py-3 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>
      <div>
        <label class="block text-gray-700 mb-2 font-medium">Password</label>
        <input type="password" name="password" required
          class="w-full px-5 py-3 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>

      <button type="submit"
        class="w-full bg-teal-600 hover:bg-teal-700 text-white py-3 rounded-2xl font-semibold shadow-lg transition">
        Log In
      </button>
    </form>

    <p class="text-center mt-6 text-gray-600">
      Don’t have an account?
      <a href="<?=site_url('auth/register')?>" class="text-teal-600 hover:underline font-medium">Sign Up</a>
    </p>
  </div>

</body>
</html>
