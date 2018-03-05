<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="App\Repository\AuthorRepository")
 */
class Author
{

	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255, unique=true)
	 */
	private $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="title", type="string", length=255)
	 */
	private $title;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="username", type="string", length=255, unique=true)
	 */
	private $username;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="company", type="string", length=255)
	 */
	private $company;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="short_bio", type="string", length=500)
	 */
	private $shortBio;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="phone", type="string", length=255, nullable=true)
	 */
	private $phone;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
	 */
	private $facebook;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
	 */
	private $twitter;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="github", type="string", length=255, nullable=true)
	 */
	private $github;

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( int $id ): void {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName( string $name ): void {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle( string $title ): void {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getUsername(): string {
		return $this->username;
	}

	/**
	 * @param string $username
	 */
	public function setUsername( string $username ): void {
		$this->username = $username;
	}

	/**
	 * @return string
	 */
	public function getCompany(): string {
		return $this->company;
	}

	/**
	 * @param string $company
	 */
	public function setCompany( string $company ): void {
		$this->company = $company;
	}

	/**
	 * @return string
	 */
	public function getShortBio(): string {
		return $this->shortBio;
	}

	/**
	 * @param string $shortBio
	 */
	public function setShortBio( string $shortBio ): void {
		$this->shortBio = $shortBio;
	}

	/**
	 * @return string
	 */
	public function getPhone(): string {
		return $this->phone;
	}

	/**
	 * @param string $phone
	 */
	public function setPhone( string $phone ): void {
		$this->phone = $phone;
	}

	/**
	 * @return string
	 */
	public function getFacebook(): string {
		return $this->facebook;
	}

	/**
	 * @param string $facebook
	 */
	public function setFacebook( string $facebook ): void {
		$this->facebook = $facebook;
	}

	/**
	 * @return string
	 */
	public function getTwitter(): string {
		return $this->twitter;
	}

	/**
	 * @param string $twitter
	 */
	public function setTwitter( string $twitter ): void {
		$this->twitter = $twitter;
	}

	/**
	 * @return string
	 */
	public function getGithub(): string {
		return $this->github;
	}

	/**
	 * @param string $github
	 */
	public function setGithub( string $github ): void {
		$this->github = $github;
	}



}
