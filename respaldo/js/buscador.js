$(document).ready(function(){
  $('#search').focus()

  $('#search').on('keyup', function(){
    var tiponegocio= $('#tiponegocio').val();//checked selected
    var search = $('#search').val();
    if (search != '') {
      $.ajax({
        type: 'POST',
        url: 'conexion/search.php',
        data: 
          {'search': search,
          'tiponegocio':tiponegocio}
        ,
        beforeSend: function(){
          $('#result').html('<div class="spinner-border" role="status"> <span class="visually-hidden">Loading...</span></div>')
        }
      })
      .done(function(resultado){
        $('#result').html(resultado)
      })
      /*.fail(function(){
        alert('Hubo un error :(')
      })*/  
    }
    else{
       $('#result').html('');
    }
  })
})




