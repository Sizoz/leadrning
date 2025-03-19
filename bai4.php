<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Do You Love Me?</title>
</head>
<body>
    <h2>Bạn có yêu mình không?</h2>
    <div class="container">
        <button class="btn yes" onclick="showLoveMessage()">YES</button>
        <button class="btn no" id="noButton" onmouseover="moveNoButton()">NO</button>
    </div>
    <script>
        function showLoveMessage(){
            alert("Mình cũng yêu bạn rất nhiều!");
        }
        function moveNoButton(){
            let noButton = document.getElementById("noButton");
            let maxX = window.innerWidth - noButton;
            let maxY = window.innerWidth - noButton;

            let randomX = Math.floor(Math.random() * maxX);
            let randomY = Math.floor(Math.random() * maxY);

            noButton.style.lelt = randomX + "px";
            noButton.style.top = ramdonY + "px";
        }
    </script>
</body>
</html>
