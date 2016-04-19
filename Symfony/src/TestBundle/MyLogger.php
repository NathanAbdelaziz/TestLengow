<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TestBundle;
use Monolog\Logger;
/**
 * Description of MyLogger
 *
 * @author Nathan
 */
class MyLogger {
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
}