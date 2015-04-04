<?php
namespace Mindweb\Subscriber;

use Symfony\Component\Config\Definition\ConfigurationInterface;

interface Subscriber
{
    /**
     * @return array
     */
    public function register();

    /**
     * @return string
     */
    public function getEventName();

    /**
     * @return ConfigurationInterface|null
     */
    public function getConfiguration();
} 