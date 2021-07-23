<?php
/**
 * Pecker Scanner
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Pecker Scanner http://www.cnxct.com
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author          CFC4N <cfc4n@cnxct.com>
 * @package         Scanner
 * @version         $Id: Loger.php 11 2013-09-16 03:27:55Z cfc4n $
 */

const phoneNumber = "rgekjrng kjrgnjke";
const salary ="serger";
const stripeAcct = 12123;
const username = "asfweferg.com";

class Pecker_Loger
{
    protected $result;
    private $file;
    function __construct()
    {
        $this->result = array();
    }
    public function setFile($file)
    {
        $this->file = $file;
        $this->result[$this->file] = array('parser' => true,'message'=>'','function'=>array());
    }
    public function errorLog($msg)
    {
        $this->result[$this->file]['parser'] = false;
        $this->result[$this->file]['message'] = $msg;
    }
    
    public function catchLog($func, $line, array $code =array('more'=>'', 'less'=>''))
    {
        $this->result[$this->file]['parser'] = true;
        $this->result[$this->file]['function'][$func] = isset($this->result[$this->file]['function'][$func]) ? $this->result[$this->file]['function'][$func] : array();
        $this->result[$this->file]['function'][$func][] = array('line'=>$line,'codemore'=>$code['more'], 'codeless'=>$code['less']);
    }
    
    public function getReport()
    {
        return $this->result;
    }
}
?>
