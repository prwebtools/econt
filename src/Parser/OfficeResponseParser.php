<?php

namespace Todstoychev\Econt\Parser;

use Todstoychev\Econt\Model\Office;
use Todstoychev\Econt\Model\Street;
use Todstoychev\Econt\Response\OfficesResponse;

class OfficeResponseParser implements Parser
{
    public function parse(\SimpleXMLElement $xml)
    {
        $response = new OfficesResponse();

        foreach ($xml->offices->e as $row) {
            $office = new Office();
            $office->setId((int) $row->id);
            $office->setName((string)$row->name);
            $office->setNameEnglish((string)$row->name_en);
            $office->setOfficeCode((int)$row->office_code);
            $office->setIsMachine((bool) $row->is_machine);
            $office->setCountryCode((string)$row->country_code);
            $office->setCityId((int) $row->id_city);
            $office->setPostCode((int)$row->post_code);
            $office->setCityName((string)$row->city_name);
            $office->setCityNameEnglish((string)$row->city_name_en);
            $office->setAddress((string)$row->address);
            $office->setAddressEnglish((string)$row->address_en);
            $office->setLatitude((string)$row->latitude);
            $office->setLongitude((string)$row->longitude);
            $office->setQuarterId((int) $row->address_details->id_quarter);
            $office->setQuarterName((string)$row->address_details->quarter_name);
            $office->setQuarterNameEnglish((string)$row->address_details->quarter_name_en);
            $office->setStreetId((int) $row->address_details->id_street);

            $street = new Street();
            $street->setName((string)$row->address_details->street_name);
            $street->setNumber((string)$row->address_details->num);
            $street->setBlock((string)$row->address_details->bl);
            $street->setEntrance((string)$row->address_details->vh);
            $street->setFloor((string)$row->address_details->et);
            $street->setApartment((string)$row->address_details->ap);
            $street->setOther((string)$row->address_details->other);
            $office->setStreet($street);

            $office->setEmail((string)$row->email);
            $office->setPhoneNumber((string)$row->phone);
            $office->setWorkBegin(new \DateTime((string)$row->work_begin));
            $office->setWorkEnd(new \DateTime((string)$row->work_end));
            $office->setWorkBeginSaturday(new \DateTime((string)$row->work_begin_saturday));
            $office->setWorkEndSaturday(new \DateTime((string)$row->work_end_saturday));
            $office->setTimePriority(new \DateTime((string)$row->time_priority));
            $office->setUpdatedOn(new \DateTime((string)$row->updated_time));
            $office->setHubCode((string)$row->hub_code);
            $office->setHubName((string)$row->hub_name);
            $office->setHubNameEnglish((string)$row->hub_name_en);

            $response->addOffice($office);
        }

        return $response;
    }
}
