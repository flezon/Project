$(document).ready(function() {
    //Al escribr dentro del input con id="search"
    $('#search').keyup(function(){
    	var vacio =document.getElementById('search');
    	if (vacio.value=='') {
    		document.getElementById("Search2").innerHTML = "";
			return false;
		}else{
	        //Obtenemos el value del input
	        var search = $(this).val();
	        var dataString = 'search='+search;
	        //Le pasamos el valor del input al ajax
	        $.ajax({
	            type: "post",
		        url: "http://localhost:8080/PelisMopped/Welcome/buscar",
	            data: dataString,
	            success: function(data) {
	            	$('#Search2').html("");
	                //Escribimos las sugerencias que nos manda la consulta
	                $('#Search2').fadeIn(1000).html(data);
	                //Al hacer click en algua de las sugerencias
	                $('.suggest-element').on('click', function(){
	                    //Obtenemos la id unica de la sugerencia pulsada
	                    var id = $(this).attr('id');

                        /*$.post('http://localhost:8080/PelisMopped/Welcome/BuscarCriterio',{ 'id':id },function(response){

                        });*/
	                    //Editamos el valor del input con data de la sugerencia pulsada
	                    //$('#search').val($('#'+id).attr('data'));

                         window.location.href = "http://localhost:8080/PelisMopped/Welcome/BuscarCriterio/"+id;
	                    //Hacemos desaparecer el resto de sugerencias
	                    //$('#Search2').fadeOut();

						//return false;
	                });
	            }
	        });
	   	}
    });


    $("form#formularioComentar").submit(function(form){
        form.preventDefault();
        $.post('http://localhost:8080/Project/Welcome/nuevoComentario', $('form.formularioComentar').serialize(), function(data){
            $('div.jsError').html(data);
        });

    });
});
