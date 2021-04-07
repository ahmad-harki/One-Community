<?php

class Post
{
    public $id;
    public $Userid;
	public $Title;
	public $Text;
	public $Imageid;
    public $Videoid;
    public $Time;
	const DB = 'One_Community.Post';


    function insertDocument(
        $Userid,
        $Title,
        $Text,
        $Imageid,
        $Videoid,
        $Time,
)
    {
        
        $this->Userid = $Userid;
        $this->Title  = $Title ;
        $this->Imageid = $Imageid;
        $this->Videoid = $Videoid;
        $this->Time = $Time;
        
        $manager = new MongoDB\Driver\Manager();
        $bulk = new MongoDB\Driver\BulkWrite;
        $document =
        [
            'Userid' => $this->Userid,
            'Title' => $this->Title ,
            'Imageid' => $this->Imageid,
            'Videoid' => $this->Videoid, 
            'Time' => $this->Time, 
        ];
        $bulk->insert($document);
        $manager->executeBulkWrite(self::DB, $bulk);
    }

}
?>