<?php

namespace SparcGroup\WebsiteCrmIntegration\Data;

use Illuminate\Support\Collection;

class BusinessAreaData
{
    public function __construct(
        public int $id,
        public string $title,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            title: $data['title'],
        );
    }

    public static function collect(array $items): Collection
    {
        return collect($items)->map(fn (array $item) => self::fromArray($item));
    }
}
