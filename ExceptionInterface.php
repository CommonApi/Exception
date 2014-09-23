<?php
/**
 * Exception Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Exception;

/**
 * Exception Interface
 *
 * @package    Exception
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ExceptionInterface
{
    /**
     * Convert to String
     *
     * @return  string
     * @since   1.0.0
     */
    public function __toString();
}
