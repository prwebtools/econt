<?php

namespace Todstoychev\Econt\Response;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Todstoychev\Econt\Mapper\AddressDetailsMapper;
use Todstoychev\Econt\Model\AddressDetails;
use Todstoychev\Econt\OptionsResolver\ModelOptionsResolver;

class OfficeResponseParser
{
    public function parse($xmlResponse)
    {
        $data = new \SimpleXMLElement($xmlResponse);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer(), new ArrayDenormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $mapper = new AddressDetailsMapper(new ModelOptionsResolver(AddressDetails::class), $serializer);

        foreach ($data->offices->children() as $item) {
            var_dump($mapper->map($item));
        }
    }
}