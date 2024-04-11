<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('bob@bakeapi.com')
            ->setPassword($this->passwordHasher->hashPassword($user, 'bob'))
            ->setBakeryName('Ma petite boulangerie');
        $manager->persist($user);

        $user = new User();
        $user->setEmail('jane@bakeapi.com')
            ->setPassword($this->passwordHasher->hashPassword($user, 'jane'))
            ->setBakeryName('Delicious Bread');
        $manager->persist($user);

        $manager->flush();
    }
}
