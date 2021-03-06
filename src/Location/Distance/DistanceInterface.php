<?php
/**
 * Interface for Distance Calculator Classes
 *
 * PHP version 5.3
 *
 * @category  Location
 * @package   Distance
 * @author    Marcus Jaschen <mjaschen@gmail.com>
 * @license   https://opensource.org/licenses/GPL-3.0 GPL
 * @link      https://github.com/mjaschen/phpgeo
 */

namespace Location\Distance;

use Location\Coordinate;

/**
 * Interface for Distance Calculator Classes
 *
 * @category Location
 * @package  Distance
 * @author   Marcus Jaschen <mjaschen@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL
 * @link     https://github.com/mjaschen/phpgeo
 */
interface DistanceInterface
{
    /**
     * @param Coordinate $point1
     * @param Coordinate $point2
     *
     * @return float distance between the two coordinates in meters
     */
    public function getDistance(Coordinate $point1, Coordinate $point2);
}
