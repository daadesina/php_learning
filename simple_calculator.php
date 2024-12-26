<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./output.css">
    <style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    </style>
    <title>Simple Calculator</title>
</head>

<body>
    <div class=" bg-blue-600 h-screen w-screen flex justify-center items-center">
        <!-- the Calculator box -->
        <div class=" flex flex-col gap-4 text-xl text-white font-semibold w-72 h-fit px-4 py-5 rounded-3xl"
            style="background-color: #17181A">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" id="calculator_form">
                <!-- screen -->
                <div class="w-full h-40 items-center flex justify-center">
                    <div class="w-full flex flex-col gap-2 text-right">
                        <!-- input -->
                        <input id="input_screen" readonly
                            class="text-right w-full h-9 overflow-y-scroll no-scrollbar bg-inherit"
                            style="color: #818181; word-wrap: break-word; overflow-wrap: break-word; line-height: 1.5;">
                        <!-- answer -->
                        <input id="answer_screen" readonly
                            class="text-right w-full h-9 overflow-y-scroll no-scrollbar bg-inherit"
                            style="color: #818181; word-wrap: break-word; overflow-wrap: break-word; line-height: 1.5;"
                            value="<?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $num1 = (float) $_POST['num1'];
                                $num2 = (float) $_POST['num2'];
                                $operator = htmlspecialchars($_POST['operator']);

                                switch ($operator) {
                                    case '+':
                                        echo '= ' . $num1 + $num2;
                                        break;
                                    case '-':
                                        echo '= ' . $num1 - $num2;
                                        break;
                                    case '*':
                                        echo '= ' . $num1 * $num2;
                                        break;
                                    case '/':
                                        echo '= ' . $num1 / $num2;
                                        break;
                                }
                            }
                            ?>">
                    </div>
                    <div class="flex flex-col gap-1">
                        <!-- invisible inputs -->
                        <input type="text" name="num1" id="num1" hidden
                            style="color: #818181; word-wrap: break-word; overflow-wrap: break-word; line-height: 1.5;"><br>
                        <input type="text" name="operator" id="operator" hidden
                            style="color: #818181; word-wrap: break-word; overflow-wrap: break-word; line-height: 1.5;"><br>
                        <input type="text" name="num2" id="num2" hidden
                            style="color: #818181; word-wrap: break-word; overflow-wrap: break-word; line-height: 1.5;"><br>
                    </div>

                </div>
            </form>
            <div class=" flex justify-between gap-4">
                <!-- first column -->
                <div class="flex flex-col items-center gap-4">
                    <button id="clear_all" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #616161; color: #A5A5A5">Ac</button>
                    <button id="seven" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">7</button>
                    <button id="four" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">4</button>
                    <button id="one" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">1</button>
                </div>
                <!-- second column -->
                <div class="flex flex-col items-center gap-4">
                    <button id="cancle" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #616161; color: #A5A5A5"><img src="./images/cancel.png" alt=""
                            class="h-5"></button>
                    <button id="eight" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">8</button>
                    <button id="five" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">5</button>
                    <button id="two" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">2</button>
                </div>
                <!-- third column -->
                <div class="flex flex-col items-center gap-4">
                    <button id="divide" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #005DB2; color: #339DFF">/</button>
                    <button id="nine" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">9</button>
                    <button id="six" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">6</button>
                    <button id="three" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #303136; color: #29A8FF">3</button>
                </div>
                <!-- fourth column -->
                <div class="flex flex-col items-center gap-4">
                    <button id="times" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #005DB2; color: #339DFF">*</button>
                    <button id="minus" class=" w-12 h-11 px-3 py-2 rounded-xl"
                        style="background-color: #005DB2; color: #339DFF">-</button>
                    <button id="plus" class=" w-12 h-24 mt-1 px-3 py-2 rounded-xl"
                        style="background-color: #005DB2; color: #339DFF">+</button>
                </div>
            </div>
            <!-- fifth column -->
            <div class="flex items-center gap-6">
                <button id="zero" class=" w-28 h-11 px-3 py-2 rounded-xl"
                    style="background-color: #303136; color: #29A8FF">0</button>
                <button id="dot" class=" w-12 h-11 px-3 py-2 rounded-xl"
                    style="background-color: #303136; color: #29A8FF">.</button>
                <button type="submit" form="calculator_form" id="equals" class=" w-12 h-11 px-3 py-2 rounded-xl"
                    style="background-color: #1991FF; color: #B2DAFF">=</button>
            </div>
        </div>
    </div>

    <script>
    const zero = document.getElementById('zero');
    const one = document.getElementById('one');
    const two = document.getElementById('two');
    const three = document.getElementById('three');
    const four = document.getElementById('four');
    const five = document.getElementById('five');
    const six = document.getElementById('six');
    const seven = document.getElementById('seven');
    const eight = document.getElementById('eight');
    const nine = document.getElementById('nine');
    const dot = document.getElementById('dot');
    const equals = document.getElementById('equals');
    const plus = document.getElementById('plus');
    const minus = document.getElementById('minus');
    const times = document.getElementById('times');
    const divide = document.getElementById('divide');
    const clear_all = document.getElementById('clear_all');
    const cancle = document.getElementById('cancle');
    const input_screen = document.getElementById('input_screen');
    const answer_screen = document.getElementById('answer_screen');
    const num1 = document.getElementById('num1')
    const num2 = document.getElementById('num2')
    const operator = document.getElementById('operator')



    zero.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `0`
        if (operator.value === '') {
            num1.value += `0`
        } else {
            num2.value += `0`
        }
    })
    one.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `1`
        if (operator.value === '') {
            num1.value += `1`
        } else {
            num2.value += `1`
        }
    })
    two.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `2`
        if (operator.value === '') {
            num1.value += `2`
        } else {
            num2.value += `2`
        }
    })
    three.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `3`
        if (operator.value === '') {
            num1.value += `3`
        } else {
            num2.value += `3`
        }
    })
    four.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `4`
        if (operator.value === '') {
            num1.value += `4`
        } else {
            num2.value += `4`
        }
    })
    five.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `5`
        if (operator.value === '') {
            num1.value += `5`
        } else {
            num2.value += `5`
        }
    })
    six.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `6`
        if (operator.value === '') {
            num1.value += `6`
        } else {
            num2.value += `6`
        }
    })
    seven.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `7`
        if (operator.value === '') {
            num1.value += `7`
        } else {
            num2.value += `7`
        }
    })
    eight.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `8`
        if (operator.value === '') {
            num1.value += `8`
        } else {
            num2.value += `8`
        }
    })
    nine.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `9`
        if (operator.value === '') {
            num1.value += `9`
        } else {
            num2.value += `9`
        }
    })
    divide.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `/`
        operator.value = '/'
    })
    minus.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `-`
        operator.value = '-'
    })
    plus.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `+`
        operator.value = '+'
    })
    times.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `*`
        operator.value = '*'
    })
    dot.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value += `.`
        if (operator.value === '') {
            num1.value += `.`
        } else {
            num2.value += `.`
        }
    })
    clear_all.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value = ``
        num1.value = ``
        num2.value = ``
        operator.value = ``
        answer_screen.value = ``
    })

    cancle.addEventListener('click', function(e) {
        e.preventDefault()
        input_screen.value = input_screen.value.slice(0, -1)
        if (operator.value === '') {
            num1.value = num1.value.slice(0, -1)
        } else if (num2.value === '' && operator.value != '') {
            operator.value = ''
        } else {
            num2.value = num2.value.slice(0, -1)
        }
    })

    // equals.addEventListener('click', function(e) {
    //     e.preventDefault()
    //     if (operator.value === '+') {
    //         answer_screen.value = ``
    //         answer_screen.value = parseFloat(num1.value) + parseFloat(num2.value)
    //     }


    // })
    </script>
</body>

</html>