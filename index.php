<?php
include __DIR__ . '/php-ml/Dataset/Dataset.php';
include __DIR__ . '/php-ml/Dataset/ArrayDataset.php';
include __DIR__ . '/php-ml/Dataset/CsvDataset.php';

include __DIR__ . '/php-ml/Math/Distance.php';
include __DIR__ . '/php-ml/Math/Distance/Euclidean.php';
include __DIR__ . '/php-ml/Estimator.php';
include __DIR__ . '/php-ml/Classification/Classifier.php';
include __DIR__ . '/php-ml/Helper/Trainable.php';
include __DIR__ . '/php-ml/Helper/Predictable.php';
include __DIR__ . '/php-ml/Classification/KNearestNeighbors.php';

$dataset = new CsvDataset('php-ml/data/iris.csv', 2, true);
print_r($dataset->getTargets());

$samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

$classifier = new KNearestNeighbors();
$classifier->train($samples, $labels);

echo $classifier->predict([3, 2]);

?>