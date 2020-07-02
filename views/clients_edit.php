<h1>Clientes - Editar</h1>

    <?php if(isset($error_msg) && !empty($error_msg)):?>
        <div class="warn"><?=$error_msg;?></div>
    <?php endif;?>    
<form method="POST">

    <label for="name">Nome</label><br/>
    <input type="text" name="name" value="<?= $client_info['name'];?>" required/><br/><br/>
    
    <label for="email">E-mail</label><br/>
    <input type="email" name="email" value="<?= $client_info['email'];?>"/><br/><br/>

    <label for="phone">Telefone</label><br/>
    <input type="text" name="phone" value="<?= $client_info['phone'];?>"/><br/><br/>
    
    <label for="stars">Estrelas</label><br/>
        <select name="stars" id="stars">
            <option value="1" <?=($client_info['stars'] == 1)?'selected="selected"':''; ?>>1 Estrela</option>
            <option value="2" <?=($client_info['stars'] == 2)?'selected="selected"':''; ?>>2 Estrelas</option>
            <option value="3" <?=($client_info['stars'] == 3)?'selected="selected"':''; ?>>3 Estrelas</option>
            <option value="4" <?=($client_info['stars'] == 4)?'selected="selected"':''; ?>>4 Estrelas</option>
            <option value="5" <?=($client_info['stars'] == 5)?'selected="selected"':''; ?>>5 Estrelas</option>
        </select>    

    <label for="internal_obs">Observações Internas</label><br/>
    <textarea name="internal_obs"><?= $client_info['internal_obs'];?></textarea><br/><br/>
    
    <label for="address_zipcode">CEP</label><br/>
    <input type="text" name="address_zipcode" value="<?= $client_info['address_zipcode'];?>"/><br/><br/>

    <label for="address">Rua</label><br/>
    <input type="text" name="address" value="<?= $client_info['address'];?>"/><br/><br/>

    <label for="address_number">Número</label><br/>
    <input type="text" name="address_number" value="<?= $client_info['address_number'];?>"/><br/><br/>

    <label for="address2">Complemento</label><br/>
    <input type="text" name="address2" value="<?= $client_info['address2'];?>"/><br/><br/>

    <label for="address_neighb">Bairro</label><br/>
    <input type="text" name="address_neighb" value="<?= $client_info['address_neighb'];?>"/><br/><br/>

    <label for="address_city">Cidade</label><br/>
    <input type="text" name="address_city" value="<?= $client_info['address_city'];?>"/><br/><br/>

    <label for="address_state">Estado</label><br/>
    <input type="text" name="address_state" value="<?= $client_info['address_state'];?>"/><br/><br/>

    <label for="address_country">País</label><br/>
    <input type="text" name="address_country" value="<?= $client_info['address_country'];?>"/><br/><br/>
    

    <input type ="submit" value="Salvar"/>
</form>

<script type="text/javascript" src="<?= BASE_URL; ?>/assets/js/script_clients_add.js"></script>