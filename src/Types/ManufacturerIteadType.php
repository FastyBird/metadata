<?php declare(strict_types = 1);

/**
 * ManufacturerIteadType.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           06.07.18
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * ITEAD manufacturer models types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ManufacturerIteadType extends Consistence\Enum\Enum
{

	/**
	 * Define itead models
	 */
	public const MODEL_SONOFF_BASIC = DeviceModelType::MODEL_SONOFF_BASIC;
	public const MODEL_SONOFF_RF = DeviceModelType::MODEL_SONOFF_RF;
	public const MODEL_SONOFF_TH = DeviceModelType::MODEL_SONOFF_TH;
	public const MODEL_SONOFF_SV = DeviceModelType::MODEL_SONOFF_SV;
	public const MODEL_SONOFF_SLAMPHER = DeviceModelType::MODEL_SONOFF_SLAMPHER;
	public const MODEL_SONOFF_S20 = DeviceModelType::MODEL_SONOFF_S20;
	public const MODEL_SONOFF_TOUCH = DeviceModelType::MODEL_SONOFF_TOUCH;
	public const MODEL_SONOFF_POW = DeviceModelType::MODEL_SONOFF_POW;
	public const MODEL_SONOFF_POW_R2 = DeviceModelType::MODEL_SONOFF_POW_R2;
	public const MODEL_SONOFF_DUAL = DeviceModelType::MODEL_SONOFF_DUAL;
	public const MODEL_SONOFF_DUAL_R2 = DeviceModelType::MODEL_SONOFF_DUAL_R2;
	public const MODEL_SONOFF_4CH = DeviceModelType::MODEL_SONOFF_4CH;
	public const MODEL_SONOFF_4CH_PRO = DeviceModelType::MODEL_SONOFF_4CH_PRO;
	public const MODEL_SONOFF_RF_BRIDGE = DeviceModelType::MODEL_SONOFF_RF_BRIDGE;
	public const MODEL_SONOFF_B1 = DeviceModelType::MODEL_SONOFF_B1;
	public const MODEL_SONOFF_LED = DeviceModelType::MODEL_SONOFF_LED;
	public const MODEL_SONOFF_T1_1CH = DeviceModelType::MODEL_SONOFF_T1_1CH;
	public const MODEL_SONOFF_T1_2CH = DeviceModelType::MODEL_SONOFF_T1_2CH;
	public const MODEL_SONOFF_T1_3CH = DeviceModelType::MODEL_SONOFF_T1_3CH;
	public const MODEL_SONOFF_S31 = DeviceModelType::MODEL_SONOFF_S31;
	public const MODEL_SONOFF_SC = DeviceModelType::MODEL_SONOFF_SC;
	public const MODEL_SONOFF_SC_PRO = DeviceModelType::MODEL_SONOFF_SC_PRO;
	public const MODEL_SONOFF_PS_15 = DeviceModelType::MODEL_SONOFF_PS_15;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
