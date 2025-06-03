<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manajemen User</title>
  <script src="https://cdn.tailwindcss.com"></script>
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

  <!-- Main content -->
  <main class="flex-1 p-10">
    <h2 class="text-3xl font-bold text-indigo-800 mb-6">👤 Manajemen User</h2>
    <button onclick="openModal('addUserModal')" class="mb-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">+ Tambah User</button>
    
    <div class="bg-white rounded shadow overflow-x-auto">
      <table class="min-w-full table-auto">
        <thead class="bg-indigo-100 text-indigo-800">
          <tr>
            <th class="px-6 py-3 text-left">ID</th>
            <th class="px-6 py-3 text-left">Nama</th>
            <th class="px-6 py-3 text-left">Email</th>
            <th class="px-6 py-3 text-left">Role</th>
            <th class="px-6 py-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-50 border-t">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Admin</td>
            <td class="px-6 py-4">admin@mail.com</td>
            <td class="px-6 py-4">Administrator</td>
            <td class="px-6 py-4 text-center space-x-2">
              <button onclick="openModal('editUserModal')" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <!-- Modal Tambah User -->
  <div id="addUserModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50 hidden">
    <div class="bg-white p-6 rounded-lg w-full max-w-md">
      <h3 class="text-2xl font-bold text-green-600 mb-4">Tambah User</h3>
      <form>
        <div class="mb-3">
          <label class="block text-sm text-gray-700">Nama</label>
          <input type="text" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <div class="mb-3">
          <label class="block text-sm text-gray-700">Email</label>
          <input type="email" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <div class="mb-3">
          <label class="block text-sm text-gray-700">Role</label>
          <select class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
            <option>Administrator</option>
            <option>Kasir</option>
          </select>
        </div>
        <div class="flex justify-end mt-4">
          <button type="button" onclick="closeModal('addUserModal')" class="mr-2 bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Batal</button>
          <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Edit User -->
  <div id="editUserModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50 hidden">
    <div class="bg-white p-6 rounded-lg w-full max-w-md">
      <h3 class="text-2xl font-bold text-yellow-600 mb-4">Edit User</h3>
      <form>
        <div class="mb-3">
          <label class="block text-sm text-gray-700">Nama</label>
          <input type="text" value="Admin" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>
        <div class="mb-3">
          <label class="block text-sm text-gray-700">Email</label>
          <input type="email" value="admin@mail.com" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>
        <div class="mb-3">
          <label class="block text-sm text-gray-700">Role</label>
          <select class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
            <option selected>Administrator</option>
            <option>Kasir</option>
          </select>
        </div>
        <div class="flex justify-end mt-4">
          <button type="button" onclick="closeModal('editUserModal')" class="mr-2 bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Batal</button>
          <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Update</button>
        </div>
      </form>
    </div>
  </div>

  <!-- JS Modal Logic -->
  <script>
    function openModal(id) {
      document.getElementById(id).classList.remove('hidden');
    }
    function closeModal(id) {
      document.getElementById(id).classList.add('hidden');
    }
  </script>

</body>
</html>
