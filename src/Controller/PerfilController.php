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

class PerfilController extends AbstractController
{
    /**
     * @Route("/", name="iniciox")
     */
    public function index()
    {
        return $this->redirectToRoute('fos_user_security_login');
    }

    /**
     * @Route("/gracias", name="gracias")
     */
    public function gracias()
    {
        return $this->render('gracias.html.twig');
    }

    /**
     * @Route("/perfil/{id}", name="perfil", methods={"GET","POST"})
     */
    public function perfil(Request $request, Usuario $usuario, Security $security): Response
    {
        $user = $security->getUser();

        if ($user == null){
            return $this->redirectToRoute('fos_user_security_login');
        }

        if ($user->getId() != $usuario->getId()){
            throw $this->createNotFoundException('El id no existe!');
        }

        $form = $this->createForm(UsuarioType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('gracias');
        }

        return $this->render('perfil.html.twig', [
            'usuario' => $usuario,
            'form' => $form->createView(),
        ]);
    }
}
