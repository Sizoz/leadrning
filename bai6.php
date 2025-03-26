<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faking Textarea on Typing</title>
</head>
<body>
    <h2>Faking Textarea on Typing</h2>
    <textarea id="fakeTextarea" placeholder="Hãy thử gõ vào đây ..."></textarea>
    <script>
        const fixedText = "Đây là văn bản hiển thị khi bạn nhâp";
        let index = 0;
        document.getElementById("fakeTextarea").addEventListener("keydown",function ((event){
            event.preventDefault();
            if (index < fixedText.length){
                this.value += fixedText[index];
                index++
            }
        })
    </script>
</body>
</html>
