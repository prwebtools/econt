<?php

namespace Todstoychev\Econt\Parser;

use Todstoychev\Econt\Model\Quarter;
use Todstoychev\Econt\Response\QuartersResponse;

class QuartersResponseParser implements Parser
{

    public function parse(\SimpleXMLElement $xml)
    {
        $response = new QuartersResponse();

        foreach ($xml->cities_quarters->e as $row) {
            $quarter = new Quarter();
            $quarter->setId((int)$row->id);
            $quarter->setName($row->name);
            $quarter->setNameEnglish($row->name_en);
            $quarter->setCityPostCode($row->city_post_code);
            $quarter->setCityId((int)$row->id_city);
            $quarter->setUpdatedTime(new \DateTime((string)$row->updated_time));

            $response->addQuarter($quarter);
        }

        return $response;
    }
}