<?php declare(strict_types = 1);

/**
 * RoleEntity.php
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
 * Role entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class RoleEntity implements IRoleEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var string */
	private string $name;

	/** @var string */
	private string $comment;

	/** @var bool */
	private bool $anonymous;

	/** @var bool */
	private bool $authenticated;

	/** @var bool */
	private bool $administrator;

	/** @var Uuid\UuidInterface|null */
	private ?Uuid\UuidInterface $parent;

	public function __construct(
		string $id,
		string $name,
		string $comment,
		bool $anonymous,
		bool $authenticated,
		bool $administrator,
		?string $parent = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->name = $name;
		$this->comment = $comment;
		$this->anonymous = $anonymous;
		$this->authenticated = $authenticated;
		$this->administrator = $administrator;
		$this->parent = $parent !== null ? Uuid\Uuid::fromString($parent) : null;
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
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getComment(): string
	{
		return $this->comment;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isAnonymous(): bool
	{
		return $this->anonymous;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isAuthenticated(): bool
	{
		return $this->authenticated;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isAdministrator(): bool
	{
		return $this->administrator;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getParent(): ?Uuid\UuidInterface
	{
		return $this->parent;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return [
			'id'            => $this->getId()->toString(),
			'name'          => $this->getName(),
			'comment'       => $this->getComment(),
			'anonymous'     => $this->isAnonymous(),
			'authenticated' => $this->isAuthenticated(),
			'administrator' => $this->isAdministrator(),
			'parent'        => $this->getParent(),
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
