$('#menu a,#FooterMenu a,#navs a').click(function(e){
  e.preventDefault();
  $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 500);
});

// Cargar
function cargar(){
  $('#loader').fadeIn();
}
// Descargar
function descargar(){
  $('#loader').fadeOut();
}
// Bx Slider
$(document).ready(function(){
  descargar();
});

// Validacion del formulario
// Validacion del formulario 1
$('#contacto').validate(  {
  rules: {
    nombre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: true,
      minlength: 7
    },
    email: {
      email: true,
      required: true,

    },
    mensaje: {
      required: true,
    }
  },
  messages: {
    nombre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    telefono: {
      required: "Por favor escribe tu teléfono",
      minlength: "Tu teléfono es demasiado corto"
    },
    email: {
      required: "Por favor escribe tu E-mail",
      minlength: "Escribe un E-mail valido"
    },
    mensaje: {
      required: "Por favor completa este campo",
    }

  },
  submitHandler: function(form){
    cargar();
    $.post('includes/validation.php',$('#contacto').serialize())
    .done(function(data){
      $('.form-control').val('');
      descargar();
      console.log(data);
    })
  }
});