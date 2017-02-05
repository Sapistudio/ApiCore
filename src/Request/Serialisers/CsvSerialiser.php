<?php

/*
* This file is part of Core.
*
* (c) DraperStudio <hello@draperstudio.tech>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace SapiApi\Core\Response\Serialisers;
use SapiApi\Core\Contracts\Request\Serialiser;
use League\Csv\Writer;
/**
 * Class JsonSerialiser.
 */
class CsvSerialiser implements Serialiser
{
    /**
     * @param $input
     *
     * @return mixed
     */
    public function serialise($input)
    {
        $writer = Writer::createFromString('');
        if (is_array(reset($input)))
        {
            $writer->insertOne(array_keys(reset($input)));
        } else
        {
            $writer->insertOne(array_keys($input));
        }
        if (is_array(reset($input)))
        {
            $writer->insertAll($input);
        } else
        {
            $writer->insertOne($input);
        }
        return $writer->__toString();
    }
}