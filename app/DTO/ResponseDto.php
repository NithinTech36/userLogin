<?php
namespace App\DTO;
class ResponseDto extends Dto
{
    private $status = true;
    private $message = '';
    private $data = [];
    private $error = [];
    private $responseCode = 200;

    public function __construct($message, $data = [], $error = [], $status = true, $responseCode = 200)
    {
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;
        $this->error = $error;
        $this->responseCode = $responseCode;
    }

    public function SendResponse(): array
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->data,
            'error' => $this->error,
            'response_code' => $this->responseCode
        ];
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getError()
    {
        return $this->error;
    }

    public function getResponseCode()
    {
        return $this->responseCode;
    }
}
