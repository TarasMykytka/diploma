<?

require_once('vendor/autoload.php');

use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

$samples = [[60], [61], [62], [63], [65]];
$targets = [3.1, 3.6, 3.8, 4, 4.1];

$regression = new SVC(Kernel::RBF, 0.2);


//$regression->setVarPath('vendor/php-ai/php-ml/var/');

$regression->train($samples, $targets);

echo $regression->predict([64]);