<?php

class Bar
{
    /**
     * @var \StdObject
     * @ORM\OneToOne(targetEntity="StdObject")
     * @ORM\JoinColumn(name="std_id", referencedColumnName="id", nullable=true)
     */
    private $foo7;

    /**
     * @var \StdObject
     * @ORM\OneToOne(targetEntity="StdObject")
     * @ORM\JoinColumn(
     *     nullable=false,
     *     name="std_id",
     *     referencedColumnName="id"
     * )
     */
    private $foo8;

}
