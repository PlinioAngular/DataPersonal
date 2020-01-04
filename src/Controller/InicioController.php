<?php

namespace App\Controller;

use App\Entity\Anuncio;
use App\Entity\Blog;
use App\Entity\BloquepormesModelo;
use App\Entity\Cargo;
use App\Entity\Galeria;
use App\Entity\Informaciongeneral;
use App\Entity\Jefatura;
use App\Entity\Noticia;
use App\Entity\Politicas;
use App\Entity\Proyecto;
use App\Entity\Usuario;
use App\Entity\Area;
use App\Form\ConfiguracionType;
use App\Form\UsuarioccType;
use App\Form\UsuarioType;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use mysql_xdevapi\BaseResult;
use function Sodium\add;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class InicioController extends AbstractController
{
    /**
     * @Route("/inicio", name="inicio")
     */
    public function index()
    {
        $securityContext = $this->container->get('security.authorization_checker');
        $user = $this->get('security.token_storage')->getToken()->getUser();

        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('perfil', ['id' => $user->getId()]);
        }else{
            echo 'NO INICIÓ SESIÓN';
        }

        return $this->render('intranet/index.html.twig');
    }

    /**
     * @Route("/registrados", name="registrados")
     */
    public function registrados()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Usuario p
            WHERE p.nombre != :nombre
            ORDER BY p.apellidopaterno ASC'
        )->setParameter('nombre', '');

        $personas = $query->getResult();

        /*$repository = $this->getDoctrine()->getRepository(Usuario::class);
        $personas = $repository->findAll();*/


        $securityContext = $this->container->get('security.authorization_checker');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY') && ($user->getId() == 9 || $user->getId() == 238 || $user->getId() == 569)) {
            return $this->render('registrados.html.twig', [
                'personas' => $personas
            ]);
        }else{
            return $this->render('intranet/index.html.twig');
        }
    }
}
