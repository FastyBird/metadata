<?php declare(strict_types = 1);

/**
 * IdentityEntity.php
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

use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Identity entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class IdentityEntity implements IIdentityEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $account;

	/** @var Types\IdentityStateType */
	private Types\IdentityStateType $state;

	/** @var string */
	private string $uid;

	/** @var string|null */
	private ?string $hash;

	public function __construct(
		string $id,
		string $account,
		string $state,
		string $uid,
		?string $hash = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->account = Uuid\Uuid::fromString($account);
		$this->state = Types\IdentityStateType::get($state);
		$this->uid = $uid;
		$this->hash = $hash;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getId(): Uuid\UuidInterface
	{
		return $this->id;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAccount(): Uuid\UuidInterface
	{
		return $this->account;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getState(): Types\IdentityStateType
	{
		return $this->state;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getUid(): string
	{
		return $this->uid;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getHash(): ?string
	{
		return $this->hash;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return [
			'id'      => $this->getId()->toString(),
			'account' => $this->getAccount()->toString(),
			'state'   => $this->getState()->getValue(),
			'uid'     => $this->getUid(),
			'hash'    => $this->getHash(),
		];
	}

	/**
	 * @return Array<string, mixed>
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}
