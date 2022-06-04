<?php declare(strict_types = 1);

/**
 * EmailEntity.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           01.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\AccountsModule;

use Ramsey\Uuid;

/**
 * Email entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class EmailEntity implements IEmailEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $account;

	/** @var string */
	private string $address;

	/** @var bool */
	private bool $default;

	/** @var bool */
	private bool $verified;

	/** @var bool */
	private bool $private;

	/** @var bool */
	private bool $public;

	public function __construct(
		string $id,
		string $account,
		string $address,
		bool $default,
		bool $verified,
		bool $private,
		bool $public
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->account = Uuid\Uuid::fromString($account);
		$this->address = $address;
		$this->default = $default;
		$this->verified = $verified;
		$this->private = $private;
		$this->public = $public;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getId(): Uuid\UuidInterface
	{
		return $this->id;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAccount(): Uuid\UuidInterface
	{
		return $this->account;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAddress(): string
	{
		return $this->address;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isDefault(): bool
	{
		return $this->default;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isVerified(): bool
	{
		return $this->verified;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isPrivate(): bool
	{
		return $this->private;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isPublic(): bool
	{
		return $this->public;
	}

}
