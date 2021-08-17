<?php
/**
 * TopLogger.php
 * 文件描述
 * Created on 2021/8/17 13:55
 * Created by hcfu
 */

namespace Hccfu\EasyTK\TaoBao;


class TopLogger
{
    public $conf = array(
        "separator" => "\t",
        "log_file" => ""
    );

    private $fileHandle;

    protected function getFileHandle()
    {
        if (null === $this->fileHandle) {
            if (empty($this->conf["log_file"])) {
                trigger_error("no log file spcified.");
            }
            $logDir = dirname($this->conf["log_file"]);
            if (!is_dir($logDir)) {
                mkdir($logDir, 0777, true);
            }
            $this->fileHandle = fopen($this->conf["log_file"], "a");
        }
        return $this->fileHandle;
    }

    public function log($logData)
    {
        if ("" == $logData || array() == $logData) {
            return false;
        }
        if (is_array($logData)) {
            $logData = implode($this->conf["separator"], $logData);
        }
        $logData = $logData . "\n";
        fwrite($this->getFileHandle(), $logData);
    }
}
