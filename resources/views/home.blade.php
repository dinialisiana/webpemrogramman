<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - K-Food Mart</title>
    <style>
        /* Gaya untuk body */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdf0e5;
            color: #333;
        }

        /* Gaya untuk navigasi */
        nav {
            background-color: #d74e09;
            padding: 15px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        nav h1 {
            margin: 0;
            font-size: 28px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f39c12;
        }

        /* Gaya untuk konten */
        .content {
            text-align: center;
            padding: 50px 20px;
        }

        .content h2 {
            font-size: 40px;
            margin-bottom: 20px;
            color: #d74e09;
        }

        .content p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #555;
        }

        .content .btn {
            display: inline-block;
            padding: 12px 30px;
            font-size: 20px;
            color: #fff;
            background-color: #f39c12;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .content .btn:hover {
            background-color: #e67e22;
            transform: scale(1.1);
        }

        /* Gaya untuk produk */
        .products {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }

        .product-card {
            background-color: #fff;
            padding: 20px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .product-card img {
            width: 100%;
            border-radius: 10px;
        }

        .product-card h3 {
            font-size: 20px;
            margin: 10px 0;
            color: #333;
        }

        .product-card p {
            font-size: 16px;
            color: #777;
            margin: 5px 0;
        }

        .product-card .price {
            font-size: 18px;
            color: #e67e22;
            font-weight: bold;
            margin-top: 10px;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        /* Responsive untuk layar kecil */
        @media (max-width: 768px) {
            .products {
                flex-direction: column;
                align-items: center;
            }

            .content h2 {
                font-size: 30px;
            }

            .content p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <h1>
            <a href="http://127.0.0.1:8000/home">Home</a>
            <a href="http://127.0.0.1:8000/profile">Profile</a>
            <a href="http://127.0.0.1:8000/about">About</a>
            <a href="http://127.0.0.1:8000/contact">Contact</a>
        </h1>
    </nav>

    <div class="content">
        <h2>Welcome to K-Food Mart!</h2>
        <p>
            Nikmati berbagai pilihan makanan khas Korea yang autentik! Jelajahi koleksi produk terbaik kami dan temukan rasa Korea langsung di rumah Anda.
        </p>
        <a href="http://127.0.0.1:8000/shop" class="btn">Lihat Produk</a>
    </div>

    <div class="products">
        <div class="product-card">
            <img src="https://via.placeholder.com/250x150?text=Kimchi" alt="Kimchi">
            <h3>Kimchi</h3>
            <p>Fermentasi sayuran khas Korea, pedas dan nikmat.</p>
            <div class="price">Rp 50.000</div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/250x150?text=Bibimbap" alt="Bibimbap">
            <h3>Bibimbap</h3>
            <p>Rice bowl dengan berbagai topping sayuran dan telur.</p>
            <div class="price">Rp 70.000</div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/250x150?text=Bulgogi" alt="Bulgogi">
            <h3>Bulgogi</h3>
            <p>Daging sapi panggang dengan rasa manis dan gurih.</p>
            <div class="price">Rp 85.000</div>
        </div>
    </div>
</body>
</html>
