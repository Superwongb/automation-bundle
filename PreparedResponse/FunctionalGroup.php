<?php

namespace Harryn\Jacobn\AutomationBundle\PreparedResponse;

use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class FunctionalGroup
{
    const AGENT = 'agent';
    const TICKET = 'ticket';
    const CUSTOMER = 'customer';
}
