const menuLateralAmpliado = document.getElementById('container-menu-lateral-ampliado');
const menuLateral = document.getElementById('container-menu-lateral');
const logoScroll = document.getElementById('logo-scroll');

function aparecer(){
  menuLateralAmpliado.style.display = 'unset';
  menuLateral.style.display = 'none';
  console.log("pilin");
}

function desaparecer(){
  menuLateralAmpliado.style.display = 'none';
  menuLateral.style.display = 'unset';
}

window.addEventListener('scroll', () =>{
  if(window.scrollY >= 115){
    logoScroll.style.visibility = 'visible'
  }else{
    logoScroll.style.visibility = 'hidden'
  }
  // console.log(window.scrollY);
})