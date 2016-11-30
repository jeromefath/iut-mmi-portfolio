<?php

/**
 * Description of Database.
 *
 * @author Jérôme Fath
 */
class Database
{
    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * Constructeur de la classe Database, instancie un objet PDO permettant de requêter sur la base de données
     */
    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=portfolio', 'root', 'root');
    }

    /**
     * Retourne toutes les catégories
     *
     * @return array
     */
    public function getCategories()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM category");

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Retourne les réalisations associées à une catégorie
     *
     * @param $categoryId
     * @return array
     */
    public function getRealizationsByCategoryId($categoryId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM realization WHERE category_id = :id");

        $stmt->execute([
            'id' => $categoryId
        ]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}