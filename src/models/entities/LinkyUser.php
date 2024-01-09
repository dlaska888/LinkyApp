<?php

namespace src\Models\Entities;

use DateTime;
use src\Enums\UserRole;
use src\Helpers\UUIDGenerator;

class LinkyUser
{
    public string $user_id;
    public string $user_name;
    public string $email;
    public string $password_hash;
    public bool $email_confirmed;
    public UserRole $role;
    public ?string $refresh_token;
    public ?DateTime $refresh_token_exp;
    public ?string $profile_picture_id;
    public DateTime $date_created;

    public function __construct(
        string   $user_name,
        string   $email,
        string   $password_hash,
        DateTime $date_created = new DateTime(),
        string   $user_id = null,
        bool     $email_confirmed = false,
        UserRole $role = UserRole::NORMAL,
        string   $refresh_token = null,
        DateTime $refresh_token_exp = null,
        string   $profile_picture_id = null
    )
    {
        $this->user_id = $user_id ?? UUIDGenerator::genUUID();
        $this->user_name = $user_name;
        $this->email = $email;
        $this->password_hash = $password_hash;
        $this->email_confirmed = $email_confirmed;
        $this->role = $role ?: UserRole::NORMAL;
        $this->refresh_token = $refresh_token;
        $this->refresh_token_exp = $refresh_token_exp;
        $this->profile_picture_id = $profile_picture_id;
        $this->date_created = $date_created;
    }
}
