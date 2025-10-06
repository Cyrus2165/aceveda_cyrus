<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gradient-to-tr from-teal-400 to-cyan-500 min-h-screen flex items-center justify-center font-sans">

  <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md p-10 relative overflow-hidden animate-fadeIn">
    <div class="absolute top-0 -left-10 w-40 h-40 bg-teal-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
    <div class="absolute -bottom-10 -right-10 w-56 h-56 bg-cyan-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>

    <h1 class="text-2xl font-bold text-center text-teal-600 mb-6">✏️ Update User</h1>

    <form action="<?= site_url('users/update/'.$user['id']); ?>" method="POST" class="space-y-5">

      <input type="text" name="username" value="<?= $user['username']; ?>" required
             class="w-full px-5 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:ring-2 focus:ring-teal-400 focus:outline-none">

      <input type="email" name="email" value="<?= $user['email']; ?>" required
             class="w-full px-5 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:ring-2 focus:ring-teal-400 focus:outline-none">

      <div class="relative">
        <input type="password" id="password" name="password" placeholder="Enter new password (optional)"
               class="w-full px-5 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:ring-2 focus:ring-teal-400 focus:outline-none">
        <i class="fa-solid fa-eye absolute right-5 top-1/2 -translate-y-1/2 text-teal-500 cursor-pointer" id="togglePassword"></i>
      </div>

      <select name="role" required class="w-full px-5 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:ring-2 focus:ring-teal-400 focus:outline-none">
        <option value="user" <?= $user['role']=='user'?'selected':''; ?>>User</option>
        <option value="admin" <?= $user['role']=='admin'?'selected':''; ?>>Admin</option>
      </select>

      <button type="submit"
              class="w-full py-3 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-2xl shadow-lg transform hover:scale-105 transition duration-300">
        Update
      </button>
    </form>

    <div class="text-center mt-6">
      <a href="<?=site_url('/users'); ?>" class="text-teal-600 font-semibold hover:underline">⬅ Return to Home</a>
    </div>
  </div>

  <style>
    @keyframes fadeIn { from{opacity:0;transform:translateY(20px);} to{opacity:1;transform:translateY(0);} }
    @keyframes pulse-slow { 0%,100%{transform:scale(1);opacity:.3;} 50%{transform:scale(1.1);opacity:.5;} }
    .animate-pulse-slow { animation:pulse-slow 6s ease-in-out infinite; }
  </style>

  <script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    togglePassword.addEventListener('click', () => {
      const type = password.type === 'password' ? 'text' : 'password';
      password.type = type;
      togglePassword.classList.toggle('fa-eye');
      togglePassword.classList.toggle('fa-eye-slash');
    });
  </script>

</body>
</html>
