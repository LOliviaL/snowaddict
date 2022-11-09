<?php

class Figure {
    private ?int $id;
    private string $name;
    private string $description;
    private string $picturePath;
    private string $videoPath;
    private \DateTime $createdAt;
    private ?\DateTime $deletedAt = null;
    private ?\DateTime $updatedAt = null;

    function __construct() {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;

    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicturePath(): string
    {
        return $this->picturePath;
    }
 
    public function setPicturePath(string $picturePath): self
    {
        $this->picturePath = $picturePath;

        return $this;
    }

    public function getVideoPath(): string
    {
        return $this->videoPath;
    }

    public function setVideoPath(string $videoPath): self
    {
        $this->videoPath = $videoPath;

        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt->format('Y-m-d H:i:s');
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

<<<<<<< HEAD
    public function getDeletedAt(): string
    {
        return $this->deletedAt !== null ? $this->deletedAt->format('Y-m-d H:i:s') : null; // on test que le cas vrai si il est faux il retourne null.
=======
    public function getDeletedAt(): ?string
    {
        return $this->deletedAt !== null ? $this->deletedAt->format('Y-m-d H:i:s') : null;
>>>>>>> 959df8667db97efef9f899e90d32bc00043cc173
    }

    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

<<<<<<< HEAD
    public function getUpdatedAt(): string
    {
        return $this->updatedAt !== null ? $this-> updatedAt ->format('Y-m-d H:i:s') : null;
=======
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt !== null ? $this->updatedAt->format('Y-m-d H:i:s') : null;
>>>>>>> 959df8667db97efef9f899e90d32bc00043cc173
    }

    public function setUpdatedAt(?\Datetime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
