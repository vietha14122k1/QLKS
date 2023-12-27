const Add = document.querySelector(".add");
const container = document.querySelector(".container");
const remove = document.querySelector(".clear");

Add.addEventListener("click", handleAdd);

function handleAdd() {
    container.classList.toggle("create");
}
remove.addEventListener("click", function() {
    container.classList.remove("create");
});


dragElement(document.querySelector("#box"));

function dragElement(elmnt) {
    var pos1 = 0,
        pos2 = 0,
        pos3 = 0,
        pos4 = 0;
    if (document.getElementById(elmnt.id + "container")) {
        document.getElementById(elmnt.id + "container").onmousedown =
            dragMouseDown;
    } else {
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        elmnt.style.top = elmnt.offsetTop - pos2 + "px";
        elmnt.style.left = elmnt.offsetLeft - pos1 + "px";
    }

    function closeDragElement() {
        document.onmouseup = null;
        document.onmousemove = null;
    }
}



const down2 = document.querySelector('.down')
const up = document.querySelector('.up')
var $$ = document.getElementsByClassName("dsp");
for (var i = 0; i < $$.length; i++) {
    $$[i].addEventListener("click", down);

    function down() {
        this.classList.toggle("ccc");
        var show = this.nextElementSibling;
        if (show.style.maxHeight) {
            show.style.maxHeight = null;
            up.style.display = 'block'
            down2.style.display = 'none'
        } else {
            up.style.display = 'none'
            down2.style.display = 'block'
            show.style.maxHeight = show.scrollHeight + "px";
        }
    }
}