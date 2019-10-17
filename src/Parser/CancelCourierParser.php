<?php


namespace Todstoychev\Econt\Parser;


use Todstoychev\Econt\Response\CancelCourierResponse;

class CancelCourierParser implements Parser{

	public function parse(\SimpleXMLElement $xml)
	{

		$response = new CancelCourierResponse();

		if($xml->status !== null && $xml->status == 'OK') {

			$response->setSuccess(true);

		} elseif($xml->error->message !== null) {

			$response->setSuccess(false);
			$response->setError((string)$xml->error->message);
			$response->setErrorCode((string)$xml->error->code);

		} else {

			$response->setSuccess(false);
			$response->setError('Unknown error from econt');
			$response->setErrorCode('UNKNOWN_ERROR');

		}

		return $response;

	}

}
