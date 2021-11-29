<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
       $this->articleRepository = $articleRepository;
    }

    /**
     * @Route("/Nos-articles/", name="article")
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'arcticle',
            'articles' => $this->articleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/Nos-articles/{id}", name="articleNumber")
     */
    public function ArticleById(string $id): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'arcticle',
            'articlesNumber' => $this->articleRepository->find($id),
        ]);
    }

    /**
     * @Route("/ajouterArticle", name="ajouterArticle")
     */
    public function new(Request $request): Response
    {
        // just setup a fresh $task object (remove the example data)
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);




        return $this->renderForm('article/index.html.twig', [
            'form' => $form,
        ]);
    }

}
