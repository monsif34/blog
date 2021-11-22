<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $articleToCreate = ["Article1",'Article2',"Aarticle3"];
        // $product = new Product();
        // $manager->persist($product);
        foreach ($articleToCreate as $articleName){
            $article = new Article();
            $article->setNom($articleName);
            $article->setContenu("hey");
            $article->setSlug("slug");

            $manager->persist($article);
        }
        $manager->flush();
    }
}
