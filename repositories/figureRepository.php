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

    public function setConnection(\PDO $databaseConnection): self
    {
        $this->databaseConnection = $databaseConnection;

        return $this;
    }

    public function list(): array{
        $stmt = $this->databaseConnection->prepare("SELECT * FROM `Figure`");
        $stmt->execute();
        $resultat = $stmt->fetchAll();

        $figure =[];
        foreach($resultat as $a){

            $objet = new Figure();

            $objet -> setId($a['id']);
            $objet -> setName($a['name']);
            $objet -> setDescription($a['description']);
            $objet -> setPicturePath($a['picturePath']);
            $objet -> setVideoPath($a['videoPath']);
            $objet -> setCreatedAt(new \DateTime($a['createdAt']));
            $objet -> setUpdatedAt($a['updatedAt'] !== null ? new \DateTime($a['updatedAt']) : null);

            $figure[]=$objet;

        }
        return $figure;
    }


}