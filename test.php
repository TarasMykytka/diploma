<?

require_once('vendor/autoload.php');

use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

$samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

$classifier = new SVC(
        Kernel::LINEAR, // $kernel
        1.0,            // $cost
        3,              // $degree
        null,           // $gamma
        0.0,            // $coef0
        0.001,          // $tolerance
        100,            // $cacheSize
        true,           // $shrinking
        true            // $probabilityEstimates, set to true
);

$classifier->train($samples, $labels);