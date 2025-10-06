<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-tr from-teal-400 to-cyan-500 min-h-screen font-sans text-gray-800">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-teal-600 to-cyan-500 shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="#" class="text-white font-semibold text-xl tracking-wide">📊 User Management</a>
      <a href="<?=site_url('reg/logout');?>" 
         class="bg-white text-teal-600 font-semibold px-4 py-2 rounded-lg shadow hover:bg-gray-100 transition">
         Logout
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-6xl mx-auto mt-10 px-4">
    <div class="bg-white bg-opacity-90 backdrop-blur-sm shadow-xl rounded-2xl p-8">

      <?php if(!empty($logged_in_user)): ?>
        <div class="mb-8 bg-teal-100 text-teal-800 px-6 py-5 rounded-xl shadow-lg text-center">
          <h2 class="text-3xl font-bold mb-1">Welcome, <?= html_escape($logged_in_user['username']); ?>!</h2>
          <p class="text-xl">Role: <?= html_escape($logged_in_user['role']); ?></p>
        </div>
      <?php endif; ?>

      <!-- Search Bar -->
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-teal-600">👥 User Directory</h1>
        <form method="get" action="<?=site_url('users');?>" class="flex">
          <input name="q" value="<?=html_escape($_GET['q'] ?? '')?>" placeholder="Search user..." 
                 class="border border-teal-200 bg-gray-50 rounded-l-xl px-3 py-2 focus:ring-2 focus:ring-teal-400 focus:outline-none">
          <button class="bg-teal-600 hover:bg-teal-700 text-white px-4 rounded-r-xl">🔍</button>
        </form>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto rounded-xl border border-teal-200">
        <table class="w-full text-center border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-teal-600 to-cyan-500 text-white">
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Username</th>
              <th class="py-3 px-4">Email</th>
              <th class="py-3 px-4">Role</th>
              <th class="py-3 px-4">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <?php foreach($users as $user): ?>
              <tr class="hover:bg-cyan-50 transition">
                <td class="py-3 px-4"><?= $user['id']; ?></td>
                <td class="py-3 px-4"><?= $user['username']; ?></td>
                <td class="py-3 px-4"><?= $user['email']; ?></td>
                <td class="py-3 px-4"><?= $user['role']; ?></td>
                <td class="py-3 px-4 space-x-2">
                  <a href="<?=site_url('users/update/'.$user['id']);?>" 
                     class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-lg shadow">✏️ Update</a>
                  <?php if($logged_in_user['role']==='admin'): ?>
                    <a href="<?=site_url('users/delete/'.$user['id']);?>" 
                       onclick="return confirm('Are you sure?');"
                       class="bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2 rounded-lg shadow">🗑️ Delete</a>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="mt-6 flex justify-center"><?= $page; ?></div>

      <div class="mt-6 text-center">
        <a href="<?=site_url('users/create')?>"
           class="bg-teal-600 hover:bg-teal-700"
           class="bg-teal-600 hover:bg-teal-700 text-white font-semibold px-6 py-3 rounded-2xl shadow-lg transform hover:scale-105 transition duration-300 inline-block">
           ➕ Create New User
        </a>
      </div>
    </div>
  </div>

  <footer class="mt-12 text-center text-white text-sm opacity-80">
    <p>© <?= date('Y'); ?> User Management System — Designed with 💙 by Your Team</p>
  </footer>

  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    body { animation: fadeIn 0.8s ease-in-out; }
  </style>

</body>
</html>

