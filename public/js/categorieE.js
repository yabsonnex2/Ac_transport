// Pour faire en sorte que l'article s'adapte à la largeur de l'écran
function resizeArticle() {
    var articleWidth = document.querySelector('.article').offsetWidth;
    document.querySelector('.content').style.width = articleWidth + 'px';
  }
  
  window.addEventListener('resize', resizeArticle);
  resizeArticle();
  