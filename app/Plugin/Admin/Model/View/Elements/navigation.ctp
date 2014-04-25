    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->Html->url('/');?>">Pedido online</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="<?php echo $this->Html->url('/cidades');?>">Cidades</a></li>
            <li><a href="<?php echo $this->Html->url('/categorias');?>">Categorias</a></li>
            <li><a href="<?php echo $this->Html->url('/produtos');?>">Produtos</a></li>
            <li><a href="<?php echo $this->Html->url('/users/logout');?>">Sair</a></li>
          </ul>
         </div><!--/.nav-collapse -->
      </div>
    </div>