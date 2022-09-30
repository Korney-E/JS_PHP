//ВЫВОД ЗНАЧЕНИЙ
    //Вывод информации на страницу
    document.write("<br/> Hello world");
    //Вывод информации в консоль
    console.log("Hello world");
    console.info("Hello world");
    //Вывод ошибки в консоль
    console.error("Ошибка...");
    //Вывод предупреждения в консоль
    console.warn("Предупреждение...");


//ОДНОМЕРНЫЕ МАССИВЫ
    //Создание массива
    var arr = new Array(54, 7, 98, 44, 1235);
    //Сокращенный способ создания массива
    var arr2 = [54, 7, 98, 44, 1235];
    //Вывод массива в консоль
    console.log(arr2);
    //Вывод элемента массива в консоль
    console.log(arr2[0]);
    //Изменение значения элемента массива
    arr2[0] = 55;
    //Вывод элемента массива в консоль
    console.log(arr2[0]);
    //Вывод длинны массива в консоль
    console.log("Длинна массива: " + arr2.length);

//МНОГОМЕРНЫЕ МАССИВЫ
    //Создание многомерного массива
    var arr3 = [[1, 2, 3, 4, 5], [11, 12, 13, 14, 15], [21, 22, 23, 24, 25], [31, 32, 33, 34, 35]]
    //Вывод многомерного массива в консоль
    console.log(arr3);
    //Вывод элемента многомерного массива в консоль
    console.log(arr3[1][0]);

//УСЛОВНЫЕ КОНСТРУКЦИИ
    var nuber = 5;
    var arcept = true;

//If, else if, else
    if (nuber == 5 || arcept){
        document.write("<br> Число равно 5");
    } else if(nuber == 6){
        document.write("<br> Число равно 6");
    } else {
        document.write("<br> Число не равно 5 и не равно 6");
    }

/* Switch, case:
   - в switch указываем какую переменную проверяем;
   - в case что делаем если пременная принимает указанное значение/
*/
    switch (nuber){
        case 8:
            document.write("<br> Значение равно 5");
            break;
        default:
            document.write("<br> Не одно значение не подошло<br>");
            break;
    }

//ЦИКЛЫ
//Цикл for
    for (var i = 1; i <= 10; i++) {
        document.write("Цикл for № " + i +"<br>");
    }
//Цикл for исользование brake
    for (var i = 1; i <= 10; i++) {
        document.write("Цикл for исользование brake № " + i +"<br>");
        if (i > 7)
            break;
    }
//Цикл for исользование continue - пропускает исполнение цикла согласно условия
for (var i = 1; i <= 10; i++) {
    if (i % 2 != 0)
        continue;
    document.write("Цикл for исользование continue № " + i +"<br>");
}
//Цикл for для переборки массива
var arr4 = [4, 5, 54, 68, 88, 97, 77, 244, 5887]
for (var i = 0; i < arr4.length; i++) {
    document.write("Элементы массива " + arr4[i] +"<br>");
}

/*Цикл while - отличие от цикла for в том что внутри цикла while записывается только условие,
               а создание переменной и ее изменение происходит за пределами цикла*/
    var j = 1;
    while (j <= 10){
        document.write("Цикл while № " + j +"<br>");
        j++;
    }
//Бесконечный цикл
    var passNo = true;
    var passNo2 = 1;
    while (passNo) {
        document.write("Введите правильный пароль " + passNo2 + "<br>");
        passNo2++;
        if (passNo2 == 11) {
            passNo = false;
        }
    }
//Цикл do while
    var passNo3 = false;
    var passNo4 = 1;

    do {
        document.write("Цикл do while. Введите правильный пароль " + passNo4 + "<br>");
        if (passNo4 == 11){
            passNo3 = true;
            }
        passNo4++;
        } while (passNo3 == false);

//МЕТОДЫ ОБЪЕКТА MATH
    //Минимальное значение
    console.log("Math: " + Math.min(6, 5, 1, 8));
    //Максимальное значение
        console.log("Math: " + Math.max(6, 5, 1, 8));

//ВСПЛЫВАЮЩИЕ ОКНА
//Alert
    alert("Вы сейчас видите всплывающее окно")
//Confirm - из этого метода можно получить значени в зависимости какую кнопку нажал пользователь true или false
//          для этого необходимо переменной присвоить значение confirm
    var data = confirm("Вы сейчас видите всплывающее окно?");
    if (data == true) {
        alert("Вы подтвердили что увидели всплывающее окно")
    }else {
        alert("Вы не  увидели всплывающее окно")
    }
//Prompt - благодоря этому методу можно получить некое значение от пользователя через всплывающее окно
//Первое значение в методе это текст собщения, второе значение по умолчанию


    do {
        var data2 = null;
        data2 = prompt("Напишите сколько Вам лет", 20);
        if (data2 == null || data2 == undefined) {
            alert("Введите, пожалуйста, Ваш возраст")
        }
    } while (data2 == null || data2 == undefined)
    document.write("Вы указали что Вам " + data2 + " лет<br>")

//ФУНКЦИИ
    var name = "Вася"
    function info(name){
     document.write("Функция №1. Привет " + name + "<br>");
     var w = "Функция №1. Привет " + name + "<br>";
     return w;
    }
    var t1 = info(name);
    document.write(t1)

    function info2 (t1) {
     document.write("Функция №2. Ввыводит значение функции №1 " + t1 + "<br>");
    }
    info2(t1);

//ТАЙМЕРЫ И ИНТЕРВАЛЫ
//Интервалы. Функция setInterval() первый параметр название функции, второй параметр количество милисекунд
let z = 0;
setInterval(my_function, 1000);
function my_function() {
    z++;
    console.log(z);
}

setInterval(function () {
    z++;
    console.log("Прошло секунд: " + z);
}, 1000);
