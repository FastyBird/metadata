<?php declare(strict_types = 1);

/**
 * IMetadataLoader.php
 *
 * @license        More in license.md
 * @copyright      https://fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Loaders
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\ModulesMetadata\Loaders;

use Nette\Utils;

/**
 * Metadata loader interface
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Loaders
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IMetadataLoader
{

	/**
	 * @return Utils\ArrayHash
	 */
	public function load(): Utils\ArrayHash;

}
