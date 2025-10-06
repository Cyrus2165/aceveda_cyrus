<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-teal-400 to-cyan-500 min-h-screen flex items-center justify-center font-sans">

  <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md p-10 relative overflow-hidden">

    <h2 class="text-3xl font-bold text-center text-teal-600 mb-8">🚀 Create Account</h2>

    <form action="<?=site_url('auth/register')?>" method="POST" class="space-y-6">
      <div>
        <label class="block text-gray-600 mb-2 font-medium">First Name</label>
        <input type="text" name="first_name" required
          class="w-full px-5 py-3 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-gray-600 mb-2 font-medium">Last Name</label>
        <input type="text" name="last_name" required
          class="w-full px-5 py-3 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-gray-600 mb-2 font-medium">Email</label>
        <input type="email" name="email" required
          class="w-full px-5 py-3 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-gray-600 mb-2 font-medium">Password</label>
        <input type="password" name="password" required
          class="w-full px-5 py-3 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-teal-400 focus:outline-none">
      </div>

      <button type="submit"
        class="w-full py-3 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-2xl shadow-lg transition">
        Sign Up
      </button>
    </form>

    <p class="text-center mt-6 text-gray-600">
      Already have an account?
      <a href="<?=site_url('auth/login')?>" class="text-teal-600 hover:underline font-medium">Log In</a>
    </p>
  </div>

</body>
</html>
