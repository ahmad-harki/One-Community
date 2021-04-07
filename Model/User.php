<?php

class User
{
    public $id;
	public $FirstName;
    public $LastName;
    public $Description;
	public $Email;
	public $Password;
	const DB = 'One_Community.User';

    function insertDocument(  
        $FirstName,
        $LastName,
        $Description,
        $Email,
        $Password,
    )
    {
        
        $this->FirstName = $FirstName;
        $this->LastName  = $LastName ;
        $this->Description = $Description;
        $this->Email = $Email;
        $this->Password = $Password;
        
        $manager = new MongoDB\Driver\Manager();
        $bulk = new MongoDB\Driver\BulkWrite;
        $document =
        [
            'FirstName' => $this->FirstName,
            'LastName' => $this->LastName ,
            'Description' => $this->Description,
            'Email' => $this->Email, 
            'Password' => $this->Password, 
        ];
        $bulk->insert($document);
        $manager->executeBulkWrite(self::DB, $bulk);

    }

}
?>