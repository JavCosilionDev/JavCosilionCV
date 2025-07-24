function swAlertBasic(icono, titulo, texto, textoBoton)
{
  Swal.fire({
    icon: icono,
    title: titulo,
    text: texto,
    confirmButtonText: textoBoton,
    buttonsStyling: false,
    customClass: {
        confirmButton: 'btn-primary' 
      } 
  });
}
function swAlertRedir(icono, titulo, texto, textoBoton, link)
{
  Swal.fire({
    icon: icono,
    title: titulo,
    text: texto,
    confirmButtonText: textoBoton,
    buttonsStyling: false,
    customClass: {
        confirmButton: 'btn-primary' 
    }
  }).then((result) => {
      // Redireccionar al usuario después de hacer clic en el boton
      if (result.isConfirmed) {
          window.location.href = link;
      }
  });
}
function swAlertDialog(icono, titulo, texto)
{
  Swal.fire({
    position: "top-end",
    icon: icono,
    title: titulo,
    showConfirmButton: false,
    timer: 1000,
    showClass: {
      popup: `
        animate__animated
        animate__slideInRight
        animate__faster
      `
    },
    hideClass: {
      popup: `
        animate__animated
        animate__zoomOutRight
        animate__faster
      `
    }
  });
}
function iniciarSesion() {
    swAlertRedir("warning", "Inicia Sesion", "Debes iniciar sesión para agregar al carrito", "Iniciar Sesion", "./login.php")
}
// TODO -> agregar logica de iniciar sesion antes de agregar al carrito

function validarPassword(password) {
  // Validar longitud mínima
  if (password.length < 8) {
      return "La contraseña debe tener al menos 8 caracteres.";
  }
  // Validar que contenga al menos una letra mayúscula
  if (!/[A-Z]/.test(password)) {
      return "La contraseña debe contener al menos una letra mayúscula.";
  }

  // Validar que contenga al menos una letra minúscula
  if (!/[a-z]/.test(password)) {
      return "La contraseña debe contener al menos una letra minúscula.";
  }

  // Validar que contenga al menos un número
  if (!/\d/.test(password)) {
      return "La contraseña debe contener al menos un número.";
  }

  // La contraseña cumple con todos los requisitos
  return true;
}

function addPagination(totalProductos, productosPorPag, numPags, funcionOnclick, className, idCategoria, orden) {
  var paginationContainer = $('.' + className);
  var totalPages = Math.ceil(totalProductos / productosPorPag);
  paginationContainer.empty();

  for (var i = 1; i <= totalPages; i++) {
      var activeClass = (i === numPags) ? 'active' : '';
      var pageButton = $(`<li class="page-item ${activeClass}"><a class="page-link" href="#" onclick="${funcionOnclick}(${i}, ${idCategoria}, '${orden}')">${i}</a></li>`);
      paginationContainer.append(pageButton);
  }
}


function formatearFecha(fechaString) {
  // Crea un nuevo objeto de fecha a partir de la cadena de fecha original
  var fecha = new Date(fechaString);

  // Array de nombres de meses en español
  var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

  // Obtiene el día, mes y año de la fecha
  var dia = fecha.getDate();
  var mes = meses[fecha.getMonth()];
  var anio = fecha.getFullYear();

  // Formatea la hora a 'HH:mm'
  var hora = ("0" + fecha.getHours()).slice(-2);
  var minutos = ("0" + fecha.getMinutes()).slice(-2);
  var horaFormateada = hora + ":" + minutos;

  // Construye la cadena de fecha formateada
  var fechaFormateada = dia + " de " + mes + " del " + anio + " a las " + horaFormateada;

  return fechaFormateada;
}

function formatCurrency(number) {
    // Formatear el número como moneda
    var formattedNumber = number.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    
    // Agregar el símbolo de la moneda
    formattedNumber = '$' + formattedNumber;
    
    return formattedNumber;
}

function ocultarSpinner() {
    $('#spinner').removeClass('show');
}

function resumenCompraC() { 
  return $.ajax({
      type: 'POST',
      url: '../action/getCarrito.php',
      dataType: "JSON"
  }); 
}