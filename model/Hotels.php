<?php
class Hotels {
	public $id;
    public $title;
    public $destination;
    public $img_src;

    public function __construct($id,$title, $destination,$img_src)
    {
    	$this->id = $id;
        $this->title = $title;
        $this->destination = $destination;
        $this->img_src = $img_src;
    }
}
?>
