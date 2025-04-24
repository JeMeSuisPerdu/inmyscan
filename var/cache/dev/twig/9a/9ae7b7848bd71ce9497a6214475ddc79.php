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

/* anime/season_upload.html.twig */
class __TwigTemplate_3aad17ebe1d0ede4a0b30eb7af61f958 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anime/season_upload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anime/season_upload.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "anime/season_upload.html.twig", 1);
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

        yield "Uploader des Liens par Saison";
        
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
        yield "    <h1>Uploader des Liens pour une Saison</h1>

    <form action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anime_season_upload");
        yield "\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"manga_id\">ID du Manga:</label>
            <input type=\"text\" id=\"manga_id\" name=\"manga_id\" class=\"form-control\" required>
        </div>

        <div class=\"form-group\">
            <label for=\"saison_numero\">Numéro de la Saison:</label>
            <input type=\"number\" id=\"saison_numero\" name=\"saison_numero\" class=\"form-control\" required>
        </div>

        <div class=\"form-group\">
            <label for=\"is_film\">Est-ce un film ?</label>
            <input type=\"checkbox\" id=\"is_film\" name=\"is_film\" value=\"true\">
        </div>

        <h3>Ajouter les liens des lecteurs</h3>
        
        <div class=\"form-group\">
            <label for=\"lecteur1\">Liens pour Lecteur SIBNET (séparés par des virgules):</label>
            <textarea id=\"lecteur1\" name=\"lecteur1\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <div class=\"form-group\">
            <label for=\"lecteur2\">Liens pour Lecteur VIDMOLY (séparés par des virgules):</label>
            <textarea id=\"lecteur2\" name=\"lecteur2\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <div class=\"form-group\">
            <label for=\"lecteur3\">Liens pour Lecteur SENDVID (séparés par des virgules):</label>
            <textarea id=\"lecteur3\" name=\"lecteur3\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Uploader les Liens</button>
    </form>
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
        return "anime/season_upload.html.twig";
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
        return array (  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Uploader des Liens par Saison{% endblock %}

{% block body %}
    <h1>Uploader des Liens pour une Saison</h1>

    <form action=\"{{ path('anime_season_upload') }}\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"manga_id\">ID du Manga:</label>
            <input type=\"text\" id=\"manga_id\" name=\"manga_id\" class=\"form-control\" required>
        </div>

        <div class=\"form-group\">
            <label for=\"saison_numero\">Numéro de la Saison:</label>
            <input type=\"number\" id=\"saison_numero\" name=\"saison_numero\" class=\"form-control\" required>
        </div>

        <div class=\"form-group\">
            <label for=\"is_film\">Est-ce un film ?</label>
            <input type=\"checkbox\" id=\"is_film\" name=\"is_film\" value=\"true\">
        </div>

        <h3>Ajouter les liens des lecteurs</h3>
        
        <div class=\"form-group\">
            <label for=\"lecteur1\">Liens pour Lecteur SIBNET (séparés par des virgules):</label>
            <textarea id=\"lecteur1\" name=\"lecteur1\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <div class=\"form-group\">
            <label for=\"lecteur2\">Liens pour Lecteur VIDMOLY (séparés par des virgules):</label>
            <textarea id=\"lecteur2\" name=\"lecteur2\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <div class=\"form-group\">
            <label for=\"lecteur3\">Liens pour Lecteur SENDVID (séparés par des virgules):</label>
            <textarea id=\"lecteur3\" name=\"lecteur3\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Uploader les Liens</button>
    </form>
{% endblock %}
", "anime/season_upload.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\anime\\season_upload.html.twig");
    }
}
