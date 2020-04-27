<?php

namespace Todstoychev\Econt\Request;

class CancelShipmentRequest
{
    private $shipment_id;

    public function getShipmentID()
    {
        return $this->shipment_id;
    }

    public function setShipmentID(string $shipment_id)
    {
        $this->shipment_id = $shipment_id;
        return $this;
    }
}
