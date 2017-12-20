<?php
/**
 * Created by PhpStorm.
 * User: bwowk
 * Date: 20/12/17
 * Time: 10:32
 */

namespace bwowk\DiffGoggles\Model;


class Image
{
    private $id;

    /**
     * Image constructor.
     * @param $name
     * @param $path
     */
    public function __construct($name, $path)
    {
        $this->name = $name;
        $this->path = $path;
    }


    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    private $name;
    private $path;
}