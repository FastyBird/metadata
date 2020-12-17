<?php declare(strict_types = 1);

/**
 * MetadataLoader.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Loaders
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\ModulesMetadata\Loaders;

use FastyBird\ModulesMetadata\Exceptions;
use FastyBird\ModulesMetadata\Schemas;
use Nette\Utils;

/**
 * Metadata loader
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Loaders
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class MetadataLoader implements IMetadataLoader
{

	private const RESOURCES_FOLDER = __DIR__ . '/../../resources';

	/** @var Schemas\IValidator */
	private Schemas\IValidator $jsonValidator;

	public function __construct(
		Schemas\IValidator $jsonValidator
	) {
		$this->jsonValidator = $jsonValidator;
	}

	/**
	 * {@inheritDoc}
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function load(): Utils\ArrayHash
	{
		$schema = self::RESOURCES_FOLDER . '/schemas/modules.json';

		$metadata = self::RESOURCES_FOLDER . '/modules.json';

		$schema = file_get_contents($schema);

		if ($schema === false) {
			throw new Exceptions\FileNotFoundException('Schema could not be loaded');
		}

		$metadata = file_get_contents($metadata);

		if ($metadata === false) {
			throw new Exceptions\FileNotFoundException('Metadata could not be loaded');
		}

		return $this->jsonValidator->validate(
			$metadata,
			$schema
		);
	}

}
