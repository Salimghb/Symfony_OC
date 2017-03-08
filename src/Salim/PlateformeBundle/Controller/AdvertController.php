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

	// On crée un objet Advert
		$advert = new Advert();
    // J'ai raccourci cette partie, car c'est plus rapide à écrire !
		$form = $this
		-> get('form.factory')
		-> createBuilder(FormType::class, $advert)
		-> add('date',      DateType::class)
		-> add('title',     TextType::class)
		-> add('content',   TextareaType::class)
		-> add('author',    TextType::class)
		-> add('published', CheckboxType::class, array('required' => false))
		-> add('save',      SubmitType::class)
		-> getForm()
		;

    // Si la requête est en POST
		if ($request->isMethod('POST')) {
    // On fait le lien Requête <-> Formulaire
    // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
			$form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) {
    // On enregistre notre objet $advert dans la base de données, par exemple
				$em = $this->getDoctrine()->getManager();
				$em->persist($advert);
				$em->flush();

				$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

    // On redirige vers la page de visualisation de l'annonce nouvellement créée
				return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
			}
		}

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
		return $this->render('SalimPlateformeBundle:Advert:add.html.twig', array(
			'form' => $form->createView(),
			));

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
