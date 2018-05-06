<?php
/**
 * Created by PhpStorm.
 * User: TarasM
 * Date: 25.04.2018
 * Time: 16:10
 */

require_once('../vendor/autoload.php');

use Phpml\CrossValidation\RandomSplit;
use Phpml\Dataset\ArrayDataset;
use Phpml\Math\Distance\Euclidean;
use Phpml\Math\Distance\Chebyshev;
use Phpml\Math\Distance\Manhattan;
use Phpml\Math\Distance\Minkowski;
use Phpml\Metric\ClassificationReport;
use Phpml\Classification\KNearestNeighbors;
use Phpml\Classification\NaiveBayes;
use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;
use Phpml\Regression\LeastSquares;
use Phpml\Regression\SVR;
use Phpml\Clustering\KMeans;
use Phpml\Clustering\DBSCAN;
use Phpml\Association\Apriori;
use Phpml\Classification\MLPClassifier;

if(isset($_POST['lab_id']))
{
    $lab_id = $_POST['lab_id'];
    if($_POST['lab_id'] == 1)
    {
//        Get Data
        $data = explode("\n",$_POST['data']);
        $split = $_POST['split'];
        $class = $_POST['class'];
        $testSample = explode(',',$_POST['test-samples']);
//        $testSample = [5.1,3.5,1.4,0.2];
        $distanceMethod = $_POST['distance'];


        if($distanceMethod == 'Euclidean')
        {
            $distanceMethod = new Euclidean();
        }
        elseif($distanceMethod == 'Chebyshev')
        {
            $distanceMethod = new Chebyshev();
        }
        elseif($distanceMethod == 'Minkowski')
        {
            $distanceMethod = new Minkowski();
        }
        elseif($distanceMethod == 'Manhattan')
        {
            $distanceMethod = new Manhattan();
        }


        $classifier = new KNearestNeighbors($class,$distanceMethod);

////        Create Dataset

        $dataset = getdataset($data);



        $randomSplit = new RandomSplit($dataset, $split);

        $classifier->train($randomSplit->getTrainSamples(), $randomSplit->getTrainLabels());

        $testPredict = $classifier->predict($randomSplit->getTestSamples());


        $report = new ClassificationReport($randomSplit->getTestLabels(), $testPredict);

        $precision = $report->getPrecision();

//        Print
        $echoArray = array();


        $echoArray[] = $report->getF1score(); // Точність для тестової вибірки

        $echoArray[] = $classifier->predict($testSample); // Результат передбачення

        echo json_encode($echoArray);



    }
    elseif($_POST['lab_id'] == 2)
    {
//        Get Data
        $data = explode("\n",$_POST['data']);
        $split = $_POST['split'];
        $testSample = explode(',',$_POST['test-samples']);

        $classifier = new NaiveBayes();

//        Create Dataset

        $dataset = getdataset($data);



        $randomSplit = new RandomSplit($dataset, $split);

        $classifier->train($randomSplit->getTrainSamples(), $randomSplit->getTrainLabels());

        $testPredict = $classifier->predict($randomSplit->getTestSamples());
//
//
        $report = new ClassificationReport($randomSplit->getTestLabels(), $testPredict);
//
//        $precision = $report->getPrecision();

//        Print
        $echoArray = array();


        $echoArray[] = $report->getF1score(); // Точність для тестової вибірки

        $echoArray[] = $classifier->predict($testSample); // Результат передбачення

        echo json_encode($echoArray);



    }
    elseif($_POST['lab_id'] == 3)
    {
//        Get Data
        $data = explode("\n",$_POST['data']);
        $split = $_POST['split'];

        $cost = $_POST['cost'];
        $kernel = $_POST['kernel'];

        $testSample = explode(',',$_POST['test-samples']);


        if($kernel == 'RBF')
        {

            $classifier = new SVC(KERNEL::RBF,$cost);
        }
        elseif($kernel == 'POLYNOMIAL')
        {

            $classifier = new SVC(KERNEL::POLYNOMIAL,$cost);
        }
        elseif($kernel == 'SIGMOID')
        {

            $classifier = new SVC(KERNEL::SIGMOID,$cost);
        }
        elseif($kernel == 'LINEAR')
        {

            $classifier = new SVC(KERNEL::LINEAR,$cost);
        }

//        print_r($classifier);

//        Create Dataset
        $dataset = getdataset($data);
//
//
//
        $randomSplit = new RandomSplit($dataset, $split);
//
        $classifier->train($randomSplit->getTrainSamples(), $randomSplit->getTrainLabels());
////        $classifier->train([[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]],['a', 'a', 'a', 'b', 'b', 'b']);
////
        $testPredict = $classifier->predict($randomSplit->getTestSamples());
//
//
        $report = new ClassificationReport($randomSplit->getTestLabels(), $testPredict);
//
////        $precision = $report->getPrecision();
//
////        Print
        $echoArray = array();
//
//
        $echoArray[] = $report->getF1score(); // Точність для тестової вибірки
//
        $echoArray[] = $classifier->predict($testSample); // Результат передбачення
//
        echo json_encode($echoArray);



    }
    elseif($_POST['lab_id'] == 4)
    {
//        Get Data
        $data = explode("\n",$_POST['data']);
        $split = $_POST['split'];
        $testSample = explode(',',$_POST['test-samples']);

        $regression = new LeastSquares();


//        Create Dataset

        $dataset = getdataset($data);
//        print_r($dataset);



        $randomSplit = new RandomSplit($dataset, $split);

        $regression->train($randomSplit->getTrainSamples(), $randomSplit->getTrainLabels());

        $testPredict = $regression->predict($randomSplit->getTestSamples());


        $report = new ClassificationReport($randomSplit->getTestLabels(), $testPredict);

        $precision = $report->getPrecision();
//
//        Print
        $echoArray = array();


        $echoArray[] = [$regression->getCoefficients(),$regression->getIntercept()]; // Рівняння прамої

        $echoArray[] = $regression->predict($testSample); // Результат передбачення
//
        echo json_encode($echoArray);



    }
    elseif($_POST['lab_id'] == 5)
    {
//        Get Data
        $data = explode("\n",$_POST['data']);
        $split = $_POST['split'];

        $cost = $_POST['cost'];
        $kernel = $_POST['kernel'];

        $testSample = explode(',',$_POST['test-samples']);



        if($kernel == 'RBF')
        {

            $regression = new SVR(KERNEL::RBF,3,0.1, $cost);
        }
        elseif($kernel == 'POLYNOMIAL')
        {

            $regression = new SVR(KERNEL::POLYNOMIAL,3,0.1, $cost);
        }
        elseif($kernel == 'SIGMOID')
        {

            $regression = new SVR(KERNEL::SIGMOID,3,0.1, $cost);
        }
        elseif($kernel == 'LINEAR')
        {

            $regression = new SVR(KERNEL::LINEAR, 3,0.1, $cost);
        }

//        Create Dataset

        $dataset = getdataset($data,false);


        $regression->train($dataset[0], $dataset[1]);

//        Print

        echo $regression->predict($testSample);



    }
    elseif($_POST['lab_id'] == 6)
    {
//        Get Data
        $data = explode("\n",$_POST['data']);

        $clasters = $_POST['clasters'];

        $kmeans = new KMeans($clasters);

        echo str_replace('\r','',json_encode($kmeans->cluster(getsamples($data))));

    }
    elseif($_POST['lab_id'] == 7)
    {
//        Get Data
        $data = explode("\n",$_POST['data']);

        $epsilon = $_POST['distance-neighbors'];
        $minSamples = $_POST['count-neighbors'];

        $dbscan = new DBSCAN($epsilon,$minSamples);

        echo str_replace('\r','',json_encode($dbscan->cluster(getsamples($data))));

    }
    elseif($_POST['lab_id'] == 8)
    {

        $data = explode("\n",$_POST['data']);
        $test = explode(',',$_POST['test-samples']);
        $samples = [];
//        print_r($data);
        foreach ($data as $row)
        {
            $row_arr = explode(',',$row);
            $row_arr_clear = [];
            foreach ($row_arr as $el)
            {
                $row_arr_clear[] = trim(str_replace(['\'','""'],'',$el));
            }
            $samples[] = $row_arr_clear;
        }
//        print_r($samples);
        $associator = new Apriori($support = 0.5, $confidence = 0.5);
        $associator->train($samples, []);


        echo json_encode($associator->predict($test));

    }
    elseif($_POST['lab_id'] == 9)
    {

        $data = explode("\n",$_POST['data']);

        $hidden_layer = intval($_POST['hidden-layer']);

        $sample_count = intval($_POST['sample-count']);

        $dataset = getdataset($data,false,true);
        $elements_arr = array_unique($dataset[1]);

        $mlp = new MLPClassifier($sample_count, [$hidden_layer], $elements_arr);

        $mlp->train($dataset[0],$dataset[1]);


        $test_arr = explode(',',$_POST['test-samples']);
        $test = [];
        foreach ($test_arr as $val)
        {
            $test[] = floatval($val);
        }


        echo $mlp->predict($test);

    }
}


function getdataset($data,$return_dataset=true,$float_val=false)
{
//    print_r($data);
    $samples = array();
    $labels = array();
    foreach ($data as $row)
    {
        if(isset($row) && $row !='')
        {
            $arrSamples = array();
            $arrRow = explode(',',$row);
            $last_index = count($arrRow)-1;
            for ($i=0;$i<$last_index;$i++)
            {
                if(!$float_val)
                {
                    $arrSamples[] = trim($arrRow[$i]);
                }
                else
                {
                    $arrSamples[] = floatval(trim($arrRow[$i]));
                }
            }
            $samples[] = $arrSamples;
            $labels[] = trim($arrRow[$last_index]);
        }
    }
//    print_r($samples);
//    print_r($labels);
    if ($return_dataset)
    {
        return new ArrayDataset($samples,$labels);
    }
    else
    {
        return [$samples,$labels];
    }
}
function getsamples($data)
{
    $samples = array();
    foreach ($data as $row)
    {
        if(isset($row) && $row !='')
        {
            $arrSamples = array();
            $arrRow = explode(',',$row);
            $last_index = count($arrRow);
            for ($i=0;$i<$last_index;$i++)
            {
                $arrSamples[] = $arrRow[$i];
            }
            $samples[] = $arrSamples;
        }
    }
    return $samples;
}

