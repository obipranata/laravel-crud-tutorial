<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Siswa</title>
  </head>
  <body>
    <header>
      <h3>Detail Siswa</h3>
    </header>
    <form action="/edit/{{$siswa->id}}" method="POST">
      @csrf
      <fieldset>
        <p>
          <label for="nama">Nama: </label>
          <input type="text" name="nama" placeholder="nama lengkap" value="{{$siswa->nama}}" />
        </p>
        <p>
          <label for="alamat">Alamat: </label>
          <textarea name="alamat">{{ $siswa->alamat }}</textarea>
        </p>
        <p>
          <label for="jenis_kelamin">Jenis Kelamin: </label>
          <label>
            <input 
              type="radio" 
              name="jenis_kelamin" 
              value="laki-laki" 
              @if($siswa->jenis_kelamin === 'laki-laki') checked @endif
              > Laki-laki 
          </label>
          <label>
            <input 
              type="radio" 
              name="jenis_kelamin" 
              value="perempuan"
              @if($siswa->jenis_kelamin === 'perempuan') checked @endif
            > Perempuan 
          </label>
        </p>
        <p>
          <label for="agama">Agama: </label>
          @php
              $agama = [
                  'Islam',
                  'Kristen',
                  'Hindu',
                  'Budha',
                  'Atheis'
              ];
          @endphp
          <select name="agama">
            @foreach ($agama as $item)
              <option value="{{ $item }}" @if($siswa->agama === $item) selected @endif>
                {{ $item }}
              </option>
            @endforeach
          </select>
        </p>
        <p>
          <label for="sekolah_asal">Sekolah Asal: </label>
          <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="{{ $siswa->sekolah_asal }}" />
        </p>
        <button type="submit">Ubah</button>
      </fieldset>
    </form>
  </body>
</html>