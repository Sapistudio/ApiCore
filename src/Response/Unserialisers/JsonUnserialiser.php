<?php

/*
 * This file is part of Core.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SapiApi\Core\Response\Unserialisers;

use SapiApi\Core\Contracts\Response\Unserialiser;

/**
 * Class JsonUnserialiser.
 */
class JsonUnserialiser implements Unserialiser
{
    /**
     * @param $input
     *
     * @return mixed
     */
    public function unserialise($input,$class = null)
    {
        return (array) json_decode($input);
    }
}