var icon = document.querySelector('.icon')
var menu = document.querySelector('.menu')

icon.addEventListener('click', function () {
  menu.style.display = menu.style.display == 'flex' ? 'none' : 'flex'
  menu.classList.add('menu-response')
})

// telefono

var datosMensaje = ['5578435531', 'Hola, Puedo hacer un pedido']

// Función para construir el enlace de WhatsApp y abrirlo en una nueva ventana
function enviarMensaje () {
  // Obtener los datos del array
  var telefono = datosMensaje[0]
  var mensaje = datosMensaje[1]

  // Codificar el mensaje para usarlo en el enlace
  mensaje = encodeURIComponent(mensaje)

  // Construir el enlace de WhatsApp
  var enlace = 'https://wa.me/' + telefono + '?text=' + mensaje

  // Abrir el enlace en una nueva ventana
  window.open(enlace)
}




        // function isElementInViewport(el) {
        //     var rect = el.getBoundingClientRect();
        //     return (
        //         rect.top >= 0 &&
        //         rect.left >= 0 &&
        //         rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        //         rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        //     );
        // }

        // function handleScroll() {
        //     var menuImages = document.querySelectorAll('.menu-imagen');
        //     menuImages.forEach(function (image) {
        //         if (isElementInViewport(image)) {
        //             image.classList.add('show');
        //         }
        //     });
        // }

        // window.addEventListener('scroll', handleScroll);
        // handleScroll(); // Call the function once initially to check the initial state  