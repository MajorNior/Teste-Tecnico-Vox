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
class __TwigTemplate_eef5be488ebbfea420cce11525bef880 extends Template
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>

    <a href='";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("socio_adicionar");
        echo "'>+ Adicionar</a>

    <!-- Tabela com socios -->
    <table class=\"table\">
        <thead>
            <tr>
                <td>#</td>
                <td>Nome do Socio</td>
                <td>Empresas</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socios"]) || array_key_exists("socios", $context) ? $context["socios"] : (function () { throw new RuntimeError('Variable "socios" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["socio"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["socio"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["socio"], "nomeSocio", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 26
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["socio"], "nomeEmpresa", [], "any", false, false, false, 26))) {
                // line 27
                echo "                            <ul>
                                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["socio"], "nomeEmpresa", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                    // line 29
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nomeEmpresa", [], "any", false, false, false, 29), "html", null, true);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                            </ul>
                        ";
            } else {
                // line 33
                echo "                            Sem empresa associada
                        ";
            }
            // line 35
            echo "                    </td>
                    <td>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("socio_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["socio"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Editar</a>
                        <a href=\"#\" class=\"excluir-link\" onclick=\"exibirModalConfirmacao('";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("socio_excluir", ["id" => twig_get_attribute($this->env, $this->source, $context["socio"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "')\">Excluir</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <!-- Modal de confirmação de exclusão -->
    <div id=\"confirmacaoExclusao\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <p>Tem certeza de que deseja excluir este socio?</p>
            <form id=\"formExclusao\" method=\"post\" action=\"\">
                <input type=\"hidden\" name=\"confirmacao\" value=\"1\">
                <button type=\"submit\" class=\"btn btn-danger\">Excluir</button>
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"fecharModalConfirmacao()\">Cancelar</button>
            </form>
        </div>
    </div>

";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
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
        return array (  211 => 58,  201 => 57,  190 => 60,  188 => 57,  171 => 42,  161 => 38,  157 => 37,  153 => 35,  149 => 33,  145 => 31,  136 => 29,  132 => 28,  129 => 27,  127 => 26,  122 => 24,  118 => 23,  115 => 22,  111 => 21,  95 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ titulo }}{% endblock %}

{% block body %}
    <h1>{{ titulo }}</h1>

    <a href='{{ path('socio_adicionar') }}'>+ Adicionar</a>

    <!-- Tabela com socios -->
    <table class=\"table\">
        <thead>
            <tr>
                <td>#</td>
                <td>Nome do Socio</td>
                <td>Empresas</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            {% for socio in socios %}
                <tr>
                    <td>{{ socio.id }}</td>
                    <td>{{ socio.nomeSocio }}</td>
                    <td>
                        {% if socio.nomeEmpresa is not empty %}
                            <ul>
                                {% for empresa in socio.nomeEmpresa %}
                                    <li>{{ empresa.nomeEmpresa }}</li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            Sem empresa associada
                        {% endif %}
                    </td>
                    <td>
                        <a href=\"{{ path('socio_editar', {id: socio.id}) }}\">Editar</a>
                        <a href=\"#\" class=\"excluir-link\" onclick=\"exibirModalConfirmacao('{{ path('socio_excluir', {'id': socio.id}) }}')\">Excluir</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <!-- Modal de confirmação de exclusão -->
    <div id=\"confirmacaoExclusao\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <p>Tem certeza de que deseja excluir este socio?</p>
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
", "cadastro_socio/index.html.twig", "C:\\xampp\\htdocs\\teste_Vox\\quadroSocietario\\templates\\cadastro_socio\\index.html.twig");
    }
}
