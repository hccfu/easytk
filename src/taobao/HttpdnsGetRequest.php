<?php
/**
 * HttpdnsGetRequest.php
 * 文件描述
 * Created on 2021/8/17 13:55
 * Created by hcfu
 */

namespace Hccfu\EasyTK\TaoBao;


class HttpdnsGetRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "taobao.httpdns.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
