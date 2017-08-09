<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/08/17
 * Time: 16:30
 */

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BlogBundle\Entity\User;
use BlogBundle\Entity\BlogPost;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\CommentRepository")
 */
class Comment
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\BlogPost", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $blogpost;

    public function __construct()
    {
        $this->date = new \Datetime();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $author
     * @return Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param \DateTime $date
     * @return Comment
     */
    public function setDate(\Datetime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param BlogPost $blogpost
     * @return Comment
     */
    public function setBlogPost(BlogPost $blogpost)
    {
        $this->blogpost = $blogpost;
        return $this;
    }

    /**
     * @return BlogPost
     */
    public function getBlogPost()
    {
        return $this->blogpost;
    }

}