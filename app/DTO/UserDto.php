<?php 

namespace App\DTO;

class UserDto extends Dto
{
    //populate all fields from User model

     public ?int $user_id = 0;
    public ?string $first_name = '';
    public ?string $last_name = '';
    public ?string $email = '';
    public ?string $password = '';
    public ?string $company_name = '';
    public ?string $DOB = '';

    public ?string $contact_number = '';
    public ?bool $is_admin = false;

    public ?bool $is_pending = false;

    public ?string $otp = '';

    public ?string $created_at = '';
    public ?string $updated_at = '';

    public ?string $remember_token = '';

    public ?string $token = '';


    //generate getters and setters

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getCompanyName(): string
    {
        return $this->company_name;
    }

    public function setCompanyName(string $company_name): void
    {
        $this->company_name = $company_name;
    }

    public function getDOB(): string
    {
        return $this->DOB;
    }

    public function setDOB(string $DOB): void
    {
        $this->DOB = $DOB;
    }

    public function getContactNumber(): string
    {
        return $this->contact_number;
    }

    public function setContactNumber(string $contact_number): void
    {
        $this->contact_number = $contact_number;
    }

    public function isAdmin(): bool
    {
        return $this->is_admin;
    }

    public function setAdmin(bool $is_admin): void
    {
        $this->is_admin = $is_admin;
    }

    public function isPending(): bool
    {
        return $this->is_pending;
    }

    public function setPending(bool $is_pending): void
    {
        $this->is_pending = $is_pending;
    }

    public function getOtp(): string
    {
        return $this->otp;
    }

    public function setOtp(string $otp): void
    {
        $this->otp = $otp;
    }
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function getRememberToken(): string
    {
        return $this->remember_token;
    }
    public function setRememberToken(string $remember_token): void
    {
        $this->remember_token = $remember_token;
    }

    public function getToken(): string
    {
        return $this->token;
    }
    public function setToken(string $token): void
    {
        $this->token = $token;
    }



}
    