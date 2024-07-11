document.addEventListener("DOMContentLoaded",function(){
    let timerelement=document.getElementById("time_element");
    let buybtn=document.getElementById("buy_btn");
    let price=document.getElementById("pricechange");
    let timeleft=10*60;

    function timer(){
        let minutes=Math.floor(timeleft/60);
        let sec=timeleft%60;
        if(sec<10){
            sec='0'+sec;
        }

        timerelement.textContent=`${minutes}:${sec}`;
        timeleft--;

        if(timeleft<0){
            clearInterval(interval);
            alert("Offer Expired");
            price.textContent="@449/-";
        }
    }

    let interval=setInterval(timer,1000)
    timer();
})