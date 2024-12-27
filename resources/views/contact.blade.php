<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Contact</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f3e3;
            color: #333;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #ff7b54;
            font-size: 2.5em;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin: 5px 0;
        }
        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: inline-block;
            text-align: left;
        }
        label {
            font-weight: bold;
        }
        input, textarea, button {
            margin: 10px 0;
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #ff7b54;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #d95f39;
        }
    </style>
</head>
<body>
    <h1>Halaman Contact</h1>
    <p>
        Jika Anda memiliki pertanyaan atau ingin mengetahui lebih banyak tentang produk kami, jangan ragu untuk menghubungi kami!
    </p>
    <h2>Informasi Kontak</h2>
    <ul>
        <li>Alamat: Seoul Street, Purbalingga</li>
        <li>Email: support@kfoodmart.com</li>
        <li>Telepon: 0812-3456-7890</li>
    </ul>
    <h2>Formulir Kontak</h2>
    <form action="#" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Pesan:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
