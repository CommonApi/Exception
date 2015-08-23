<?php
/**
 * Exception Handler Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Exception;

/**
 * Exception Handler Interface
 *
 * @package    Exception
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ExceptionHandlerInterface
{
    /**
     * Handle PHP Exception
     *
     * @param   array  $options
     *
     * @return  boolean|null
     * @since   1.0.0
     */
    public function handleException(array $options);
}
