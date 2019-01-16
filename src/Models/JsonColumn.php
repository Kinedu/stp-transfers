<?php

namespace Kinedu\STPTransfers\Models;

abstract class JsonColumn
{
    /**
     * The list of json attributes.
     *
     * @var array
     */
    protected $jsonAttributes = [];

    /**
     * The list of fillable properties.
     *
     * @var array
     */
    protected $allowed = [];

    /**
     * Create a new settings instance.
     *
     * @param  array  $jsonAttributes
     */
    public function __construct(array $jsonAttributes)
    {
        $this->jsonAttributes = $jsonAttributes;
    }

    /**
     * Retrieve the given setting.
     *
     * @param  string  $key
     * @return string
     */
    public function get($key)
    {
        return array_get($this->jsonAttributes, $key);
    }

    /**
     * Create and persist a new setting.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return null|string
     */
    public function set($key, $value)
    {
        // No point in storing an empty property, is there?
        if (is_null($value)) {
            return;
        }

        if (! array_key_exists($key, $this->jsonAttributes)) {
            $this->allowed[] = $key;
        }

        $this->jsonAttributes[$key] = $value;

        return $this->persist();
    }

    /**
     * Determine if the given attribute exists.
     *
     * @param  string  $key
     * @return boolean
     */
    public function has($key)
    {
        return array_key_exists($key, $this->jsonAttributes);
    }

    public function forget($key)
    {
        array_forget($this->jsonAttributes, $key);

        return $this->persist();
    }

    /**
     * Retrieve an array of all the json attributes.
     *
     * @return array
     */
    public function all()
    {
        return $this->jsonAttributes;
    }

    /**
     * Merge the given attributes with the current jsonAttributes.
     * But do not assign any new jsonAttributes.
     *
     * @param  array  $attributes
     * @return mixed
     */
    public function merge(array $attributes)
    {
        // Strip out any null properties
        foreach ($attributes as $key => $value) {
            if (is_null($value)) {
                array_forget($attributes, $key);
            }
        }

        $this->jsonAttributes = array_merge(
            $this->jsonAttributes,
            array_only($attributes, $this->allowed)
        );

        return $this->persist();
    }

    /**
     * Magic property access for the json attributes.
     *
     * @param  string  $key
     * @throws \Exception
     * @return mixed
     */
    public function __get($key)
    {
        if (array_key_exists($key, $this->jsonAttributes)) {
            return $this->get($key);
        }

        throw new \Exception("The {$key} json attribute does not exist.");
    }
}
