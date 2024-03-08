<?php

namespace App\Controller;

use App\Entity\Empresa;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\EmpresaForm;
use App\Repository\EmpresaRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Knp\Component\Pager\PaginatorInterface;

class CadastraEmpresaController extends AbstractController
{
    #[Route('/empresa', name: 'app_cadastra_empresa')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(EmpresaRepository $empresaRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $nomeEmpresa = $request->query->get('nomeEmpresa');

        if ($nomeEmpresa) {

            $queryBuilder = $empresaRepository->createQueryBuilder('e');

            $queryBuilder->where($queryBuilder->expr()->like('e.nomeEmpresa', ':nomeEmpresa'))
                ->setParameter('nomeEmpresa', "%$nomeEmpresa%");

            $pagination = $paginator->paginate(
                $queryBuilder->getQuery(),
                $request->query->getInt('page', 1),
                5
            );


            if ($pagination->getTotalItemCount() === 0) {
                $this->addFlash('warning', 'Nenhuma empresa encontrada com o nome especificado.');
            }
        } else {

            $query = $empresaRepository->createQueryBuilder('e')->getQuery();

            $pagination = $paginator->paginate(
                $query,
                $request->query->getInt('page', 1),
                5
            );
        }

        $data['empresas'] = $pagination;
        $data['titulo'] = 'Empresas';
        $data['userRole'] = $this->getUser()->getRoles()[0];
        $data['redirectUrl'] = $this->generateUrl('app_cadastra_empresa');

        return $this->render('cadastra_empresa/index.html.twig', $data);
    }


    #[Route('/empresa/adicionar', name: 'empresa_adicionar')]
    #[IsGranted('ROLE_ADMIN')]
    public function adicionar(Request $request, EntityManagerInterface $em): Response
    {
        $msg = '';
        $empresa = new Empresa();
        $form = $this->createForm(EmpresaForm::class, $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($empresa);
            $em->flush();
            $msg = "Empresa Cadastrada com sucesso!";
            $request->attributes->set('_body_class', 'form-submitted');
        }

        $data['titulo'] = 'Cadastrar nova Empresa';
        $data['form'] = $form;
        $data['msg'] = $msg;

        return $this->render('cadastra_empresa/form.html.twig', $data);
    }


    #[Route('/empresa/editar/{id}', name: 'empresa_editar')]
    #[IsGranted('ROLE_ADMIN')]
    public function editar($id, Request $request, EntityManagerInterface $em, EmpresaRepository $empresaRepository): Response
    {
        $msg = '';
        $empresa = $empresaRepository->find($id);
        $form = $this->createForm(EmpresaForm::class, $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $msg = "Empresa Atualizada com sucesso!";
        }

        $data['titulo'] = 'Editar Empresa';
        $data['form'] = $form;
        $data['msg'] = $msg;

        return $this->render('cadastra_empresa/form.html.twig', $data);
    }

    #[Route('/empresa/excluir/{id}', name: 'empresa_excluir')]
    #[IsGranted('ROLE_ADMIN')]
    public function excluir($id, EntityManagerInterface $em, EmpresaRepository $empresaRepository, Request $request): Response
    {
        $empresa = $empresaRepository->find($id);

        if (!$empresa) {
            throw $this->createNotFoundException('Empresa não encontrada.');
        }

        if ($request->isMethod('POST')) {
            $confirmacao = $request->request->get('confirmacao');

            if ($confirmacao) {
                $em->remove($empresa);
                $em->flush();

                return $this->redirectToRoute('app_cadastra_empresa');
            } else {

                return $this->redirectToRoute('app_visualiza_empresa', ['id' => $id]);
            }
        }

        return $this->redirectToRoute('app_cadastra_empresa');
    }
}
