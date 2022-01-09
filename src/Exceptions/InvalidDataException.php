<?php declare(strict_types = 1);

/**
 * InvalidDataException.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Exceptions
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\Metadata\Exceptions;

use RuntimeException;
use Throwable;

class InvalidDataException extends RuntimeException implements IException
{

	/** @var string[] */
	private $messages;

	/**
	 * @param string[] $messages
	 * @param int $code
	 * @param Throwable|null $previous
	 */
	public function __construct(array $messages, int $code = 0, ?Throwable $previous = null)
	{
		$this->messages = $messages;

		$message = implode(' ', $messages);

		parent::__construct($message, $code, $previous);
	}

	/**
	 * @return string[]
	 */
	public function getMessages(): array
	{
		return $this->messages;
	}

}
