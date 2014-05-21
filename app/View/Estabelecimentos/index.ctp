<div class="estabelecimentos index">
	<img alt="Escolha o Restaurante" title="Escolha o Restaurante" class="passos-compra" src="img/passo1.gif" />
	<ul class="listagem-estabelecimento clearfix">
		<?php foreach ($estabelecimentos as $estabelecimento): ?>
				<li class="item-estabelecimento">
					<a href="#" title="" class="link-img-item">
						<span class="fundo-item">
							<img alt="<?php echo h($estabelecimento['Estabelecimento']['nome_fantasia']); ?>" title="<?php echo h($estabelecimento['Estabelecimento']['nome_fantasia']); ?>" src="img/icone_busca.png" />
						</span>
						<img alt="<?php echo h($estabelecimento['Estabelecimento']['nome_fantasia']); ?>" title="<?php echo h($estabelecimento['Estabelecimento']['nome_fantasia']); ?>" src="img/pedido2.fw_r2_c2.jpg" />
					</a>
					<a href="products/<?php echo h($estabelecimento['Estabelecimento']['id']); ?>" class="nome-padrao" title="<?php echo h($estabelecimento['Estabelecimento']['nome_fantasia']); ?>">
						<?php echo h($estabelecimento['Estabelecimento']['nome_fantasia']); ?>
					</a>
				</li>
		<?php endforeach; ?>
	</ul>
</div>