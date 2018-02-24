<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 7:28 PM
 */

namespace Todstoychev\Econt\Model;


class Loading
{
    /**
     * @var Sender изпращач
     */
    private $sender;

    /**
     * @var Receiver получател
     */
    private $receiver;

    /**
     * @var Shipment товарителница
     */
    private $shipment;

    /**
     * @return Sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param Sender $sender
     * @return Loading
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @return Receiver
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param Receiver $receiver
     * @return Loading
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param Shipment $shipment
     * @return Loading
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;

        return $this;
    }
}