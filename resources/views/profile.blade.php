<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #a9d3f0; }
        .profil {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            overflow: hidden;
        }
        .profil img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="flex flex-col items-center justify-center">

        <label class="block text-gray-700 text-sm font-bold mb-2">Gambar Profil</label>
        <div class="mb-4 profil">
            <img src="{{ asset($image) }}" alt="Gambar Profil" class="rounded-full w-full h-full">
        </div>
        <div class="bg-white shadow rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6">Profil Pengguna</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled value="{{ $user->nama ?? 'Tidak Ada Nama' }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Kelas</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled value="{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">NPM</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled value="{{ $npm ?? 'Tidak Ada NPM' }}">
            </div>
        </div>
    </div>
    <title>Profile</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= htmlspecialchars($kelas, ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><?= htmlspecialchars($npm, ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
    </table>
</body>
</html>
