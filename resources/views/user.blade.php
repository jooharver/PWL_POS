<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                {{-- <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th> --}}
                <th>Jumlah Pengguna</th>
            </tr>
            {{-- @foreach ($data as $user) --}}
            <tr>
                {{-- <td>{{$user->user_id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->nama}}</td>
                <td>{{$user->level_id}}</td> --}}
                <td>{{$data}}</td>
            </tr>
            {{-- @endforeach --}}
        </table>
    </body>
</html>
