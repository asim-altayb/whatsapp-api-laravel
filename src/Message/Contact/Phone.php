<?php

namespace AsimAltayb\WhatsappApiLaravel\Message\Contact;

class Phone
{
    protected string $number;

    protected string $wa_id;

    protected PhoneType $type;

    public function __construct(string $number, PhoneType $type, string $wa_id = '')
    {
        $this->number = $number;
        $this->wa_id = $wa_id;
        $this->type = $type;
    }

    public function number(): string
    {
        return $this->number;
    }

    public function waId(): string
    {
        return $this->wa_id;
    }

    public function type(): PhoneType
    {
        return $this->type;
    }
}
