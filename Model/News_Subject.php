<?php
class News_Subject
{
    public Newsid;
	public Subjectid;
    const DB = 'One_Community.News_Subject';

    function insertDocument(
        $Newsid,
        $Subjectid,

)
    {
        
        $this->Newsid = $Newsid;
        $this->Subjectid  = $Subjectid ;

        $manager = new MongoDB\Driver\Manager();
        $bulk = new MongoDB\Driver\BulkWrite;
        $document =
        [
            'Newsid' => $this->Newsid,
            'Subjectid' => $this->Subjectid,
        ];
        $bulk->insert($document);
        $manager->executeBulkWrite(self::DB, $bulk);
    }
}
?>