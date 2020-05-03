<?php
include 'UserDataService.php';

class UserBusinessService
{
    
    

    public function __construct()
    {}
    
    
    public function searchByFirstName($pattern){
        $service = new UserDataService();
        return $service->findByFirstName($pattern);
    }
}
?>

