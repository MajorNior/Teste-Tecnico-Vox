<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Repository\EmpresaRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class VerEmpresaSociosController extends AbstractController
{
    #[Route('/', name: 'app_ver_empresa_socios')]
    #[IsGranted('ROLE_USER')]
    public function index(EmpresaRepository $empresaRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $nomeempresa = $request->query->get('nomeEmpresa');

        
        if ($nomeempresa) {
            
            $queryBuilder = $empresaRepository->createQueryBuilder('e');

            
            $queryBuilder->where($queryBuilder->expr()->like('e.nomeEmpresa', ':nomeEmpresa'))
                ->setParameter('nomeEmpresa', "%$nomeempresa%");

            
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

        return $this->render('ver_empresa_socios/index.html.twig', [
            'empresas' => $pagination,
            'titulo' => 'Quadro Societário',
            'redirectUrl' => $this->generateUrl('app_ver_empresa_socios'),
            'userRole' => $this->getUser()->getRoles()[0],
        ]);
    }
}
