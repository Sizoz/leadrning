<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng máy tính</title>
</head>
<body>
    <div class="container">
        <h2>Máy tính đơn giản</h2>
        <form id="calculator-from">
            <input type="number" id="num1" placeholder="Nhập số thứ nhất" required>
            <input type="number" id="num2" placeholder="Nhập số thứ hai" required>

            <button type="button" onclick="calculate('add')">Cộng (+)</button>
            <button type="button" onclick="calculate('subtract')">Trừ (-)</button>
            <button type="button" onclick="calculate('multiply')">Cộng (*)</button>
            <button type="button" onclick="calculate('divide')">Chia (/)</button>
        </form>
        <h3>Kết quả:<span id="result">0</span> </h3>
    </div>
    <script>
        function calculate(operation){
            let num1 = parseFloat(document.getElementById("num1").value);
            let num2 = parseFloat(document.getElementById("num2").value);
            let result;
            if (isNaN(num1) || isNaN(num2)){
                alert("Vui lòng nhập số hợp lệ");
            }
        switch (operation){
            case 'add':
                result =num1+num2;
                break;
            case 'subtract':
                result= num1 -num2;
                break;
            case 'multiply':
                result= num1 * num2;
                break;
            case 'divide':
                if (num2 === 0){
                    alert("Không thể chia cho 0");
                    return;
                }
                result = num1 / num2;
                break;
        }
            document.getElementById("result").innerText= result;
        }
    </script>
</body>
</html>