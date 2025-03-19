<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng chuyển đổi tiền tệ</title>
</head>
<body>
    <div class="container">
        <h2>Chuyển đổi tiền tệ</h2>
        <form id="currency-form">
        <label for="from-currency">Từ:</label>
        <select id="from-currency">
            <option value="VND"> Việt Nam Đông(VND)</option>
            <option value="USD">Đô-La Mỹ (USD)</option>
        </select>
        <label for="to-currency">Sang:</label>
        <select id="to-currency">
            <option value="USD">Đô-La Mỹ (USD)</option>
            <option value="VND">Việt Nam Đồng (VND)</option>
        </select>
        <label for="amount">Số tiền:</label>
        <input type="number" id="amount" placeholder="Nhập số tiền" required>
        <button type="button" onclick="convertCurrency()">Convert</button>
        </form>
        <h3>Kết quả:<span id="result">0</span> </h3>
    </div>
    <script>
        const exchanggeRates = {
            "VND": {"USD":0.000043},
            "USD": {"VND": 23200},
        };
        function convertCurrency(){
            let fromCurrency = document.getElementById("from-currency");
            let toCurrency = document.getElementById("to-currency");
            let amount = parseFloat(document.getElementById("amount"));

            if (isNaN(amount)|| amount <=0){
                alert("Vui lòng nhập số tiền hợp lệ.");
                return;
            }
            if (fromCurrency === toCurrency) {
                document.getElementById("result").innerText = amount.toFixed(2)+""+toCurrency;
            } else {
                document.getElementById("result").innerText = "Không có tỷ giá phù hợp";
                }
            }
        }
    </script>
</body>
</html>
