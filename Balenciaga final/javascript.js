let barraBusqueda = document.querySelector('.div_barra_busqueda');
let header = document.querySelector('.header');

window.addEventListener('scroll', e => {
  if (window.pageYOffset > 200) {
    barraBusqueda.style.display = 'none';
    header.style.height = '44.5px';
  } else if (window.pageYOffset < 150) {
    barraBusqueda.style.display = 'flex';
    header.style.height = '89px';
  }
});

document.querySelector('.advertencia').onclick = function (event) {
  event.preventDefault();
  alert('Atencion a navegantes');
};

let enlace = document.querySelectorAll('.li_links');
let novedades = document.querySelector('.menu_oculto_novedades');
let hombre = document.querySelector('.menu_oculto_hombre');
let mujer = document.querySelector('.menu_oculto_mujer');
let overlay = document.querySelector('.capa');

enlace[0].addEventListener('mouseover', function () {
  novedades.classList.add('visible');
  hombre.classList.remove('visible');
  mujer.classList.remove('visible');
  overlay.classList.add('visible');
});

enlace[1].addEventListener('mouseover', function () {
  hombre.classList.add('visible');
  overlay.classList.add('visible');
  novedades.classList.remove('visible');
  mujer.classList.remove('visible');
});

enlace[2].addEventListener('mouseover', function () {
  mujer.classList.add('visible');
  overlay.classList.add('visible');
  novedades.classList.remove('visible');
  hombre.classList.remove('visible');
});

novedades.addEventListener('mouseleave', function () {
  novedades.classList.remove('visible');
  overlay.classList.remove('visible');
});

hombre.addEventListener('mouseleave', function () {
  hombre.classList.remove('visible');
  overlay.classList.remove('visible');
});

mujer.addEventListener('mouseleave', function () {
  mujer.classList.remove('visible');
  overlay.classList.remove('visible');
});

function addBorderToLinks() {
  let links = document.querySelectorAll('.li_links_novedades');
  if (window.location.href.indexOf('novedades.php?categoria=mujer') !== -1) {
    links[0].classList.add('li_links_novedades_a');
    enlace[0].classList.add('li_links_a');
  }
  if (window.location.href.indexOf('novedades.php?categoria=hombre') !== -1) {
    links[1].classList.add('li_links_novedades_a');
    enlace[0].classList.add('li_links_a');
  }
  if (window.location.href.indexOf('novedades.php?categoria=discover') !== -1) {
    links[2].classList.add('li_links_novedades_a');
    enlace[0].classList.add('li_links_a');
  }
}
window.addEventListener('load', addBorderToLinks);

document.getElementById('boton_cesta').addEventListener('click', function () {
  window.location.href = 'cesta.php';
});

document.addEventListener('DOMContentLoaded', function () {
  let botones = document.getElementsByClassName('boton_compra');
  for (let i = 0; i < botones.length; i++) {
    botones[i].addEventListener('click', function () {
      let productoId = this.getAttribute('data-producto-id');
      let xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
        }
      };
      xhttp.open('GET', 'guardar_producto.php?id=' + productoId, true);
      xhttp.send();
    });
  }
});

document.addEventListener('DOMContentLoaded', function () {
  let botoness = document.getElementsByClassName('boton_producto');
  for (let i = 0; i < botoness.length; i++) {
    botoness[i].addEventListener('click', function () {
      let productoId = this.getAttribute('data-producto-id');
      let xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
        }
      };
      xhttp.open('GET', 'guardar_producto.php?id=' + productoId, true);
      xhttp.send();
    });
  }
});
