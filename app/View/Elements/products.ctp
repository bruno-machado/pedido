<div class="row">
    <?php
    $i = 0;
    foreach ($products as $product):
      // var_dump($product);die;
        $i++;
        if (($i % 4) == 0) {
            echo "\n<div class=\"row\">\n\n";
        }
        ?>
        <div class="col col-sm-3">
            <?php echo $this->Html->image('/files/produtos/thumbnail/' . $product['ProdutosFoto'][0]['url'], array('url' => array('controller' => 'products', 'action' => 'view', $product['Product']['id']), 'alt' => $product['Product']['nome_produto'], 'class' => 'image')); ?>
            <br />
    <?php echo $this->Html->link($product['Product']['nome_produto'], array('controller' => 'products', 'action' => 'view', $product['Product']['id'])); ?>
            <br />
            R$<?php echo $product['Product']['preco']; ?>
            <br />
            <br />
        <?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'add'))); ?>
		<?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Product']['id'])); ?>
        <?php echo $this->Form->button('Adicionar ao Carrinho', array('class' => 'btn btn-primary addtocart', 'id' => 'addtocart', 'id' => $product['Product']['id']));?>
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
