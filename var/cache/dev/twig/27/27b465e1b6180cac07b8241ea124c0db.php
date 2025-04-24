<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* films/catalogue.html.twig */
class __TwigTemplate_4e32acd5ad2c1d32477c71010ae4433f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "films/catalogue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "films/catalogue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "films/catalogue.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Catalogue des Films";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<div class=\"catalogue-container\">
    <h1>Catalogue des Films</h1>

    <div class=\"film-grid\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 12
            yield "            <a class=\"film-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            yield "\">
                <img src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/film_img/" . CoreExtension::getAttribute($this->env, $this->source, $context["film"], "photo", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "titre", [], "any", false, false, false, 13), "html", null, true);
            yield "\">
                <div class=\"film-info\">
                    <h2>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "titre", [], "any", false, false, false, 15), "html", null, true);
            yield "</h2>
                    <p>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["film"], "description", [], "any", false, false, false, 16), 0, 100) . "..."), "html", null, true);
            yield "</p>
                    <p><strong>Année :</strong> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "anneeSortie", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['film'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "    </div>

<div class=\"pagination\">
    ";
        // line 24
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 24, $this->source); })()) > 1)) {
            // line 25
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_catalogue", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 25, $this->source); })()) - 1)]), "html", null, true);
            yield "\" class=\"pagination-link\">← Précédent</a>
    ";
        } else {
            // line 27
            yield "        <span class=\"disabled\">← Précédent</span>
    ";
        }
        // line 29
        yield "
    ";
        // line 30
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 30, $this->source); })()) > 4)) {
            // line 31
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_catalogue", ["page" => 1]);
            yield "\" class=\"pagination-link\">1</a>
        <span>...</span>
    ";
        }
        // line 34
        yield "
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 35, $this->source); })()) - 2), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 35, $this->source); })()) + 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 36
            yield "        ";
            if ((($context["page"] > 0) && ($context["page"] <= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 36, $this->source); })())))) {
                // line 37
                yield "            ";
                if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 37, $this->source); })()))) {
                    // line 38
                    yield "                <span class=\"current-page\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
            ";
                } else {
                    // line 40
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_catalogue", ["page" => $context["page"]]), "html", null, true);
                    yield "\" class=\"pagination-link\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
            ";
                }
                // line 42
                yield "        ";
            }
            // line 43
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
    ";
        // line 45
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 45, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 45, $this->source); })()) - 3))) {
            // line 46
            yield "        <span>...</span>
        <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_catalogue", ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 47, $this->source); })())]), "html", null, true);
            yield "\" class=\"pagination-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "</a>
    ";
        }
        // line 49
        yield "
    ";
        // line 50
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 50, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 50, $this->source); })()))) {
            // line 51
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_catalogue", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 51, $this->source); })()) + 1)]), "html", null, true);
            yield "\" class=\"pagination-link\">Suivant →</a>
    ";
        } else {
            // line 53
            yield "        <span class=\"disabled\">Suivant →</span>
    ";
        }
        // line 55
        yield "</div>



<style>
    body {
        background-color: #121212;
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .catalogue-container {
        max-width: 1200px;
        margin: 0px auto;
        padding: 20px;
    }

    .film-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
    }

    .film-item {
        background-color: #1e1e1e;
        border: 1px solid #2a2a2a;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        text-decoration:none;
        color:white;
    }

    .film-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    .film-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .film-info {
        padding: 15px;
    }

    .film-info h2 {
        font-size: 1.2rem;
        margin:0;
        color: #ffa500;
    }

    .film-info p {
        font-size: 0.9rem;
        margin: 5px 0;
        text-align:left;
    }

    .pagination {
        margin: 20px 0;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .pagination a, .pagination span {
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        color: #ffffff;
        background-color: #333333;
        transition: background-color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #ffa500;
    }

    .pagination .current-page {
        background-color: #ffa500;
        pointer-events: none;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "films/catalogue.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  237 => 55,  233 => 53,  227 => 51,  225 => 50,  222 => 49,  215 => 47,  212 => 46,  210 => 45,  207 => 44,  201 => 43,  198 => 42,  190 => 40,  184 => 38,  181 => 37,  178 => 36,  174 => 35,  171 => 34,  164 => 31,  162 => 30,  159 => 29,  155 => 27,  149 => 25,  147 => 24,  142 => 21,  132 => 17,  128 => 16,  124 => 15,  117 => 13,  112 => 12,  108 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catalogue des Films{% endblock %}

{% block body %}
{{navbar()}}
<div class=\"catalogue-container\">
    <h1>Catalogue des Films</h1>

    <div class=\"film-grid\">
        {% for film in films %}
            <a class=\"film-item\" href=\"{{ path('films_profile', {'id': film.id}) }}\">
                <img src=\"{{ asset('img/film_img/' ~ film.photo) }}\" alt=\"{{ film.titre }}\">
                <div class=\"film-info\">
                    <h2>{{ film.titre }}</h2>
                    <p>{{ film.description|slice(0, 100) ~ '...' }}</p>
                    <p><strong>Année :</strong> {{ film.anneeSortie }}</p>
                </div>
            </a>
        {% endfor %}
    </div>

<div class=\"pagination\">
    {% if currentPage > 1 %}
        <a href=\"{{ path('films_catalogue', {'page': currentPage - 1}) }}\" class=\"pagination-link\">← Précédent</a>
    {% else %}
        <span class=\"disabled\">← Précédent</span>
    {% endif %}

    {% if currentPage > 4 %}
        <a href=\"{{ path('films_catalogue', {'page': 1}) }}\" class=\"pagination-link\">1</a>
        <span>...</span>
    {% endif %}

    {% for page in (currentPage - 2)..(currentPage + 2) %}
        {% if page > 0 and page <= totalPages %}
            {% if page == currentPage %}
                <span class=\"current-page\">{{ page }}</span>
            {% else %}
                <a href=\"{{ path('films_catalogue', {'page': page}) }}\" class=\"pagination-link\">{{ page }}</a>
            {% endif %}
        {% endif %}
    {% endfor %}

    {% if currentPage < totalPages - 3 %}
        <span>...</span>
        <a href=\"{{ path('films_catalogue', {'page': totalPages}) }}\" class=\"pagination-link\">{{ totalPages }}</a>
    {% endif %}

    {% if currentPage < totalPages %}
        <a href=\"{{ path('films_catalogue', {'page': currentPage + 1}) }}\" class=\"pagination-link\">Suivant →</a>
    {% else %}
        <span class=\"disabled\">Suivant →</span>
    {% endif %}
</div>



<style>
    body {
        background-color: #121212;
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .catalogue-container {
        max-width: 1200px;
        margin: 0px auto;
        padding: 20px;
    }

    .film-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
    }

    .film-item {
        background-color: #1e1e1e;
        border: 1px solid #2a2a2a;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        text-decoration:none;
        color:white;
    }

    .film-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    .film-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .film-info {
        padding: 15px;
    }

    .film-info h2 {
        font-size: 1.2rem;
        margin:0;
        color: #ffa500;
    }

    .film-info p {
        font-size: 0.9rem;
        margin: 5px 0;
        text-align:left;
    }

    .pagination {
        margin: 20px 0;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .pagination a, .pagination span {
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        color: #ffffff;
        background-color: #333333;
        transition: background-color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #ffa500;
    }

    .pagination .current-page {
        background-color: #ffa500;
        pointer-events: none;
    }
</style>
{% endblock %}
", "films/catalogue.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\films\\catalogue.html.twig");
    }
}
