<?php

namespace Todstoychev\Econt\Parser;

interface Parser
{
    public function parse(\SimpleXMLElement $xml);
}
