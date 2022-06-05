<?php declare(strict_types = 1);

/**
 * SmsNotificationEntity.php
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

use FastyBird\Metadata\Exceptions;
use IPub\Phone\Entities as PhoneEntities;

/**
 * SMS notification entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class SmsNotificationEntity extends NotificationEntity implements ISmsNotificationEntity
{

	/** @var PhoneEntities\Phone|null */
	private ?PhoneEntities\Phone $phone = null;

	/**
	 * {@inheritDoc}
	 */
	public function getPhone(): PhoneEntities\Phone
	{
		if ($this->phone === null) {
			throw new Exceptions\InvalidStateException('Entity was not properly created');
		}

		return $this->phone;
	}

	/**
	 * @param PhoneEntities\Phone $phone
	 *
	 * @return void
	 */
	public function setPhone(PhoneEntities\Phone $phone): void
	{
		$this->phone = $phone;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'phone' => $this->getPhone()->getInternationalNumber(),
		]);
	}

	/**
	 * @return Array<string, mixed>
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}
