<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogItemVariation Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CatalogItemVariation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'item_id' => 'string',
        'name' => 'string',
        'sku' => 'string',
        'upc' => 'string',
        'ordinal' => 'int',
        'pricing_type' => 'string',
        'price_money' => '\SquareConnect\Model\Money',
        'location_overrides' => '\SquareConnect\Model\ItemVariationLocationOverrides[]',
        'track_inventory' => 'bool',
        'inventory_alert_type' => 'string',
        'inventory_alert_threshold' => 'int',
        'user_data' => 'string',
        'service_duration' => 'int',
        'item_option_values' => '\SquareConnect\Model\CatalogItemOptionValueForItemVariation[]',
        'measurement_unit_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'item_id' => 'item_id',
        'name' => 'name',
        'sku' => 'sku',
        'upc' => 'upc',
        'ordinal' => 'ordinal',
        'pricing_type' => 'pricing_type',
        'price_money' => 'price_money',
        'location_overrides' => 'location_overrides',
        'track_inventory' => 'track_inventory',
        'inventory_alert_type' => 'inventory_alert_type',
        'inventory_alert_threshold' => 'inventory_alert_threshold',
        'user_data' => 'user_data',
        'service_duration' => 'service_duration',
        'item_option_values' => 'item_option_values',
        'measurement_unit_id' => 'measurement_unit_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'item_id' => 'setItemId',
        'name' => 'setName',
        'sku' => 'setSku',
        'upc' => 'setUpc',
        'ordinal' => 'setOrdinal',
        'pricing_type' => 'setPricingType',
        'price_money' => 'setPriceMoney',
        'location_overrides' => 'setLocationOverrides',
        'track_inventory' => 'setTrackInventory',
        'inventory_alert_type' => 'setInventoryAlertType',
        'inventory_alert_threshold' => 'setInventoryAlertThreshold',
        'user_data' => 'setUserData',
        'service_duration' => 'setServiceDuration',
        'item_option_values' => 'setItemOptionValues',
        'measurement_unit_id' => 'setMeasurementUnitId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'item_id' => 'getItemId',
        'name' => 'getName',
        'sku' => 'getSku',
        'upc' => 'getUpc',
        'ordinal' => 'getOrdinal',
        'pricing_type' => 'getPricingType',
        'price_money' => 'getPriceMoney',
        'location_overrides' => 'getLocationOverrides',
        'track_inventory' => 'getTrackInventory',
        'inventory_alert_type' => 'getInventoryAlertType',
        'inventory_alert_threshold' => 'getInventoryAlertThreshold',
        'user_data' => 'getUserData',
        'service_duration' => 'getServiceDuration',
        'item_option_values' => 'getItemOptionValues',
        'measurement_unit_id' => 'getMeasurementUnitId'
    );
  
    /**
      * $item_id The ID of the `CatalogItem` associated with this item variation. Searchable.
      * @var string
      */
    protected $item_id;
    /**
      * $name The item variation's name. Searchable. This field has max length of 255 Unicode code points.
      * @var string
      */
    protected $name;
    /**
      * $sku The item variation's SKU, if any. Searchable.
      * @var string
      */
    protected $sku;
    /**
      * $upc The item variation's UPC, if any. Searchable in the Connect API. This field is only exposed in the Connect API. It is not exposed in Square's Dashboard, Square Point of Sale app or Retail Point of Sale app.
      * @var string
      */
    protected $upc;
    /**
      * $ordinal The order in which this item variation should be displayed. This value is read-only. On writes, the ordinal for each item variation within a parent `CatalogItem` is set according to the item variations's position. On reads, the value is not guaranteed to be sequential or unique.
      * @var int
      */
    protected $ordinal;
    /**
      * $pricing_type Indicates whether the item variation's price is fixed or determined at the time of sale. See [CatalogPricingType](#type-catalogpricingtype) for possible values
      * @var string
      */
    protected $pricing_type;
    /**
      * $price_money The item variation's price, if fixed pricing is used.
      * @var \SquareConnect\Model\Money
      */
    protected $price_money;
    /**
      * $location_overrides Per-location price and inventory overrides.
      * @var \SquareConnect\Model\ItemVariationLocationOverrides[]
      */
    protected $location_overrides;
    /**
      * $track_inventory If `true`, inventory tracking is active for the variation.
      * @var bool
      */
    protected $track_inventory;
    /**
      * $inventory_alert_type Indicates whether the item variation displays an alert when its inventory quantity is less than or equal to its `inventory_alert_threshold`. See [InventoryAlertType](#type-inventoryalerttype) for possible values
      * @var string
      */
    protected $inventory_alert_type;
    /**
      * $inventory_alert_threshold If the inventory quantity for the variation is less than or equal to this value and `inventory_alert_type` is `LOW_QUANTITY`, the variation displays an alert in the merchant dashboard.  This value is always an integer.
      * @var int
      */
    protected $inventory_alert_threshold;
    /**
      * $user_data Arbitrary user metadata to associate with the item variation. Searchable. This field has max length of 255 Unicode code points.
      * @var string
      */
    protected $user_data;
    /**
      * $service_duration If the `CatalogItem` that owns this item variation is of type `APPOINTMENTS_SERVICE`, then this is the duration of the service in milliseconds. For example, a 30 minute appointment would have the value `1800000`, which is equal to 30 (minutes) * 60 (seconds per minute) * 1000 (milliseconds per second).
      * @var int
      */
    protected $service_duration;
    /**
      * $item_option_values List of item option values associated with this item variation. Listed in the same order as the item options of the parent item.
      * @var \SquareConnect\Model\CatalogItemOptionValueForItemVariation[]
      */
    protected $item_option_values;
    /**
      * $measurement_unit_id ID of the ‘CatalogMeasurementUnit’ that is used to measure the quantity sold of this item variation. If left unset, the item will be sold in whole quantities.
      * @var string
      */
    protected $measurement_unit_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["item_id"])) {
              $this->item_id = $data["item_id"];
            } else {
              $this->item_id = null;
            }
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["sku"])) {
              $this->sku = $data["sku"];
            } else {
              $this->sku = null;
            }
            if (isset($data["upc"])) {
              $this->upc = $data["upc"];
            } else {
              $this->upc = null;
            }
            if (isset($data["ordinal"])) {
              $this->ordinal = $data["ordinal"];
            } else {
              $this->ordinal = null;
            }
            if (isset($data["pricing_type"])) {
              $this->pricing_type = $data["pricing_type"];
            } else {
              $this->pricing_type = null;
            }
            if (isset($data["price_money"])) {
              $this->price_money = $data["price_money"];
            } else {
              $this->price_money = null;
            }
            if (isset($data["location_overrides"])) {
              $this->location_overrides = $data["location_overrides"];
            } else {
              $this->location_overrides = null;
            }
            if (isset($data["track_inventory"])) {
              $this->track_inventory = $data["track_inventory"];
            } else {
              $this->track_inventory = null;
            }
            if (isset($data["inventory_alert_type"])) {
              $this->inventory_alert_type = $data["inventory_alert_type"];
            } else {
              $this->inventory_alert_type = null;
            }
            if (isset($data["inventory_alert_threshold"])) {
              $this->inventory_alert_threshold = $data["inventory_alert_threshold"];
            } else {
              $this->inventory_alert_threshold = null;
            }
            if (isset($data["user_data"])) {
              $this->user_data = $data["user_data"];
            } else {
              $this->user_data = null;
            }
            if (isset($data["service_duration"])) {
              $this->service_duration = $data["service_duration"];
            } else {
              $this->service_duration = null;
            }
            if (isset($data["item_option_values"])) {
              $this->item_option_values = $data["item_option_values"];
            } else {
              $this->item_option_values = null;
            }
            if (isset($data["measurement_unit_id"])) {
              $this->measurement_unit_id = $data["measurement_unit_id"];
            } else {
              $this->measurement_unit_id = null;
            }
        }
    }
    /**
     * Gets item_id
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }
  
    /**
     * Sets item_id
     * @param string $item_id The ID of the `CatalogItem` associated with this item variation. Searchable.
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The item variation's name. Searchable. This field has max length of 255 Unicode code points.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
  
    /**
     * Sets sku
     * @param string $sku The item variation's SKU, if any. Searchable.
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Gets upc
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }
  
    /**
     * Sets upc
     * @param string $upc The item variation's UPC, if any. Searchable in the Connect API. This field is only exposed in the Connect API. It is not exposed in Square's Dashboard, Square Point of Sale app or Retail Point of Sale app.
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;
        return $this;
    }
    /**
     * Gets ordinal
     * @return int
     */
    public function getOrdinal()
    {
        return $this->ordinal;
    }
  
    /**
     * Sets ordinal
     * @param int $ordinal The order in which this item variation should be displayed. This value is read-only. On writes, the ordinal for each item variation within a parent `CatalogItem` is set according to the item variations's position. On reads, the value is not guaranteed to be sequential or unique.
     * @return $this
     */
    public function setOrdinal($ordinal)
    {
        $this->ordinal = $ordinal;
        return $this;
    }
    /**
     * Gets pricing_type
     * @return string
     */
    public function getPricingType()
    {
        return $this->pricing_type;
    }
  
    /**
     * Sets pricing_type
     * @param string $pricing_type Indicates whether the item variation's price is fixed or determined at the time of sale. See [CatalogPricingType](#type-catalogpricingtype) for possible values
     * @return $this
     */
    public function setPricingType($pricing_type)
    {
        $this->pricing_type = $pricing_type;
        return $this;
    }
    /**
     * Gets price_money
     * @return \SquareConnect\Model\Money
     */
    public function getPriceMoney()
    {
        return $this->price_money;
    }
  
    /**
     * Sets price_money
     * @param \SquareConnect\Model\Money $price_money The item variation's price, if fixed pricing is used.
     * @return $this
     */
    public function setPriceMoney($price_money)
    {
        $this->price_money = $price_money;
        return $this;
    }
    /**
     * Gets location_overrides
     * @return \SquareConnect\Model\ItemVariationLocationOverrides[]
     */
    public function getLocationOverrides()
    {
        return $this->location_overrides;
    }
  
    /**
     * Sets location_overrides
     * @param \SquareConnect\Model\ItemVariationLocationOverrides[] $location_overrides Per-location price and inventory overrides.
     * @return $this
     */
    public function setLocationOverrides($location_overrides)
    {
        $this->location_overrides = $location_overrides;
        return $this;
    }
    /**
     * Gets track_inventory
     * @return bool
     */
    public function getTrackInventory()
    {
        return $this->track_inventory;
    }
  
    /**
     * Sets track_inventory
     * @param bool $track_inventory If `true`, inventory tracking is active for the variation.
     * @return $this
     */
    public function setTrackInventory($track_inventory)
    {
        $this->track_inventory = $track_inventory;
        return $this;
    }
    /**
     * Gets inventory_alert_type
     * @return string
     */
    public function getInventoryAlertType()
    {
        return $this->inventory_alert_type;
    }
  
    /**
     * Sets inventory_alert_type
     * @param string $inventory_alert_type Indicates whether the item variation displays an alert when its inventory quantity is less than or equal to its `inventory_alert_threshold`. See [InventoryAlertType](#type-inventoryalerttype) for possible values
     * @return $this
     */
    public function setInventoryAlertType($inventory_alert_type)
    {
        $this->inventory_alert_type = $inventory_alert_type;
        return $this;
    }
    /**
     * Gets inventory_alert_threshold
     * @return int
     */
    public function getInventoryAlertThreshold()
    {
        return $this->inventory_alert_threshold;
    }
  
    /**
     * Sets inventory_alert_threshold
     * @param int $inventory_alert_threshold If the inventory quantity for the variation is less than or equal to this value and `inventory_alert_type` is `LOW_QUANTITY`, the variation displays an alert in the merchant dashboard.  This value is always an integer.
     * @return $this
     */
    public function setInventoryAlertThreshold($inventory_alert_threshold)
    {
        $this->inventory_alert_threshold = $inventory_alert_threshold;
        return $this;
    }
    /**
     * Gets user_data
     * @return string
     */
    public function getUserData()
    {
        return $this->user_data;
    }
  
    /**
     * Sets user_data
     * @param string $user_data Arbitrary user metadata to associate with the item variation. Searchable. This field has max length of 255 Unicode code points.
     * @return $this
     */
    public function setUserData($user_data)
    {
        $this->user_data = $user_data;
        return $this;
    }
    /**
     * Gets service_duration
     * @return int
     */
    public function getServiceDuration()
    {
        return $this->service_duration;
    }
  
    /**
     * Sets service_duration
     * @param int $service_duration If the `CatalogItem` that owns this item variation is of type `APPOINTMENTS_SERVICE`, then this is the duration of the service in milliseconds. For example, a 30 minute appointment would have the value `1800000`, which is equal to 30 (minutes) * 60 (seconds per minute) * 1000 (milliseconds per second).
     * @return $this
     */
    public function setServiceDuration($service_duration)
    {
        $this->service_duration = $service_duration;
        return $this;
    }
    /**
     * Gets item_option_values
     * @return \SquareConnect\Model\CatalogItemOptionValueForItemVariation[]
     */
    public function getItemOptionValues()
    {
        return $this->item_option_values;
    }
  
    /**
     * Sets item_option_values
     * @param \SquareConnect\Model\CatalogItemOptionValueForItemVariation[] $item_option_values List of item option values associated with this item variation. Listed in the same order as the item options of the parent item.
     * @return $this
     */
    public function setItemOptionValues($item_option_values)
    {
        $this->item_option_values = $item_option_values;
        return $this;
    }
    /**
     * Gets measurement_unit_id
     * @return string
     */
    public function getMeasurementUnitId()
    {
        return $this->measurement_unit_id;
    }
  
    /**
     * Sets measurement_unit_id
     * @param string $measurement_unit_id ID of the ‘CatalogMeasurementUnit’ that is used to measure the quantity sold of this item variation. If left unset, the item will be sold in whole quantities.
     * @return $this
     */
    public function setMeasurementUnitId($measurement_unit_id)
    {
        $this->measurement_unit_id = $measurement_unit_id;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
