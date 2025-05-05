<?php

namespace SparcGroup\WebsiteCrmIntegration\Data;

use Illuminate\Support\Collection;

class DepartmentData
{
    public function __construct(
        public int $id,
        public string $title,
        /** @var Collection<int, CoworkerData> */
        public Collection $coworkers,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            title: $data['title'],
            coworkers: CoworkerData::collect($data['coworkers']),
        );
    }

    public static function collect(array $items): Collection
    {
        return collect($items)->map(fn (array $item) => self::fromArray($item));
    }
}
