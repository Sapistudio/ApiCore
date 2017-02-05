<?php

/*
 * This file is part of Core.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SapiApi\Core\Response;

use SapiApi\Core\Contracts\Response\ErrorHandler as ResponseErrorHandler;
use SapiApi\Core\Exceptions\InvalidResponseException;

/**
 * Class ErrorHandler.
 */
class ErrorHandler implements ResponseErrorHandler
{
    /**
     * @param array $data
     *
     * @throws InvalidResponseException
     */
    public function handle(array $data)
    {
        if (empty($data)) {
            throw new InvalidResponseException(
                'Empty response received',
                400,
                null,
                $data
            );
        }
    }
}
