<?php declare(strict_types = 1);

/**
 * ConnectorDynamicPropertyEntity.php
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
 * Connector dynamic property entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IConnectorDynamicPropertyEntity extends IDynamicPropertyEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getConnector(): Uuid\UuidInterface;

}
