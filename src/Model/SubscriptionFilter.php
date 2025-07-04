<?php

/**
 * SubscriptionFilter
 *
 * PHP version 8.1
 *
 * @package  eBay\Commerce\Notification
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Notification API
 *
 * The eBay Notification API enables management of the entire end-to-end eBay notification experience by allowing users to:<ul><li>Browse for supported notification topics and retrieve topic details</li><li>Create, configure, and manage notification destination endpoints</li><li>Configure, manage, and test notification subscriptions</li><li>Process eBay notifications and verify the integrity of the message payload</li></ul>
 *
 * The version of the OpenAPI document: v1.6.1
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Commerce\Notification\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use eBay\Commerce\Notification\ObjectSerializer;

/**
 * SubscriptionFilter Class Doc Comment
 *
 * @package  eBay\Commerce\Notification
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SubscriptionFilter implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SubscriptionFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'creation_date' => 'string',
        'filter_id' => 'string',
        'filter_schema' => 'array<string,object>',
        'filter_status' => 'string',
        'subscription_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'creation_date' => null,
        'filter_id' => null,
        'filter_schema' => null,
        'filter_status' => null,
        'subscription_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'creation_date' => false,
        'filter_id' => false,
        'filter_schema' => false,
        'filter_status' => false,
        'subscription_id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'creation_date' => 'creationDate',
        'filter_id' => 'filterId',
        'filter_schema' => 'filterSchema',
        'filter_status' => 'filterStatus',
        'subscription_id' => 'subscriptionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'creation_date' => 'setCreationDate',
        'filter_id' => 'setFilterId',
        'filter_schema' => 'setFilterSchema',
        'filter_status' => 'setFilterStatus',
        'subscription_id' => 'setSubscriptionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'creation_date' => 'getCreationDate',
        'filter_id' => 'getFilterId',
        'filter_schema' => 'getFilterSchema',
        'filter_status' => 'getFilterStatus',
        'subscription_id' => 'getSubscriptionId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('filter_id', $data ?? [], null);
        $this->setIfExists('filter_schema', $data ?? [], null);
        $this->setIfExists('filter_status', $data ?? [], null);
        $this->setIfExists('subscription_id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date The creation date for this subscription filter.
     *
     * @return $this
     */
    public function setCreationDate(?string $creation_date): static
    {
        if (is_null($creation_date)) {
            throw new InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets filter_id
     *
     * @return string|null
     */
    public function getFilterId(): ?string
    {
        return $this->container['filter_id'];
    }

    /**
     * Sets filter_id
     *
     * @param string|null $filter_id The unique identifier for this subscription filter.
     *
     * @return $this
     */
    public function setFilterId(?string $filter_id): static
    {
        if (is_null($filter_id)) {
            throw new InvalidArgumentException('non-nullable filter_id cannot be null');
        }
        $this->container['filter_id'] = $filter_id;

        return $this;
    }

    /**
     * Gets filter_schema
     *
     * @return array<string,object>|null
     */
    public function getFilterSchema(): ?array
    {
        return $this->container['filter_schema'];
    }

    /**
     * Sets filter_schema
     *
     * @param array<string,object>|null $filter_schema The content of this subscription filter as a valid <a href=\"https://json-schema.org \" target=\"_blank\">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications.
     *
     * @return $this
     */
    public function setFilterSchema(?array $filter_schema): static
    {
        if (is_null($filter_schema)) {
            throw new InvalidArgumentException('non-nullable filter_schema cannot be null');
        }
        $this->container['filter_schema'] = $filter_schema;

        return $this;
    }

    /**
     * Gets filter_status
     *
     * @return string|null
     */
    public function getFilterStatus(): ?string
    {
        return $this->container['filter_status'];
    }

    /**
     * Sets filter_status
     *
     * @param string|null $filter_status The status of this subscription filter. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:SubscriptionFilterStatus'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setFilterStatus(?string $filter_status): static
    {
        if (is_null($filter_status)) {
            throw new InvalidArgumentException('non-nullable filter_status cannot be null');
        }
        $this->container['filter_status'] = $filter_status;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return string|null
     */
    public function getSubscriptionId(): ?string
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string|null $subscription_id The unique identifier for the subscription.
     *
     * @return $this
     */
    public function setSubscriptionId(?string $subscription_id): static
    {
        if (is_null($subscription_id)) {
            throw new InvalidArgumentException('non-nullable subscription_id cannot be null');
        }
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


