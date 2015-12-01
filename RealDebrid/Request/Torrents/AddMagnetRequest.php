<?php

namespace RealDebrid\Request\Torrents;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * POST /torrents/addMagnet
 *
 * Add a magnet link to download
 * @package RealDebrid\Request\Torrents
 * @author Valentin GOT
 */
class AddMagnetRequest extends AbstractRequest {

    /**
     * Add a magnet link to download
     *
     * @param Token $token Access token
     * @param string $magnet Magnet link
     * @param int|null $host Hoster domain (retrieved from /torrents/availableHosts)
     * @param int|null $split Split size (under max_split_size of concerned hoster retrieved from /torrents/availableHosts)
     */
    public function __construct(Token $token, $magnet, $host = null, $split = null) {
        parent::__construct();

        $this->setToken($token);
        $this->addToBody('magnet', $magnet);
        if (!empty($host))
            $this->addToBody('host', $host);
        if (!empty($split))
            $this->addToBody('split', $split);
    }

    public function getRequestType() {
        return RequestType::POST;
    }

    public function getUri() {
        return "torrents/addMagnet";
    }
}