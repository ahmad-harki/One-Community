<?php

class Comment
{
	public id;
	public Userid;
	public Text;
	public Postid;
	public Time;
	const DB = 'One_Community.Comment';


    function insertDocument(
        $Userid,
        $Text,
        $Postid,
        $Time,
    )
    { 
        $this->Userid = $Userid;
        $this->Text  = $Text;
        $this->Postid  = $Postid ;
        $this->Time  = $Time ;

        $manager = new MongoDB\Driver\Manager();
        $bulk = new MongoDB\Driver\BulkWrite;
        $document =
        [
            'Userid' => $this->Userid,
            'Text' => $this->Text,
            'Postid' => $this->Postid ,
            'Time' => $this->Time ,
        ];
        $bulk->insert($document);
        $manager->executeBulkWrite(self::DB, $bulk);
    }
}

?>