<?php

namespace SparcGroup\WebsiteCrmIntegration\Data;

use Illuminate\Support\Collection;

class CompanyData
{
    public function __construct(
        public int $id,
        public string $name,
        public string $logo,
        /** @var Collection<int, BusinessAreaData> */
        public Collection $businessAreas,
        public ?string $county,
        public ?string $description,
        public ?string $website
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            logo: $data['logo'],
            businessAreas: BusinessAreaData::collect($data['businessAreas']),
            county: $data['county'],
            description: $data['description'],
            website: $data['website'],
        );
    }

    public static function collect(array $items): Collection
    {
        return collect($items)->map(fn (array $item) => self::fromArray($item));
    }
}
