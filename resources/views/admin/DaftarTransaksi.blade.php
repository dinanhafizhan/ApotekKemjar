<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar Transaksi</title>
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
    <h2 class="text-3xl font-bold text-indigo-800 mb-6">💰 Daftar Transaksi</h2>

    <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="mb-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
      + Tambah Transaksi
    </button>

    <div class="bg-white rounded shadow overflow-x-auto">
      <table class="min-w-full table-auto">
        <thead class="bg-indigo-100 text-indigo-800">
          <tr>
            <th class="px-6 py-3 text-left">ID</th>
            <th class="px-6 py-3 text-left">User</th>
            <th class="px-6 py-3 text-left">Obat</th>
            <th class="px-6 py-3 text-left">Jumlah</th>
            <th class="px-6 py-3 text-left">Total Harga</th>
            <th class="px-6 py-3 text-left">Tanggal</th>
            <th class="px-6 py-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-50 border-t">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Admin</td>
            <td class="px-6 py-4">Paracetamol</td>
            <td class="px-6 py-4">3</td>
            <td class="px-6 py-4">Rp 15.000</td>
            <td class="px-6 py-4">2025-06-03</td>
            <td class="px-6 py-4 text-center space-x-2">
              <button onclick="document.getElementById('editModal').classList.remove('hidden')" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <!-- Add Modal -->
  <div id="addModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg">
      <h3 class="text-xl font-bold mb-4 text-indigo-700">Tambah Transaksi</h3>
      <form>
        <label class="block mb-2 text-sm font-medium">Nama User</label>
        <input type="text" class="w-full p-2 border rounded mb-3" placeholder="Nama User" />
        
        <label class="block mb-2 text-sm font-medium">Nama Obat</label>
        <input type="text" class="w-full p-2 border rounded mb-3" placeholder="Nama Obat" />
        
        <label class="block mb-2 text-sm font-medium">Jumlah</label>
        <input type="number" class="w-full p-2 border rounded mb-3" placeholder="Jumlah" />
        
        <label class="block mb-2 text-sm font-medium">Total Harga</label>
        <input type="text" class="w-full p-2 border rounded mb-3" placeholder="Total Harga" />

        <div class="flex justify-end space-x-2">
          <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Batal</button>
          <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Edit Modal -->
  <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg">
      <h3 class="text-xl font-bold mb-4 text-yellow-600">Edit Transaksi</h3>
      <form>
        <label class="block mb-2 text-sm font-medium">Nama User</label>
        <input type="text" class="w-full p-2 border rounded mb-3" value="Admin" />

        <label class="block mb-2 text-sm font-medium">Nama Obat</label>
        <input type="text" class="w-full p-2 border rounded mb-3" value="Paracetamol" />
        
        <label class="block mb-2 text-sm font-medium">Jumlah</label>
        <input type="number" class="w-full p-2 border rounded mb-3" value="3" />
        
        <label class="block mb-2 text-sm font-medium">Total Harga</label>
        <input type="text" class="w-full p-2 border rounded mb-3" value="Rp 15.000" />

        <div class="flex justify-end space-x-2">
          <button type="button" onclick="document.getElementById('editModal').classList.add('hidden')" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Batal</button>
          <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Update</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
