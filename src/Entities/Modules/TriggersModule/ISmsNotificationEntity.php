<?php declare(strict_types = 1);

/**
 * ISmsNotificationEntity.php
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

namespace FastyBird\Metadata\Entities\Modules\TriggersModule;

use IPub\Phone\Entities as PhoneEntities;

/**
 * SMS notification entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface ISmsNotificationEntity extends INotificationEntity
{

	/**
	 * @return PhoneEntities\Phone
	 */
	public function getPhone(): PhoneEntities\Phone;

}
