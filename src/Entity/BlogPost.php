<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * BlogPost
 *
 * @ORM\Table(name="blog_post")
 * @ORM\Entity(repositoryClass="App\Repository\BlogPostRepository")
 * @ORM\HasLifecycleCallbacks
 */
class BlogPost
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
	 * @ORM\Column(name="title", type="string", length=255)
	 */
	private $title;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="slug", type="string", length=255, unique=true)
	 */
	private $slug;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="string", length=2000)
	 */
	private $description;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="body", type="text")
	 */
	private $body;

	/**
	 * @var Author
	 *
	 * @ORM\ManyToOne(targetEntity="Author")
	 * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
	 */
	private $author;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="created_at", type="datetimetz")
	 */
	private $createdAt;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="updated_at", type="datetime")
	 */
	private $updatedAt;

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
	public function getSlug(): string {
		return $this->slug;
	}

	/**
	 * @param string $slug
	 */
	public function setSlug( string $slug ): void {
		$this->slug = $slug;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription( string $description ): void {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getBody(): string {
		return $this->body;
	}

	/**
	 * @param string $body
	 */
	public function setBody( string $body ): void {
		$this->body = $body;
	}

	/**
	 * @return Author
	 */
	public function getAuthor(): Author {
		return $this->author;
	}

	/**
	 * @param Author $author
	 */
	public function setAuthor( Author $author ): void {
		$this->author = $author;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt(): ?\DateTime {
		return $this->createdAt;
	}

	/**
	 * @param \DateTime $createdAt
	 */
	public function setCreatedAt( \DateTime $createdAt ): void {
		$this->createdAt = $createdAt;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt(): ?\DateTime {
		return $this->updatedAt;
	}

	/**
	 * @param \DateTime $updatedAt
	 */
	public function setUpdatedAt( \DateTime $updatedAt ): void {
		$this->updatedAt = $updatedAt;
	}

	/**
	 * @ORM\PrePersist
	 */
	public function prePersist()
	{
		if (!$this->getCreatedAt()) {
			$this->setCreatedAt(new \DateTime());
		}

		if (!$this->getUpdatedAt()) {
			$this->setUpdatedAt(new \DateTime());
		}
	}

	/**
	 * @ORM\PreUpdate
	 */
	public function preUpdate()
	{
		$this->setUpdatedAt(new \DateTime());
	}

}
