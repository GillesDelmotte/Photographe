require("./scss/main.scss");
require("./scss/contact.scss");
require("./scss/part.scss");
require("./scss/pro.scss");
require("./scss/art.scss");
require("./scss/partpost.scss");
require("./scss/artpost.scss");
require("./scss/propost.scss");

const ajax = (url = '', fn, method = 'GET', data = null) => {
    if (!url || !fn) return;
    const req = new XMLHttpRequest()
    req.onreadystatechange = fn;
    req.open(method, url, true);
    req.send(data)
};

const links = document.querySelectorAll(".ajax_el");

const loadHtmlContent = (e) => {
    e.stopPropagation();
    e.preventDefault();
    ajax(e.currentTarget.getAttribute("data-url"), (datas)=>{
        if(datas.target.readyState !== 4 || datas.target.status !== 200) return;
        document.querySelector(".content_ajax").innerHTML = datas.target.responseText;
    });
};

links.forEach((link)=>{
    link.addEventListener("click", loadHtmlContent, false)
});

window.addEventListener("click", (e)=>{

    const previous = document.querySelector('.button__gallery__previous')
    const next = document.querySelector('.button__gallery__next')
    if(e.target === previous){
        plusDivs(-1)
        event.stopPropagation();
        event.preventDefault();
    }

    if(e.target === next){
        plusDivs(1)
        event.stopPropagation();
        event.preventDefault();
    }
})


let slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    let i;
    let x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}


