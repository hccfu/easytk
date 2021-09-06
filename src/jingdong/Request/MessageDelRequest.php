<?php
namespace Hccfu\EasyTK\JingDong\Request;
class MessageDelRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();

	public function getApiMethodName(){
	  return "biz.message.del";
	}

	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}

	public function check(){

	}

    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $id;

    public function setId($id){
        $this->apiParas['id'] = $id;
    }
    public function getId(){
        return $this->apiParas['id'];
    }
}

?>
