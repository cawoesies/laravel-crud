<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        /* Styling untuk container */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h3 {
            text-align: center;
            color: #C2185B; /* Pink gelap untuk judul */
            margin-bottom: 20px;
        }

        /* Styling untuk tombol tambah */
        .btn-add {
            display: inline-block;
            padding: 10px 20px;
            background-color: #F06292; /* Pink cerah */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            margin-bottom: 20px;
            transition: 0.3s ease;
        }

        .btn-add:hover {
            background-color: #E91E63; /* Pink lebih gelap saat hover */
        }

        /* Styling untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #FCE4EC; /* Latar belakang tabel */
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            text-align: left;
            padding: 12px;
            border: 1px solid #F8BBD0; /* Border pink lembut */
        }

        th {
            background-color: #F06292; /* Pink cerah untuk header tabel */
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #F8BBD0; /* Baris genap dengan warna pink lembut */
        }

        tr:hover {
            background-color: #F48FB1; /* Warna saat hover */
        }

        /* Styling untuk tombol aksi */
        .btn {
            padding: 8px 12px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .btn-warning {
            background-color: #FFB74D; /* Oranye untuk tombol edit */
        }

        .btn-warning:hover {
            background-color: #FFA726;
        }

        .btn-danger {
            background-color: #E57373; /* Merah muda untuk tombol hapus */
        }

        .btn-danger:hover {
            background-color: #EF5350;
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 10px;
            }

            table {
                font-size: 14px;
            }

            .btn-add {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Data Buku</h3>
        <!-- Tombol Tambah -->
        <a href="{{ route('book.create') }}" class="btn-add">Tambah Buku</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('book.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
