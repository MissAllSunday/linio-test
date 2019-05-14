<?php

namespace  App;


/**
 * Class Count
 */
class Count
{
    /**
     * @var int
     */
    protected $length = 100;

    /**
     * @var array
     */
    protected $markers = [
        3 => 'Linio',
        5 => 'IT',
        15 => 'Linianos'
    ];

    /**
     * Count constructor.
     */
    public function __construct()
    {
    }

    /**
     * Print from 1 to 100
     * For multiples of 3, print "Linio".
     * For multiples of 5 print "IT".
     * For numbers which are multiples of both 3 and 5, print "Linianos".
     */
    public function printMarkers()
    {
        $container = [];

        for ($i = 1; $i <= $this->getLength(); $i++) {

            // Avoid an "if" by declaring and replacing values.
            $container[$i] = $i;

            foreach ($this->getMarkers() as $marker => $value) {
                if ($this->multipleOf($i, $marker))
                $container[$i] = $this->markerValue($marker);
            }
        }

       return implode(', ', $container);
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return array
     */
    public function getMarkers()
    {
        return $this->markers;
    }

    /**
     * @param array $markers
     */
    public function setMarkers($markers)
    {
        $this->markers = $markers;
    }


    /**
     * @param int $key
     * @return string
     */
    protected function markerValue($key)
    {
        $markers = $this->getMarkers();

        return $markers[$key];
    }

    /**
     * @param int $integer
     * @param int $value
     * @return bool
     */
    protected function multipleOf($integer, $value)
    {
        return $integer % $value === 0;
    }
}
