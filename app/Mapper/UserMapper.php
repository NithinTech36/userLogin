<?php 
namespace App\Mapper;
use App\DTO\UserDto;
class UserMapper implements MapperInterface
{
    public function mapRequestToDto(array $data): UserDto
    {
        $userDto = new UserDto();
        if(isset($data['user-id'])) 
            $userDto->setUserId((int)$data['user-id']);
        if(isset($data['first-name'])) 
            $userDto->setFirstName($data['first-name']);
        if(isset($data['last-name'])) 
            $userDto->setLastName($data['last-name']);
        if(isset($data['email'])) 
            $userDto->setEmail($data['email']);
        return $userDto;
    }
    public function mapModelToDto( $data): UserDto
    {
        $userDto = new UserDto();
        if(isset($data['user_id'])) {
            $userDto->setUserId((int)$data['user_id']);
        }
        if(isset($data['first_name'])) {
            $userDto->setFirstName($data['first_name']);
        }
        if(isset($data['last_name'])) {
            $userDto->setLastName($data['last_name']);
        }
        if(isset($data['email'])) {
            $userDto->setEmail($data['email']);
        }
        return $userDto;
    }

    public function mapDtoToResponseData($dto): array
    {
        $data = [];
        if ($dto instanceof UserDto) {
            if (!empty($dto->getUserId())) {
                $data['user_id'] = $dto->getUserId();
            }
            if (!empty($dto->getFirstName())) {
                $data['first-name'] = $dto->getFirstName();
            }
            if (!empty($dto->getLastName())) {
                $data['last-name'] = $dto->getLastName();
            }
            if (!empty($dto->getEmail())) {
                $data['email'] = $dto->getEmail();
            }
            if(!empty($dto->getDOB())) {
                $data['DOB'] = $dto->getDOB();
            }
            if(!empty($dto->getContactNumber())) {
                $data['contact_number'] = $dto->getContactNumber();
            }
            if(!empty($dto->isAdmin())) {
                $data['is_admin'] = $dto->isAdmin();
            }
            if(!empty($dto->isPending())) {
                $data['is_pending'] = $dto->isPending();
            }
            if(!empty($dto->getOtp())) {
                $data['otp'] = $dto->getOtp();
            }
        }
        return $data;
        // ];
    }

     public function mapDtosToResponseData($dtos): array
    {
        return array_map([$this, 'mapDtoToResponseData'], $dtos);
    }

}
          



          


