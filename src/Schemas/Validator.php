<?php declare(strict_types = 1);

/**
 * Validator.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Schemas
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\ModulesMetadata\Schemas;

use FastyBird\ModulesMetadata\Exceptions;
use Nette;
use Nette\Utils;
use Opis\JsonSchema;

/**
 * JSON schema validator
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Schemas
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class Validator implements IValidator
{

	use Nette\SmartObject;

	/**
	 * {@inheritDoc}
	 */
	public function validate(string $data, string $schema): Utils\ArrayHash
	{
		try {
			$jsonData = Utils\Json::decode($data);

		} catch (Utils\JsonException $ex) {
			throw new Exceptions\MalformedInputException('Failed to decode input data', 0, $ex);
		}

		try {
			$jsonSchema = new JsonSchema\Schema(Utils\Json::decode($schema));

		} catch (Utils\JsonException $ex) {
			throw new Exceptions\LogicException(sprintf('Failed to decode schema'), 0, $ex);
		}

		$validator = new JsonSchema\Validator();

		$result = $validator->schemaValidation($jsonData, $jsonSchema);

		if ($result->isValid()) {
			try {
				return Utils\ArrayHash::from(Utils\Json::decode(Utils\Json::encode($jsonData), Utils\Json::FORCE_ARRAY));

			} catch (Utils\JsonException $ex) {
				throw new Exceptions\LogicException(sprintf('Failed to encode input data'));
			}

		} else {
			$messages = [];

			foreach ($result->getErrors() as $error) {
				try {
					$errorInfo = [
						'keyword' => $error->keyword(),
					];

					if (count($error->dataPointer()) > 0) {
						$errorInfo['pointer'] = $error->dataPointer();
					}

					if (count($error->keywordArgs()) > 0) {
						$errorInfo['error'] = $error->keywordArgs();
					}

					foreach ($error->subErrors() as $subError) {
						$errorInfo['keyword'] = $subError->keyword();

						if (count($subError->dataPointer()) > 0) {
							$errorInfo['pointer'] = $subError->dataPointer();
						}

						if (count($subError->keywordArgs()) > 0) {
							$errorInfo['error'] = $subError->keywordArgs();
						}
					}

					$formattedError = Utils\Json::encode($errorInfo);

				} catch (Utils\JsonException $ex) {
					$formattedError = 'Invalid data';
				}

				$messages[] = sprintf('%s', $formattedError);
			}

			throw new Exceptions\InvalidDataException($messages);
		}
	}

}
