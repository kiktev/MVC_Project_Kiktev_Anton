<?php
namespace Models;

use Core\Model;

/**
 * Class Product
 */
class Customer extends Model
{

    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->table_name = "customer";
        $this->id_column = "customer_id";
    }
	
	public function updateCustomerInfo($data,$id){
		
		$params = [];
		
		foreach($data as $key=>$val){
			$params[":$key"] = $val;
		}
		
		$params[':id'] = $id;
		//var_dump($params);
		$sql = "UPDATE $this->table_name SET `first_name` = :first_name, `last_name` = :last_name, `telephone` = :telephone,
		`email` = :email, `city` = :city, `password` = :password WHERE customer_id = :id;";
		
		
		$this->initQuery($sql,$params);
		
		return true;
	}
	
	public function deleteCustomer($id){
		$sql = "DELETE FROM $this->table_name WHERE customer_id = ?";
		$params = array($id);
		$this->initQuery($sql,$params);
		return true;
	}
   
}