<?php

namespace Harryn\Jacobn\AutomationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkflowEvents
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Harryn\Jacobn\AutpmationBundle\Repository\WorkflowEventsRepository")
 * @ORM\Table(name="uv_workflow_events")
 */
class WorkflowEvents
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $eventId;

    /**
     * @var string
     * @ORM\Column(type="string", length=191)
     */
    private $event;

    /**
     * @var \Harryn\Jacobn\AutomationBundle\Entity\Workflow
     * @ORM\ManyToOne(targetEntity="Harryn\Jacobn\AutomationBundle\Entity\Workflow", inversedBy="WorkflowEvents")
     * @ORM\JoinColumn(name="workflow_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $workflow;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eventId
     *
     * @param integer $eventId
     *
     * @return WorkflowEvents
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return integer
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set event
     *
     * @param string $event
     *
     * @return WorkflowEvents
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set workflow
     *
     * @param \Harryn\Jacobn\AutomationBundle\Entity\Workflow $workflow
     *
     * @return WorkflowEvents
     */
    public function setWorkflow(\Harryn\Jacobn\AutomationBundle\Entity\Workflow $workflow = null)
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * Get workflow
     *
     * @return \Harryn\Jacobn\AutomationBundle\Entity\Workflow
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }
}

