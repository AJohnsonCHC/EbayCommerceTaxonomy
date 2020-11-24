<?php
/**
 * CategoryTree
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eBay\Commerce\Taxonomy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Taxonomy API
 *
 * Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides metadata about the required and recommended category aspects to include in listings, and also has two operations to retrieve parts compatibility information.
 *
 * The version of the OpenAPI document: v1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Commerce\Taxonomy\Model;

use \ArrayAccess;
use \eBay\Commerce\Taxonomy\ObjectSerializer;

/**
 * CategoryTree Class Doc Comment
 *
 * @category Class
 * @description This type contains information about all nodes of a specified eBay category tree.
 * @package  eBay\Commerce\Taxonomy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CategoryTree implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryTree';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applicable_marketplace_ids' => 'string[]',
        'category_tree_id' => 'string',
        'category_tree_version' => 'string',
        'root_category_node' => '\eBay\Commerce\Taxonomy\Model\CategoryTreeNode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applicable_marketplace_ids' => null,
        'category_tree_id' => null,
        'category_tree_version' => null,
        'root_category_node' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'applicable_marketplace_ids' => 'applicableMarketplaceIds',
        'category_tree_id' => 'categoryTreeId',
        'category_tree_version' => 'categoryTreeVersion',
        'root_category_node' => 'rootCategoryNode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicable_marketplace_ids' => 'setApplicableMarketplaceIds',
        'category_tree_id' => 'setCategoryTreeId',
        'category_tree_version' => 'setCategoryTreeVersion',
        'root_category_node' => 'setRootCategoryNode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicable_marketplace_ids' => 'getApplicableMarketplaceIds',
        'category_tree_id' => 'getCategoryTreeId',
        'category_tree_version' => 'getCategoryTreeVersion',
        'root_category_node' => 'getRootCategoryNode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['applicable_marketplace_ids'] = $data['applicable_marketplace_ids'] ?? null;
        $this->container['category_tree_id'] = $data['category_tree_id'] ?? null;
        $this->container['category_tree_version'] = $data['category_tree_version'] ?? null;
        $this->container['root_category_node'] = $data['root_category_node'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets applicable_marketplace_ids
     *
     * @return string[]|null
     */
    public function getApplicableMarketplaceIds()
    {
        return $this->container['applicable_marketplace_ids'];
    }

    /**
     * Sets applicable_marketplace_ids
     *
     * @param string[]|null $applicable_marketplace_ids A list of one or more identifiers of the eBay marketplaces that use this category tree.
     *
     * @return self
     */
    public function setApplicableMarketplaceIds($applicable_marketplace_ids)
    {
        $this->container['applicable_marketplace_ids'] = $applicable_marketplace_ids;

        return $this;
    }

    /**
     * Gets category_tree_id
     *
     * @return string|null
     */
    public function getCategoryTreeId()
    {
        return $this->container['category_tree_id'];
    }

    /**
     * Sets category_tree_id
     *
     * @param string|null $category_tree_id The unique identifier of this eBay category tree.
     *
     * @return self
     */
    public function setCategoryTreeId($category_tree_id)
    {
        $this->container['category_tree_id'] = $category_tree_id;

        return $this;
    }

    /**
     * Gets category_tree_version
     *
     * @return string|null
     */
    public function getCategoryTreeVersion()
    {
        return $this->container['category_tree_version'];
    }

    /**
     * Sets category_tree_version
     *
     * @param string|null $category_tree_version The version of this category tree. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
     *
     * @return self
     */
    public function setCategoryTreeVersion($category_tree_version)
    {
        $this->container['category_tree_version'] = $category_tree_version;

        return $this;
    }

    /**
     * Gets root_category_node
     *
     * @return \eBay\Commerce\Taxonomy\Model\CategoryTreeNode|null
     */
    public function getRootCategoryNode()
    {
        return $this->container['root_category_node'];
    }

    /**
     * Sets root_category_node
     *
     * @param \eBay\Commerce\Taxonomy\Model\CategoryTreeNode|null $root_category_node root_category_node
     *
     * @return self
     */
    public function setRootCategoryNode($root_category_node)
    {
        $this->container['root_category_node'] = $root_category_node;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


