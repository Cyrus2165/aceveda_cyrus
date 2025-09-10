<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-teal-400 to-cyan-500 min-h-screen font-sans">

  <!-- Decorative Background Circles -->
  <div class="absolute top-0 -left-20 w-40 h-40 bg-teal-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 pointer-events-none z-0 animate-pulse-slow"></div>
  <div class="absolute -bottom-10 -right-20 w-56 h-56 bg-cyan-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 pointer-events-none z-0 animate-pulse-slow"></div>

  <!-- Navbar -->
  <nav class="relative z-10 bg-white shadow-md rounded-b-2xl mb-10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <span class="text-teal-600 font-bold text-xl">Students Information</span>
      <a href="<?=site_url('users/create')?>" class="bg-teal-500 hover:bg-teal-600 text-white font-semibold px-4 py-2 rounded-full shadow transition duration-300">
        ➕ Add Account
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-4">
    <div class="bg-white rounded-3xl shadow-2xl p-8 overflow-hidden">
      <!-- Header -->
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-teal-600">Account Overview</h1>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto rounded-2xl shadow-md">
        <table class="w-full text-center border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-teal-400 to-cyan-500 text-white">
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Lastname</th>
              <th class="py-3 px-4">Firstname</th>
              <th class="py-3 px-4">Email</th>
              <th class="py-3 px-4">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(html_escape($users) as $user): ?>
            <tr class="hover:bg-teal-50 transition duration-200">
              <td class="py-3 px-4"><?=($user['id']);?></td>
              <td class="py-3 px-4"><?=($user['last_name']);?></td>
              <td class="py-3 px-4"><?=($user['first_name']);?></td>
              <td class="py-3 px-4">
                <span class="bg-teal-100 text-teal-700 text-sm font-medium px-3 py-1 rounded-full">
                  <?=($user['email']);?>
                </span>
              </td>
              <td class="py-3 px-4 space-x-2">
                <a href="<?=site_url('users/update/'.$user['id']);?>" class="text-cyan-600 font-medium hover:underline">Update Account</a>
                
                <form action="<?=site_url('users/delete/'.$user['id']);?>" method="POST" class="inline" 
                onsubmit="return confirm('Are you sure you want to delete this record?');">
                <button type="submit" class="text-red-500 font-medium hover:underline bg-transparent border-0 p-0 cursor-pointer">
                   Delete Account
                </button>
                </form>

              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
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
