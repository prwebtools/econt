<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 7:24 PM
 */

namespace VM5\Econt\Parser;


use VM5\Econt\Model\Currency;
use VM5\Econt\Model\LoadingPrice;
use VM5\Econt\Response\ParcelResponse;

class ParcelResponseParser implements Parser
{
    private function getLoadingPrice(\SimpleXMLElement $price)
    {
        $loadingPrice = new LoadingPrice();
        $loadingPrice->setTotal($price->total);
        $loadingPrice->setSenderTotal($price->sender_total);
        $loadingPrice->setReceiverTotal($price->receiver_total);
        $loadingPrice->setOtherTotal($price->other_total);

        $currency = new Currency();
        $currency->setName($price->currency);
        $currency->setCode($price->currency_code);
        $loadingPrice->setCurrency($currency);

        return $loadingPrice;
    }

    public function parse(\SimpleXMLElement $xml)
    {
        $response = new ParcelResponse();

        $xml = $xml->result->e;

        $response->setLoadingId($xml->loading_id);
        $response->setLoadingNumber($xml->loading_num);
        $response->setCourierRequestId($xml->courier_request_id);
        $response->setDeliveryDate(new \DateTime($xml->delivery_date));
        $response->setLoadingPrice($this->getLoadingPrice($xml->loading_price));

        return $response;
    }

}