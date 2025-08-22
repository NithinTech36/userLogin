<?php

namespace App\DTO;

class Dto
{
    // Common properties for all DTOs can be defined here
    public function convertDtoToArray(): array
    {
        return (array) $this;
    }
    public function convertArrayToDto(array $data): self
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
        return $this;
    }

}
