<!-- resources/views/book/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
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
            color: #C2185B;
            margin-bottom: 20px;
        }

        form {
            background-color: #f9f9f9;
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
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #C2185B;
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #F06292;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }

        .btn:hover {
            background-color: #E91E63;
        }

    </style>
</head>

<body>
    <div class="container">
        <h3>Edit Data Buku</h3>
        <form action="{{ route('book.update', $book->id) }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $book->author) }}">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $book->year) }}">
            </div>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>

</body>

</html>
