<?php

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Form\FilmType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FilmsController extends AbstractController
{
    // Page d'accueil
    #[Route('/', name: 'app_home')]
    public function index(FilmRepository $filmRepository): Response
    {
        // Récupérer la liste de tous les films depuis le repository
        $films = $filmRepository->findAll();
        return $this->render('films/index.html.twig', compact('films'));
    }

    // Page de création d'un nouveau film
    #[Route('/films/create', name: 'app_create', methods:['Get','Post'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        // Créer une nouvelle instance de l'entité Film
        $film = new Film();

        // Créer un formulaire lié à l'entité Film
        $form = $this->createForm(FilmType::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload de l'image
            $uploadedFile = $form['imageName']->getData();
            if ($uploadedFile instanceof UploadedFile) {
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/films';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move($destination, $newFilename);
                $film->setImageName($newFilename);
            }

            // Enregistrer l'entité dans la base de données
            $em->persist($film);
            $em->flush();
            $this->addFlash('success', 'Film Is Successfully Created ! ');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('films/create.html.twig', ['form' => $form->createView()]);
    }



    // Afficher les détails d'un film
    #[Route('/films/{id<[0-9]+>}', name: 'app_film_details' , methods:"Get")]
    public function show(int $id, FilmRepository $filmRepository):Response 
    {
        // Récupérer le film à afficher depuis le repository
        $film = $filmRepository->find($id);

        if (!$film) {
            throw $this->createNotFoundException('Film not Found.');
        }

        // Rendre le template twig avec les données du film
        return $this->render('films/show.html.twig', [
            'film' => $film,
        ]);
    }   



    // Page d'édition d'un film
    #[Route('/films/{id<[0-9]+>}/edit', name: 'app_film_edit', methods: ['Get', 'Post'])]
    public function edit(Request $request, int $id, EntityManagerInterface $em, FilmRepository $filmRepository): Response
    {
        // Récupérer le film à éditer depuis le repository
        $film = $filmRepository->find($id);

        if (!$film) {
            throw $this->createNotFoundException('Film not found.');
        }

        // Sauvegarder le nom d'image actuel
        $currentImageName = $film->getImageName();

        // Créer le formulaire et gérer l'édition du film
        $form = $this->createForm(FilmType::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload de la nouvelle image, si nécessaire

            // Enregistrer les modifications dans la base de données
            $em->flush();
            $this->addFlash('success', 'Film Is Successfully Updated ! ');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('films/edit.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }



    // Supprimer un film
    #[Route('/films/{id<[0-9]+>}/delete', name: 'app_films_delete', methods: ["DELETE"])]
    public function delete(int $id, EntityManagerInterface $em): Response
    {
        // Récupérer le film à supprimer depuis le repository
        $film = $em->getRepository(Film::class)->find($id);

        if (!$film) {
            throw $this->createNotFoundException('Film not found.');
        }

        // Supprimer le film de la base de données
        $em->remove($film);
        $em->flush();
        
        $this->addFlash('success', 'Film Is Successfully Deleted ! ');

        return $this->redirectToRoute('app_home');
    }

}
