<?php

function generateUniqueNumbers(int $listLength, int $numberLength): array|Exception
{
    # Checking that only positive numbers are passed
    if ($listLength <= 0 || $numberLength <= 0) {
        throw new InvalidArgumentException('List length and number length must be positive numbers');
    }

    # Minimum range value
    $minValue = pow(10, $numberLength - 1);
    # Maximum range value
    $maxValue = pow(10, $numberLength) - 1;

    # Checking whether there are enough unique values to generate
    if ($listLength > ($maxValue - $minValue + 1)) {
        throw new Exception('There are not enough unique values to generate');
    }

    $uniqueNumbers = [];

    # Generating random numbers and filling in a list of unique numbers
    while (count($uniqueNumbers) < $listLength) {
        # Generating a number in a given range
        $number = random_int($minValue, $maxValue);

        # To avoid checking the entire list at each iteration, the generated number is placed in the index of the array,
        # which ensures its uniqueness
        $uniqueNumbers[$number] = true;
    }

    # Forming the final list from the keys of the generated array and returning the result
    return array_keys($uniqueNumbers);
}

try {
    $length = 90000;
    $result = generateUniqueNumbers($length, 5);
    $currentLength = count(array_unique($result, SORT_NUMERIC));

    # int(90000)
    var_dump($currentLength);

    # bool(true)
    var_dump($currentLength === $length);
} catch (Exception $exception) {
    echo 'Error: ' . $exception->getMessage();
}