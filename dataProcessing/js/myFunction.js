//Отслеживание сколько раз нажали на объект
var counter = 1;
function onClickButton(el){
    document.getElementById("el").innerHTML = "Ты нажал на меня " + counter++ + " раза";
    console.log(counter);
    console.log(el.name);
    el.style.cssText = "border-radius: 5px; border: 0; font-size: 20px; color: red";
}

function onClickButton2(el){
    counter = 0;
    document.getElementById("el").innerHTML = "Нажми на меня";
    document.getElementById("el").style.cssText = "border-radius: 0px; border: 5px; font-size: 20px; color: black";
}

function onImput(el){
    el.value
    console.log(el.value);
}

function imageSize(el){
    var height = el.style.height;
    if (height == "10em") {
        document.getElementById("myImg").style.cssText = "height: 20em"
    } else {
        document.getElementById("myImg").style.cssText = "height: 10em"
    }
    console.log(height);
}

//Выбор элемента по Id
var text = document.getElementById("text");
text.style.cssText = "color: red";

//Выбор элемента по названию тега
var spans = document.getElementsByTagName("span")
for (var i = 0; i < spans.length; i++) {
    console.log(spans[i].innerHTML);
}

//Выбор элемента по названию class
var spans = document.getElementsByClassName("simple-text")
for (var i = 0; i < spans.length; i++) {
    console.log(spans[i].innerHTML);
}
//