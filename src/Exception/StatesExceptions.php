<?php


namespace Mercyware\States\Exception;

use Exception;

class StatesExceptions extends Exception
{

    /**
     * @return StatesExceptions
     */
    public static function unknownStateInformationException()
    {
        return new static("The State information is either unknown or cannot be found");
    }
}
