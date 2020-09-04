document.getElementById("botaoEnviar").addEventListener("click",validaFormulario)
function validaFormulario() {
  var usuario=document.getElementById("usuario");
  fetch('json/objeto.json', {
    method: 'GET',
    body: formData,
  })

if(usuario.value != "" && usuario.value == user){

  alert("Usuario Correto!" )
  }else{
  alert("Usuário incorreto ou sem dados para visualizar!")
  }
}

$.getJSON( "json/objeto.json", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
    items.push( "<li id='" + key + "'>" + val + "</li>" );
  });
 
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "body" );
});

$(document).ready(function(){
  $('#btn1').click(function(){
    function sendPost() {
      $.ajax({
          type: "POST",
          url: 'https://api.empresaxpto.com/pegar_usuarios',
          data: {json:JSON.parse() (data)  },
          success: success
      });
    }
    function success(result) {
        alert('Process achieved!');
    }
    
  });
});
