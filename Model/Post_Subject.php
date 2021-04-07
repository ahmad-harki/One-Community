<?php
class Post_Subject
{
	public Subjectid;
	public Postid;
    const DB = 'One_Community.Post_Subject';


	function insertDocument(
        $Subjectid,
        $Postid,

)
    {
        
        $this->Subjectid = $Subjectid;
        $this->Postid  = $Postid ;

        $manager = new MongoDB\Driver\Manager();
        $bulk = new MongoDB\Driver\BulkWrite;
        $document =
        [
            'Subjectid' => $this->Subjectid,
            'Postid' => $this->Postid ,
        ];
        $bulk->insert($document);
        $manager->executeBulkWrite(self::DB, $bulk);
    }
}
?>