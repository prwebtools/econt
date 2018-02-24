<?php

namespace Todstoychev\Econt\Response;

use Todstoychev\Econt\Model\Office;

class OfficesResponse
{
    /**
     * @var Office[]
     */
    private $offices = [];

    /**
     * @return Office[]
     */
    public function getOffices(): array
    {
        return $this->offices;
    }

    /**
     * @param Office $office
     *
     * @return OfficesResponse
     */
    public function addOffice(Office $office)
    {
        $this->offices[] = $office;

        return $this;
    }
}
