<?php

namespace Heystack\Subsystem\Core\Identifier;

/**
 * Class IdentifierInterface
 * @author Cam Spiers <cameron@heyday.co.nz>
 * @package Heystack\Subsystem\Core\Identifier
 */
interface IdentifierInterface
{
    /**
     * @return
     */
    public function getPrimary();
    /**
     * @return array
     */
    public function getSecondaries();
    /**
     * @param IdentifierInterface $identifier
     * @return bool
     */
    public function isMatch(IdentifierInterface $identifier);
    /**
     * @param IdentifierInterface $identifier
     * @return bool
     */
    public function isMatchStrict(IdentifierInterface $identifier);
}