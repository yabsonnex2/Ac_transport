 (function(){
        var scrolly=function(){
            var SupporPageOFFSet=window.pageXOFFset!==undefined;
            var isCSS1Compat=((document.compatMode||"")==="CSS1Compat");
        
            return SupporPageOFFSet?window.pageXOffset:
            isCSS1Compat?document.documentElement.scrollTop:
            document.body.scrollTop;
        }
    
    var element=document.querySelector('.message')

            var rect=element.getBoundingClientRect()
            var top=rect.top + scrolly()
            var offset=parseInt(element.getAttribute('data-offset') || 0,10)
            if(element.getAttribute('data-constraint')){
                var constraint=document.querySelector(element.getAttribute('data-constraint'))
            }else{
                var constraint=document.body
            }
    
            var constraintrect=constraint.getBoundingClientRect()
            var constraintbottom=constraintrect.top + scrolly() +constraintrect.height -offset-rect.height
            
            
            var onscroll=function(){ 
            if(scrolly()>constraintbottom && element.style.position !="absolute"){
            element.style.position="absolute"
            element.style.bottom="0"
            element.style.top="auto"
            }
            
            else if(scrolly()>top -offset && scrolly()<constraintbottom && element.style.position != "fixed"){
    
                element.style.position="fixed"
                element.style.top=offset + "px"
                element.style.bottom="auto"
                element.style.width=rect.width + "px"
    
            }else if(scrolly()<top -offset && element.style.position != "static"){
                element.style.position="static"

            }
            }
            
            
            window.addEventListener('scroll',onscroll)


    })()

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

/*formulaire*/

var rdt1=document.querySelector('.radio1')
var rdt2=document.querySelector('.radio2')

rdt1.addEventListener('click',function(){
    if(rdt2.value == true){

    }
})

if(rdt1==false){
    rdt1=true
}

/*cocher les deux cases*/
var check1=document.querySelector('.radio1')
var check2=document.querySelector('.radio2')
var label1=document.querySelector('.lab5')
var label2=document.querySelector('.lab6')
var affiche=document.querySelector('.bouton-click')



check1.addEventListener('click',function(){
    check1.style.background="#1878f8"
    check2.style.background="white"

    var parent=this.parentNode.parentNode
    parent.querySelector('.affich').style.display="none"
})


check2.addEventListener('click',function(){
    var bouton2=document.getElementById('bouton2')
var erreur4=document.getElementById('erreur4')
    check2.style.background="#1878f8"
    check1.style.background="white"
    
    var parent=this.parentNode.parentNode
    parent.querySelector('.affich').style.display="flex"


    if(bouton2.checked==true){
        erreur4=""
    }
    

})




/*submit*/

var form=document.querySelector('.form').addEventListener('submit', function(e){

var bouton1=document.getElementById('bouton1')
var bouton2=document.getElementById('bouton2')

var erreur1;
var erreur2;
var erreur3;
var erreur4;
var erreur5;
var nometprenom=document.querySelector('.ipt1')
var tel=document.querySelector('.ipt2')
var mail=document.querySelector('.ipt3')
var entreprise=document.getElementById('entreprise')
var alertMessage=document.querySelector('.alert-message')

var cout=document.querySelector('.cout')
var radio1=document.querySelector('.radio1')
var casess = document.querySelectorAll('.casess')

for(var i=0;i<casess.length;i++){
  if(!casess[i].value){
      e.preventDefault()
       casess[i].style.border="2px solid red"
   }else{
      casess[i].style.border="none"
   }
}



if(bouton1.checked==false && bouton2.checked==false){
erreur4="veillez cocher un bouton" 
}else if(bouton2.checked==true && !entreprise.value){
    e.preventDefault()
entreprise.style.border="2px solid red"
}else{
    entreprise.style.border="none"
}



if(erreur4){
    e.preventDefault()
document.getElementById('erreur4').innerHTML=erreur4

}else{
    document.getElementById('erreur4').innerHTML=""
}




if(bouton1.checked==false && bouton2.checked==false || !mail.value || !tel.value || !nometprenom.value){
    alertMessage.innerHTML='<i class="fa fa-exclamation-circle"></i>veillez remplir toutes les cases'

}else if(bouton2.checked==true && !entreprise.value){

    alertMessage.innerHTML='<i class="fa fa-exclamation-circle"></i>veillez remplir toutes les cases'
}else{
    alertMessage.innerHTML=""
}

})


