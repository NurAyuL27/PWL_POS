<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user"> Kembali</a>
    <br><br>

    <form method="post" action="/user/ubah_simpan/{{ $data->user_id }}">

        {{ csrf_field() }}
        {{method_field('PUT')}}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukan Username" value="{{ $data->username}}">
        <br>
        <Label>Nama</Label>
        <input type="text" name="nama" placeholder="Masukan Nama" value="{{ $data->username}}">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukan Password" value="{{ $data->password }}">
        <br>
        <Label>Level ID</Label>
        <input type="number" name="level id" placeholder="Masukan ID Level" value="{{ $data->level_id }}">
        <br><br>
        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</body>