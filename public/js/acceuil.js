/*bars de liens*/

var bars=document.querySelector('.header')

window.addEventListener('scroll',function(){
    if(window.scrollY >10){
        bars.classList.add('black')
    }else{
        bars.classList.remove('black')
        bars.style.transition="1s"
    }
})

/*bouton de scroll*/

    var btn=document.querySelector('.bouton')
     btn.addEventListener('click',function(){
    window.scrollTo({
        top:0,
        left:0,
        behavior:"smooth"
    })
})





/***bouton header */
var hamburger=document.querySelector('.hamburger')
var lines=document.querySelector('.lines')
var croix=document.querySelector('.croix')
var navlink=document.querySelector('.header')

hamburger.addEventListener('click',function(){
    navlink.classList.toggle('open')

    /*if( croix.getBoundingClientRect().width != 20.625){
        croix.style.display="none"
    }*/
    if(navlink.classList.contains('open')){
        lines.style.display="none"
        croix.innerHTML="<i class='fa fa-times'></i>"
    }else{
        lines.style.display="block"
        croix.innerHTML=""
    }

})