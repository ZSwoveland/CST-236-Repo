<?php
require_once 'dataBase.php';

class SaleReport implements JsonSerializable
{

    private $id;
    private $datePurchased;
    private $userRequestDate;
    private $product;
    private $numberSold;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDatePurchased()
    {
        return $this->datePurchased;
    }

    /**
     * @return mixed
     */
    public function getUserRequestDate()
    {
        return $this->userRequestDate;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return mixed
     */
    public function getNumberSold()
    {
        return $this->numberSold;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $datePurchased
     */
    public function setDatePurchased($datePurchased)
    {
        $this->datePurchased = $datePurchased;
    }

    /**
     * @param mixed $userRequestDate
     */
    public function setUserRequestDate($userRequestDate)
    {
        $this->userRequestDate = $userRequestDate;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @param mixed $numberSold
     */
    public function setNumberSold($numberSold)
    {
        $this->numberSold = $numberSold;
    }

    public function __construct()
    {
       
    }
    
    public function salesQuery($sDate, $eDate, $id){
        $conn = new dataBase();
        $query = "SELECT * FROM orderdetails where .'$sDate'. = orders.Date INNER JOIN orders ON .'$id'. = ProductID";
        
        if (mysqli_query($conn->getConnect(), $query)) {
            echo $query;
        } else {
            echo "Error updating record: " . mysqli_error($conn->getConnect());
        }
        mysqli_close($conn->getConnect());
        
        
    }
    
    
    public function jsonSerialize($sDate, $eDate, $id)
    {
        
        $conn = new dataBase();
        $query = "SELECT * FROM orderdetails where .'$sDate'. = orders.Date INNER JOIN orders ON .'$id'. = ProductID";
        
        if (mysqli_query($conn->getConnect(), $query)) {
            return get_object_vars($query);
        } else {
            echo "Error updating record: " . mysqli_error($conn->getConnect());
        }
        mysqli_close($conn->getConnect());
        return get_object_vars($query);
    }

}

