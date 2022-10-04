$(document).ready(function() {

var nit = $("#nit").val()
	var bandera = 0;
    $("#siguiente").on("click", function() {
		var nomCliente = $("#nomCliente")
		var nit = $("#nit")
		var condiciones = $("#checkTerminos").is(":checked");
		if (nomCliente.val()== ""){
			$("#valida1").css({"display":"block","color":"red"})
			nomCliente.css({"border-color":"red"})
			bandera = 1;
			event.preventDefault();
		}
		if (nit.val()== ""){
			$("#valida2").css({"display":"block","color":"red"})
			nit.css({"border-color":"red"})
			bandera = 1;
			event.preventDefault();
		}
		if (!condiciones) {
            $("#valida9").css({"display":"block","color":"red"})
			$("#checkTerminos").css({"border-color":"red"});
			bandera = 1;
            event.preventDefault();
        }
	});
	$('#rtc').on('input', function () { 
		this.value = this.value.replace(/[^0-9]/g,'');
	});
	
	$('.valida').on('input', function () {		
		this.value = this.value.replace(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~¿¡!]/g,'');
	});
	
	$('#modal').modal("show");
	
});