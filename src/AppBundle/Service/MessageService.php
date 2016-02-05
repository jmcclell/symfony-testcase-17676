<?php

namespace AppBundle\Service;

class MessageService
{
    public function __construct($message)
    {
        $this->message = (string)$message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
