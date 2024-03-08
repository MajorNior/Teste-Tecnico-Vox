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

/* api_gerador_pdf/index.html.twig */
class __TwigTemplate_bcce35b677ebf4ebc220e03c02a36c3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api_gerador_pdf/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api_gerador_pdf/index.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Relatório PDF</title>
\t\t<style>
\t\t\tbody {
\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t\tfont-size: 14px;
\t\t\t\tcolor: #333;
\t\t\t}
\t\t\th1 {
\t\t\t\tcolor: #007bff;
\t\t\t}
\t\t\ttable {
\t\t\t\twidth: 100%;
\t\t\t\tborder-collapse: collapse;
\t\t\t\tmargin-top: 20px;
\t\t\t}
\t\t\tth,
\t\t\ttd {
\t\t\t\tborder: 1px solid #ddd;
\t\t\t\tpadding: 8px;
\t\t\t\ttext-align: left;
\t\t\t}
\t\t\t.empresas {
\t\t\t\twhite-space: nowrap;
\t\t\t\toverflow: hidden;
\t\t\t\ttext-overflow: ellipsis;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<h1>Relatório de Sócios e Empresas</h1>

\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nome do Sócio</th>
\t\t\t\t\t<th>Empresas que cada socio faz parte</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "socios", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["socio"]) {
            // line 44
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["socio"], "nomeSocio", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 47
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["socio"], "nomeEmpresa", [], "any", false, false, false, 47))) {
                // line 48
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["socio"], "nomeEmpresa", [], "any", false, false, false, 48));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nomeEmpresa", [], "any", false, false, false, 49), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 50
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 50)) {
                        echo ",
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\t\t\tSem empresa associada
\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t</tbody>
\t\t</table>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "api_gerador_pdf/index.html.twig";
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
        return array (  158 => 59,  150 => 56,  146 => 54,  143 => 53,  129 => 52,  124 => 50,  119 => 49,  101 => 48,  99 => 47,  94 => 45,  91 => 44,  87 => 43,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Relatório PDF</title>
\t\t<style>
\t\t\tbody {
\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t\tfont-size: 14px;
\t\t\t\tcolor: #333;
\t\t\t}
\t\t\th1 {
\t\t\t\tcolor: #007bff;
\t\t\t}
\t\t\ttable {
\t\t\t\twidth: 100%;
\t\t\t\tborder-collapse: collapse;
\t\t\t\tmargin-top: 20px;
\t\t\t}
\t\t\tth,
\t\t\ttd {
\t\t\t\tborder: 1px solid #ddd;
\t\t\t\tpadding: 8px;
\t\t\t\ttext-align: left;
\t\t\t}
\t\t\t.empresas {
\t\t\t\twhite-space: nowrap;
\t\t\t\toverflow: hidden;
\t\t\t\ttext-overflow: ellipsis;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<h1>Relatório de Sócios e Empresas</h1>

\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nome do Sócio</th>
\t\t\t\t\t<th>Empresas que cada socio faz parte</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for socio in data.socios %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ socio.nomeSocio }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if socio.nomeEmpresa is not empty %}
\t\t\t\t\t\t\t\t{% for empresa in socio.nomeEmpresa %}
\t\t\t\t\t\t\t\t\t{{ empresa.nomeEmpresa }}
\t\t\t\t\t\t\t\t\t{% if not loop.last %},
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tSem empresa associada
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</body>
</html>
", "api_gerador_pdf/index.html.twig", "C:\\xampp\\htdocs\\teste_Vox\\quadroSocietario\\templates\\api_gerador_pdf\\index.html.twig");
    }
}
