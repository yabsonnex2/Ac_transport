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