<?php

namespace App\Interfaces\PricePrediction;

use App\Core\ServiceResponse;

interface IPricePredictionService
{
    /**
     * @param mixed $brand
     * @param mixed $model
     * @param mixed $kilometerFrom
     * @param mixed $kilometerTo
     * @param mixed $yearFrom
     * @param mixed $yearTo
     * @param mixed $fuelTypes
     * @param mixed $gearBoxes
     * @param mixed $powerFrom
     * @param mixed $powerTo,
     * @param mixed $bodyType,
     * @param mixed $doors,
     *
     *
     * @return ServiceResponse
     */
    public function getByParameters(
        $brand,
        $model,
        $kilometerFrom,
        $kilometerTo,
        $yearFrom,
        $yearTo,
        $fuelTypes,
        $gearBoxes,
        $powerFrom,
        $powerTo,
        $bodyType,
        $doors


    ): ServiceResponse;
}
