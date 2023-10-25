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
     if(navlink.classList.contains('open')){
        lines.style.display="none"
        croix.innerHTML="<i class='fa fa-times'></i>"
     }else{
         lines.style.display="block"
         croix.innerHTML=""
     }
})


//blocage de formulaire

var form=document.querySelector('.form-bloque-droite').addEventListener('submit',function(e) {
    var cases = document.querySelectorAll('.cases')
      for(var i=0;i<cases.length;i++){
        if(!cases[i].value){
            e.preventDefault()
             cases[i].style.border="2px solid red"
         }else{
            cases[i].style.border="none"
         }
    }
})
