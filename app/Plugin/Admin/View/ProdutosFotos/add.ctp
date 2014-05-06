<div class="produtosFotos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
				<?php echo __('Add Produtos Foto'); ?>
				</h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
					<div class="panel-body">
						<ul class="nav nav-pills nav-stacked">
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Produtos Fotos'), array('action' => 'index'), array('escape' => false)); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end col md 3 -->
		<div class="col-md-9">
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
 
		</div>
		<!-- end col md 12 -->
	</div>
	<!-- end row -->
</div>
