<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */
namespace League\OAuth2\Server;

use League\Event\Event;
use Psr\Http\Message\ServerRequestInterface;

class RequestEvent extends Event
{
    /**
     * @var \Psr\Http\Message\ServerRequestInterface
     */
    private $request;

    /**
     * RequestEvent constructor.
     *
     * @param string                                   $name
     * @param \Psr\Http\Message\ServerRequestInterface $request
     */
    public function __construct($name, ServerRequestInterface $request)
    {
        parent::__construct($name);
        $this->request = $request;
    }

    /**
     * @return ServerRequestInterface
     * @codeCoverageIgnore
     */
    public function getRequest()
    {
        return $this->request;
    }
}
