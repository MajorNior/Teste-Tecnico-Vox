<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cadastro_socio/index.html.twig */
class __TwigTemplate_2d2636a47fae6ccbba166b69925d4a15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cadastro_socio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cadastro_socio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cadastro_socio/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
\t<style>
\t\tth {
\t\t\tborder-radius: 0;
\t\t}
\t\t.container h1 {
\t\t\tmargin-right: 835px !important;
\t\t}
\t\ttd:hover {
\t\t\tcolor: #000;
\t\t\tbackground: #fff;
\t\t}
\t</style>

\t<div class=\"contantTable\">

\t\t<div class=\"wrap\">
\t\t\t<form method=\"get\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"searchTerm\" name=\"nomeSocio\" placeholder=\"Pesquise por um sócio\">
\t\t\t\t\t<button type=\"submit\" class=\"searchButton\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<a class=\"btn\" href='";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("socio_adicionar");
        echo "'>+ Adicionar Novo</a>
\t\t<a class=\"btn\" style=\"float: left; margin-left: 140px; background: #0b5ed7;\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ver_empresa_socios");
        echo "\">Pagina inicial</a>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>Nome do Socio</th>
                    
                    ";
        // line 48
        echo "\t\t\t\t\t";
        // line 49
        echo "
\t\t\t\t\t<th style=\"text-align: center; width: 350px;\">Ações</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socios"]) || array_key_exists("socios", $context) ? $context["socios"] : (function () { throw new RuntimeError('Variable "socios" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["socio"]) {
            // line 55
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["socio"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["socio"], "nomeSocio", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                        
                        ";
            // line 60
            echo "\t\t\t\t\t\t";
            // line 71
            echo "
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("socio_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["socio"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"btn\" style=\"background-color: #0b5ed7;\">Editar</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"excluir-link btn\" style=\"background-color: #bb2d3b;\" onclick=\"exibirModalConfirmacao('";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("socio_excluir", ["id" => twig_get_attribute($this->env, $this->source, $context["socio"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "')\">Excluir</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t</tbody>
\t\t</table>

\t\t
\t\t<div id=\"confirmacaoExclusao\" class=\"modal\" style=\"display: none;\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<p>Tem certeza de que deseja excluir este socio?</p>
\t\t\t\t<form id=\"formExclusao\" method=\"post\" action=\"\">
\t\t\t\t\t<input type=\"hidden\" name=\"confirmacao\" value=\"1\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Excluir</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" onclick=\"fecharModalConfirmacao()\">Cancelar</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 95
            echo "\t\t<div class=\"alert alert-warning\">
\t\t\t";
            // line 96
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t
\t";
        // line 100
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["socios"]) || array_key_exists("socios", $context) ? $context["socios"] : (function () { throw new RuntimeError('Variable "socios" does not exist.', 100, $this->source); })()));
        echo "

\t";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/tabelas.css"), "html", null, true);
        echo "\">
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("controllers/modalExcluir.js"), "html", null, true);
        echo "\"></script>
\t\t <script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\tif (document.querySelectorAll('.contantTable table tbody tr').length === 0) {
\t\tsetTimeout(function () {
\t\twindow.location.href = '";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) || array_key_exists("redirectUrl", $context) ? $context["redirectUrl"] : (function () { throw new RuntimeError('Variable "redirectUrl" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "';
\t\t}, 2000);
\t\t}
\t\t});
\t\t</script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cadastro_socio/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  282 => 107,  264 => 102,  251 => 9,  241 => 8,  230 => 113,  228 => 102,  223 => 100,  220 => 99,  211 => 96,  208 => 95,  204 => 94,  186 => 78,  176 => 74,  172 => 73,  168 => 71,  166 => 60,  161 => 57,  157 => 56,  154 => 55,  150 => 54,  143 => 49,  141 => 48,  130 => 39,  126 => 38,  97 => 11,  94 => 8,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ titulo }}
{% endblock %}

{% block body %}
\t{% block stylesheets %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset('styles/tabelas.css') }}\">
\t{% endblock %}

\t<style>
\t\tth {
\t\t\tborder-radius: 0;
\t\t}
\t\t.container h1 {
\t\t\tmargin-right: 835px !important;
\t\t}
\t\ttd:hover {
\t\t\tcolor: #000;
\t\t\tbackground: #fff;
\t\t}
\t</style>

\t<div class=\"contantTable\">

\t\t<div class=\"wrap\">
\t\t\t<form method=\"get\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"searchTerm\" name=\"nomeSocio\" placeholder=\"Pesquise por um sócio\">
\t\t\t\t\t<button type=\"submit\" class=\"searchButton\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<a class=\"btn\" href='{{ path('socio_adicionar') }}'>+ Adicionar Novo</a>
\t\t<a class=\"btn\" style=\"float: left; margin-left: 140px; background: #0b5ed7;\" href=\"{{ path('app_ver_empresa_socios') }}\">Pagina inicial</a>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>Nome do Socio</th>
                    
                    {# Caso eu queira ver as empresas na tabela dos socios deixar desativado por hora #}
\t\t\t\t\t{# <th>Empresas</th> #}

\t\t\t\t\t<th style=\"text-align: center; width: 350px;\">Ações</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for socio in socios %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ socio.id }}</td>
\t\t\t\t\t\t<td>{{ socio.nomeSocio }}</td>
                        
                        {# Caso eu queira ver as empresas na tabela dos socios deixar desativado por hora #}
\t\t\t\t\t\t{# <td>
\t\t\t\t\t\t{% if socio.nomeEmpresa is not empty %}
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for empresa in socio.nomeEmpresa %}
\t\t\t\t\t\t<li>{{ empresa.nomeEmpresa }}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\tSem empresa associada
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td> #}

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('socio_editar', {id: socio.id}) }}\" class=\"btn\" style=\"background-color: #0b5ed7;\">Editar</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"excluir-link btn\" style=\"background-color: #bb2d3b;\" onclick=\"exibirModalConfirmacao('{{ path('socio_excluir', {'id': socio.id}) }}')\">Excluir</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t\t
\t\t<div id=\"confirmacaoExclusao\" class=\"modal\" style=\"display: none;\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<p>Tem certeza de que deseja excluir este socio?</p>
\t\t\t\t<form id=\"formExclusao\" method=\"post\" action=\"\">
\t\t\t\t\t<input type=\"hidden\" name=\"confirmacao\" value=\"1\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Excluir</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" onclick=\"fecharModalConfirmacao()\">Cancelar</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t{% for flashMessage in app.flashes('warning') %}
\t\t<div class=\"alert alert-warning\">
\t\t\t{{ flashMessage }}
\t\t</div>
\t{% endfor %}
\t
\t{{ knp_pagination_render(socios) }}

\t{% block javascripts %} <script src=\"{{ asset('controllers/modalExcluir.js') }}\"></script>
\t\t <script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\tif (document.querySelectorAll('.contantTable table tbody tr').length === 0) {
\t\tsetTimeout(function () {
\t\twindow.location.href = '{{ redirectUrl }}';
\t\t}, 2000);
\t\t}
\t\t});
\t\t</script>
\t{% endblock %}

{% endblock %}
", "cadastro_socio/index.html.twig", "C:\\xampp\\htdocs\\teste_Vox\\quadroSocietario\\templates\\cadastro_socio\\index.html.twig");
    }
}
