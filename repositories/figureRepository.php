<?php

require_once('models/figure.php');

final class FigureRepository
{
    private $databaseConnection = null;

    public function create(Figure $figure): void
    {
        $stmt = $this->databaseConnection->prepare('INSERT INTO figure (name, description, picturePath, videoPath, createdAt) VALUES (:name, :description, :picturePath, :videoPath, :createdAt)');

        $name = $figure->getName();
        $description = $figure->getDescription();
        $picturePath = $figure->getPicturePath();
        $videoPath = $figure->getVideoPath();
        $createdAt = $figure->getCreatedAt();

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':picturePath', $picturePath);
        $stmt->bindParam(':videoPath', $videoPath);
        $stmt->bindParam(':createdAt', $createdAt);

        $stmt->execute();
    }

    public function list(): array
    {
        $stmt = $this->databaseConnection->prepare('SELECT * FROM figure');

        $stmt->execute();
        $results = $stmt->fetchAll();

        $figures = [];

        foreach($results as $result) {
            $figure = new Figure();
            $figure->setId($result['id']);
            $figure->setName($result['name']);
            $figure->setDescription($result['description']);
            $figure->setPicturePath($result['picturePath']);
            $figure->setVideoPath($result['videoPath']);
            $figure->setCreatedAt(new \DateTime($result['createdAt']));
            $figure->setUpdatedAt($result['updatedAt'] !== null ? new \DateTime($result['updatedAt']) : null);

            $figures[] = $figure; 
        }

        return $figures;
    }
    public function update(Figure $figure): void
    {
        //$stmt = $this->databaseConnection->prepare('INSERT INTO figure (name, description, picturePath, videoPath, createdAt) VALUES (:name, :description, :picturePath, :videoPath, :createdAt)');

        $stmt = $this->databaseConnection->prepare('UPDATE `Figure` SET `name`=:name,`description`=:description,`picturePath`=:picturePath,`videoPath`=:videoPath,`updatedAt`=:updatedAt WHERE `id`=:id ');
        
        $name = $figure->getName();
        $description = $figure->getDescription();
        $picturePath = $figure->getPicturePath();
        $videoPath = $figure->getVideoPath();
        $updatedAt = (new \DateTime())->format('Y-m-d H:i:s');
        $id=$_GET['id'];
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':picturePath', $picturePath);
        $stmt->bindParam(':videoPath', $videoPath);
        $stmt->bindParam(':updatedAt', $updatedAt);

        $stmt->execute();
    }
    public function getFigure() 
    {
        $stmt = $this->databaseConnection->prepare('SELECT * FROM figure WHERE `id`=:id ');

        $stmt->execute();
        $result = $stmt->fetch();
        
    
        $figure = new Figure();

        $figure->setId($result['id']);
        $figure->setName($result['name']);
        $figure->setDescription($result['description']);
        $figure->setPicturePath($result['picturePath']);
        $figure->setVideoPath($result['videoPath']);
        
        $figure->setUpdatedAt($result['updatedAt'] !== null ? new \DateTime($result['updatedAt']) : null);

    
        return $figure;
    }


    

    public function setConnection(\PDO $databaseConnection): self
    {
        $this->databaseConnection = $databaseConnection;

        return $this;
    }


}