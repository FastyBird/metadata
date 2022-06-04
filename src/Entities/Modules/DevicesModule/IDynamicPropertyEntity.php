<?php declare(strict_types = 1);

/**
 * IDynamicPropertyEntity.php
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

/**
 * Dynamic property entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IDynamicPropertyEntity extends IPropertyEntity
{

	/**
	 * @return bool|float|int|string|null
	 */
	public function getActualValue();

	/**
	 * @return bool|float|int|string|null
	 */
	public function getPreviousValue();

	/**
	 * @return bool|float|int|string|null
	 */
	public function getExpectedValue();

	/**
	 * @return bool|null
	 */
	public function isPending(): ?bool;

	/**
	 * @return bool|null
	 */
	public function isValid(): ?bool;

}
