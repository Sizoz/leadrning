<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính số ngày trong tháng</title>
</head>
<body>
    <div class="container">
        <h2>Tính số ngày trong tháng</h2>
        <form>
            <input type="number" id="month" placeholder="Nhập tháng (1-12)" min="1" max="12" required>
            <button type="button" onclick="calculateDays()"> Tính số ngày</button>
        </form>
        <h3>Kết quả:<span id="result">?</span></h3>
    </div>
    <script>
        function calculateDays(){
            let month =parseInt(document.getElementById("month"));
            let days;

            switch (month){
                case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                    days = 31;
                    break;
                case 4: case 6: case 9: case 11:
                    days =30;
                    break;
                case 2:
                    days = 28;
                    break;
                default:
                    alert("Vui lòng nhập số tháng hợp lệ(1-12)");
                    return;
            }
            document.getElementById("result").innerText= days+ "ngày";
        }
    </script>
</body>
</html>
