var milisecond = 0;
var second = 0;
var minute = 0;
var timer;


var stopwatch = document.querySelector('.stopwatch');
var laps = document.querySelector('.laps');


function start(){
    if(!timer){
        timer = setInterval(run, 10);
    }
};

function run(){
    stopwatch.textContent = getTimer();
    milisecond++;
    if(milisecond == 100){
        milisecond = 0;
        second++;
    }if(second == 999){
        second = 999;
    }
}
function stop(){
    stopTimer();
}

function restart(){
    stopTimer();
    milisecond = 0;
    second = 0;
    minute = 0;
    stopwatch.textContent = getTimer();
}
function stopTimer(){
    clearInterval(timer);
    timer = false;
}

function getTimer(){
    return (second > 9 && second < 100 ? "0" + second : second < 10 ? "00" + second : second) + ":" + (milisecond < 10 ? "0" + milisecond : milisecond);
}


function lap(){
    if(timer){
        var li = document.createElement('li');
        li.innerHTML = getTimer();
        laps.appendChild(li);
    }
}
