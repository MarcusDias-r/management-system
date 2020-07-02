
<div class="L_side">
<h1>Compras - Adicionar</h1>

<button class="showForm">Novo Produto</button>
<div class="hiddenClass">

            </br> 
            <fieldset>
                <legend>Novo Produto</legend>

                <?php if(isset($error_msg) && !empty($error_msg)):?>
                    <div class="warn"><?=$error_msg;?></div>
                <?php endif;?>    
                        
                <form method="POST">

                    <label for="name">Nome</label><br/>
                    <input type="text" name="name" required/><br/><br/>
                
                    <label for="price">Preço</label><br/>
                    <input type="text" name="price" required/><br/><br/>
                
                    <label for="quant">Quantidade em Estoque</label><br/>
                    <input type="number" name="quant" required/><br/><br/>
                
                    <label for="min_quant">Quantidade Mínima em Estoque</label><br/>
                    <input type="number" name="min_quant" required/><br/><br/>
                
                    <input type ="submit" value="Adicionar"/>
                    
            </form>
                <script type = "text/javascript" src = "<?=BASE_URL;?>/assets/js/jquery.mask.js"></script>
                <script type = "text/javascript" src = "<?=BASE_URL;?>/assets/js/script_inventory_add.js"></script>
            </fieldset>        
            </div>
</br></br>
<form method="POST">


    <label for="total_price">Preço da Venda</label><br/>
    <input type="text" name="total_price" disabled="disabled"/><br/><br/>

    <hr/>
    <h4>Produtos</h4>

    <fieldset>
        <legend>Adicionar Produto</legend> 
        
        <input type = "text" id="add_prod" data-type="search_products"/><br/><br/>
        





    </fieldset>
    
    <table border="0" width="100%" id="products_table">
        <tr>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Preço Unit.</th>
            <th>Sub-Total</th>
            <th>Excluir</th>
        </tr>

    </table>
   
    <hr/>

    <input type="submit" value="Adicionar Compra"/>
</form>

<script type = "text/javascript" src = "<?=BASE_URL;?>/assets/js/jquery.mask.js"></script>
<script type = "text/javascript" src="<?php echo BASE_URL;?>/assets/js/script_purchases_add.js"></script>

</div>
<div class="R_side">

</div>