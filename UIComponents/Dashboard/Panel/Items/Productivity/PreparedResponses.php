<?php

namespace Harryn\Jacobn\AutomationBundle\UIComponents\Dashboard\Panel\Items\Productivity;

use Harryn\Jacobn\CoreFrameworkBundle\Dashboard\Segments\PanelSidebarItemInterface;
use Harryn\Jacobn\CoreFrameworkBundle\UIComponents\Dashboard\Panel\Sidebars\Productivity;

class PreparedResponses implements PanelSidebarItemInterface
{
    public static function getTitle() : string
    {
        return "Prepared Responses";
    }

    public static function getRouteName() : string
    {
        return 'prepare_response_action';
    }

    public static function getSupportedRoutes() : array
    {
        return [
            'prepare_response_action', 
            'prepare_response_addaction',
            'prepare_response_editaction',
        ];
    }

    public static function getRoles() : array
    {
        return ['ROLE_AGENT_MANAGE_WORKFLOW_MANUAL'];
    }

    public static function getSidebarReferenceId() : string
    {
        return Productivity::class;
    }
}
