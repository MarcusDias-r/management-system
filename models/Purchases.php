<?php
class Purchases extends model{

    public function purchaseInfo($offset, $id_company){
        $array = array();

        $sql = $this->db->prepare("
            SELECT 
                purchases.id,
                purchases.id_user,
                purchases.date_purchase,
                purchases.total_price,
                (select users.email from users where users.id = purchases.id_user AND users.id_company = purchases.id_company) as userEmail
            FROM purchases
            WHERE id_company = :id_company");

        
        $sql->bindValue(":id_company",$id_company);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }

        $sql = $this->db->prepare("
        
        ");

        return $array;
    }

    public function purchaseDetails($id, $id_company){
        $array = array();

       

        $sql = $this->db->prepare("
            SELECT
                *,
                (select users.email from users where users.id = purchases.id_user)as userB
                FROM purchases 
            WHERE id=:id 
            AND id_company = :id_company
            ");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();

        if($sql->rowCount()>0){
            $array['info'] = $sql->fetch();
        }
        
        $sql = $this->db->prepare("
            SELECT 
                purchases_products.quant,
                purchases_products.purchase_price,
                inventory.name     

            FROM purchases_products 

            LEFT JOIN inventory 
                ON inventory.id = purchases_products.id_product
            WHERE 
                purchases_products.id_purchase = :id_purchase 
            AND 
                purchases_products.id_company = :id_company"
            );
        $sql->bindValue(":id_purchase", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();

        if($sql->rowCount()>0){
           
           $array['products'] = $sql->fetchAll();

        }

        return $array;
    }

    public function addPurchase($id_company, $id_user, $quant){
        $i = new Inventory();

        $sql = $this->db->prepare("INSERT INTO purchases SET id_user = :id_user, date_purchase = NOW(), total_price =:total_price, id_company=:id_company");
        $sql->bindValue(":id_user",$id_user);
        $sql->bindValue(":id_company",$id_company);
        $sql->bindValue(":total_price",'0');
        $sql->execute();
    
        //Venda adicionada com valor 0
        $id_purchase = $this->db->lastInsertId();

        $total_price = 0;
            
        foreach($quant as $id_prod => $quant_prod){
            $sql = $this->db->prepare("SELECT price FROM inventory WHERE id = :id AND id_company = :id_company");
            $sql->bindValue(":id", $id_prod);
            $sql->bindValue(":id_company",$id_company);
            $sql->execute();


         
            if($sql->rowCount() > 0 ){
                
                $row   = $sql->fetch();
                $price = $row['price'];

                $sqlPurchases = $this->db->prepare("INSERT INTO purchases_products SET id_purchase=:id_purchase, id_product = :id_product, quant=:quant, purchase_price= :purchase_price, id_company=:id_company");
                $sqlPurchases->bindValue(":id_purchase",$id_purchase);
                $sqlPurchases->bindValue(":quant",$quant_prod);
                $sqlPurchases->bindValue(":id_product", $id_prod);
                $sqlPurchases->bindValue(":purchase_price",$price);
                $sqlPurchases->bindValue(":id_company",$id_company);
                $sqlPurchases->execute();

              
                $i->increase($id_prod, $id_company, $quant_prod, $id_user);

                $total_price += $price * $quant_prod;
            }
        }

        $sql = $this->db->prepare("UPDATE purchases SET total_price = :total_price WHERE id = :id");
        $sql->bindValue(":total_price",$total_price);
        $sql->bindValue(":id", $id_purchase);
        $sql->execute();  

        
            header("Location: ".BASE_URL."/purchases");
        
    }

}

?>