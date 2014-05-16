$(document).ready(function(){

	$('.addtocart').on('click', function(event) {

		$.ajax({
			type: "POST",
			url: Shop.basePath + "shop/itemupdate",
			data: {
				id: $(this).attr("id"),
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

		return false;

	});

});
