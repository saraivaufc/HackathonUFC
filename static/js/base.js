$("form[name='formAjax']").submit(function(event){
	event.preventDefault();
	var url = $(this).attr("action");
	var data = $(this).serialize();
	$.post(url, data, function(data){
		try{
			var n = noty({
				text: data.mensagem,
				type: data.tipo,
			});
		}catch(err) {
			var n = noty({
				text: "Ocorreu um erro ao enviar sua mensagem. Por favor, tente mais tarde.",
				type: 'danger',
				dismissQueue: true,
				timeout : 2000,
			});
		}
	});
});