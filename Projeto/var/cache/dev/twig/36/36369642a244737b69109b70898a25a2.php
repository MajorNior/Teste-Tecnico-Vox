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

/* login/index.html.twig */
class __TwigTemplate_be975a078deac0135978d1db8b2442fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
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

        echo "Login
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
\t<div>
\t\t";
        // line 12
        if ((isset($context["erro"]) || array_key_exists("erro", $context) ? $context["erro"] : (function () { throw new RuntimeError('Variable "erro" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["erro"]) || array_key_exists("erro", $context) ? $context["erro"] : (function () { throw new RuntimeError('Variable "erro" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["erro"]) || array_key_exists("erro", $context) ? $context["erro"] : (function () { throw new RuntimeError('Variable "erro" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 15
        echo "
\t\t<div class=\"login\">
\t\t\t<div class=\"login-triangle\"></div>

\t\t\t<h2 class=\"login-header\">Login</h2>

\t\t\t<form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\" class=\"login-container\">
\t\t\t\t<input type='hidden' name='_target_path' value='/'/>


\t\t\t\t<p><input type='text' id='username' name='_username' value='";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["Username"]) || array_key_exists("Username", $context) ? $context["Username"] : (function () { throw new RuntimeError('Variable "Username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "' placeholder=\"Usuario\"></p>


\t\t\t\t<p><input type='password' id='senha' name='_password' placeholder=\"Senha\"></p>

\t\t\t\t<p>
\t\t\t\t\t<button type='submit'>Entrar</button>
\t\t\t\t</p>

\t\t\t\t<a class=\"registra\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Faça seu Cadastro</a>
\t\t\t</form>
\t\t</div>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/login.css"), "html", null, true);
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
        return "login/index.html.twig";
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
        return array (  157 => 8,  147 => 7,  132 => 34,  120 => 25,  113 => 21,  105 => 15,  99 => 13,  97 => 12,  93 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login
{% endblock %}

{% block body %}
\t{% block stylesheets %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset('styles/login.css') }}\">
\t{% endblock %}

\t<div>
\t\t{%  if erro %}
\t\t\t<div>{{ erro.messageKey|trans(erro.messageData, 'security') }}</div>
\t\t{% endif %}

\t\t<div class=\"login\">
\t\t\t<div class=\"login-triangle\"></div>

\t\t\t<h2 class=\"login-header\">Login</h2>

\t\t\t<form action=\"{{ path('login') }}\" method=\"POST\" class=\"login-container\">
\t\t\t\t<input type='hidden' name='_target_path' value='/'/>


\t\t\t\t<p><input type='text' id='username' name='_username' value='{{Username}}' placeholder=\"Usuario\"></p>


\t\t\t\t<p><input type='password' id='senha' name='_password' placeholder=\"Senha\"></p>

\t\t\t\t<p>
\t\t\t\t\t<button type='submit'>Entrar</button>
\t\t\t\t</p>

\t\t\t\t<a class=\"registra\" href=\"{{ path('app_register') }}\">Faça seu Cadastro</a>
\t\t\t</form>
\t\t</div>

\t{% endblock %}
", "login/index.html.twig", "C:\\xampp\\htdocs\\teste_Vox\\quadroSocietario\\templates\\login\\index.html.twig");
    }
}
