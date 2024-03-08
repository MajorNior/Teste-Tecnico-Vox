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

/* ver_empresa_socios/index.html.twig */
class __TwigTemplate_c51a048d28dec7298fcd04deacbfa7e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ver_empresa_socios/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ver_empresa_socios/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ver_empresa_socios/index.html.twig", 1);
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
\t<div class=\"contantTable\">

\t\t<div class=\"wrap";
        // line 14
        if (((isset($context["userRole"]) || array_key_exists("userRole", $context) ? $context["userRole"] : (function () { throw new RuntimeError('Variable "userRole" does not exist.', 14, $this->source); })()) == "ROLE_ADMIN")) {
            echo " admin-wrap";
        } elseif (((isset($context["userRole"]) || array_key_exists("userRole", $context) ? $context["userRole"] : (function () { throw new RuntimeError('Variable "userRole" does not exist.', 14, $this->source); })()) == "ROLE_USER")) {
            echo " user-wrap";
        }
        echo "\">
\t\t\t<form method=\"get\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"searchTerm\" name=\"nomeEmpresa\" placeholder=\"Pesquise por uma empresa\">
\t\t\t\t\t<button type=\"submit\" class=\"searchButton\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "\t\t\t<a class=\"btn\" href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cadastra_empresa");
            echo "'>Empresa</a>
\t\t\t<a class=\"btn\" href='";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cadastro_socio");
            echo "'>Sócio</a>
\t\t";
        }
        // line 29
        echo "\t\t<a class=\"btn\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_pdf");
        echo "\">Gerar PDF</a>

\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Todos os cadastros</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 39
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"company";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"expand-checkbox\">
\t\t\t\t\t\t\t<label for=\"company";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "getNomeEmpresa", [], "method", false, false, false, 42), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"expandable-row\">
\t\t\t\t\t\t\t\t";
            // line 44
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["empresa"], "getNomeSocio", [], "method", false, false, false, 44), "isEmpty", [], "method", false, false, false, 44)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t<p>Nenhum sócio vinculado</p>
\t\t\t\t\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t<ul class=\"socios-list\">
\t\t\t\t\t\t\t\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["empresa"], "getNomeSocio", [], "method", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["socio"]) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["socio"], "getNomeSocio", [], "method", false, false, false, 49), "html", null, true);
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t</tbody>
\t\t</table>

\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 61
            echo "\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t";
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 65, $this->source); })()));
        echo "
\t</div>


\t <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("controllers/tabelas.js"), "html", null, true);
        echo "\"></script>
\t <script>
\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\tif (document.querySelectorAll('.contantTable table tbody tr').length === 0) {
\tsetTimeout(function () {
\twindow.location.href = '";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) || array_key_exists("redirectUrl", $context) ? $context["redirectUrl"] : (function () { throw new RuntimeError('Variable "redirectUrl" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "';
\t}, 2000);
\t}
\t});
\t</script>

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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ver_empresa_socios/index.html.twig";
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
        return array (  262 => 9,  252 => 8,  235 => 74,  227 => 69,  219 => 65,  210 => 62,  207 => 61,  203 => 60,  198 => 57,  189 => 53,  185 => 51,  176 => 49,  172 => 48,  169 => 47,  165 => 45,  163 => 44,  156 => 42,  152 => 41,  148 => 39,  144 => 38,  131 => 29,  126 => 27,  121 => 26,  119 => 25,  101 => 14,  96 => 11,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
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

\t<div class=\"contantTable\">

\t\t<div class=\"wrap{% if userRole == 'ROLE_ADMIN' %} admin-wrap{% elseif userRole == 'ROLE_USER' %} user-wrap{% endif %}\">
\t\t\t<form method=\"get\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"searchTerm\" name=\"nomeEmpresa\" placeholder=\"Pesquise por uma empresa\">
\t\t\t\t\t<button type=\"submit\" class=\"searchButton\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t<a class=\"btn\" href='{{ path('app_cadastra_empresa') }}'>Empresa</a>
\t\t\t<a class=\"btn\" href='{{ path('app_cadastro_socio') }}'>Sócio</a>
\t\t{% endif %}
\t\t<a class=\"btn\" href=\"{{ path('api_pdf') }}\">Gerar PDF</a>

\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Todos os cadastros</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for empresa in empresas %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"company{{ empresa.id }}\" class=\"expand-checkbox\">
\t\t\t\t\t\t\t<label for=\"company{{ empresa.id }}\">{{ empresa.getNomeEmpresa() }}</label>
\t\t\t\t\t\t\t<div class=\"expandable-row\">
\t\t\t\t\t\t\t\t{% if empresa.getNomeSocio().isEmpty() %}
\t\t\t\t\t\t\t\t\t<p>Nenhum sócio vinculado</p>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<ul class=\"socios-list\">
\t\t\t\t\t\t\t\t\t\t{% for socio in empresa.getNomeSocio() %}
\t\t\t\t\t\t\t\t\t\t\t<li>{{ socio.getNomeSocio() }}</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t\t{% for flashMessage in app.flashes('warning') %}
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t{{ flashMessage }}
\t\t\t</div>
\t\t{% endfor %}
\t\t{{ knp_pagination_render(empresas) }}
\t</div>


\t <script src=\"{{ asset('controllers/tabelas.js') }}\"></script>
\t <script>
\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\tif (document.querySelectorAll('.contantTable table tbody tr').length === 0) {
\tsetTimeout(function () {
\twindow.location.href = '{{ redirectUrl }}';
\t}, 2000);
\t}
\t});
\t</script>

{% endblock %}
", "ver_empresa_socios/index.html.twig", "C:\\xampp\\htdocs\\teste_Vox\\quadroSocietario\\templates\\ver_empresa_socios\\index.html.twig");
    }
}
