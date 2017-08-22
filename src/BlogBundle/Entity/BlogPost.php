<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/08/17
 * Time: 11:15
 */

namespace BlogBundle\Entity;


use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use BlogBundle\Entity\User;
use BlogBundle\Entity\Comment;
use BlogBundle\Entity\Image;


/**
 * BlogPost
 *
 * @ORM\Table(name="blogpost")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\BlogPostRepository")
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="published_at", type="datetime", nullable=true)
     */
    private $publishedAt;


    /**
     * @ORM\OneToMany(targetEntity="BlogBundle\Entity\Comment", mappedBy="blogpost")
     */
    private $comments; // Ici commentaires prend un « s », car un article a plusieurs commentaires !

    /**
     * @var integer
     * @ORM\Column(name="nbComments", type="integer", nullable=true)
     */
    private $nbComments;


    /**
     * @ORM\OneToOne(targetEntity="BlogBundle\Entity\Image", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $image;


    public function __construct()
    {

        $this->comments = new ArrayCollection();
    }

    public static function create()
    {
        return new self();
    }

    public static function createFromUser(User $user)
    {
        $blogpost = new self();

        $blogpost->setAuthor($user->getFullname());

        return $blogpost;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $autor
     *
     * @return BlogPost
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * Set content
     *
     * @param string $content
     *
     * @return BlogPost
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return BlogPost
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return BlogPost
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     *
     * @return BlogPost
     */
    public function setPublishedAt(\DateTime $publishedAt = null)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    public function isPublished()
    {
        return null !== $this->publishedAt;
    }


    /**
     * @return Collection
     */
    public function getComments()
    {
        return $this->comments;
    }


    /**
     * Get nbComments
     *
     * @return int
     */
    public function getNbComments()
    {
        return $this->nbComments;
    }

    /**
     * Set nbComments
     *
     * @return int
     */
    public function setNbComments($nbComments)
    {
        return $this->nbComments = $nbComments;
    }

    /**
     * @param  Image $image
     * @return BlogPost
     */
    public function setImage(Image $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }


}