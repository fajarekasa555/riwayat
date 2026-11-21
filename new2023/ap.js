var ms = 0;
var s = 0;
var m = 0;

var timer;

var stopwatch = document.querySelector('.stopwatch');
var laps = document.querySelector('laps');

function start(){
    if(!timer){
        timer = setInterval(run,10);
    }
}

function run(){
    stopwatch.textContent = getTimer()
    ms++;
    if(ms==100){
        ms = 0;
        s++;
    }if(s==999){
        second = 999;
    }

}

function stop(){
    stopTimer();
}

function restart(){
    stopTimer();
    ms = 0;
    s = 0;
    m=0;
    stopwatch.textContent = getTimer();
}

function stopTimer(){
    clearInterval(timer);
    timer = false
}


function getTimer(){
    return(s > 9 &&s< 100? "0" +s : s <  10 ? "00" +s : s) + ":" +(ms < 10 ? "0" + ms : ms)

}
function lap(){
    if(timer){
        var li = document.createElement('li');
        li.innerHTML = getTimer();
        laps.appendChild(li);
    }
}