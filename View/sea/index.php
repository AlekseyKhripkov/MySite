<?php
$size = 10;
?>

<style>
    .chess-board { border-spacing: 0; border-collapse: collapse; }
    .chess-board th { padding: .5em; }
    .chess-board td { border: 1px solid; width: 2em; height: 2em; }
    .chess-board .light { background: #eee; }
</style>

<table id="something-table" class="chess-board">
    <tbody>

    <?php for ($y = 1; $y <= $size; $y++): ?>
        <tr>
        <?php for ($x = 1; $x <= $size; $x++): ?>
            <td class="light" data-x="<?= $x ?>" data-y="<?= $y ?>"></td>
        <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>

<button id="ajax-button">Вставить контент с помощью ajax</button>
<div id="ajax-content"></div>

<script>
    $('#ajax-button').on('click', function () {
        $.get( "/seaBattle/ajax", function(data) {
            $('#ajax-content').append(data);
        });
    });

    var cells = $('.light');

    for (var i = 0; i < cells.length; i++) {
        cells[i].onclick = getCoordinates
    }

    function getCoordinates() {
        var x = this.getAttribute('data-x');
        var y = this.getAttribute('data-y');

        alert('x='+ x + ' y=' + y);
    }
</script>
