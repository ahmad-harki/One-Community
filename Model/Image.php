<?php
class Image
{
	public id;
    public $src;
    public $Description;
	const DB = 'One_Community.Image';


    function insertDocument(
        $src,
        $Description,
)
    {
        
        $this->src = $src;
        $this->Description  = $Description ;

        $manager = new MongoDB\Driver\Manager();
        $bulk = new MongoDB\Driver\BulkWrite;
        $document =
        [
            'src' => $this->src,
            'Description' => $this->Description ,
        ];
        $bulk->insert($document);
        $manager->executeBulkWrite(self::DB, $bulk);
    }

}

?>