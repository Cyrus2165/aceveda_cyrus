<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-teal-400 to-cyan-500 min-h-screen flex items-center justify-center font-sans">

  <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md p-10 relative overflow-hidden">
 
    <div class="absolute top-0 -left-10 w-40 h-40 bg-teal-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
    <div class="absolute -bottom-10 -right-10 w-56 h-56 bg-cyan-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>

    <h2 class="text-3xl font-bold text-center text-teal-600 mb-8">🚀 Join Us Today</h2>

    <form action="<?=site_url('users/create')?>" method="POST" class="space-y-6">
      <!-- First Name -->
      <div>
        <label class="block text-gray-600 mb-2 font-medium">First Name</label>
        <input type="text" name="first_name" placeholder="First name" required
               class="w-full px-5 py-3 border border-gray-200 rounded-2xl shadow-sm focus:ring-2 focus:ring-teal-400 focus:outline-none transition duration-300"0>
      </div>

      <!-- Last Name -->
      <div>
        <label class="block text-gray-600 mb-2 font-medium">Last Name</label>
        <input type="text" name="last_name" placeholder="Last name" required
               class="w-full px-5 py-3 border border-gray-200 rounded-2xl shadow-sm focus:ring-2 focus:ring-teal-400 focus:outline-none transition duration-300">
      </div>

      <!-- Email -->
      <div>
        <label class="block text-gray-600 mb-2 font-medium">Email</label>
        <input type="email" name="email" placeholder="email@example.com" required
               class="w-full px-5 py-3 border border-gray-200 rounded-2xl shadow-sm focus:ring-2 focus:ring-teal-400 focus:outline-none transition duration-300">
      </div>

      <!-- Sign Up Button -->
      <button type="submit"
              class="w-full py-3 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-2xl shadow-lg transform hover:scale-105 transition duration-300">
        Sign Up
      </button>
    </form>  

  </div>

  <!-- Animations -->
  <style>
    @keyframes pulse-slow {
      0%, 100% { transform: scale(1); opacity: 0.3; }
      50% { transform: scale(1.1); opacity: 0.5; }
    }
    .animate-pulse-slow {
      animation: pulse-slow 6s ease-in-out infinite;
    }
  </style>

</body>
</html>
