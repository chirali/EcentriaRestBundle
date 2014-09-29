<?php
/*
 * This file is part of the Ecentria software.
 *
 * (c) 2014, OpticsPlanet, Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ecentria\Libraries\CoreRestBundle\Model;

/**
 * Error Model
 *
 * @author Sergey Chernecov <sergey.chernecov@intexsys.lv>
 */
class Error
{
    const CONTEXT_DATA = 'data';
    const CONTEXT_GLOBAL = 'global';

    /**
     * Code
     *
     * @var int
     */
    public $code = null;

    /**
     * Message
     *
     * @var string
     */
    public $message = null;

    /**
     * Error context
     *
     * @var null|string
     */
    public $context = null;

    /**
     * Property path
     *
     * @var null|string
     */
    public $key = null;

    /**
     * Constructor
     *
     * @param string $message
     * @param int $code
     * @param null|string $key
     * @param null|string $context
     */
    public function __construct($message, $code, $key = null, $context = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->context = $context;
        $this->key = $key;
    }
}