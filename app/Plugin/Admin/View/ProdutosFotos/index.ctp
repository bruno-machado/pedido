<div class="produtosFotos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
				<?php echo __('Produtos Fotos'); ?>
				</h1>
			</div>
		</div>
		<!-- end col md 12 -->
	</div>
	<!-- end row -->



	<div class="row">
			<?php  echo $this->UploadTemplate->renderForm(array('action' => 'upload')); //Set action for form  ?>
			<?php   echo $this->UploadTemplate->renderListFiles(array('action_delete' => 'deleteFile')); //Set action for remove files	    ?>
			<?php 
			    /* Load libs js e css jQuery-File-Upload and dependences */
			    echo $this->UploadScript->loadLibs();
			    echo $this->Html->scriptBlock("
			        $(function () {
			            $('#fileupload').fileupload({
			                    xhrFields   : {withCredentials: true},
			                    url         : 'upload?idproduto=".$idProduto."', //Set your action
			                    		
			            });
			        });    
			    ");
			?>
 
		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<?php foreach ($produtosFotos as $produtosFoto): ?>
					<tr>
						<td>
							<img alt="" src="<?php echo FULL_BASE_URL.$baseUrl."/app/webroot/files/produtos/thumbnail/".h($produtosFoto['ProdutosFoto']['url']); ?>">
						</td>
						<td>
							<?php echo h($produtosFoto['ProdutosFoto']['url']); ?>
						</td>
						<td class="actions">
						<?php echo $this->Form->postLink('<span class="btn btn-danger">Remover</span>', array('action' => 'delete', $produtosFoto['ProdutosFoto']['url'], $produtosFoto['ProdutosFoto']['produto_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $produtosFoto['ProdutosFoto']['url'].', '.$produtosFoto['ProdutosFoto']['produto_id'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
				</small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
				?>
			<ul class="pagination pagination-sm">
			<?php
			echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
			echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
			echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div>
		<!-- end col md 9 -->
	</div>
	<!-- end row -->


</div>
<!-- end containing of content -->
