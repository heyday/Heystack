<?php

namespace Heystack\Subsystem\Core\Exception;

use Heystack\Subsystem\Core\ServiceStore;
use Heystack\Subsystem\Core\Services;

use Monolog\Logger;

class ConfigurationException extends \Exception
{

    public function __construct($message, $code = null, $previous = null)
    {

        $message = "Configuration Error: $message";

        if (!defined('UNIT_TESTING')) {

            $monolog = ServiceStore::getService(Services::MONOLOG);

            if ($monolog instanceof Logger) {

                $monolog->err($message);

            }

        }

        parent::__construct($message, $code, $previous);

    }

}