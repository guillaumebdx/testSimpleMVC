<?php
namespace App\Service;

abstract class AbstractValidator
{
    protected $errorMessages;
    protected $postData;

    protected function trimAll()
    {
        $this->postData = array_map('trim', $this->postData);
    }
    
    protected function handleEmpty($field, string $fieldName)
    {
        if (empty($field)) {
            $this->errorMessages[$fieldName] = 'Le champ ' . $fieldName . ' ne doit pas être vide';
        }
        return $this;
    }

    protected function handleBetween(int $number, int $min, int $max, $fieldName)
    {
        if ($number < $min || $number > $max) {
            $this->errorMessages[$fieldName] = 'Le champ ' . $fieldName . ' doit être compris entre ' . $min . 'et ' . $max;
        }
    }

    public function getErrorMessages() : ?array
    {
        return $this->errorMessages;
    }

    public function getPostData() : ?array
    {
        return $this->postData;
    }
}
