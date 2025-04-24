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

/* films/voir_film.html.twig */
class __TwigTemplate_1096010d6264e4ec7c1505014caf6be9 extends Template
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
            'meta' => [$this, 'block_meta'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "films/voir_film.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "films/voir_film.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "films/voir_film.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " | Film VOSTFR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        yield "    <meta name=\"description\" content=\"Regardez ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield " en VOSTFR. Choisissez parmi différents lecteurs et profitez du film dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"film, ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield ", VOSTFR, regarder film, film complet\" />
    <meta name=\"author\" content=\"Votre Nom\" />
    <meta http-equiv=\"Content-Language\" content=\"fr\" />
    <link rel=\"canonical\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "

    <div class=\"film-lecture-container\">
        <h1>
            <a style=\"color: white;\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
        </h1>        
        <div class=\"film-lecture-box\">
            <div class=\"film-lecture-content-vid\">
                <div class=\"select-film-lecteur\" style=\"display:flex;\">
                    <select id=\"lecteur-select\" aria-label=\"Sélectionnez un lecteur\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lecteurLinks"]) || array_key_exists("lecteurLinks", $context) ? $context["lecteurLinks"] : (function () { throw new RuntimeError('Variable "lecteurLinks" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["lecteur"] => $context["lien"]) {
            // line 25
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lien"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lecteur"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['lecteur'], $context['lien'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "                    </select>
                </div>
            </div>
        </div>
        <div id=\"video-container\" style=\"margin-top: 20px;\">
            <iframe id=\"video-iframe\" src=\"\" frameborder=\"0\" height=\"700\" width=\"1200\" allowfullscreen style=\"display: none;margin-bottom: 40px;\"></iframe>
        </div>
        <div id=\"lecteur-message\" style=\"display: none; color: red; margin-top: 10px;\">
            Essayez de changer de lecteur...
        </div>
    </div>
    ";
        // line 38
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "

    ";
        // line 41
        yield "    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"Movie\",
        \"name\": \"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 45, $this->source); })()), "titre", [], "any", false, false, false, 45), "html", null, true);
        yield "\",
        \"description\": \"Regardez ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 46, $this->source); })()), "titre", [], "any", false, false, false, 46), "html", null, true);
        yield " en VF. Choisissez parmi différents lecteurs.\",
        \"thumbnailUrl\": \"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/film_pfp/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 47, $this->source); })()), "photo", [], "any", false, false, false, 47))), "html", null, true);
        yield "\",
        \"uploadDate\": \"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\",
        \"duration\": \"PT2H\",
        \"contentUrl\": \"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        yield "\"
    }
    </script>

    <script>
        var lecteurLinks = ";
        // line 55
        yield json_encode((isset($context["lecteurLinks"]) || array_key_exists("lecteurLinks", $context) ? $context["lecteurLinks"] : (function () { throw new RuntimeError('Variable "lecteurLinks" does not exist.', 55, $this->source); })()));
        yield "; // Récupérer les liens des lecteurs

        var lecteurSelect = document.getElementById('lecteur-select');
        var videoIframe = document.getElementById('video-iframe');
        var lecteurMessage = document.getElementById('lecteur-message'); // Référence au message d'avertissement

        // Fonction pour mettre à jour la vidéo dans l'iframe
        function updateVideo(link) {
            if (link) {
                videoIframe.src = link; // Met à jour l'attribut src de l'iframe avec le lien du lecteur
                videoIframe.style.display = 'block'; // Affiche l'iframe
                lecteurMessage.style.display = 'none'; // Masque le message d'erreur
            } else {
                videoIframe.style.display = 'none';
                lecteurMessage.style.display = 'block'; // Affiche le message d'erreur
            }
        }

        // Gestion du changement de sélection du lecteur
        lecteurSelect.addEventListener('change', function() {
            var selectedLink = this.value;
            updateVideo(selectedLink);
        });

        // Initialisation : sélectionner automatiquement le premier lecteur et afficher la vidéo
        document.addEventListener('DOMContentLoaded', function() {
            var firstLecteurLink = lecteurSelect.value; // Obtenir le lien du premier lecteur
            updateVideo(firstLecteurLink); // Charger la vidéo
        });
    </script>
    <style>

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
        return "films/voir_film.html.twig";
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
        return array (  222 => 55,  214 => 50,  209 => 48,  205 => 47,  201 => 46,  197 => 45,  191 => 41,  186 => 38,  173 => 27,  162 => 25,  158 => 24,  147 => 18,  139 => 14,  126 => 13,  113 => 10,  107 => 7,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ film.titre }} | Film VOSTFR{% endblock %}

{% block meta %}
    <meta name=\"description\" content=\"Regardez {{ film.titre }} en VOSTFR. Choisissez parmi différents lecteurs et profitez du film dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"film, {{ film.titre }}, VOSTFR, regarder film, film complet\" />
    <meta name=\"author\" content=\"Votre Nom\" />
    <meta http-equiv=\"Content-Language\" content=\"fr\" />
    <link rel=\"canonical\" href=\"{{ path('films_profile', { 'id': film.id }) }}\" />
{% endblock %}

{% block body %}
    {{ navbar() }}

    <div class=\"film-lecture-container\">
        <h1>
            <a style=\"color: white;\" href=\"{{ path('films_profile', { 'id': film.id }) }}\">{{ film.titre }}</a>
        </h1>        
        <div class=\"film-lecture-box\">
            <div class=\"film-lecture-content-vid\">
                <div class=\"select-film-lecteur\" style=\"display:flex;\">
                    <select id=\"lecteur-select\" aria-label=\"Sélectionnez un lecteur\">
                        {% for lecteur, lien in lecteurLinks %}
                            <option value=\"{{ lien }}\">{{ lecteur }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
        </div>
        <div id=\"video-container\" style=\"margin-top: 20px;\">
            <iframe id=\"video-iframe\" src=\"\" frameborder=\"0\" height=\"700\" width=\"1200\" allowfullscreen style=\"display: none;margin-bottom: 40px;\"></iframe>
        </div>
        <div id=\"lecteur-message\" style=\"display: none; color: red; margin-top: 10px;\">
            Essayez de changer de lecteur...
        </div>
    </div>
    {{ footer() }}

    {# Données structurées pour le film #}
    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"Movie\",
        \"name\": \"{{ film.titre }}\",
        \"description\": \"Regardez {{ film.titre }} en VF. Choisissez parmi différents lecteurs.\",
        \"thumbnailUrl\": \"{{ asset('img/film_pfp/' ~ film.photo) }}\",
        \"uploadDate\": \"{{ 'now'|date('Y-m-d') }}\",
        \"duration\": \"PT2H\",
        \"contentUrl\": \"{{ path('films_profile', { 'id': film.id }) }}\"
    }
    </script>

    <script>
        var lecteurLinks = {{ lecteurLinks | json_encode | raw }}; // Récupérer les liens des lecteurs

        var lecteurSelect = document.getElementById('lecteur-select');
        var videoIframe = document.getElementById('video-iframe');
        var lecteurMessage = document.getElementById('lecteur-message'); // Référence au message d'avertissement

        // Fonction pour mettre à jour la vidéo dans l'iframe
        function updateVideo(link) {
            if (link) {
                videoIframe.src = link; // Met à jour l'attribut src de l'iframe avec le lien du lecteur
                videoIframe.style.display = 'block'; // Affiche l'iframe
                lecteurMessage.style.display = 'none'; // Masque le message d'erreur
            } else {
                videoIframe.style.display = 'none';
                lecteurMessage.style.display = 'block'; // Affiche le message d'erreur
            }
        }

        // Gestion du changement de sélection du lecteur
        lecteurSelect.addEventListener('change', function() {
            var selectedLink = this.value;
            updateVideo(selectedLink);
        });

        // Initialisation : sélectionner automatiquement le premier lecteur et afficher la vidéo
        document.addEventListener('DOMContentLoaded', function() {
            var firstLecteurLink = lecteurSelect.value; // Obtenir le lien du premier lecteur
            updateVideo(firstLecteurLink); // Charger la vidéo
        });
    </script>
    <style>

    </style>
{% endblock %}
", "films/voir_film.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\films\\voir_film.html.twig");
    }
}
