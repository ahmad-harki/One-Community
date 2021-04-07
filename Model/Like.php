<?php
class Like
{
	public id;
	public Userid;
	public OnClick;
	//OnClick == Boolean
	public Postid;
	public comment;
	const DB = 'One_Community.Like';

	function insertDocument(   
    	$Userid,
    	$OnClick,
		$Postid,
)
	{
		$this->Userid = $Userid;
		$this->OnClick  = $OnClick;
		$this->Postid  = $Postid;

		$manager = new MongoDB\Driver\Manager();
		$bulk = new MongoDB\Driver\BulkWrite;
		$document =
			[
				'Userid' => $this->Userid,
				'OnClick' => $this->OnClick,
				'Postid' => $this->Postid,
			];
			$bulk->insert($document);
			$manager->executeBulkWrite(self::DB, $bulk);
	}
}
?>