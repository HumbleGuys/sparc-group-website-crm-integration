<?php

namespace SparcGroup\WebsiteCrmIntegration\Data;

use Illuminate\Support\Collection;

class CompanyLogoData
{
    public function __construct(
        public int $id,
        public string $name,
        public string $logo
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            logo: $data['logo'],
        );
    }

    public static function collect(array $items): Collection
    {
        return collect($items)->map(fn (array $item) => self::fromArray($item));
    }
}
