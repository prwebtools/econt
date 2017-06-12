<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 4:02 PM
 */

namespace VM5\Econt\Parser;


interface Parser
{
    public function parse(\SimpleXMLElement $xml);
}