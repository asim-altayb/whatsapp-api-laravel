<?php

namespace AsimAltayb\WhatsappApiLaravel\Message;

use AsimAltayb\WhatsappApiLaravel\Message\Contact\ContactName;
use AsimAltayb\WhatsappApiLaravel\Message\Contact\Phone;
use AsimAltayb\WhatsappApiLaravel\Message\Contact\Phones;

class ContactMessage extends Message
{
    /**
    * {@inheritdoc}
    */
    protected string $type = 'contacts';

    protected ContactName $name;

    protected Phones $phones;

    /**
    * {@inheritdoc}
    */
    public function __construct(string $to, ContactName $name, Phone ...$phones)
    {
        $this->name = $name;
        $this->phones = new Phones(...$phones);

        parent::__construct($to);
    }

    public function fullName(): string
    {
        return $this->name->fullName();
    }

    public function firstName(): string
    {
        return $this->name->firstName();
    }

    public function lastName(): string
    {
        return $this->name->lastName();
    }

    public function phones(): Phones
    {
        return $this->phones;
    }
}
