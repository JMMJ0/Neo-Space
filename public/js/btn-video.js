var theVideo = document.getElementById("myvideo"),
    theTxt = document.querySelector(".txt-cont"),
    playVG = document.getElementById("playVG"),
    playBO = document.getElementById("playBO"),
    two = document.getElementById("two"),
    cierra = document.getElementById("cierra"),
    bo = document.getElementById("BO");



/* Adding an event listener to the play button. When the play button is clicked, the video will play,
the controls will be shown, and the text will fade out. */
playVG.addEventListener("click", function (e) {
    theVideo.play();
    theVideo.controls = true;
    theTxt.style.opacity = "0";
    theTxt.style.transition = "all .5s";
    // the.style.display = "none";
});


playBO.addEventListener("click", function(e){
    bo.style.display = "inline";
    two.style.backgroundColor = "rgba(0, 0, 0, 0.308)";
    cierra.style.display = "flex";
    cierra.style.visibility = "visible";
});


cierra.addEventListener("click", function(e){
    cierra.style.display = "none";
    cierra.style.visibility = "hidden";
    cierra.style.transition = "0";
    bo.style.display = "none";

})



