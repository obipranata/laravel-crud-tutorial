<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Siswa</title>
  </head>
  <body>
    <header>
      <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
      <a href="{{ route('form-daftar') }}">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Sekolah Asal</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dataSiswa as $data)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->agama }}</td>
            <td>{{ $data->sekolah_asal }}</td>
            <td>
              <a href="{{ route('detail-siswa', $data->id) }}">Edit</a>
              |
              <a href="{{ route('delete-siswa', $data->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <p>Total: {{ count($dataSiswa) }}</p>
  </body>
</html>