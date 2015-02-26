<?php

/**
 * Class C_Posts
 */
class C_Posts extends C_Base
{
    /**
     * @var M_Posts|null
     */
    private $postsModel = null;

    /**
     *
     */
    public function __construct()
    {
        $this->postsModel = new M_Posts();
    }

    /**
     *
     */
    public function index()
    {
        die('je suis dans index du controleur posts');
    }

    /**
     *
     */
    public function create()
    {
        //faire ce qu’il faut faire pour ajouter un article puis rediriger
        header('Location: http://localhost');
    }

    /**
     *
     */
    public function udpate()
    {
        //Tester si la méthode est get ou post. En get, on affiche le formulaire, en post, on fait effectivement l’action d’ajouter, puis on redirige vers view/posts/x
    }

    /**
     * @return array
     */
    public function view()
    {
        //Exemple de ce qu’on pourrait faire avec view(). Cette méthode sert à voir un article particulier sur la base de son id.
        if ($_SERVER['REQUEST_METHOD'] != 'GET') {
            die('Vous essayez de faire un truc interdit');
            //À remplacer par un redirection vers view/error/x
        }
        if (!isset($_GET['id'])) {
            die('Vous avez oublié de dire que post vous voulez voir');
            //À remplacer par un redirection vers view/error/x
        }
        if (!is_numeric($_GET['id'])) {
            die('L’id fourni devrait être un nombre');
            //À remplacer par un redirection vers view/error/x
        }
        $id = $_GET['id'];
        $data = [];
        $data['data']['post'] = $this->postsModel->getPost($id);
        $data['data']['page_title'] = 'C’est bon pour ce que tu as';
        $data['view'] = 'view_posts.php';

        return $data;
    }
}
