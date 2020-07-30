<?php

namespace App\DataFixtures;

use App\Entity\Kategoria;
use App\Entity\Produkt;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class KategoriaFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {

        $kategoria_s = new Kategoria();
        $kategoria_s->setNazwa('Sneakers');
        $manager->persist($kategoria_s);

        $kategoria_n = new Kategoria();
        $kategoria_n->setNazwa('Nowość');
        $manager->persist($kategoria_n);

        $kategoria_t = new Kategoria();
        $kategoria_t->setNazwa('Trampki');
        $manager->persist($kategoria_t);

        $kategoria_o = new Kategoria();
        $kategoria_o->setNazwa('Outlet');
        $manager->persist($kategoria_o);

        $produkt = new Produkt();
        $produkt->setNazwa('Buty Puma');
        $produkt->addKategoria($kategoria_n);
        $produkt->addKategoria($kategoria_s);
        $manager->persist($produkt);

        $produkt = new Produkt();
        $produkt->setNazwa('Trampki Converse');
        $produkt->addKategoria($kategoria_n);
        $produkt->addKategoria($kategoria_t);
        $manager->persist($produkt);

        $produkt = new Produkt();
        $produkt->setNazwa('Trampki Vans');
        $produkt->addKategoria($kategoria_t);
        $produkt->addKategoria($kategoria_o);
        $manager->persist($produkt);

        $produkt = new Produkt();
        $produkt->setNazwa('Buty Fila');
        $produkt->addKategoria($kategoria_o);
        $produkt->addKategoria($kategoria_s);
        $manager->persist($produkt);

        $manager->flush();


    }
}
