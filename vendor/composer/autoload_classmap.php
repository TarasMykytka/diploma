<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Phpml\\Association\\Apriori' => $vendorDir . '/php-ai/php-ml/src/Association/Apriori.php',
    'Phpml\\Association\\Associator' => $vendorDir . '/php-ai/php-ml/src/Association/Associator.php',
    'Phpml\\Classification\\Classifier' => $vendorDir . '/php-ai/php-ml/src/Classification/Classifier.php',
    'Phpml\\Classification\\DecisionTree' => $vendorDir . '/php-ai/php-ml/src/Classification/DecisionTree.php',
    'Phpml\\Classification\\DecisionTree\\DecisionTreeLeaf' => $vendorDir . '/php-ai/php-ml/src/Classification/DecisionTree/DecisionTreeLeaf.php',
    'Phpml\\Classification\\Ensemble\\AdaBoost' => $vendorDir . '/php-ai/php-ml/src/Classification/Ensemble/AdaBoost.php',
    'Phpml\\Classification\\Ensemble\\Bagging' => $vendorDir . '/php-ai/php-ml/src/Classification/Ensemble/Bagging.php',
    'Phpml\\Classification\\Ensemble\\RandomForest' => $vendorDir . '/php-ai/php-ml/src/Classification/Ensemble/RandomForest.php',
    'Phpml\\Classification\\KNearestNeighbors' => $vendorDir . '/php-ai/php-ml/src/Classification/KNearestNeighbors.php',
    'Phpml\\Classification\\Linear\\Adaline' => $vendorDir . '/php-ai/php-ml/src/Classification/Linear/Adaline.php',
    'Phpml\\Classification\\Linear\\DecisionStump' => $vendorDir . '/php-ai/php-ml/src/Classification/Linear/DecisionStump.php',
    'Phpml\\Classification\\Linear\\LogisticRegression' => $vendorDir . '/php-ai/php-ml/src/Classification/Linear/LogisticRegression.php',
    'Phpml\\Classification\\Linear\\Perceptron' => $vendorDir . '/php-ai/php-ml/src/Classification/Linear/Perceptron.php',
    'Phpml\\Classification\\MLPClassifier' => $vendorDir . '/php-ai/php-ml/src/Classification/MLPClassifier.php',
    'Phpml\\Classification\\NaiveBayes' => $vendorDir . '/php-ai/php-ml/src/Classification/NaiveBayes.php',
    'Phpml\\Classification\\SVC' => $vendorDir . '/php-ai/php-ml/src/Classification/SVC.php',
    'Phpml\\Classification\\WeightedClassifier' => $vendorDir . '/php-ai/php-ml/src/Classification/WeightedClassifier.php',
    'Phpml\\Clustering\\Clusterer' => $vendorDir . '/php-ai/php-ml/src/Clustering/Clusterer.php',
    'Phpml\\Clustering\\DBSCAN' => $vendorDir . '/php-ai/php-ml/src/Clustering/DBSCAN.php',
    'Phpml\\Clustering\\FuzzyCMeans' => $vendorDir . '/php-ai/php-ml/src/Clustering/FuzzyCMeans.php',
    'Phpml\\Clustering\\KMeans' => $vendorDir . '/php-ai/php-ml/src/Clustering/KMeans.php',
    'Phpml\\Clustering\\KMeans\\Cluster' => $vendorDir . '/php-ai/php-ml/src/Clustering/KMeans/Cluster.php',
    'Phpml\\Clustering\\KMeans\\Point' => $vendorDir . '/php-ai/php-ml/src/Clustering/KMeans/Point.php',
    'Phpml\\Clustering\\KMeans\\Space' => $vendorDir . '/php-ai/php-ml/src/Clustering/KMeans/Space.php',
    'Phpml\\CrossValidation\\RandomSplit' => $vendorDir . '/php-ai/php-ml/src/CrossValidation/RandomSplit.php',
    'Phpml\\CrossValidation\\Split' => $vendorDir . '/php-ai/php-ml/src/CrossValidation/Split.php',
    'Phpml\\CrossValidation\\StratifiedRandomSplit' => $vendorDir . '/php-ai/php-ml/src/CrossValidation/StratifiedRandomSplit.php',
    'Phpml\\Dataset\\ArrayDataset' => $vendorDir . '/php-ai/php-ml/src/Dataset/ArrayDataset.php',
    'Phpml\\Dataset\\CsvDataset' => $vendorDir . '/php-ai/php-ml/src/Dataset/CsvDataset.php',
    'Phpml\\Dataset\\Dataset' => $vendorDir . '/php-ai/php-ml/src/Dataset/Dataset.php',
    'Phpml\\Dataset\\Demo\\GlassDataset' => $vendorDir . '/php-ai/php-ml/src/Dataset/Demo/GlassDataset.php',
    'Phpml\\Dataset\\Demo\\IrisDataset' => $vendorDir . '/php-ai/php-ml/src/Dataset/Demo/IrisDataset.php',
    'Phpml\\Dataset\\Demo\\WineDataset' => $vendorDir . '/php-ai/php-ml/src/Dataset/Demo/WineDataset.php',
    'Phpml\\Dataset\\FilesDataset' => $vendorDir . '/php-ai/php-ml/src/Dataset/FilesDataset.php',
    'Phpml\\DimensionReduction\\EigenTransformerBase' => $vendorDir . '/php-ai/php-ml/src/DimensionReduction/EigenTransformerBase.php',
    'Phpml\\DimensionReduction\\KernelPCA' => $vendorDir . '/php-ai/php-ml/src/DimensionReduction/KernelPCA.php',
    'Phpml\\DimensionReduction\\LDA' => $vendorDir . '/php-ai/php-ml/src/DimensionReduction/LDA.php',
    'Phpml\\DimensionReduction\\PCA' => $vendorDir . '/php-ai/php-ml/src/DimensionReduction/PCA.php',
    'Phpml\\Estimator' => $vendorDir . '/php-ai/php-ml/src/Estimator.php',
    'Phpml\\Exception\\DatasetException' => $vendorDir . '/php-ai/php-ml/src/Exception/DatasetException.php',
    'Phpml\\Exception\\FileException' => $vendorDir . '/php-ai/php-ml/src/Exception/FileException.php',
    'Phpml\\Exception\\InvalidArgumentException' => $vendorDir . '/php-ai/php-ml/src/Exception/InvalidArgumentException.php',
    'Phpml\\Exception\\InvalidOperationException' => $vendorDir . '/php-ai/php-ml/src/Exception/InvalidOperationException.php',
    'Phpml\\Exception\\LibsvmCommandException' => $vendorDir . '/php-ai/php-ml/src/Exception/LibsvmCommandException.php',
    'Phpml\\Exception\\MatrixException' => $vendorDir . '/php-ai/php-ml/src/Exception/MatrixException.php',
    'Phpml\\Exception\\NormalizerException' => $vendorDir . '/php-ai/php-ml/src/Exception/NormalizerException.php',
    'Phpml\\Exception\\SerializeException' => $vendorDir . '/php-ai/php-ml/src/Exception/SerializeException.php',
    'Phpml\\FeatureExtraction\\StopWords' => $vendorDir . '/php-ai/php-ml/src/FeatureExtraction/StopWords.php',
    'Phpml\\FeatureExtraction\\StopWords\\English' => $vendorDir . '/php-ai/php-ml/src/FeatureExtraction/StopWords/English.php',
    'Phpml\\FeatureExtraction\\StopWords\\French' => $vendorDir . '/php-ai/php-ml/src/FeatureExtraction/StopWords/French.php',
    'Phpml\\FeatureExtraction\\StopWords\\Polish' => $vendorDir . '/php-ai/php-ml/src/FeatureExtraction/StopWords/Polish.php',
    'Phpml\\FeatureExtraction\\TfIdfTransformer' => $vendorDir . '/php-ai/php-ml/src/FeatureExtraction/TfIdfTransformer.php',
    'Phpml\\FeatureExtraction\\TokenCountVectorizer' => $vendorDir . '/php-ai/php-ml/src/FeatureExtraction/TokenCountVectorizer.php',
    'Phpml\\FeatureSelection\\ScoringFunction' => $vendorDir . '/php-ai/php-ml/src/FeatureSelection/ScoringFunction.php',
    'Phpml\\FeatureSelection\\ScoringFunction\\ANOVAFValue' => $vendorDir . '/php-ai/php-ml/src/FeatureSelection/ScoringFunction/ANOVAFValue.php',
    'Phpml\\FeatureSelection\\ScoringFunction\\UnivariateLinearRegression' => $vendorDir . '/php-ai/php-ml/src/FeatureSelection/ScoringFunction/UnivariateLinearRegression.php',
    'Phpml\\FeatureSelection\\SelectKBest' => $vendorDir . '/php-ai/php-ml/src/FeatureSelection/SelectKBest.php',
    'Phpml\\FeatureSelection\\VarianceThreshold' => $vendorDir . '/php-ai/php-ml/src/FeatureSelection/VarianceThreshold.php',
    'Phpml\\Helper\\OneVsRest' => $vendorDir . '/php-ai/php-ml/src/Helper/OneVsRest.php',
    'Phpml\\Helper\\Optimizer\\ConjugateGradient' => $vendorDir . '/php-ai/php-ml/src/Helper/Optimizer/ConjugateGradient.php',
    'Phpml\\Helper\\Optimizer\\GD' => $vendorDir . '/php-ai/php-ml/src/Helper/Optimizer/GD.php',
    'Phpml\\Helper\\Optimizer\\MP' => $vendorDir . '/php-ai/php-ml/src/Helper/Optimizer/ConjugateGradient.php',
    'Phpml\\Helper\\Optimizer\\Optimizer' => $vendorDir . '/php-ai/php-ml/src/Helper/Optimizer/Optimizer.php',
    'Phpml\\Helper\\Optimizer\\StochasticGD' => $vendorDir . '/php-ai/php-ml/src/Helper/Optimizer/StochasticGD.php',
    'Phpml\\Helper\\Predictable' => $vendorDir . '/php-ai/php-ml/src/Helper/Predictable.php',
    'Phpml\\Helper\\Trainable' => $vendorDir . '/php-ai/php-ml/src/Helper/Trainable.php',
    'Phpml\\IncrementalEstimator' => $vendorDir . '/php-ai/php-ml/src/IncrementalEstimator.php',
    'Phpml\\Math\\Comparison' => $vendorDir . '/php-ai/php-ml/src/Math/Comparison.php',
    'Phpml\\Math\\Distance' => $vendorDir . '/php-ai/php-ml/src/Math/Distance.php',
    'Phpml\\Math\\Distance\\Chebyshev' => $vendorDir . '/php-ai/php-ml/src/Math/Distance/Chebyshev.php',
    'Phpml\\Math\\Distance\\Euclidean' => $vendorDir . '/php-ai/php-ml/src/Math/Distance/Euclidean.php',
    'Phpml\\Math\\Distance\\Manhattan' => $vendorDir . '/php-ai/php-ml/src/Math/Distance/Manhattan.php',
    'Phpml\\Math\\Distance\\Minkowski' => $vendorDir . '/php-ai/php-ml/src/Math/Distance/Minkowski.php',
    'Phpml\\Math\\Kernel' => $vendorDir . '/php-ai/php-ml/src/Math/Kernel.php',
    'Phpml\\Math\\Kernel\\RBF' => $vendorDir . '/php-ai/php-ml/src/Math/Kernel/RBF.php',
    'Phpml\\Math\\LinearAlgebra\\EigenvalueDecomposition' => $vendorDir . '/php-ai/php-ml/src/Math/LinearAlgebra/EigenvalueDecomposition.php',
    'Phpml\\Math\\LinearAlgebra\\LUDecomposition' => $vendorDir . '/php-ai/php-ml/src/Math/LinearAlgebra/LUDecomposition.php',
    'Phpml\\Math\\Matrix' => $vendorDir . '/php-ai/php-ml/src/Math/Matrix.php',
    'Phpml\\Math\\Product' => $vendorDir . '/php-ai/php-ml/src/Math/Product.php',
    'Phpml\\Math\\Set' => $vendorDir . '/php-ai/php-ml/src/Math/Set.php',
    'Phpml\\Math\\Statistic\\ANOVA' => $vendorDir . '/php-ai/php-ml/src/Math/Statistic/ANOVA.php',
    'Phpml\\Math\\Statistic\\Correlation' => $vendorDir . '/php-ai/php-ml/src/Math/Statistic/Correlation.php',
    'Phpml\\Math\\Statistic\\Covariance' => $vendorDir . '/php-ai/php-ml/src/Math/Statistic/Covariance.php',
    'Phpml\\Math\\Statistic\\Gaussian' => $vendorDir . '/php-ai/php-ml/src/Math/Statistic/Gaussian.php',
    'Phpml\\Math\\Statistic\\Mean' => $vendorDir . '/php-ai/php-ml/src/Math/Statistic/Mean.php',
    'Phpml\\Math\\Statistic\\StandardDeviation' => $vendorDir . '/php-ai/php-ml/src/Math/Statistic/StandardDeviation.php',
    'Phpml\\Math\\Statistic\\Variance' => $vendorDir . '/php-ai/php-ml/src/Math/Statistic/Variance.php',
    'Phpml\\Metric\\Accuracy' => $vendorDir . '/php-ai/php-ml/src/Metric/Accuracy.php',
    'Phpml\\Metric\\ClassificationReport' => $vendorDir . '/php-ai/php-ml/src/Metric/ClassificationReport.php',
    'Phpml\\Metric\\ConfusionMatrix' => $vendorDir . '/php-ai/php-ml/src/Metric/ConfusionMatrix.php',
    'Phpml\\ModelManager' => $vendorDir . '/php-ai/php-ml/src/ModelManager.php',
    'Phpml\\NeuralNetwork\\ActivationFunction' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction.php',
    'Phpml\\NeuralNetwork\\ActivationFunction\\BinaryStep' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/BinaryStep.php',
    'Phpml\\NeuralNetwork\\ActivationFunction\\Gaussian' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/Gaussian.php',
    'Phpml\\NeuralNetwork\\ActivationFunction\\HyperbolicTangent' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/HyperbolicTangent.php',
    'Phpml\\NeuralNetwork\\ActivationFunction\\PReLU' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/PReLU.php',
    'Phpml\\NeuralNetwork\\ActivationFunction\\Sigmoid' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/Sigmoid.php',
    'Phpml\\NeuralNetwork\\ActivationFunction\\ThresholdedReLU' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/ThresholdedReLU.php',
    'Phpml\\NeuralNetwork\\Layer' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Layer.php',
    'Phpml\\NeuralNetwork\\Network' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Network.php',
    'Phpml\\NeuralNetwork\\Network\\LayeredNetwork' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Network/LayeredNetwork.php',
    'Phpml\\NeuralNetwork\\Network\\MultilayerPerceptron' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Network/MultilayerPerceptron.php',
    'Phpml\\NeuralNetwork\\Node' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Node.php',
    'Phpml\\NeuralNetwork\\Node\\Bias' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Node/Bias.php',
    'Phpml\\NeuralNetwork\\Node\\Input' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Node/Input.php',
    'Phpml\\NeuralNetwork\\Node\\Neuron' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Node/Neuron.php',
    'Phpml\\NeuralNetwork\\Node\\Neuron\\Synapse' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Node/Neuron/Synapse.php',
    'Phpml\\NeuralNetwork\\Training' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Training.php',
    'Phpml\\NeuralNetwork\\Training\\Backpropagation' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Training/Backpropagation.php',
    'Phpml\\NeuralNetwork\\Training\\Backpropagation\\Sigma' => $vendorDir . '/php-ai/php-ml/src/NeuralNetwork/Training/Backpropagation/Sigma.php',
    'Phpml\\Pipeline' => $vendorDir . '/php-ai/php-ml/src/Pipeline.php',
    'Phpml\\Preprocessing\\Imputer' => $vendorDir . '/php-ai/php-ml/src/Preprocessing/Imputer.php',
    'Phpml\\Preprocessing\\Imputer\\Strategy' => $vendorDir . '/php-ai/php-ml/src/Preprocessing/Imputer/Strategy.php',
    'Phpml\\Preprocessing\\Imputer\\Strategy\\MeanStrategy' => $vendorDir . '/php-ai/php-ml/src/Preprocessing/Imputer/Strategy/MeanStrategy.php',
    'Phpml\\Preprocessing\\Imputer\\Strategy\\MedianStrategy' => $vendorDir . '/php-ai/php-ml/src/Preprocessing/Imputer/Strategy/MedianStrategy.php',
    'Phpml\\Preprocessing\\Imputer\\Strategy\\MostFrequentStrategy' => $vendorDir . '/php-ai/php-ml/src/Preprocessing/Imputer/Strategy/MostFrequentStrategy.php',
    'Phpml\\Preprocessing\\Normalizer' => $vendorDir . '/php-ai/php-ml/src/Preprocessing/Normalizer.php',
    'Phpml\\Preprocessing\\Preprocessor' => $vendorDir . '/php-ai/php-ml/src/Preprocessing/Preprocessor.php',
    'Phpml\\Regression\\LeastSquares' => $vendorDir . '/php-ai/php-ml/src/Regression/LeastSquares.php',
    'Phpml\\Regression\\Regression' => $vendorDir . '/php-ai/php-ml/src/Regression/Regression.php',
    'Phpml\\Regression\\SVR' => $vendorDir . '/php-ai/php-ml/src/Regression/SVR.php',
    'Phpml\\SupportVectorMachine\\DataTransformer' => $vendorDir . '/php-ai/php-ml/src/SupportVectorMachine/DataTransformer.php',
    'Phpml\\SupportVectorMachine\\Kernel' => $vendorDir . '/php-ai/php-ml/src/SupportVectorMachine/Kernel.php',
    'Phpml\\SupportVectorMachine\\SupportVectorMachine' => $vendorDir . '/php-ai/php-ml/src/SupportVectorMachine/SupportVectorMachine.php',
    'Phpml\\SupportVectorMachine\\Type' => $vendorDir . '/php-ai/php-ml/src/SupportVectorMachine/Type.php',
    'Phpml\\Tokenization\\Tokenizer' => $vendorDir . '/php-ai/php-ml/src/Tokenization/Tokenizer.php',
    'Phpml\\Tokenization\\WhitespaceTokenizer' => $vendorDir . '/php-ai/php-ml/src/Tokenization/WhitespaceTokenizer.php',
    'Phpml\\Tokenization\\WordTokenizer' => $vendorDir . '/php-ai/php-ml/src/Tokenization/WordTokenizer.php',
    'Phpml\\Transformer' => $vendorDir . '/php-ai/php-ml/src/Transformer.php',
);
