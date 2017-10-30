$(document).ready(function(){
    $("#search").keyup(function(){
    	var vacio =document.getElementById('search');
    	if (vacio.value=='') {
    		document.getElementById("Search2").innerHTML = "";
			return false;
		}else{
	        if($("#search").val().length>1){
	            $.ajax({
	                type: "post",
	                url: "http://localhost:8080/PelisMopped/Welcome/buscar",
	               // cache: false,
	                data:'search='+$("#search").val(),
	                success: function(response){
	                    $('#Search2').html("");
	                    var obj = JSON.parse(response);
	                    if(obj.length>0){
	                        try{
	                            var items=[];
	                            $.each(obj, function(i,val){
	                                items.push($('<a id="nombre">').html(val.Nombre));
	                            });
	                            $('#Search2').append.apply($('#Search2'), items);
	                        }catch(e) {
	                            alert('Exception while request..');
	                        }
	                    }
	                    },
	                error: function(){
	                    alert('Error while request..');
	                }
	            });


	        }
        return false;
   		}
    });
});
