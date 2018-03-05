<?php

namespace App\DataFixtures\ORM;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AuthorFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
	   /* $author = new Author();

	    $author->setName('Joe Bloggs');
	    $author->setTitle('Developer');
	    $author->setUsername('auth0-username');
	    $author->setCompany('The Writing Company');
	    $author->setShortBio('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.');
	    $author->setPhone('070000000');
	    $author->setFacebook('joebloggs');
	    $author->setTwitter('joe.bloggs');
	    $author ->setGithub('joe-bloggs');

	    $manager->persist($author);

        $manager->flush();*/
    }
}
