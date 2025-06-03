<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manajemen Obat</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100 min-h-screen">

  <!-- Sidebar -->
  <aside class="w-64 bg-indigo-800 text-white flex flex-col p-6 space-y-4">
    <h1 class="text-3xl font-bold mb-6">💊 Admin Panel</h1>
    <nav class="space-y-3">
      <a href="index.html" class="block p-2 rounded hover:bg-indigo-700">🏠 Dashboard</a>
      <a href="users.html" class="block p-2 rounded hover:bg-indigo-700">👤 Manajemen User</a>
      <a href="obat.html" class="block p-2 rounded bg-indigo-700">💊 Manajemen Obat</a>
      <a href="transaksi.html" class="block p-2 rounded hover:bg-indigo-700">💰 Daftar Transaksi</a>
    </nav>
  </aside>

  <!-- Main content -->
  <main class="flex-1 p-10">
    <h2 class="text-3xl font-bold text-indigo-800 mb-6">💊 Manajemen Obat</h2>

    <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="mb-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
      + Tambah Obat
    </button>

    <div class="bg-white rounded shadow overflow-x-auto">
      <table class="min-w-full table-auto">
        <thead class="bg-indigo-100 text-indigo-800">
          <tr>
            <th class="px-6 py-3 text-left">ID</th>
            <th class="px-6 py-3 text-left">Nama Obat</th>
            <th class="px-6 py-3 text-left">Stok</th>
            <th class="px-6 py-3 text-left">Harga</th>
            <th class="px-6 py-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-50 border-t">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Paracetamol</td>
            <td class="px-6 py-4">120</td>
            <td class="px-6 py-4">Rp5.000</td>
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
      <h3 class="text-xl font-bold mb-4 text-indigo-700">Tambah Obat</h3>
      <form>
        <label class="block mb-2 text-sm font-medium">Nama Obat</label>
        <input type="text" class="w-full p-2 border rounded mb-3" placeholder="Nama Obat" />
        
        <label class="block mb-2 text-sm font-medium">Stok</label>
        <input type="number" class="w-full p-2 border rounded mb-3" placeholder="Jumlah Stok" />

        <label class="block mb-2 text-sm font-medium">Harga</label>
        <input type="text" class="w-full p-2 border rounded mb-3" placeholder="Harga (misal: 5000)" />

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
      <h3 class="text-xl font-bold mb-4 text-yellow-600">Edit Obat</h3>
      <form>
        <label class="block mb-2 text-sm font-medium">Nama Obat</label>
        <input type="text" class="w-full p-2 border rounded mb-3" value="Paracetamol" />

        <label class="block mb-2 text-sm font-medium">Stok</label>
        <input type="number" class="w-full p-2 border rounded mb-3" value="120" />

        <label class="block mb-2 text-sm font-medium">Harga</label>
        <input type="text" class="w-full p-2 border rounded mb-3" value="5000" />

        <div class="flex justify-end space-x-2">
          <button type="button" onclick="document.getElementById('editModal').classList.add('hidden')" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Batal</button>
          <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Update</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
