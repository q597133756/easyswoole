<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2017/2/3
 * Time: 下午7:46
 */

namespace Core\AbstractInterface;


interface LoggerWriterInterface
{
    /*
     * @param $msg
     * @param $timeStamp
     * @return boolean isSuccess
     */
    static function writeLog($msg,$timeStamp);
}