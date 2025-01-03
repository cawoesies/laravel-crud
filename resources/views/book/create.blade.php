<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
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
            color: #C2185B; /* Pink lebih gelap untuk judul */
            margin-bottom: 20px;
        }

        /* Styling untuk form */
        form {
            background-color: #FCE4EC; /* Latar belakang form dengan nuansa pink lembut */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        .form-label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #880E4F; /* Pink lebih gelap untuk teks label */
        }

        .form-control {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 1px solid #F8BBD0; /* Border pink lembut */
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #C2185B; /* Pink lebih tegas saat fokus */
            outline: none;
        }

        /* Styling untuk tombol submit */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #F06292; /* Warna pink cerah */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #E91E63; /* Pink lebih gelap saat hover */
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 10px;
            }

            form {
                padding: 15px;
            }

            .form-control {
                padding: 10px;
                font-size: 14px;
            }

            .btn {
                padding: 12px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Tambah Buku</h3>
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Tahun</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>

</html>
