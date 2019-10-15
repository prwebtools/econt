<?php


namespace Todstoychev\Econt\Parser;
use Todstoychev\Econt\Response\CallCourierResponse;

class CallCourierResponseParser implements Parser{

	public function parse(\SimpleXMLElement $xml)
	{

		$response = new CallCourierResponse();

		if($xml->courier->not_found !== null && strlen($xml->courier->not_found) > 0) $response->setError($xml->courier->not_found);
		else print_r($xml);

		return $response;

	}

}