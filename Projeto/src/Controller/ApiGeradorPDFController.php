<?php

namespace App\Controller;

use App\Repository\EmpresaRepository;
use App\Repository\SociosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class ApiGeradorPDFController extends AbstractController
{
    #[Route('/api/pdf', name: 'api_pdf')]
    public function generatePdf(EmpresaRepository $empresaRepository, SociosRepository $sociosRepository): Response
    {

        $data = $this->getData($empresaRepository, $sociosRepository);

        $pdfContent = $this->generatePdfContent($data);

        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'relatorio.pdf'
        ));

        return $response;
    }

    private function getData(EmpresaRepository $empresaRepository, SociosRepository $sociosRepository): array
    {
        
        $empresas = $empresaRepository->findAll();
        
        usort($empresas, function ($a, $b) {
            return strcmp($a->getNomeEmpresa(), $b->getNomeEmpresa());
        });

        $socios = $sociosRepository->findAll();
        
        usort($socios, function ($a, $b) {
            return strcmp($a->getNomeSocio(), $b->getNomeSocio());
        });

        $data['empresas'] = array_map(
            fn ($empresa) => ['nome' => $empresa->getNomeEmpresa()],
            $empresas
        );

        $data['socios'] = array_map(
            fn ($socio) => ['nomeSocio' => $socio->getNomeSocio(), 'nomeEmpresa' => $socio->getNomeEmpresa()->toArray()],
            $socios
        );

        return $data;
    }

    private function generatePdfContent(array $data): string
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);

        $html = $this->renderView('api_gerador_pdf/index.html.twig', ['data' => $data]);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $pdfContent = $dompdf->output();

        return $pdfContent;
    }
}
