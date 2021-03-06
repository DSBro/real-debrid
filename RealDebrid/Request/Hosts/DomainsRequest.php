<?php

namespace RealDebrid\Request\Hosts;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * GET /hosts/domains
 *
 * Get all hoster domains supported on the service
 * @package RealDebrid\Request\Hosts
 * @author Valentin GOT
 */
class DomainsRequest extends AbstractRequest {

    /**
     * Get all hoster domains supported on the service
     *
     * @param Token $token Access Token
     */
    public function __construct(Token $token) {
        parent::__construct();

        $this->setToken($token);
    }

    public function getRequestType() {
        return RequestType::GET;
    }

    public function getUri() {
        return "hosts/domains";
    }
}