<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 01/10/15
 * Time: 23:11
 */

namespace AppBundle\Fixtures;


use AppBundle\Entity\Bar;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

class BarFxitures extends AbstractFixture{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $bar = new Bar();
        $bar->setName('Trappist');
        $bar->setPosLatitude('49.181473');
        $bar->setPosLongitude('-0.353040');
        $manager->persist($bar);

        $bar->setName('Au Chef Raide');
        $bar->setPosLatitude('49.184940');
        $bar->setPosLongitude('-0.359972');
        $manager->persist($bar);

        $bar->setName('Chez Paulette');
        $bar->setPosLatitude('49.183683');
        $bar->setPosLongitude('-0.366357');
        $manager->persist($bar);

        $manager->flush();
    }

}