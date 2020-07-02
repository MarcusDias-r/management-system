<h1>Produtos - Editar</h1>
  
    <?php if(isset($error_msg) && !empty($error_msg)):?>
        <div class="warn"><?=$error_msg;?></div>
    <?php endif;?>    
<form method="POST">

    <label for="name">Nome</label><br/>
    <input type="text" name="name"     value="<?= $inventory_info['name']; ?>" required/><br/><br/>
   
    <label for="price">Preço</label><br/>
    <input type="text" name="price"     value="<?= number_format($inventory_info['price'], 2);//DETALHE IMPORTANTE, SEM O number_format O VALOR É RECEBIDO INCORRETAMENTE PELO O INPUT ?>" required/><br/><br/>
   
    <label for="quant">Quantidade em Estoque</label><br/>
    <input type="number" name="quant"   value="<?= $inventory_info['quant']; ?>" required/><br/><br/>
   
    <label for="min_quant">Quantidade Mínima em Estoque</label><br/>
    <input type="text" name="min_quant" value="<?= $inventory_info['min_quant']; ?>" required/><br/><br/>
   
    <input type ="submit" value="Salvar"/>
</form>


<script type = "text/javascript" src = "<?=BASE_URL;?>/assets/js/jquery.mask.js"></script>
<script type = "text/javascript" src = "<?=BASE_URL;?>/assets/js/script_inventory_add.js"></script>
      