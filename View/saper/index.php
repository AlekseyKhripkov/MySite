<?php

$size = 10;
$maxCount = 10;

$cells = [];
$countWithBomb = 0;

for ($i = 0; $i < $size * $size; $i++) {
    if ($countWithBomb < $maxCount) {
        $countWithBomb++;
        $cells[] = 1;
    } else {
        $cells[] = 0;
    }
}

shuffle($cells);

$yyy = null;

?>

<style>
    .saper-board { border-spacing: 0; border-collapse: collapse; }
    .saper-board th { padding: .5em; }
    .saper-board td { border: 2px solid; width: 4em; height: 4em; }
    .saper-board .cell { background: #bfb6b6; }
</style>

<div class="shadow p-3 mb-5 bg-white rounded"><b>Выберите уровень сложности.</b></div>
<div>
<div><a><b>Легко:</b> Поле 10х10, Бомб 15.</a></div>
<div><a><b>Средне:</b> Поле 15х15, Бомб 30.</a></div>
<div><a><b>Тяжело:</b> Поле 15х15, Бомб 40.</a></div>
</div>
<br/>
<div>
    <input type="radio" id="light" name="operator" value="Легко" checked/>
    <label for="light">Легко</label>

    <input type="radio" id="middle" name="operator" value="Середне"/>
    <label for="middle">Средне</label>

    <input type="radio" id="hard" name="operator" value="Тяжело"/>
    <label for="hard">Тяжело</label>
</div>
<div><button id="StartGame" class="btn btn-secondary" ><b>Начать игру!!!</b></button></div>
<br>

<div class="main-container">
<table class="saper-board">
    <tbody>
    <?php $ID = 0 ?>
    <?php for ($y = 1; $y <= $size; $y++): ?>
        <tr>
            <?php for ($x = 1; $x <= $size; $x++): ?>
                <td class="cell" data-x="<?= $x ?>" data-y="<?= $y ?>" data-bomb="<?= $cells[$ID] ?>" data-active = "close" ></td>
                <?php $ID++ ?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>
</div>


<script>

    let element = document.getElementById("StartGame")

    element.onclick = startGame

    function startGame () {
        let getLevel = document.querySelector('input[name="operator"]:checked').value

        let size = 0;
        let maxCount = 0;
        switch (getLevel) {
            case "Легко":
                size = 10;
                maxCount = 15;
                break;
            case "Середне":
                size = 15;
                maxCount = 30;
                break;
            case "Тяжело":
                size = 15;
                maxCount = 40;
                break;
        }

        let cells = [];
        let countWithBomb = 0;

        for (let i = 0; $i < size * size; i++) {
            if (countWithBomb < maxCount) {
                countWithBomb++;
                cells.push(1)
            } else {
                cells.push(0);
            }
        }

        shuffle(cells)
    }

    let cells = document.getElementsByClassName("cell")

    for (let i = 0; i < cells.length; i++) {
        cells[i].onclick = changeColorAndKnowAboutBomb
    }

    function changeColorAndKnowAboutBomb() {

        let x = this.getAttribute('data-x');
        let y = this.getAttribute('data-y');
        openCells(x , y);
    }

    function getNearestBombCount(x, y) {
        let nearestCells = getNearestCells(x, y);

        let bombCount = 0;
        for (const nearestCell of nearestCells) {
            let isBomb = Number(nearestCell.getAttribute('data-bomb')) === 1;
            if (isBomb) {
                bombCount++;
            }
        }

        return bombCount;
    }

    function getNearestCells(x, y) {
        x = Number(x);
        y = Number(y);

        let nearestCoordinates = [
            [x - 1, y],
            [x + 1, y],
            [x, y - 1],
            [x, y + 1],
            [x - 1, y - 1],
            [x - 1, y + 1],
            [x + 1, y - 1],
            [x + 1, y + 1],
        ];

        let nearestCells = [];
        for (const coordinate of nearestCoordinates) {
            let cell = document.querySelector(`[data-x='${coordinate[0]}'][data-y='${coordinate[1]}']`);

            if (cell != null) {
                nearestCells.push(cell);
            }
        }

        return nearestCells;
    }


    function openCells(x, y) {
        let element = document.querySelector(`[data-x='${x}'][data-y='${y}']`);
        let nearestCell = getNearestCells(x, y);
        let isNotNearBomb = Number(getNearestBombCount(x, y)) === 0;

        openCell(element);

        if(isNotNearBomb) {
            for (const nearCell of nearestCell) {
                let xNew = nearCell.getAttribute('data-x');
                let yNew = nearCell.getAttribute('data-y');
                let cellActive = nearCell.getAttribute('data-active') === "close";

                let isNotNearBombNew = Number(getNearestBombCount(xNew, yNew)) === 0;

                if (isNotNearBombNew && cellActive) {
                    openCells(xNew , yNew);
                }

                openCell(nearCell);
            }
        }
    }

    function openCell(cell) {
        let a = Number(cell.getAttribute('data-bomb'));
        let x = cell.getAttribute('data-x');
        let y = cell.getAttribute('data-y');

        if (a === 0) {
            cell.style.background = "greenyellow";
            cell.textContent = getNearestBombCount(x, y);
            cell.setAttribute('data-active', "open");
        } else {
            cell.style.background = "orangered";
            // alert('Всему пиздец!!!')
            cell.textContent = 'БУМ';
            cell.setAttribute('data-active', "open");
            for (blabla of cells) {
                let b = blabla.getAttribute('data-active') === "close"
                let a = Number(blabla.getAttribute('data-bomb')) === 1;
                if(a && b) {
                    openCell(blabla)
                }
            }
        }
    }

</script>