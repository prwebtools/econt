<?php

namespace Todstoychev\Econt\Response;

class CancelShipmentResponse
{
    private $success;
    private $errorCode;
    private $error;

    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    public function getSuccess()
    {
        return $this->success;
    }

    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getErrorCode()
    {
        return (string)$this->errorCode;
    }

    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    public function getError()
    {
        return (string)$this->error;
    }
}
