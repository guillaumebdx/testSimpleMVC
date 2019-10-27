<?php
namespace App\Service;

class ItemValidator extends AbstractValidator
{

    public function __construct(array $postData)
    {
        $this->postData = $postData;
    }

    public function checkAll():void
    {
        $this->trimAll();
        $this->handleEmpty($this->postData['title'], 'title');
    }
}
