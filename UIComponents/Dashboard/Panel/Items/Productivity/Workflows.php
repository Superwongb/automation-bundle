<?php

namespace Harryn\Jacobn\AutomationBundle\UIComponents\Dashboard\Panel\Items\Productivity;

use Harryn\Jacobn\CoreFrameworkBundle\Dashboard\Segments\PanelSidebarItemInterface;
use Harryn\Jacobn\CoreFrameworkBundle\UIComponents\Dashboard\Panel\Sidebars\Productivity;

class Workflows implements PanelSidebarItemInterface
{
    public static function getTitle() : string
    {
        return "Workflows";
    }

    public static function getRouteName() : string
    {
        return 'helpdesk_member_workflow_collection';
    }

    public static function getSupportedRoutes() : array
    {
        return [
            'workflows_addaction',
            'workflows_editaction',
            'helpdesk_member_workflow_collection', 
        ];
    }

    public static function getRoles() : array
    {
        return ['ROLE_AGENT_MANAGE_WORKFLOW_AUTOMATIC'];
    }

    public static function getSidebarReferenceId() : string
    {
        return Productivity::class;
    }
}
