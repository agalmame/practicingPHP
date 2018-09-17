window.console.log('hello again js but this time from php')

function init(){
    var lightboxElement = "<div id='lightbox'>"
    lightboxElement += "<div id='overlay' class='hidden'></div>"
    lightboxElement += "<img class='hidden' id='big-image'></img>"
    lightboxElement += "</div"
    document.querySelector('body').innerHTML += lightboxElement
    prepareThumbs()
}
function toggle(event){
    var clickedImage = event.target
    var bigImage = document.querySelector("#big-image")
    var overlay = document.querySelector("#overlay")
    bigImage.src = clickedImage.src
    if(overlay.getAttribute("class")==="hidden"){
        overlay.setAttribute("class","showing")
        bigImage.setAttribute("class","showing")
    }else{
        overlay.setAttribute("class","hidden")
        bigImage.setAttribute("class","hidden")
    }
}
function prepareThumbs(){
    var liElements = document.querySelectorAll("ul#images li")
    var image, li;
    for (var i=0;i<liElements.length;i++){
        li = liElements[i]
        li.setAttribute("class","lightbox")
        
        image = li.querySelector("img");
        console.log(liElements[i])
        image.addEventListener("click",toggle,false)
    }
}
document.addEventListener('DOMContentLoaded',init,false)
