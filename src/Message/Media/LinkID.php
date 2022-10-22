<?php

namespace AsimAltayb\WhatsappApiLaravel\Message\Media;

use AsimAltayb\WhatsappApiLaravel\Message\Error\InvalidMessage;

class LinkID extends MediaID
{
    /**
    * {@inheritdoc}
    */
    protected string $type = 'link';

    /**
     * Creates a new Message class.
     *
     * @param string $url Some HTTP o HTTPS url of any public document published on internet.
     */
    public function __construct(string $url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidMessage();
        }

        parent::__construct($url);
    }
}
