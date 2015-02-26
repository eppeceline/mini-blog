<?php

/**
 * Class M_Posts
 */
class M_Posts extends Model
{
    /**
     * @param $id
     * @return mixed
     */
    public function getPost($id)
    {
        $sql = 'SELECT * FROM articles WHERE articles.id = :id';
        $pdost = $this->connexion->prepare($sql);
        $pdost->execute([':id' => $id]);

        return $pdost->fetch();
    }
}

