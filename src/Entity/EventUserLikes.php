<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventUserLikes
 *
 * @ORM\Table(name="event__user__likes")
 * @ORM\Entity
 */
class EventUserLikes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     */
    private $eventId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;


}

