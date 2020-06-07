<?php




require_once 'Product.php';
require_once 'User.php';
require_once 'dataBase.php';
require_once 'Discount.php';
//require_once 'orderProduct.php';

class Orders
{
    private $qty;
    private $price;
    private $name;
   // private $Product = new Product();
    
    
    public function __construct()
    {}
    
    public function placeOrder($name, $price, $qty){
       
    
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }
    
    
    public function placeOrder1(){
       $this->getPrice();
       $this->getProductName();
       $this->getQTYName();
    }
    
    
    public function savetoDB(){
        $db = new dataBase();
        
        $this->savetoDetails($db->dbConnection());
        $this->savetoOrders($db->dbConnection());
    }
    
    public function savetoOrders($conn){
        $date = date("l");
        $insert = "INSERT INTO orders (Date) VALUES (.'$date'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "Successfully added product";
            return 1;
        }
        catch(\Exception $e){
            echo "error .'$e'.";
            return 0;
        }
    }
    
    public function savetoDetails($conn){
        
        $insert = "INSERT INTO orderDetails (Quantity, CurrentPrice, CurrentName) VALUES (.'$qty'.,'$price'.,'$name'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "Successfully added orderDetails";
            return 1;
        }
        catch(\Exception $e){
            echo "error .'$e'.";
            return 0;
        }
    }
    
    public function getProductName(){
        $conn = new dataBase();
        
        $query = "SELECT CurrentName FROM `orderdetails` where Orders_idOrders = 1";
        if(     $result = mysqli_query($conn->dbConnection(),$query)){
            $result = mysqli_query($conn->dbConnection(),$query);
            
            return result;
        }
        else{
           return  0;
        }
        
    }
    
    public function getQTYName(){
        $conn = new dataBase();
        
        $query = "SELECT Quantity FROM `orderdetails` where Orders_idOrders = 1";
        
        if( mysqli_query($conn->dbConnection(),$query)){
            $result = mysqli_query($conn->dbConnection(),$query);
            return result;
        }
        else{
            
            return 0;
        }
   
        
        //return result;
    }
    
    public function getPrice(){
        $conn = new dataBase();
        
        $query = "SELECT CurrentPrice FROM `orderdetails` where Orders_idOrders = 1";
        
        if( mysqli_query($conn->dbConnection(),$query)){
            $result = mysqli_query($conn->dbConnection(),$query);
            return result;
        }
        else{
            return 0;
        }
        
       // return result;
    }
    

    
    public function displayOrder(){
        $user = new \User();
        
      
        $user->setFName("Zach");
        $date = date("m/d/Y");
        $firstName = $user->getFName();
        
        echo "$firstName has placed order on : .'$date'. <br> Your items: Product Name: $this->getProductName() 'Quantity:.' $this->getQTYName()'. Price .'$this->getPrice()'.";
        
        
    }
    
    public function displayOrder1(){
        $user = new \User();
        
        
        $user->setFName("Zach");
        $date = date("m/d/Y");
        $firstName = $user->getFName();
        
        echo "$firstName has placed order on : .'$date'. <br> Your items: Product Name: $this->name 'Quantity:.' $this->qty'. Price .'$this->price'.";
    }
    
    public function totalPrice($promo){
        $discount = new Discount();
        
        $total = $this->price * $discount->discountCalc($promo);
        $total = $this->price * $discount->discountCalcDollar($promo);
        
        echo "Your total is .'$total'. ";
        
        
       
    }
}
