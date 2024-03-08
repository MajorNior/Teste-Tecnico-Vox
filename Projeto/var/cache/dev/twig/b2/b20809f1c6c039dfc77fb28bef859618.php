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

/* cadastra_empresa/index.html.twig */
class __TwigTemplate_25f72a0c58b7c56d68cb9261803f4f88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cadastra_empresa/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cadastra_empresa/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cadastra_empresa/index.html.twig", 1);
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
        echo "\t<style>
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
\t\t\t\t\t<input type=\"text\" class=\"searchTerm\" name=\"nomeEmpresa\" placeholder=\"Pesquise por uma empresa\">
\t\t\t\t\t<button type=\"submit\" class=\"searchButton\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<a class=\"btn\" href='";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_adicionar");
        echo "'>+ Adicionar Nova</a>
\t\t<a class=\"btn\" style=\"float: left; margin-left: 140px; background: #0b5ed7;\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ver_empresa_socios");
        echo "\">Pagina inicial</a>


\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Num. Cadastro</th>
\t\t\t\t\t<th>Nome Empresa</th>
\t\t\t\t\t<th style=\"text-align: center; width: 350px;\">Ações</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 52
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nomeEmpresa", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\" style=\"background-color: #bb2d3b;\" onclick=\"exibirModalConfirmacao('";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_excluir", ["id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "')\">Excluir</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn\" style=\"background-color: #0b5ed7;\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t</tbody>
\t\t</table>


\t\t<div id=\"confirmacaoExclusao\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<p>Tem certeza de que deseja excluir esta empresa?</p>
\t\t\t\t<form id=\"formExclusao\" method=\"post\" action=\"\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Excluir</button>
\t\t\t\t\t<input type=\"hidden\" name=\"confirmacao\" value=\"1\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" onclick=\"fecharModalConfirmacao()\">Cancelar</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 78
            echo "\t\t<div class=\"alert alert-warning\">
\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t";
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 82, $this->source); })()));
        echo "
</div>
";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        
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

    // line 84
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
\t <script>
\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\tif (document.querySelectorAll('.contantTable table tbody tr').length === 0) {
\tsetTimeout(function () {
\twindow.location.href = '";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) || array_key_exists("redirectUrl", $context) ? $context["redirectUrl"] : (function () { throw new RuntimeError('Variable "redirectUrl" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "';
\t}, 2000);
\t}
\t});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cadastra_empresa/index.html.twig";
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
        return array (  266 => 89,  248 => 84,  235 => 9,  225 => 8,  215 => 84,  209 => 82,  200 => 79,  197 => 78,  193 => 77,  175 => 61,  165 => 57,  161 => 56,  156 => 54,  152 => 53,  149 => 52,  145 => 51,  130 => 39,  126 => 38,  97 => 11,  94 => 8,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{titulo}}
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
\t\t\t\t\t<input type=\"text\" class=\"searchTerm\" name=\"nomeEmpresa\" placeholder=\"Pesquise por uma empresa\">
\t\t\t\t\t<button type=\"submit\" class=\"searchButton\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<a class=\"btn\" href='{{ path('empresa_adicionar') }}'>+ Adicionar Nova</a>
\t\t<a class=\"btn\" style=\"float: left; margin-left: 140px; background: #0b5ed7;\" href=\"{{ path('app_ver_empresa_socios') }}\">Pagina inicial</a>


\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Num. Cadastro</th>
\t\t\t\t\t<th>Nome Empresa</th>
\t\t\t\t\t<th style=\"text-align: center; width: 350px;\">Ações</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for empresa in empresas %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ empresa.id }}</td>
\t\t\t\t\t\t<td>{{ empresa.nomeEmpresa }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\" style=\"background-color: #bb2d3b;\" onclick=\"exibirModalConfirmacao('{{ path('empresa_excluir', {'id': empresa.id}) }}')\">Excluir</a>
\t\t\t\t\t\t\t<a href=\"{{ path('empresa_editar', {id: empresa.id}) }}\" class=\"btn\" style=\"background-color: #0b5ed7;\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>


\t\t<div id=\"confirmacaoExclusao\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<p>Tem certeza de que deseja excluir esta empresa?</p>
\t\t\t\t<form id=\"formExclusao\" method=\"post\" action=\"\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Excluir</button>
\t\t\t\t\t<input type=\"hidden\" name=\"confirmacao\" value=\"1\">
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
\t{{ knp_pagination_render(empresas) }}
</div>
{% block javascripts %} <script src=\"{{ asset('controllers/modalExcluir.js') }}\"></script>
\t <script>
\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\tif (document.querySelectorAll('.contantTable table tbody tr').length === 0) {
\tsetTimeout(function () {
\twindow.location.href = '{{ redirectUrl }}';
\t}, 2000);
\t}
\t});
\t</script>
{% endblock %}{% endblock %}
", "cadastra_empresa/index.html.twig", "C:\\xampp\\htdocs\\teste_Vox\\quadroSocietario\\templates\\cadastra_empresa\\index.html.twig");
    }
}
