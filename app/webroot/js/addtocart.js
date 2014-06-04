$(document).ready(function(){

	$('.addtocart').on('click', function(event) {
		var productId = $(this).attr("id");
		$.ajax({
			type: "POST",
			url: Shop.basePath + "shop/validaestabelecimento",
			data: {
				id: productId,
			},
			dataType: "json",
			success: function(data) {
				if (data.valido) {
					$.ajax({
						type: "POST",
						url: Shop.basePath + "shop/itemupdate",
						data: {
							id: productId,
							mods: $("#modselected").attr("value"),
							quantity: 1
						},
						dataType: "json",
						success: function(data) {
							
							$('#msg').html('<div class="alert alert-success flash-msg">Produto adicionado ao Carrinho</div>');
							$('#cartbutton').show();
							$('.flash-msg').delay(3000).fadeOut('slow');
							
						},
						error: function() {
							alert('Erro ao adicionar Produto !!!');
						}
					});
				} else {
					$('#msg').html('<div class="alert alert-danger flash-msg">Só é permitido comprar produtos do mesmo estabelecimento.</div>');
					$('#cartbutton').show();
					$('.flash-msg').delay(3000).fadeOut('slow');
				}

			},
			error: function() {
				alert('Erro ao adicionar Produto !!!');
			}
		});
		
		return false;

	});

});
