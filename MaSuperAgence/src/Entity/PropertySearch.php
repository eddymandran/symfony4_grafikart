<?php
namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

class PropertySearch{

    /**
     * @var int|null
     */
    private $maxPrice;

    /**
     * @var int|null
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface;


    /**
     * @var ArrayCollection
     */
    private $options;

    public function __construct(){
        $this->options = new ArrayCollection();
    }

    /**
     * Get the value of maxPrice
     *
     * @return  int|null
     */ 
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * Set the value of maxPrice
     *
     * @param  int|null  $maxPrice
     *
     * @return  PropertySearch
     */ 
    public function setMaxPrice(int $maxPrice) : PropertySearch
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get the value of minSurface
     *
     * @return  int|null
     */ 
    public function getMinSurface() : ?int
    {
        return $this->minSurface;
    }

    /**
     * Set the value of minSurface
     *
     * @param  int|null  $minSurface
     *
     * @return  PropertySearch
     */ 
    public function setMinSurface(int $minSurface) :PropertySearch
    {
        $this->minSurface = $minSurface;

        return $this;
    }

    
    /**
     * Get the value of options
     * @return ArrayCollection
     */ 
    public function getOptions(): ArrayCollection
    {
        return $this->options;
    }

    /**
     * Set the value of options
     *
     * @param ArrayCollection $options
     */ 
    public function setOptions(ArrayCollection $options): void
    {
        $this->options = $options;
    }
}
