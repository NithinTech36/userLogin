<?php

namespace App\Mapper;
use App\DTO\Dto;

interface MapperInterface
{
    public function mapRequestToDto(array $data): Dto;
   public function mapModelToDto(array $data): Dto;
    public function mapDtoToResponseData(Dto $dto): array;
    public function mapDtosToResponseData(array $dtos): array;

}
