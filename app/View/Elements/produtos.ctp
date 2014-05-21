<img alt="" title="" src="" />
<div class="row">
    <?php
    $i = 0;
    foreach ($produtos as $product):
      // var_dump($product);die;
        $i++;
        if (($i % 4) == 0) {
            echo "\n<div class=\"row\">\n\n";
        }
        ?>
        <div class="col col-sm-3">
            <?php echo $this->Html->image('/files/produtos/thumbnail/' . $product['ProdutosFoto'][0]['url'], array('url' => array('controller' => 'produto', 'action' => 'view', $product['Produto']['id']), 'alt' => $product['Produto']['nome_produto'], 'class' => 'image')); ?>
            <br />
    <?php echo $this->Html->link($product['Produto']['nome_produto'], array('controller' => 'produto', 'action' => 'view', $product['Produto']['id'])); ?>
            <br />
            R$<?php echo $product['Produto']['preco']; ?>
            <br />
            <br />
             <?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'add'))); ?>
		<?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Produto']['id'])); ?>
        <?php echo $this->Form->button('Adicionar ao Carrinho', array('class' => 'btn btn-primary addtocart', 'id' => 'addtocart', 'id' => $product['Produto']['id']));?>
		<?php echo $this->Form->end(); ?>
        </div>
        <?php
        if (($i % 4) == 0) {
            echo "\n</div>\n\n";
        }
    endforeach;
    ?>

    <br />
    <br />

</div>
