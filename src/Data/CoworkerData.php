<?php

namespace SparcGroup\WebsiteCrmIntegration\Data;

use Illuminate\Support\Collection;

class CoworkerData
{
    public function __construct(
        public int $id,
        public string $name,
        public string $image,
        public string $title,
        public string $phone,
        public string $email,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            image: $data['image'],
            title: $data['title'],
            phone: $data['phone'],
            email: $data['email'],
        );
    }

    public static function collect(array $items): Collection
    {
        return collect($items)->map(fn (array $item) => self::fromArray($item));
    }
}
