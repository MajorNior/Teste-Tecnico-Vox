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
class __TwigTemplate_84f5a205e99ae713dd39d29225096697 extends Template
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

        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>

<a href='";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_adicionar");
        echo "'>+ Adicionar</a>

<!-- Tabela com empresas -->
<table class=\"table\">
    <thead>
        <tr>
            <td>#</td>
            <td>Nome Empresa</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nomeEmpresa", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Editar</a>

                    <!-- Link para acionar a exclusão com a caixa de diálogo (modal) -->
                    <a href=\"#\" class=\"excluir-link\" onclick=\"exibirModalConfirmacao('";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_excluir", ["id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "')\">Excluir</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>

<!-- Modal de confirmação de exclusão -->
<div id=\"confirmacaoExclusao\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <p>Tem certeza de que deseja excluir esta empresa?</p>
        <form id=\"formExclusao\" method=\"post\" action=\"\">
            <input type=\"hidden\" name=\"confirmacao\" value=\"1\">
            <button type=\"submit\" class=\"btn btn-danger\">Excluir</button>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"fecharModalConfirmacao()\">Cancelar</button>
        </form>
    </div>
</div>

";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("controllers/modalExcluir.js"), "html", null, true);
        echo "\"></script>
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
        return array (  182 => 48,  172 => 47,  161 => 50,  159 => 47,  142 => 32,  132 => 28,  126 => 25,  121 => 23,  117 => 22,  114 => 21,  110 => 20,  95 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{titulo}}{% endblock %}

{% block body %}
<h1>{{titulo}}</h1>

<a href='{{ path('empresa_adicionar') }}'>+ Adicionar</a>

<!-- Tabela com empresas -->
<table class=\"table\">
    <thead>
        <tr>
            <td>#</td>
            <td>Nome Empresa</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
        {% for empresa in empresas %}
            <tr>
                <td>{{ empresa.id }}</td>
                <td>{{ empresa.nomeEmpresa }}</td>
                <td>
                    <a href=\"{{ path('empresa_editar', {id: empresa.id}) }}\">Editar</a>

                    <!-- Link para acionar a exclusão com a caixa de diálogo (modal) -->
                    <a href=\"#\" class=\"excluir-link\" onclick=\"exibirModalConfirmacao('{{ path('empresa_excluir', {'id': empresa.id}) }}')\">Excluir</a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>

<!-- Modal de confirmação de exclusão -->
<div id=\"confirmacaoExclusao\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <p>Tem certeza de que deseja excluir esta empresa?</p>
        <form id=\"formExclusao\" method=\"post\" action=\"\">
            <input type=\"hidden\" name=\"confirmacao\" value=\"1\">
            <button type=\"submit\" class=\"btn btn-danger\">Excluir</button>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"fecharModalConfirmacao()\">Cancelar</button>
        </form>
    </div>
</div>

{% block javascripts %}
    <script src=\"{{ asset('controllers/modalExcluir.js') }}\"></script>
{% endblock %}

{% endblock %}
", "cadastra_empresa/index.html.twig", "C:\\xampp\\htdocs\\teste_Vox\\quadroSocietario\\templates\\cadastra_empresa\\index.html.twig");
    }
}
