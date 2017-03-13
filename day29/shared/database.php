<?php
class Database
{

    protected $db;//property of object class, it will remember database connection in other methods we will create(u can reuse connection)

    public function __construct()
    {
                //root username and after it goes password
        $this->db = new PDO('mysql:host=localhost;dbname=bootcamp_shop;charset=utf8', 'root', '');

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//remove for production, error checking stuff
        //if connection doesnt work u will receive error message by this line of error checking
    }


    public function insertproduct($name, $price, $size, $color)
    {
        $stmt =$this-> db->prepare('INSERT INTO products (name, price, size, color)VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $price, $size, $color]);
        return $this->db->lastInsertId();
    }


//we took these two lines from index.php 
    public function getproducts()
    {
        $stmt = $this->db->prepare('SELECT id,name, price, size, color  FROM products');
      $stmt->execute();    //execute returns only true or false
      return $stmt->fetchAll();

   
    }


public function getproduct($id)
    {
        $stmt = $this->db->prepare('SELECT id,name, price, size, color  FROM products WHERE id = ?');
      $stmt->execute([$id]);    
      return $stmt->fetch();

   
    }

    public function insertOrder($user_id)
    {
         $stmt =$this-> db->prepare('INSERT INTO orders (user_id, created) VALUES (?, NOW())');
        $stmt->execute([$user_id]);
        return $this->db->lastInsertId();

    }
    public function insertproducttoorder($productid, $orderid)
	{
		$stmt = $this->db->prepare('INSERT INTO orders_have_products (product_id, order_id) VALUES (?, ?)');
		$stmt->execute([$productid, $orderid]);
		return $this->db->lastInsertId();
	}

    public function insertuser($name, $email, $password)
    {
        $stmt =$this-> db->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
        $stmt->execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)]);
        return $this->db->lastInsertId();   //will return insert autoincrement id 
    }

    public function getuser($id)
    {
        $stmt = $this->db->prepare('SELECT id,name, email, password FROM users WHERE id = ?');
      $stmt->execute([$id]);    
      return $stmt->fetch();
    }



    public function getuserbyemail($email)
    {
         $stmt = $this->db->prepare('SELECT id,name, email, password FROM users WHERE email = ?');
      $stmt->execute([$email]);    
      return $stmt->fetch();
    }

    //transactions stuff below
    public function beginTransaction()
    {
        $this->db->beginTransaction();
    }

    public function commitTransaction()
    {
        $this->db->commit();
    }

    public function rollBackTransaction()
    {
        $this->db->rollBack();
    }
    
}


