<?php

namespace SparcGroup\WebsiteCrmIntegration\Data;

class SparcInNumbersData
{
    public function __construct(
        public int $aquiredCompaniesCount,
        public int $totalRevenue,
        public int $coworkersCount
    ) {}

    /** @param array{aquiredCompaniesCount: int, totalRevenue: int, coworkersCount: int} $data */
    public static function fromArray(array $data): self
    {
        return new self(
            aquiredCompaniesCount: $data['aquiredCompaniesCount'],
            totalRevenue: $data['totalRevenue'],
            coworkersCount: $data['coworkersCount'],
        );
    }
}
