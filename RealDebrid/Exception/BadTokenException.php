<?php

namespace RealDebrid\Exception;

/**
 * BadTokenException
 *
 * Bad token (expired or invalid). HTTP Status Code: 404
 * @package RealDebrid\Exception
 * @author Valentin GOT
 */
class BadTokenException extends \Exception {
    protected $message = 'Bad token (expired, invalid)';
}