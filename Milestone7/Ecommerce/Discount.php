<?php
require_once 'dataBase.php';

class Discount
{
    private $promo;
    private $amount;
    private $percent;
    private $used;
    
    
    public function __construct()
    {
       // $this->promo = $promo;
        
    }
    
    public function discountCalc($promo){
        $this->promo = $promo;
        
        if($this->promo == "Quarter"){
            $this->percent = .25;
            echo "You have saved 25% off";
            return $this->percent;
            
        }
        
        elseif($this->promo == "Fifty"){
            $this->percent = .50;
            echo "You have saved 50% off";
            return $this->percent;
        }
        else{
            return 0;
        }
        
        
        
        
    }
    
    public function discountCalcDollar($promo){
        $this->promo = $promo;
        
        if($this->promo == "25"){
            $this->percent = 25;
            $this->used = true;
            echo "You have saved $25 off";
            return $this->percent;
            
        }
        
        elseif($this->promo == "50"){
            $this->percent = 50;
            $this->used = true;
            echo "You have saved $50 off";
            return $this->percent;
        }
        else{
            $this->used = false;
            return 0;
        }
        
        
        
        
    }
    
    
    
    
    
    public function userOnlyUse(){
        $conn = new dataBase();
        
        if($this->used == true){
            $sql = "INSERT INTO coupon Used values .'$this->used'.  where users.ID = userID";
            if (mysqli_query($conn->getConnect(), $sql)) {
                $sql;
            } else {
                echo "Error updating record: " . mysqli_error($conn->getConnect());
            }
            mysqli_close($conn->getConnect());
        }
        
        else{
            $sql = "INSERT INTO coupon Used values .'$this->used'.  where users.ID = userID";
            if (mysqli_query($conn->getConnect(), $sql)) {
               
            } else {
                echo "Error updating record: " . mysqli_error($conn->getConnect());
            }
            mysqli_close($conn->getConnect());
        }
        
        
        
    }
    
}

