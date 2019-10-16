<?php 

namespace App\Model;

class Item
{
    private $id;
    private $title;

    /**
     * Class constructor
     * 
     * @param int $id
     * @param string $title
     */
    public function __construct(int $id, string $title)
    {
        $this->id    = $id;
        $this->title = $title;
    }

    /**
     * Get Id
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    
    /**
     * Get Title
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
}