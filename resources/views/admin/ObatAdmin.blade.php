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
            <th class="px-6 py-3 text-left">Jenis</th>
            <th class="px-6 py-3 text-left">Harga</th>
            <th class="px-6 py-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($obats as $obat)
          <tr class="hover:bg-gray-50 border-t">
            <td class="px-6 py-4">{{ $obat->id }}</td>
            <td class="px-6 py-4">{{ $obat->nama }}</td>
            <td class="px-6 py-4">{{ $obat->jenis }}</td>
            <td class="px-6 py-4">Rp{{ number_format($obat->harga, 0, ',', '.') }}</td>
            <td class="px-6 py-4 text-center space-x-2">
              <button onclick="openEditModal({{ $obat }})" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</button>
              <form action="{{ route('admin.ObatAdmin.destroy', $obat->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin hapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>

  <!-- Add Modal -->
  <div id="addModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg">
      <h3 class="text-xl font-bold mb-4 text-indigo-700">Tambah Obat</h3>
      <form action="{{ route('admin.ObatAdmin.store') }}" method="POST">
        @csrf
        <label class="block mb-2 text-sm font-medium">Nama Obat</label>
        <input name="nama" type="text" class="w-full p-2 border rounded mb-3" required />

        <label class="block mb-2 text-sm font-medium">Jenis</label>
        <input name="jenis" type="text" class="w-full p-2 border rounded mb-3" required />

        <label class="block mb-2 text-sm font-medium">Harga</label>
        <input name="harga" type="number" class="w-full p-2 border rounded mb-3" required />

        <div class="flex justify-end space-x-2">
          <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Batal</button>
          <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Edit Modal -->
  <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg">
      <h3 class="text-xl font-bold mb-4 text-yellow-600">Edit Obat</h3>
      <form id="editForm" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="editId">
        
        <label class="block mb-2 text-sm font-medium">Nama Obat</label>
        <input name="nama" id="editNama" type="text" class="w-full p-2 border rounded mb-3" required />

        <label class="block mb-2 text-sm font-medium">Jenis</label>
        <input name="jenis" id="editJenis" type="text" class="w-full p-2 border rounded mb-3" required />

        <label class="block mb-2 text-sm font-medium">Harga</label>
        <input name="harga" id="editHarga" type="number" class="w-full p-2 border rounded mb-3" required />

        <div class="flex justify-end space-x-2">
          <button type="button" onclick="document.getElementById('editModal').classList.add('hidden')" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Batal</button>
          <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Update</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function openEditModal(obat) {
      document.getElementById('editModal').classList.remove('hidden');
      document.getElementById('editId').value = obat.id;
      document.getElementById('editNama').value = obat.nama;
      document.getElementById('editJenis').value = obat.jenis;
      document.getElementById('editHarga').value = obat.harga;
      document.getElementById('editForm').action = `/admin/obat/${obat.id}`;
    }
  </script>

</body>
</html>
