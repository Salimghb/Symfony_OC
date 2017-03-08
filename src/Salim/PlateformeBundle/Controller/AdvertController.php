<?php

namespace Salim\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Salim\PlateformeBundle\Entity\Advert;
use Salim\PlateformeBundle\Entity\Image;
use Salim\PlateformeBundle\Entity\Application;
use Salim\PlateformeBundle\Entity\Skill;
use Salim\PlateformeBundle\Entity\AdvertSkill;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{

	public function indexAction($page)
	{
		
		// On ne sait pas combien de pages il y a
    	// Mais on sait qu'une page doit être supérieure ou égale à 1
		if ($page < 1){
			throw $this
			-> createNotFoundException ("Page '".$page."' inexistante !");
		}

		$nbParPage = 1;

		$listAdverts = $this
		-> getDoctrine()
		-> getManager()
		-> getRepository('SalimPlateformeBundle:Advert')
		-> getAdverts($page, $nbParPage);

		// On calcule le nombre de pages total grace au
		// count($listAdverts) qui retourne le nombre total d'annonces
		$nbPages = ceil(count($listAdverts)/$nbParPage);

		// Si la page n'existe pas, on retourne une 404
		if ($page > $nbPages) {
			throw $this
			-> createNotFoundException("La page ".$page." n'existe pas.");
		}

		return $this->render('SalimPlateformeBundle:Advert:index.html.twig',
			array(
				'listAdverts' => $listAdverts,
				'nbPages'     => $nbPages,
				'page'        => $page
				)
			);

	}


	public function viewAction($id)
	{

		// Etape 0 : On récupère l'entity manager
		$em = $this -> getDoctrine() -> getManager();

		// Etape 1 : On récupère l'entité correspondante à l'id $id
		$advert = $em 
		-> getRepository('SalimPlateformeBundle:Advert') 
		-> find($id); 

		// $advert est soit une instance de l'objet Advert
		// soit null si l'id ne correspond à aucune entité du repository
		
		// Etape 2 : On vérifie donc si on a bien récupéré l'entité
		
		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce ".$id." n'existe pas.");
		}

		// Etape 3 : On récupère la liste des candidatures de cette annonce
		$listApplications = $em
		-> getRepository('SalimPlateformeBundle:Application')
		-> findBy(array('advert'=>$advert));

		// Etape 3 bis : On récupère la liste des AdvertSkills de cette annonce
		$listAdvertSkills = $em
		-> getRepository('SalimPlateformeBundle:AdvertSkill')
		-> findBy(array('advert'=>$advert));


		// Etape 4 : On passe maintenant une annonce 
		// Et sa liste de candidatures au render
		// Et sa liste de advertSkills
		return $this->render('SalimPlateformeBundle:Advert:view.html.twig',
			array(
				'advert'=>$advert,
				'listApplications'=>$listApplications,
				'listAdvertSkills'=>$listAdvertSkills
				));

	}


	public function addAction(Request $request)
	{

		// On récupère l'Entity Manager (EM)
		$em = $this->getDoctrine()->getManager();


		/*
		// On crée l'entité à ajouter
		// Date et id définis automatiquement par le constructeur
		// Published est déjà défini à true
		$advert = new Advert();
		$advert -> setTitle('Recherche développeur Symfony');
		$advert -> setAuthor('Salim Ghbabra');
		$advert -> setContent('Nous recherchons un développeur Symfony débutant sur Orléans...');

		// On crée les candidatures
		$application1 = new Application();
		$application1->setAuthor('Marine');
		$application1->setContent("J'ai toutes les qualités requises.");

		$application2 = new Application();
		$application2->setAuthor('Pierre');
		$application2->setContent("Je suis très motivé.");
		
		// On lie les candidatures à l'annonce
		$application1->setAdvert($advert);
		$application2->setAdvert($advert);

		//On récupère toutes les compétences disponibles
		$listSkills = $em -> getRepository('SalimPlateformeBundle:Skill')->findAll();

		//Pour chaque compétence
		foreach ($listSkills as $skill) {

			// On crée une relation Annonce-Compétence
			$advertSkill = new AdvertSkill();

			//On la lie à l'annonce générale
			$advertSkill -> setAdvert($advert);

			//On la lie à la compétence 
			//qui change à chaque itération de la boucle
			$advertSkill -> setSkill($skill);

			//Toutes les compétences sont requises au niveau Expert
			$advertSkill -> setLevel("Expert");

			//On persiste chaque advertSkill créé
			$em -> persist($advertSkill);

		}


		// Etape 1 : On persiste l'entité 
		// Elle est maintenant gérée par Doctrine
		$em -> persist($advert);

		// Etape 1 bis : Aucune cascade n'est définie car 
		// La relation est définie dans l'entité Application, 
		// L'entité Advert ne sait pas qu'elle est liée à deux Application. 
		// On doit tout persister à la main dans ce cas
		$em -> persist($application1);
		$em -> persist($application2);


		// Etape 2 : On flush tout ce qui a été persisté avant 
		// Doctrine enregistre dans la base les entités persistées
		$em -> flush();
		*/


		if ($request->isMethod('POST')) {
			$request 
			-> getSession() 
			-> getFlashBag() 
			-> add('notice', 'Annonce bien enregistrée.');

      		// Redirection vers la page de l'annonce ajoutée
			return $this 
			-> redirectToRoute('oc_platform_view', 
				array('id' => $advert -> getId()));
		}

    	// Si on n'est pas en POST, alors on affiche le formulaire
		return $this 
		-> render('SalimPlateformeBundle:Advert:add.html.twig');

	}


	public function editAction($id, Request $request)
	{

		$em = $this 
		-> getDoctrine()
		-> getManager();

		//On récupère l'annonce correspondante à $id
		$advert = $em
		-> getRepository('SalimPlateformeBundle:Advert')
		-> find($id);

		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce ".$id." n'existe pas");
		}
		
		//Gestion du formulaire
		
		if ($request->isMethod('POST')){

			$request
			-> getSession()
			-> getFlashBag()
			-> add('notice','Annonce modifiée !');

			return $this
			->redirectToRoute(
				'oc_platform_view',
				array('id'=>$advert->getId())
				);

		}

		return $this->render('SalimPlateformeBundle:Advert:edit.html.twig', 
			array(
				'advert' => $advert
				)
			);

	}


	public function deleteAction($id)
	{
		$em = $this 
		-> getDoctrine()
		-> getManager();

		//On récupère l'annonce correspondante à $id
		$advert = $em
		-> getRepository('SalimPlateformeBundle:Advert')
		-> find($id);

		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce ".$id." n'existe pas");
		}

		//On boucle sur les catégories de l'annonce et on les supprime
		foreach ($advert->getCategories() as $category) {
			$advert 
			-> removeCategory($category);
		}

		//On envoie à la base
		$em -> flush();

		return $this
		->render('SalimPlateformeBundle:Advert:delete.html.twig');

	}


	public function menuAction($limit)
	{

		$em = $this
		-> getDoctrine()
		-> getManager();

		$listAdverts = $em
		-> getRepository('SalimPlateformeBundle:Advert')
		-> findBy(
				array(),				// Pas de filtre
				array('date'=>'desc'),	// On trie par date décroissante
				$limit,					// On sélectionne $limit annonce
				0						// A partir du premier
				);

		return $this->render('SalimPlateformeBundle:Advert:menu.html.twig',
			array(
				'listAdverts' => $listAdverts
				)
			);

	}
}
