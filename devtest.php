<?php
 /**
 * Limesharp Development Test
 * @author Rob Ganly <robert.ganly@gmail.com>
 */

 /**
 * Task 1:
 * Make this work (repeat 3 times the contents of an array):
 * repeat([1,2,3]) //[1,2,3,1,2,3,1,2,3]
 *
 * @param  array  $array The array to repeat
 * @return array
 *
 */
function repeat($array) {
    $loop = 3;
    $new = array_merge(...array_fill(0, $loop, $array));
    print(json_encode($new));
}
?>