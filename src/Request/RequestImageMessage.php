<?php

namespace AsimAltayb\WhatsappApiLaravel\Request;

use AsimAltayb\WhatsappApiLaravel\Request;

class RequestImageMessage extends Request
{
    /**
     * Makes the raw body of the request.
     *
     */
    protected function makeBody(): void
    {
        $this->body = [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => $this->message->type(),
            'image' => [
                'caption' => $this->message->caption(),
                $this->message->identifierType() => $this->message->identifierValue(),
            ],
        ];
    }
}
