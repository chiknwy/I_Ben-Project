<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .payment-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .payment-container h2 {
            color: #333;
        }

        .payment-form {
            margin-top: 20px;
        }

        .payment-form label {
            display: block;
            margin-bottom: 5px;
        }

        .payment-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .payment-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .payment-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="payment-container">
    <h2>Pembayaran</h2>

    <div class="payment-form">
        <label for="amount">Jumlah Pembayaran:</label>
        <input type="text" id="amount" name="amount" placeholder="Masukkan jumlah pembayaran">

        <label for="method">Metode Pembayaran:</label>
        <select id="method" name="method">
            <option value="bank_transfer">Transfer Bank</option>
            <option value="credit_card">Kartu Kredit</option>
            <!-- Tambahkan metode pembayaran lainnya jika diperlukan -->
        </select>

        <button onclick="submitPayment()">Bayar</button>
    </div>
</div>



</body>
</html>
