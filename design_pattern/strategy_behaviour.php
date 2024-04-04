<?php
// The Strategy pattern defines a family of algorithms, encapsulates each algorithm, and makes them interchangeable.
// In PHP, you can implement it by defining a strategy interface and concrete implementations of that interface, 
// which can be switched at runtime.

// Strategy interface
interface SortStrategy {
    public function sort(array $dataset): array;
}

// Concrete strategies
class BubbleSortStrategy implements SortStrategy {
    public function sort(array $dataset): array {
        echo "Sorting using bubble sort\n";
        // Sort the array using bubble sort algorithm
        // This is just a simple example, not an efficient implementation of bubble sort
        for ($i = 0; $i < count($dataset); $i++) {
            for ($j = 0; $j < count($dataset) - 1; $j++) {
                if ($dataset[$j] > $dataset[$j + 1]) {
                    $temp = $dataset[$j + 1];
                    $dataset[$j + 1] = $dataset[$j];
                    $dataset[$j] = $temp;
                }
            }
        }
        return $dataset;
    }
}

class QuickSortStrategy implements SortStrategy {
    public function sort(array $dataset): array {
        echo "Sorting using quick sort\n";
        // Sort the array using quick sort algorithm
        // This is just a simple example, not an efficient implementation of quick sort
        sort($dataset);
        return $dataset;
    }
}

// Context
class Sorter {
    protected $sortStrategy;

    public function __construct(SortStrategy $sortStrategy) {
        $this->sortStrategy = $sortStrategy;
    }

    public function setSortStrategy(SortStrategy $sortStrategy) {
        $this->sortStrategy = $sortStrategy;
    }

    public function sort(array $dataset): array {
        return $this->sortStrategy->sort($dataset);
    }
}

// Usage
$dataset = [3, 1, 5, 2, 4];
$sorter = new Sorter(new BubbleSortStrategy());
echo implode(", ", $sorter->sort($dataset)) . "\n";

$sorter->setSortStrategy(new QuickSortStrategy());
echo implode(", ", $sorter->sort($dataset)) . "\n";
