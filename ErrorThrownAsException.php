<?php
/**
 * Error Thrown As An Exception
 *
 * @package    Exception
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Exception;

use Exception;

/**
 * Error Thrown As An Exception
 *
 * @package    Exception
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      0.1
 */
class ErrorThrownAsException extends Exception implements ExceptionInterface
{
    /**
     * Class Constructor
     *
     * @param   null|string $message
     * @param   null|int    $code
     * @param   Exception   $previous
     *
     * @link   http://php.net/manual/en/exception.construct.php
     * @link   http://php.net/manual/en/language.exceptions.extending.php
     */
    public function __construct($message = null, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Custom String Representation of Object
     *
     * @return  string
     * @since   0.1
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
