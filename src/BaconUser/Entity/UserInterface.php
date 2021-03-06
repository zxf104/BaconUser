<?php
/**
 * BaconUser
 *
 * @link      http://github.com/Bacon/BaconUser For the canonical source repository
 * @copyright 2013 Ben Scholzen 'DASPRiD'
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconUser\Entity;

/**
 * Generic user interface.
 */
interface UserInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param  string $email
     * @return UserInterface
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getPasswordHash();

    /**
     * @param string $passwordHash
     */
    public function setPasswordHash($passwordHash);

    /**
     * @return string|null
     */
    public function getUsername();

    /**
     * @param  string|null $username
     * @return UserInterface
     */
    public function setUsername($username);

    /**
     * @return string|null
     */
    public function getDisplayName();

    /**
     * @param  string|null $displayName
     * @return UserInterface
     */
    public function setDisplayName($displayName);

    /**
     * @return string|null
     */
    public function getState();

    /**
     * @param  int|null $state
     * @return UserInterface
     */
    public function setState($state);
}
