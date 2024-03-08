<?php

namespace App\Controller;

use App\Entity\Socios;
use App\Form\SocioForm;
use App\Repository\SociosRepository;
use Exception;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Knp\Component\Pager\PaginatorInterface;


class CadastroSocioController extends AbstractController
{
    #[Route('/socio', name: 'app_cadastro_socio')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(SociosRepository $sociosRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $nomeSocio = $request->query->get('nomeSocio');

        if ($nomeSocio) {

            $queryBuilder = $sociosRepository->createQueryBuilder('s');

            $queryBuilder->where($queryBuilder->expr()->like('s.nomeSocio', ':nomeSocio'))
                ->setParameter('nomeSocio', "%$nomeSocio%");

            $pagination = $paginator->paginate(
                $queryBuilder->getQuery(),
                $request->query->getInt('page', 1),
                5
            );

            if ($pagination->getTotalItemCount() === 0) {
                $this->addFlash('warning', 'Nenhum sócio encontrado com o nome especificado.');
            }
        } else {

            $query = $sociosRepository->createQueryBuilder('s')->getQuery();

            $pagination = $paginator->paginate(
                $query,
                $request->query->getInt('page', 1),
                5
            );
        }

        $data['socios'] = $pagination;
        $data['titulo'] = 'Socios';
        $data['userRole'] = $this->getUser()->getRoles()[0];
        $data['redirectUrl'] = $this->generateUrl('app_cadastro_socio');

        return $this->render('cadastro_socio/index.html.twig', $data);
    }

    #[Route('/socio/adicionar', name: 'socio_adicionar')]
    #[IsGranted('ROLE_ADMIN')]
    public function adicionar(Request $request, EntityManagerInterface $em): Response
    {
        $msg = '';
        $socio = new Socios();
        $form = $this->createForm(SocioForm::class, $socio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($socio);
            $em->flush();
            $msg = "Socio Cadastrada com sucesso!";
        }

        $data['titulo'] = 'Cadastrar novo socio';
        $data['form'] = $form;
        $data['msg'] = $msg;

        return $this->render('cadastro_socio/form.html.twig', $data);
    }

    #[Route('/socio/editar/{id}', name: 'socio_editar')]
    #[IsGranted('ROLE_ADMIN')]
    public function editar($id, Request $request, EntityManagerInterface $em, SociosRepository $socioRepository): Response
    {
        $msg = '';
        $socio = $socioRepository->find($id);
        $form = $this->createForm(SocioForm::class, $socio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->flush();
            $msg = "Socio Atualizado com sucesso!";
        }

        $data['titulo'] = 'Editar socio';
        $data['form'] = $form;
        $data['msg'] = $msg;

        return $this->render('cadastro_socio/form.html.twig', $data);
    }

    #[Route('/socio/excluir/{id}', name: 'socio_excluir')]
    #[IsGranted('ROLE_ADMIN')]
    public function excluir($id, EntityManagerInterface $em, SociosRepository $socioRepository, Request $request): Response
    {
        $socio = $socioRepository->find($id);

        if (!$socio) {
            throw $this->createNotFoundException('Socio não encontrada.');
        }

        if ($request->isMethod('POST')) {
            $confirmacao = $request->request->get('confirmacao');

            if ($confirmacao) {
                $em->remove($socio);
                $em->flush();

                return $this->redirectToRoute('app_cadastro_socio');
            } else {

                return $this->redirectToRoute('app_visualiza_socio', ['id' => $id]);
            }
        }

        return $this->redirectToRoute('app_cadastra_socio');
    }
}
