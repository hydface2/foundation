<?php

namespace Modera\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="modera_security_session")
 *
 * @author    Sergei Vizel <sergei.vizel@modera.org>
 * @copyright 2015 Modera Foundation
 */
class Session
{
    /**
     * @ORM\Id
     * @ORM\Column(type="binary", length=128, nullable=false)
     */
    protected $session_id;

    /**
     * @ORM\Column(type="blob", length=65532, nullable=false)
     */
    protected $session_value;

    /**
     * @ORM\Column(type="integer", nullable=false, options={"unsigned"=true})
     */
    protected $session_time;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $session_lifetime;
}
