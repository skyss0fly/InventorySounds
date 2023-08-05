<?php



declare(strict_types=1);

namespace skyss0fly\InventorySounds;

use pocketmine\item\Item;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemTypeIds;
use pocketmine\utils\CloningRegistryTrait;

/**
 * This doc-block is generated automatically, do not modify it manually.
 * This must be regenerated whenever registry members are added, removed or changed.
 * @see build/generate-registry-annotations.php
 * @generate-registry-docblock
 *
 * @method static \pocketmine\item\Item IRON_HORSE_ARMOR()
 */
final class ExtraVanillaItems{
	use CloningRegistryTrait;

	private function __construct(){
		//NOOP
	}

	protected static function register(string $name, Item $item) : void{
		self::_registryRegister($name, $item);
	}

	/**
	 * @return Item[]
	 * @phpstan-return array<string, Item>
	 */
	public static function getAll() : array{
		//phpstan doesn't support generic traits yet :(
		/** @var Item[] $result */
		$result = self::_registryGetAll();
		return $result;
	}

	protected static function setup() : void{
		//If you want, store this ID somewhere for later, but you can always get it by doing ExtraVanillaItems::IRON_HORSE_ARMOR()->getTypeId()
		$goatHornTypeId = ItemTypeIds::newId();
		self::register("Goat_Horn", new Item(new ItemIdentifier($goatHornTypeId),"Goat Horn"));
	}
}
