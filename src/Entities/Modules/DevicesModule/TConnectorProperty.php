<?php declare(strict_types = 1);

/**
 * TConnectorProperty.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           02.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\DevicesModule;

use Ramsey\Uuid;

/**
 * Connector property trait
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
trait TConnectorProperty
{

	/** @var Uuid\UuidInterface */
	protected Uuid\UuidInterface $connector;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getConnector(): Uuid\UuidInterface
	{
		return $this->connector;
	}

}
