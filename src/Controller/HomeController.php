<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $contents = [
            [
                'title' => 'HTML&CSS',
                
                'text' => "Le langage de balisage HyperText ou HTML
                est le langage de balisage standard pour les
                documents conçus pour être affichés dans
                un navigateur Web. Le CSS pour Cascading
                Style Sheets est un langage de feuille de
                style utilisé pour décrire la présentation d'un
                document écrit dans un langage de balisage
                tel que HTML ou XML.",

                'image'=> "assets/images/html-css.png",

            ],

            [
                'title' => 'JAVASCRIPT',

                'text' => "JavaScript, souvent abrégé en JS, est un
                langage de programmation qui est l'une des
                technologies de base du World Wide Web,
                aux côtés de HTML et CSS.",

                'image'=> "assets/images/js.png",

            ],

            [
                'title' => 'NODE JS',

                'text' => "Node.js est un environnement de serveur
                open source. Node.js est multiplateforme et
                fonctionne sous Windows, Linux Unix et
                macOS. Node.js est un environnement
                d'exécution JavaScript principal.",

                'image'=> "assets/images/nodejs.jpg",

            ],
            [
                'title' => 'PHP',

                'text' => "PHP est un langage de script à usage général orienté vers le développement web",

                'image'=> "assets/images/php.png",

            ],
            [
                'title' => 'REACT',

                'text' => "React est une bibliothèque JavaScrript frontale gratuite et open source pour la création d'interface
                utilisateur basées sur des composants d'interface utilisateur.",

                'image'=> "assets/images/react.png",

            ],

            [
                'title' => 'SYMFONY',

                'text' => "Symfony est un cadre d'application Web PHP gratuit et open source et un ensemble
                de bibliothèque de composants PHP réutilisable.",

                'image'=> "assets/images/symfony.png",

            ],
        ];
        return $this->render('home/index.html.twig', [
            'contents' => $contents,
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $date = date('d/m/Y');
        return $this->render('home/about.html.twig', [
            'date' => $date,
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        $contacts = [
           [
                'text' => '@me',
                'logo' => 'assets/images/twitter.png',
           ],
           [
                'text' => 'Web Dev',
                'logo' => 'assets/images/linkedin.png',
           ],
           [
                'text' => '06 01 02 03 04',
                'logo' => 'assets/images/phone.png',
           ],
           [
                'text' => 'www.monsite.me',
                'logo' => 'assets/images/web.jpg',
           ]
        ];
        return $this->render('home/contact.html.twig', [
            'contacts' => $contacts
        ]);
    }
}
