<?php 

declare(strict_types=1);

namespace Model;

abstract class Product 
{
  protected string $id;
  protected string $name;
  protected string $sku;
  protected float $price;
  protected string $productType;
  
  public function __construct(string $name, string $sku, float $price, string $productType) 
  {
    $this->name = $name;
    $this->sku = $sku;
    $this->price = $price;
    $this->productType = $productType;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getSku(): string 
  {
    return $this->sku;
  }

  
  public function getPrice(): float
  {
    return $this->price;
  }

  public function getType(): string
  {
    return $this->productType;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function setSku(string $sku): void
  {
    $this->sku = $sku;
  }

  public function setPrice(float $price): void
  {
    $this->price = $price;
  }

  public function setType(string $type): void
  {
    $this->productType = $type;
  }

  abstract public function getDimension(): string;
  abstract public function getTableFields(): array;
}
