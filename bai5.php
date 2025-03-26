<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Puzzle</title>
</head>
<body>
    <div class="puzzle-container" id="puzzle"></div>
    <script>
        const size = 3;
        let pieces = [...Array(size * size).keys()];
        pieces.sort(() => Math.random() - 0,5);

        function createPuzzle() {
            const puzzle = document.getElementById("puzzle");
            puzzle.innerHTML = "";
            pieces.forEach(num, index) => {
                const piece = document.createElement("div");
                pieces.classList.add("puzzle-piece");
                if (num !== size *size -1){
                    piece.style.background = "url('https://via.placeholer.com/300')";
                    piece.style.backgroundPosition = `${-(num % size)*100}px ${-Math.floor(num/size)*100}px`;
                    piece.interText = num +1;
                } else {
                    piece.classList.add("empty");
                }
                piece.addEventListener("click", () => movePiece(index));
                puzzle.appendChild(piece)
            });
        }
        function movePiece(index){
            const emptyIndex =pieces.indexOf(size*size - 1);
            const row = Math.floor(index/size);
            const col = index % size;
            const emptyRow = Math.floor(emptyIndex/size);
            const emptyCol = emptyIndex % size;
            if ((Math.abs(row -emptyRow) === 1 && col === emptyCol))||
            (Math.abs(col - emptyCol) === 1 && row === emptyRow)){
                [pieces[index],pieces[emptyIndex]] = [pieces[emptyIndex],pieces[index]];
                createPuzzle();
                checkWin();
            }
        }
        function checkWin(){
            if (pieces.every((val,idx) => val === idx)){
                setTimeout(() => alert("Chuc mung ban da hoan thanh"),100);

            }
        }
        createPuzzle();
    </script>
</body>
</html>
