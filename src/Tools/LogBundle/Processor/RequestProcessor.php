<?php
namespace Tools\LogBundle\Processor;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bridge\Monolog\Processor\WebProcessor;

class RequestProcessor extends WebProcessor
{
    private $_session;

    public function __construct(Session $session)
    {
        $this->_session = $session;
    }

    public function processRecord(array $record)
    {
        $record['extra']['serverData'] = "";

        if( is_array($this->serverData) ) {
            foreach ($this->serverData as $key => $value) {

                if( is_array($value) ) {
                    $value = print_r($value, true);
                }

                $record['extra']['serverData'] .= $key . ": " . $value . "\n";
            }
        }

        foreach ($_SERVER as $key => $value) {

            if( is_array($value) ) {
                $value = print_r($value, true);
            }

            $record['extra']['serverData'] .= $key . ": " . $value . "\n";
        }

        return $record;
    }
}