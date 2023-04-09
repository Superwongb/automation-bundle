<?php

namespace Harryn\Jacobn\AutomationBundle\UIComponents\Ticket\QuickActionButtons;

use Twig\Environment as TwigEnvironment;
use Symfony\Component\HttpFoundation\RequestStack;
use Harryn\Jacobn\CoreFrameworkBundle\Dashboard\DashboardTemplate;
use Harryn\Jacobn\CoreFrameworkBundle\Tickets\QuickActionButtonInterface;

class PreparedResponses implements QuickActionButtonInterface
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public static function getRoles() : array
    {
        return ['ROLE_AGENT_MANAGE_WORKFLOW_MANUAL'];
    }

    public function renderTemplate(TwigEnvironment $twig)
    {
        return $twig->render('@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig', [
            'ticketId' => $this->requestStack->getCurrentRequest()->get('ticketId')
        ]);
    }

    public function prepareDashboard(DashboardTemplate $dashboard)
    {
        $dashboard->appendJavascript('bundles/uvdeskautomation/js/tickets/quick-actions/prepared-responses.js');
    }
}
