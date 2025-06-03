<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="flex bg-gray-100 min-h-screen">

  <!-- Sidebar -->
  <aside class="w-64 bg-indigo-800 text-white flex flex-col p-6 space-y-4">
    <h1 class="text-3xl font-bold mb-6">💊 Admin Panel</h1>
    <nav class="space-y-3">
      <a href="{{ route('dashboard') }}" class="flex items-center p-2 rounded hover:bg-indigo-700 {{ request()->routeIs('dashboard') ? 'bg-indigo-700' : '' }}">
        <span class="ml-2">🏠 Dashboard</span>
      </a>
      <a href="{{ route('admin.user') }}" class="flex items-center p-2 rounded hover:bg-indigo-700 {{ request()->routeIs('admin.user') ? 'bg-indigo-700' : '' }}">
        <span class="ml-2">👤 Manajemen User</span>
      </a>
      <a href="{{ route('admin.ObatAdmin') }}" class="flex items-center p-2 rounded hover:bg-indigo-700 {{ request()->routeIs('admin.ObatAdmin') ? 'bg-indigo-700' : '' }}">
        <span class="ml-2">💊 Manajemen Obat</span>
      </a>
      <a href="{{ route('admin.transaksi') }}" class="flex items-center p-2 rounded hover:bg-indigo-700 {{ request()->routeIs('admin.transaksi') ? 'bg-indigo-700' : '' }}">
        <span class="ml-2">💰 Daftar Transaksi</span>
      </a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-10">
    <h2 class="text-4xl font-bold text-indigo-800 mb-4">Selamat Datang, Admin!</h2>
    <p class="text-gray-600 text-lg">Silakan pilih menu di sidebar untuk mengelola aplikasi.</p>

    <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-white p-6 rounded shadow text-center transition hover:scale-105 duration-200">
        <h3 class="text-xl font-semibold text-gray-700">👤 Total User</h3>
        <p class="text-3xl font-bold text-indigo-600 mt-2">{{ App\Models\User::whereNotNull('id')->count() }}</p>
      </div>
      <div class="bg-white p-6 rounded shadow text-center transition hover:scale-105 duration-200">
        <h3 class="text-xl font-semibold text-gray-700">💊 Total Obat</h3>
        <p class="text-3xl font-bold text-indigo-600 mt-2">{{ App\Models\Obat::whereNotNull('id')->count() }}</p>
      </div>
      <div class="bg-white p-6 rounded shadow text-center transition hover:scale-105 duration-200">
        <h3 class="text-xl font-semibold text-gray-700">💰 Total Transaksi</h3>
        <p class="text-3xl font-bold text-indigo-600 mt-2">{{ App\Models\Transaksi::whereNotNull('id')->count() }}</p>
      </div>
    </div>
  </main>

</body>
</html>
