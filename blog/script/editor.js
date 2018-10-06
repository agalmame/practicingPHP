function checkTitle(event){
    var title = document.querySelector("input[name='title']");
    var warning = document.querySelector("form #title-warning");
    if(title.value==""){
        event.preventDefault();
        var msg = document.createTextNode("You must fill title field");
        warning.appendChild(msg);
    }
}

function init(){
    var ediorForm = document.querySelector("form#editor");
    var title = document.querySelector("input[name='title']");
    ediorForm.addEventListener("submit",checkTitle,false);
    var p = document.querySelector("#title-warning");
    title.addEventListener("keyup",()=>{
        p.innerHTML="changes not saved!";
    })
    
}

document.addEventListener("DOMContentLoaded",init,false);