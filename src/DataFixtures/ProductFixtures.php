<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('Baguette rustique')
            ->setPrice(1.25)
            ->setStatus('En vente')
            ->setUser($this->getReference('user-bob'))
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($product);

        $product = new Product();
        $product->setName('Croissant au beurre')
            ->setPrice(0.95)
            ->setStatus('En vente')
            ->setUser($this->getReference('user-jane'))
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($product);

        $manager->flush();
    }

    public function getOrder(): int
    {
        return 2;
    }
}
