<?php


namespace Todstoychev\Econt\Parser;


use Todstoychev\Econt\Response\CancelShipmentResponse;

class CancelShipmentResponseParser implements Parser{

	public function parse(\SimpleXMLElement $xml) {

		$response = new CancelShipmentResponse();
		$element = $xml->cancel_shipments->e;

		$response->setSuccess($element->success == '0' ? false : true);
		$response->setError($element->error);
		$response->setErrorCode($element->errorCode);

		return $response;

	}

}
