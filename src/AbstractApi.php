<?php

/*
 * This file is part of Core.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SapiApi\Core;

use SapiApi\Core\Contracts\HttpClient;

/**
 * Class AbstractApi.
 */
abstract class AbstractApi
{
    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * AbstractApi constructor.
     *
     * @param HttpClient $client
     */
    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * Call inaccessible methods of this class through the HttpClient.
     *
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->client, $name], $arguments);
    }
}
