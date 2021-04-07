
<?php
class Subject
{
	public id;
	public Name;
	const DB = 'One_Community.Subject';

	function insertDocument(
        $src,
)
    {
        $this->Name = $Name;
        
        $manager = new MongoDB\Driver\Manager();
        $bulk = new MongoDB\Driver\BulkWrite;
        $document =
        [
            'Name' => $this->Name,
            
        ];
        $bulk->insert($document);
        $manager->executeBulkWrite(self::DB, $bulk);
    }
}
?>