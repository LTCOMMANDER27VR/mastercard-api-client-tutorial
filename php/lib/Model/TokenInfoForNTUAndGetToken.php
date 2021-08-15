<?php
/**
 * TokenInfoForNTUAndGetToken
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MDES Digital Enablement API
 *
 * These APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br><br> **Authentication** <br><br> Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br><br> 1. A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br><br> **Encryption** <br><br> All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br><br> **Additional Encryption of Sensitive Data** <br><br> In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java)
 *
 * The version of the OpenAPI document: 1.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalEnablementClient\Model;

use \ArrayAccess;
use \DigitalEnablementClient\ObjectSerializer;

/**
 * TokenInfoForNTUAndGetToken Class Doc Comment
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TokenInfoForNTUAndGetToken implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tokenInfo_for_NTU_and_getToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token_pan_suffix' => 'string',
        'account_pan_prefix' => 'string',
        'account_pan_suffix' => 'string',
        'token_expiry' => 'string',
        'account_pan_expiry' => 'string',
        'dsrp_capable' => 'string',
        'token_assurance_level' => 'int',
        'product_category' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'token_pan_suffix' => null,
        'account_pan_prefix' => null,
        'account_pan_suffix' => null,
        'token_expiry' => null,
        'account_pan_expiry' => null,
        'dsrp_capable' => null,
        'token_assurance_level' => null,
        'product_category' => null
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
        'token_pan_suffix' => 'tokenPanSuffix',
        'account_pan_prefix' => 'accountPanPrefix',
        'account_pan_suffix' => 'accountPanSuffix',
        'token_expiry' => 'tokenExpiry',
        'account_pan_expiry' => 'accountPanExpiry',
        'dsrp_capable' => 'dsrpCapable',
        'token_assurance_level' => 'tokenAssuranceLevel',
        'product_category' => 'productCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_pan_suffix' => 'setTokenPanSuffix',
        'account_pan_prefix' => 'setAccountPanPrefix',
        'account_pan_suffix' => 'setAccountPanSuffix',
        'token_expiry' => 'setTokenExpiry',
        'account_pan_expiry' => 'setAccountPanExpiry',
        'dsrp_capable' => 'setDsrpCapable',
        'token_assurance_level' => 'setTokenAssuranceLevel',
        'product_category' => 'setProductCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_pan_suffix' => 'getTokenPanSuffix',
        'account_pan_prefix' => 'getAccountPanPrefix',
        'account_pan_suffix' => 'getAccountPanSuffix',
        'token_expiry' => 'getTokenExpiry',
        'account_pan_expiry' => 'getAccountPanExpiry',
        'dsrp_capable' => 'getDsrpCapable',
        'token_assurance_level' => 'getTokenAssuranceLevel',
        'product_category' => 'getProductCategory'
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
        $this->container['token_pan_suffix'] = $data['token_pan_suffix'] ?? null;
        $this->container['account_pan_prefix'] = $data['account_pan_prefix'] ?? null;
        $this->container['account_pan_suffix'] = $data['account_pan_suffix'] ?? null;
        $this->container['token_expiry'] = $data['token_expiry'] ?? null;
        $this->container['account_pan_expiry'] = $data['account_pan_expiry'] ?? null;
        $this->container['dsrp_capable'] = $data['dsrp_capable'] ?? null;
        $this->container['token_assurance_level'] = $data['token_assurance_level'] ?? null;
        $this->container['product_category'] = $data['product_category'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['token_pan_suffix'] === null) {
            $invalidProperties[] = "'token_pan_suffix' can't be null";
        }
        if ((mb_strlen($this->container['token_pan_suffix']) > 8)) {
            $invalidProperties[] = "invalid value for 'token_pan_suffix', the character length must be smaller than or equal to 8.";
        }

        if ($this->container['account_pan_prefix'] === null) {
            $invalidProperties[] = "'account_pan_prefix' can't be null";
        }
        if ($this->container['account_pan_suffix'] === null) {
            $invalidProperties[] = "'account_pan_suffix' can't be null";
        }
        if ((mb_strlen($this->container['account_pan_suffix']) > 8)) {
            $invalidProperties[] = "invalid value for 'account_pan_suffix', the character length must be smaller than or equal to 8.";
        }

        if ($this->container['token_expiry'] === null) {
            $invalidProperties[] = "'token_expiry' can't be null";
        }
        if ((mb_strlen($this->container['token_expiry']) > 4)) {
            $invalidProperties[] = "invalid value for 'token_expiry', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['account_pan_expiry']) && (mb_strlen($this->container['account_pan_expiry']) > 4)) {
            $invalidProperties[] = "invalid value for 'account_pan_expiry', the character length must be smaller than or equal to 4.";
        }

        if ($this->container['dsrp_capable'] === null) {
            $invalidProperties[] = "'dsrp_capable' can't be null";
        }
        if ((mb_strlen($this->container['dsrp_capable']) > 5)) {
            $invalidProperties[] = "invalid value for 'dsrp_capable', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['product_category']) && (mb_strlen($this->container['product_category']) > 32)) {
            $invalidProperties[] = "invalid value for 'product_category', the character length must be smaller than or equal to 32.";
        }

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
     * Gets token_pan_suffix
     *
     * @return string
     */
    public function getTokenPanSuffix()
    {
        return $this->container['token_pan_suffix'];
    }

    /**
     * Sets token_pan_suffix
     *
     * @param string $token_pan_suffix The last few digits (typically four) of the Token PAN.
     *
     * @return self
     */
    public function setTokenPanSuffix($token_pan_suffix)
    {
        if ((mb_strlen($token_pan_suffix) > 8)) {
            throw new \InvalidArgumentException('invalid length for $token_pan_suffix when calling TokenInfoForNTUAndGetToken., must be smaller than or equal to 8.');
        }

        $this->container['token_pan_suffix'] = $token_pan_suffix;

        return $this;
    }

    /**
     * Gets account_pan_prefix
     *
     * @return string
     */
    public function getAccountPanPrefix()
    {
        return $this->container['account_pan_prefix'];
    }

    /**
     * Sets account_pan_prefix
     *
     * @param string $account_pan_prefix The first few digits (typically six) of the Account PAN.
     *
     * @return self
     */
    public function setAccountPanPrefix($account_pan_prefix)
    {
        $this->container['account_pan_prefix'] = $account_pan_prefix;

        return $this;
    }

    /**
     * Gets account_pan_suffix
     *
     * @return string
     */
    public function getAccountPanSuffix()
    {
        return $this->container['account_pan_suffix'];
    }

    /**
     * Sets account_pan_suffix
     *
     * @param string $account_pan_suffix The last few digits (typically four) of the Account PAN.
     *
     * @return self
     */
    public function setAccountPanSuffix($account_pan_suffix)
    {
        if ((mb_strlen($account_pan_suffix) > 8)) {
            throw new \InvalidArgumentException('invalid length for $account_pan_suffix when calling TokenInfoForNTUAndGetToken., must be smaller than or equal to 8.');
        }

        $this->container['account_pan_suffix'] = $account_pan_suffix;

        return $this;
    }

    /**
     * Gets token_expiry
     *
     * @return string
     */
    public function getTokenExpiry()
    {
        return $this->container['token_expiry'];
    }

    /**
     * Sets token_expiry
     *
     * @param string $token_expiry The expiry of the Token PAN, given in MMYY format.
     *
     * @return self
     */
    public function setTokenExpiry($token_expiry)
    {
        if ((mb_strlen($token_expiry) > 4)) {
            throw new \InvalidArgumentException('invalid length for $token_expiry when calling TokenInfoForNTUAndGetToken., must be smaller than or equal to 4.');
        }

        $this->container['token_expiry'] = $token_expiry;

        return $this;
    }

    /**
     * Gets account_pan_expiry
     *
     * @return string|null
     */
    public function getAccountPanExpiry()
    {
        return $this->container['account_pan_expiry'];
    }

    /**
     * Sets account_pan_expiry
     *
     * @param string|null $account_pan_expiry The expiry of the Account PAN, given in MMYY format.
     *
     * @return self
     */
    public function setAccountPanExpiry($account_pan_expiry)
    {
        if (!is_null($account_pan_expiry) && (mb_strlen($account_pan_expiry) > 4)) {
            throw new \InvalidArgumentException('invalid length for $account_pan_expiry when calling TokenInfoForNTUAndGetToken., must be smaller than or equal to 4.');
        }

        $this->container['account_pan_expiry'] = $account_pan_expiry;

        return $this;
    }

    /**
     * Gets dsrp_capable
     *
     * @return string
     */
    public function getDsrpCapable()
    {
        return $this->container['dsrp_capable'];
    }

    /**
     * Sets dsrp_capable
     *
     * @param string $dsrp_capable Whether DSRP transactions are supported by this Token. Must be either 'true' (DSRP capable) or 'false' (Not DSRP capable).
     *
     * @return self
     */
    public function setDsrpCapable($dsrp_capable)
    {
        if ((mb_strlen($dsrp_capable) > 5)) {
            throw new \InvalidArgumentException('invalid length for $dsrp_capable when calling TokenInfoForNTUAndGetToken., must be smaller than or equal to 5.');
        }

        $this->container['dsrp_capable'] = $dsrp_capable;

        return $this;
    }

    /**
     * Gets token_assurance_level
     *
     * @return int|null
     */
    public function getTokenAssuranceLevel()
    {
        return $this->container['token_assurance_level'];
    }

    /**
     * Sets token_assurance_level
     *
     * @param int|null $token_assurance_level A value indicating the confidence level of the token to Account PAN binding.
     *
     * @return self
     */
    public function setTokenAssuranceLevel($token_assurance_level)
    {


        $this->container['token_assurance_level'] = $token_assurance_level;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string|null $product_category The product category of the Account PAN. When supplied will be one of the following values:    * CREDIT   * DEBIT   * PREPAID   * UNKNOWN
     *
     * @return self
     */
    public function setProductCategory($product_category)
    {
        if (!is_null($product_category) && (mb_strlen($product_category) > 32)) {
            throw new \InvalidArgumentException('invalid length for $product_category when calling TokenInfoForNTUAndGetToken., must be smaller than or equal to 32.');
        }

        $this->container['product_category'] = $product_category;

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

