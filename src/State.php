<?php


namespace Mercyware\States;


use Exception;

class State
{
    /**
     * The attributes array.
     *
     * @var array
     */
    protected $attributes;

    /**
     * Create a new Country instance.
     *
     * @param array $attributes
     *
     * @throws \Exception
     */
    public function __construct($attributes)
    {
        // Set the attributes
        $this->setAttributes($attributes);

        // Check required mandatory attributes
//        if (empty($this->getName()) || empty($this->getOfficialName())
//            || empty($this->getNativeName()) || empty($this->getNativeOfficialName())
//            || empty($this->getIsoAlpha2()) || empty($this->getIsoAlpha3())) {
//            throw new Exception('Missing mandatory country attributes!');
//        }
    }

    /**
     * Set the attributes.
     *
     * @param array $attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {

        $this->attributes = $attributes;
        return $this;
    }

    /**
     * Get the attributes.
     *
     * @return array|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }

    /**
     * Set single attribute.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return $this
     */
    public function set($key, $value)
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    /**
     * Get an item from attributes array using "dot" notation.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        $array = $this->attributes;

        if (is_null($key)) {
            return $array;
        }

        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        foreach (explode('.', $key) as $segment) {
            if (is_array($array) && array_key_exists($segment, $array)) {
                $array = $array[$segment];
            } else {
                return $default;
            }
        }

        return $array;
    }

    /**
     * Get the common name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name.common') ?: $this->get('name');
    }

    /**
     * Get the official name.
     *
     * @return string|null
     */
    public function getOfficialName(): ?string
    {
        return $this->get('name.official') ?: $this->get('official_name');
    }


    public function getShortCode(): ?string
    {
        return $this->get('name.short_code') ?: $this->get('short_code');
    }


    /**
     * Get the native names.
     *
     * @return array|null
     */
    public function getStateCapital(): ?string
    {
        return $this->get('capital');
    }


    /**
     * Get the demonym.
     *
     * @return string|null
     */
    public function getGeoPoliticalZone(): ?string
    {
        return $this->get('political_zone');
    }


    public function getDateCreated(): ?string
    {

        return $this->get('date_created');
    }


    public function getPopulation(): int
    {
        return $this->get('population');
    }

    public function getStateWebsite(): ?string
    {
        return $this->get('website');
    }


    public function getDemonym(): ?string
    {
        return $this->get('demonym');

    }

    public function getStateNickName(): ?string
    {
        return $this->get('nick_name');

    }

  
    public function getLocalGovernmentAreas(): ?array
    {
        return $this->get('lga');
    }


    public function getLanguages(): ?array
    {
        return $this->get('languages');
    }

   
    public function getLogo(): ?string
    {


        //  return file_exists($file = __DIR__ . '/../resources/logo/' . mb_strtolower($name) . '.svg') ? file_get_contents($file) : null;
    }


}
