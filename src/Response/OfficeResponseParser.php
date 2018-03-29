<?php

namespace Todstoychev\Econt\Response;

class OfficeResponseParser
{
    public function parse($xmlResponse)
    {
        $data = new \SimpleXMLElement($xmlResponse);

        foreach ($data->offices->children() as $item) {
            die(var_dump($item->address_details->id_quarter));


            die(var_dump(json_decode($item, true)));
        }
    }
}