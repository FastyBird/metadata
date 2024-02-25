<?php declare(strict_types = 1);

/**
 * TCreatedAt.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Documents
 * @since          1.0.0
 *
 * @date           03.01.23
 */

namespace FastyBird\Library\Metadata\Documents;

use DateTimeInterface;

/**
 * Data document created at interface
 *
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Documents
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 *
 * @property-read DateTimeInterface|null $createdAt
 */
interface CreatedAt
{

	public function getCreatedAt(): DateTimeInterface|null;

}
