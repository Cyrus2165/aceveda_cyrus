<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Directory</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?= base_url(); ?>/public/style.css" />

  <style>
    body {
      background: linear-gradient(135deg, #00d2ff, #3a7bd5);
      font-family: 'Poppins', sans-serif;
    }
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th {
      background-color: #0597f2;
      color: white;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }
    td, th {
      padding: 12px 16px;
      text-align: left;
    }
    tr:nth-child(even) {
      background-color: #f1f9ff;
    }
    tr:hover {
      background-color: #e0f3ff;
    }
    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 6px;
      margin-top: 1rem;
    }
    .pagination button, .pagination a {
      padding: 6px 12px;
      border-radius: 6px;
      background-color: #ffffff;
      color: #007bff;
      font-weight: 500;
      border: 1px solid #007bff;
      transition: 0.2s;
    }
    .pagination button:hover, .pagination a:hover {
      background-color: #007bff;
      color: #ffffff;
    }
    .pagination .active {
      background-color: #007bff;
      color: #fff;
      font-weight: 600;
    }
  </style>
</head>

<body class="min-h-screen flex flex-col">
  <div class="container mx-auto px-4 py-8">

    <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
      <span>👥</span> User Directory
    </h2>

    <!-- Search Bar -->
    <div class="flex justify-end mb-4">
      <form method="get" class="flex items-center gap-2">
        <input
          type="text"
          name="q"
          value="<?= isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '' ?>"
          placeholder="Search user..."
          class="px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200"
        />
        <button type="submit" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
          🔍
        </button>
      </form>
    </div>

    <!-- User Table -->
    <div class="overflow-x-auto rounded-lg shadow-lg bg-white">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= htmlspecialchars($user['id']); ?></td>
                <td><?= htmlspecialchars($user['username']); ?></td>
                <td><?= htmlspecialchars($user['email']); ?></td>
                <td><?= htmlspecialchars($user['role']); ?></td>
                <td>
                  <a href="update.php?id=<?= $user['id']; ?>" class="inline-flex items-center gap-1 px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                    ✏️ Update
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="5" class="text-center py-4 text-gray-500">No users found</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="pagination mt-6">
      <?php if ($currentPage > 1): ?>
        <a href="?page=1<?= isset($_GET['q']) ? '&q=' . urlencode($_GET['q']) : '' ?>">⏮ First</a>
        <a href="?page=<?= $currentPage - 1 ?><?= isset($_GET['q']) ? '&q=' . urlencode($_GET['q']) : '' ?>">← Prev</a>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?= $i ?><?= isset($_GET['q']) ? '&q=' . urlencode($_GET['q']) : '' ?>"
          class="<?= $i == $currentPage ? 'active' : '' ?>"><?= $i ?></a>
      <?php endfor; ?>

      <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?= $currentPage + 1 ?><?= isset($_GET['q']) ? '&q=' . urlencode($_GET['q']) : '' ?>">Next →</a>
        <a href="?page=<?= $totalPages ?><?= isset($_GET['q']) ? '&q=' . urlencode($_GET['q']) : '' ?>">Last ⏭</a>
      <?php endif; ?>
    </div>

    <!-- Create New User Button -->
    <div class="text-center mt-8">
      <a href="create_user.php"
        class="inline-flex items-center gap-2 px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 transition">
        ➕ Create New User
      </a>
    </div>

  </div>

  <footer class="mt-auto text-center py-4 text-white">
    © 2025 User Management System — Designed with 💙 by Your Team
  </footer>
  <style> @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } } body { animation: fadeIn 0.8s ease-in-out; } </style>
</body>
</html>
