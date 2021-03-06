<?php
/**
 * BaconUser
 *
 * @link      http://github.com/Bacon/BaconUser For the canonical source repository
 * @copyright 2013 Ben Scholzen 'DASPRiD'
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconUser\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * @see UserOptionsInterface
 */
class UserOptions extends AbstractOptions implements UserOptionsInterface
{
    /**
     * @var bool
     */
    protected $enableUsername = true;

    /**
     * @var bool
     */
    protected $enableDisplayName = true;

    /**
     * @var bool
     */
    protected $enableUserState = true;

    /**
     * @var int
     */
    protected $defaultUserState = 1;

    /**
     * @var array
     */
    protected $allowedLoginStates = array(null, 1);

    /**
     * @return bool
     */
    public function getEnableUsername()
    {
        return $this->enableUsername;
    }

    /**
     * @param  bool $enableUsername
     * @return UserOptions
     */
    public function setEnableUsername($enableUsername)
    {
        $this->enableUsername = $enableUsername;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableDisplayName()
    {
        return $this->enableDisplayName;
    }

    /**
     * @param  bool $enableDisplayName
     * @return UserOptions
     */
    public function setEnableDisplayName($enableDisplayName)
    {
        $this->enableDisplayName = $enableDisplayName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableUserState()
    {
        return $this->enableUserState;
    }

    /**
     * @param  bool $enableUserState
     * @return UserOptions
     */
    public function setEnableUserState($enableUserState)
    {
        $this->enableUserState = $enableUserState;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultUserState()
    {
        return $this->defaultUserState;
    }

    /**
     * @param  int $defaultUserState
     * @return UserOptions
     */
    public function setDefaultUserState($defaultUserState)
    {
        $this->defaultUserState = $defaultUserState;
        return $this;
    }

    /**
     * @return array
     */
    public function getAllowedLoginStates()
    {
        return $this->allowedLoginStates;
    }

    /**
     * @param  array $allowedLoginStates
     * @return UserOptions
     */
    public function setAllowedLoginStates(array $allowedLoginStates)
    {
        $this->allowedLoginStates = $allowedLoginStates;
        return $this;
    }
}
