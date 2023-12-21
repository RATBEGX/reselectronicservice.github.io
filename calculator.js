let result = document.getElementById('result');
let expression = '';

function clearResult() {
    result.value = '';
    expression = '';
}

function deleteLast() {
    expression = expression.slice(0, -1);
    result.value = expression;
}

function appendNumber(num) {
    expression += num;
    result.value = expression;
}

function appendOperator(operator) {
    if (expression === '') return;
    expression += operator;
    result.value = expression;
}

function calculate() {
    if (expression === '') return;
    try {
        const resultEval = eval(expression);
        result.value = resultEval;
        expression = resultEval.toString();
    } catch (error) {
        result.value = 'Error';
        expression = '';
    }
}
