<?php

namespace src\Models\Entities;

use DateTime;
use src\Helpers\UUIDGenerator;
use Throwable;

class LinkGroup
{
    public string $link_group_id;
    public string $user_id;
    public string $name;
    public DateTime $date_created;
    public ?array $links;
    public ?array $groupShares;

    public function __construct(
        string $user_id,
        string $name,
        DateTime $date_created = new DateTime(),
        string $link_group_id = null,
        array $links = null,
        array $groupShares = null
    ) {
        $this->link_group_id = $link_group_id ?? UUIDGenerator::genUUID();
        $this->user_id = $user_id;
        $this->name = $name;
        $this->date_created = $date_created;
        $this->links = $links;
        $this->groupShares = $groupShares;
    }
}
