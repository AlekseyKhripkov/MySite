<input id="num1" />

<div>
    <input type="radio" id="plus" name="operator" value="+" checked>
    <label for="plus">+</label>

    <input type="radio" id="minus" name="operator" value="-">
    <label for="minus">-</label>

    <input type="radio" id="multiple" name="operator" value="*">
    <label for="multiple">*</label>

    <input type="radio" id="divide" name="operator" value="/">
    <label for="divide">/</label>
</div>

<input id="num2" />
<br>

<button id="calculate">Посчитать</button>


<script>

    $('#calculate').on('click', calculate);

    function calculate() {
        let operator = $('input[name="operator"]:checked').val();
        let num1 = Number($("#num1").val());
        let num2 = Number($("#num2").val());

        let result;
        switch (operator) {
            case '+':
                result = num1 + num2;
                break;
            case '-':
                result = num1 - num2;
                break;
            case '*':
                result = num1 * num2;
                break;
            case '/':
                result = num1 / num2;
                break;
        }

        alert("Получилось число " + result);
    }

</script>