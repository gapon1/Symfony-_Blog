<?php
/**
 * Created by PhpStorm.
 * User: pro
 * Date: 2019-04-06
 * Time: 11:46
 */

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post
{
    const NUMBER_OF_ITEMS = 10;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $slug;
    /**
     * @ORM\Column(type="text")
     */
    private $content;
    /**
     * @ORM\Column(type="string")
     */
    private $authorEmail;
    /**
     * @ORM\Column(type="datetime")
     */
    private $publishedAt;
    /**
     * @ORM\OneToMany(
     * targetEntity="App\Entity\Comment",
     * mappedBy="post",
     * orphanRemoval=true
     * )
     * @ORM\OrderBy({"publishedAt"="ASC"})
     */
    private $comments;
    public function __construct()
    {
        $this->publishedAt = new \DateTime();
        $this->comments = new ArrayCollection();
    }
// getters and setters ...


}