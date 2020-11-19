<?php
/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace TestApp\Dto;

/**
 * Car DTO
 *
 * @property \TestApp\ValueObject\Paint|null $color
 * @property bool|null $isNew
 * @property float|null $value
 * @property int|null $distanceTravelled
 * @property string[]|null $attributes
 * @property \Cake\I18n\FrozenDate|null $manufactured
 * @property \TestApp\Dto\OwnerDto|null $owner
 */
class CarDto extends \CakeDto\Dto\AbstractDto {

	public const FIELD_COLOR = 'color';
	public const FIELD_IS_NEW = 'isNew';
	public const FIELD_VALUE = 'value';
	public const FIELD_DISTANCE_TRAVELLED = 'distanceTravelled';
	public const FIELD_ATTRIBUTES = 'attributes';
	public const FIELD_MANUFACTURED = 'manufactured';
	public const FIELD_OWNER = 'owner';

	/**
	 * @var \TestApp\ValueObject\Paint|null
	 */
	protected $color;

	/**
	 * @var bool|null
	 */
	protected $isNew;

	/**
	 * @var float|null
	 */
	protected $value;

	/**
	 * @var int|null
	 */
	protected $distanceTravelled;

	/**
	 * @var string[]|null
	 */
	protected $attributes;

	/**
	 * @var \Cake\I18n\FrozenDate|null
	 */
	protected $manufactured;

	/**
	 * @var \TestApp\Dto\OwnerDto|null
	 */
	protected $owner;

	/**
	 * Some data is only for debugging for now.
	 *
	 * @var array
	 */
	protected $_metadata = [
		'color' => [
			'name' => 'color',
			'type' => '\TestApp\ValueObject\Paint',
			'required' => false,
			'defaultValue' => null,
			'dto' => null,
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serializable' => true,
			'factory' => null,
			'toArray' => false,
			'isClass' => true,
		],
		'isNew' => [
			'name' => 'isNew',
			'type' => 'bool',
			'required' => false,
			'defaultValue' => null,
			'dto' => null,
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serializable' => false,
			'factory' => null,
			'toArray' => false,
		],
		'value' => [
			'name' => 'value',
			'type' => 'float',
			'required' => false,
			'defaultValue' => null,
			'dto' => null,
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serializable' => false,
			'factory' => null,
			'toArray' => false,
		],
		'distanceTravelled' => [
			'name' => 'distanceTravelled',
			'type' => 'int',
			'required' => false,
			'defaultValue' => null,
			'dto' => null,
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serializable' => false,
			'factory' => null,
			'toArray' => false,
		],
		'attributes' => [
			'name' => 'attributes',
			'type' => 'string[]',
			'required' => false,
			'defaultValue' => null,
			'dto' => null,
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serializable' => false,
			'factory' => null,
			'toArray' => false,
		],
		'manufactured' => [
			'name' => 'manufactured',
			'type' => '\Cake\I18n\FrozenDate',
			'required' => false,
			'defaultValue' => null,
			'dto' => null,
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serializable' => false,
			'factory' => null,
			'toArray' => false,
			'isClass' => true,
		],
		'owner' => [
			'name' => 'owner',
			'type' => '\TestApp\Dto\OwnerDto',
			'required' => false,
			'defaultValue' => null,
			'dto' => 'Owner',
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serializable' => false,
			'factory' => null,
			'toArray' => false,
		],
	];

	/**
	* @var array
	*/
	protected $_keyMap = [
		'underscored' => [
			'color' => 'color',
			'is_new' => 'isNew',
			'value' => 'value',
			'distance_travelled' => 'distanceTravelled',
			'attributes' => 'attributes',
			'manufactured' => 'manufactured',
			'owner' => 'owner',
		],
		'dashed' => [
			'color' => 'color',
			'is-new' => 'isNew',
			'value' => 'value',
			'distance-travelled' => 'distanceTravelled',
			'attributes' => 'attributes',
			'manufactured' => 'manufactured',
			'owner' => 'owner',
		],
	];

	/**
	 * @param \TestApp\ValueObject\Paint|null $color
	 *
	 * @return $this
	 */
	public function setColor(?\TestApp\ValueObject\Paint $color) {
		$this->color = $color;
		$this->_touchedFields[self::FIELD_COLOR] = true;

		return $this;
	}

	/**
	 * @return \TestApp\ValueObject\Paint|null
	 */
	public function getColor(): ?\TestApp\ValueObject\Paint {
		return $this->color;
	}

	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return \TestApp\ValueObject\Paint
	 */
	public function getColorOrFail(): \TestApp\ValueObject\Paint {
		if (!isset($this->color)) {
			throw new \RuntimeException('Value not set for field `color` (expected to be not null)');
		}

		return $this->color;
	}

	/**
	 * @return bool
	 */
	public function hasColor(): bool {
		return $this->color !== null;
	}

	/**
	 * @param bool|null $isNew
	 *
	 * @return $this
	 */
	public function setIsNew(?bool $isNew) {
		$this->isNew = $isNew;
		$this->_touchedFields[self::FIELD_IS_NEW] = true;

		return $this;
	}

	/**
	 * @return bool|null
	 */
	public function getIsNew(): ?bool {
		return $this->isNew;
	}

	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return bool
	 */
	public function getIsNewOrFail(): bool {
		if (!isset($this->isNew)) {
			throw new \RuntimeException('Value not set for field `isNew` (expected to be not null)');
		}

		return $this->isNew;
	}

	/**
	 * @return bool
	 */
	public function hasIsNew(): bool {
		return $this->isNew !== null;
	}

	/**
	 * @param float|null $value
	 *
	 * @return $this
	 */
	public function setValue(?float $value) {
		$this->value = $value;
		$this->_touchedFields[self::FIELD_VALUE] = true;

		return $this;
	}

	/**
	 * @return float|null
	 */
	public function getValue(): ?float {
		return $this->value;
	}

	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return float
	 */
	public function getValueOrFail(): float {
		if (!isset($this->value)) {
			throw new \RuntimeException('Value not set for field `value` (expected to be not null)');
		}

		return $this->value;
	}

	/**
	 * @return bool
	 */
	public function hasValue(): bool {
		return $this->value !== null;
	}

	/**
	 * @param int|null $distanceTravelled
	 *
	 * @return $this
	 */
	public function setDistanceTravelled(?int $distanceTravelled) {
		$this->distanceTravelled = $distanceTravelled;
		$this->_touchedFields[self::FIELD_DISTANCE_TRAVELLED] = true;

		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getDistanceTravelled(): ?int {
		return $this->distanceTravelled;
	}

	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return int
	 */
	public function getDistanceTravelledOrFail(): int {
		if (!isset($this->distanceTravelled)) {
			throw new \RuntimeException('Value not set for field `distanceTravelled` (expected to be not null)');
		}

		return $this->distanceTravelled;
	}

	/**
	 * @return bool
	 */
	public function hasDistanceTravelled(): bool {
		return $this->distanceTravelled !== null;
	}

	/**
	 * @param string[]|null $attributes
	 *
	 * @return $this
	 */
	public function setAttributes(?array $attributes) {
		$this->attributes = $attributes;
		$this->_touchedFields[self::FIELD_ATTRIBUTES] = true;

		return $this;
	}

	/**
	 * @return string[]|null
	 */
	public function getAttributes(): ?array {
		return $this->attributes;
	}

	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return string[]
	 */
	public function getAttributesOrFail(): array {
		if (!isset($this->attributes)) {
			throw new \RuntimeException('Value not set for field `attributes` (expected to be not null)');
		}

		return $this->attributes;
	}

	/**
	 * @return bool
	 */
	public function hasAttributes(): bool {
		return $this->attributes !== null;
	}

	/**
	 * @param \Cake\I18n\FrozenDate|null $manufactured
	 *
	 * @return $this
	 */
	public function setManufactured(?\Cake\I18n\FrozenDate $manufactured) {
		$this->manufactured = $manufactured;
		$this->_touchedFields[self::FIELD_MANUFACTURED] = true;

		return $this;
	}

	/**
	 * @return \Cake\I18n\FrozenDate|null
	 */
	public function getManufactured(): ?\Cake\I18n\FrozenDate {
		return $this->manufactured;
	}

	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return \Cake\I18n\FrozenDate
	 */
	public function getManufacturedOrFail(): \Cake\I18n\FrozenDate {
		if (!isset($this->manufactured)) {
			throw new \RuntimeException('Value not set for field `manufactured` (expected to be not null)');
		}

		return $this->manufactured;
	}

	/**
	 * @return bool
	 */
	public function hasManufactured(): bool {
		return $this->manufactured !== null;
	}

	/**
	 * @param \TestApp\Dto\OwnerDto|null $owner
	 *
	 * @return $this
	 */
	public function setOwner(?\TestApp\Dto\OwnerDto $owner) {
		$this->owner = $owner;
		$this->_touchedFields[self::FIELD_OWNER] = true;

		return $this;
	}

	/**
	 * @return \TestApp\Dto\OwnerDto|null
	 */
	public function getOwner(): ?\TestApp\Dto\OwnerDto {
		return $this->owner;
	}

	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return \TestApp\Dto\OwnerDto
	 */
	public function getOwnerOrFail(): \TestApp\Dto\OwnerDto {
		if (!isset($this->owner)) {
			throw new \RuntimeException('Value not set for field `owner` (expected to be not null)');
		}

		return $this->owner;
	}

	/**
	 * @return bool
	 */
	public function hasOwner(): bool {
		return $this->owner !== null;
	}

}
