<?php

namespace Todstoychev\Econt\RequestBuilder;

interface RequestBuilder
{
    public function setUsername($username);

    public function setPassword($password);

    public function build($request);
}
