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

/* manga/films.html.twig */
class __TwigTemplate_879ea06b0a0b2555ad7b86fe2d619352 extends Template
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
            'meta_description' => [$this, 'block_meta_description'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga/films.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga/films.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manga/films.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield " | Animes & scans gratuits sur InMyScan";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        // line 7
        yield "      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\"/>

    <meta name=\"description\" content=\"Regardez le film ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield " en streaming VF/VOSTF [Gratuit] sur InMyScan\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<div class=\"main-manga-profile\">
    <div class=\"seriestucon\">
        <div class=\"seriestuheader\">
            <h1 class=\"entry-title\" itemprop=\"name\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"seriestucontent\">
            <div class=\"seriestucontl\">
                <div class=\"thumb\" itemprop=\"image\" itemscope=\"\" itemtype=\"https://schema.org/ImageObject\"> 
                    <img width=\"1444\" height=\"2048\" src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/film_img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 22, $this->source); })()), "photo", [], "any", false, false, false, 22))), "html", null, true);
        yield "\" alt=\"Couverture de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "html", null, true);
        yield "\"  class=\"attachment- size- wp-post-image\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "html", null, true);
        yield "\" itemprop=\"image\" decoding=\"async\" fetchpriority=\"high\">
                </div>
                <div data-id=\"5029\" class=\"bookmark\" id=\"add-to-favorites\">
                    <i class=\"far fa-bookmark\"  aria-hidden=\"true\"></i> Ajouter à votre liste 
                </div>
                <div class=\"bmc\"></div>
            </div>
            <div class=\"seriestucontentr\">
                <div class=\"seriestuhead\">
                    <div class=\"entry-content entry-content-single\" itemprop=\"description\">
                        ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32)) {
            // line 33
            yield "                            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                        ";
        } else {
            // line 35
            yield "                            <p>La description pour ce film n'est pas encore disponible... On la mettra peut-être un jour, qui sait ?</p>
                        ";
        }
        // line 37
        yield "                    </div>
                </div>
                <div class=\"seriestucont\">
                    <div class=\"seriestucontr\">
                        <table class=\"infotable\">
                            <tbody>
                                <tr>
                                    <td>Statut</td>
                                    ";
        // line 48
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 50
        yield "                                </tr>
                                <tr>
                                    <td>Type</td>
                                    ";
        // line 55
        yield "                                    ";
        // line 56
        yield "                                    <td>Film</td>
                                    ";
        // line 58
        yield "                                </tr>
                                <tr>
                                    <td>Année</td>
                                    ";
        // line 64
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 66
        yield "                                </tr>
                                <tr>
                                    <td>Auteur</td>
                                    <td>Inconnu</td>
                                </tr>
                                <tr>
                                    <td>Prépublication</td>
                                    ";
        // line 76
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 78
        yield "                                </tr>
                            </tbody>
                        </table>
                        <div class=\"seriestugenre\">
                            ";
        // line 83
        yield "                            <a href=\"#\" rel=\"tag\">Film</a>
                            <a href=\"#\" rel=\"tag\">Palpitant</a>
                            ";
        // line 86
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bixbox bxcl epcheck\">
        <div class=\"releases\">
            <h2>Voir : ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 95, $this->source); })()), "titre", [], "any", false, false, false, 95), "html", null, true);
        yield "</h2>
        </div>
        <div class=\"search-chapter\" style=\"display: none;\">
            <input id=\"searchchapter\" type=\"text\" placeholder=\"Rechercher un film |\" autocomplete=\"off\">
        </div>
        <div class=\"eplister\" id=\"chapterlist\">
            ";
        // line 101
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["lecteurLinks"]) || array_key_exists("lecteurLinks", $context) ? $context["lecteurLinks"] : (function () { throw new RuntimeError('Variable "lecteurLinks" does not exist.', 101, $this->source); })()))) {
            // line 102
            yield "            <ul>
                <li data-num=\"Film numero 1\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_film", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\">
                                <span class=\"chapternum\"> Regarder maintenant</span>
                                <span class=\"chapterdate\">Sortie en ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 108, $this->source); })()), "getAnneeSortie", [], "method", false, false, false, 108), "html", null, true);
            yield "</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            ";
        } else {
            // line 115
            yield "            <ul>
                <li data-num=\"Film numero 1\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"#\">
                                <span class=\"chapternum\">Le film est indisponible</span>
                                <span class=\"chapterdate\">R.I.P</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            ";
        }
        // line 128
        yield "        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer la liste des animes dans le localStorage
        let filmList = JSON.parse(localStorage.getItem('films')) || [];
        let addToFavoritesBtn = document.getElementById('add-to-favorites');
        // Vérifier si l'anime est déjà dans les favoris
        let filmExists = filmList.some(film => film.id === ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138), "html", null, true);
        yield ");
        if (filmExists) {
            addToFavoritesBtn.classList.add('btn-transparent');
        }
        addToFavoritesBtn.addEventListener('click', function() {
            filmExists = filmList.some(film => film.id === ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143), "html", null, true);
        yield ");

            if (!filmExists) {
                filmList.push({
                    id: ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147), "html", null, true);
        yield ",
                    titre: '";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 148, $this->source); })()), "titre", [], "any", false, false, false, 148), "html", null, true);
        yield "',
                    photo: '";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 149, $this->source); })()), "photo", [], "any", false, false, false, 149), "html", null, true);
        yield "',
                    type: 'film' 
                });
                this.classList.add('btn-transparent');

            } else {
                filmList = filmList.filter(film => film.id !== ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155), "html", null, true);
        yield ");
                this.classList.remove('btn-transparent');
            }
            localStorage.setItem('films', JSON.stringify(filmList));
        });
    });

</script>
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
        return "manga/films.html.twig";
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
        return array (  332 => 155,  323 => 149,  319 => 148,  315 => 147,  308 => 143,  300 => 138,  288 => 128,  273 => 115,  263 => 108,  258 => 106,  252 => 102,  250 => 101,  241 => 95,  230 => 86,  226 => 83,  220 => 78,  217 => 76,  208 => 66,  205 => 64,  200 => 58,  197 => 56,  195 => 55,  190 => 50,  187 => 48,  177 => 37,  173 => 35,  167 => 33,  165 => 32,  148 => 22,  140 => 17,  132 => 13,  119 => 12,  106 => 9,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profile/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ film.titre }} | Animes & scans gratuits sur InMyScan{% endblock %}

{% block meta_description %}
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\"/>

    <meta name=\"description\" content=\"Regardez le film {{ film.titre }} en streaming VF/VOSTF [Gratuit] sur InMyScan\">
{% endblock %}

{% block body %}
    {{ navbar() }}
<div class=\"main-manga-profile\">
    <div class=\"seriestucon\">
        <div class=\"seriestuheader\">
            <h1 class=\"entry-title\" itemprop=\"name\">{{ film.titre }}</h1>
        </div>
        <div class=\"seriestucontent\">
            <div class=\"seriestucontl\">
                <div class=\"thumb\" itemprop=\"image\" itemscope=\"\" itemtype=\"https://schema.org/ImageObject\"> 
                    <img width=\"1444\" height=\"2048\" src=\"{{ asset('img/film_img/' ~ film.photo) }}\" alt=\"Couverture de {{ film.titre }}\"  class=\"attachment- size- wp-post-image\" title=\"{{ film.titre }}\" itemprop=\"image\" decoding=\"async\" fetchpriority=\"high\">
                </div>
                <div data-id=\"5029\" class=\"bookmark\" id=\"add-to-favorites\">
                    <i class=\"far fa-bookmark\"  aria-hidden=\"true\"></i> Ajouter à votre liste 
                </div>
                <div class=\"bmc\"></div>
            </div>
            <div class=\"seriestucontentr\">
                <div class=\"seriestuhead\">
                    <div class=\"entry-content entry-content-single\" itemprop=\"description\">
                        {% if film.description %}
                            <p>{{film.description}}</p>
                        {% else %}
                            <p>La description pour ce film n'est pas encore disponible... On la mettra peut-être un jour, qui sait ?</p>
                        {% endif %}
                    </div>
                </div>
                <div class=\"seriestucont\">
                    <div class=\"seriestucontr\">
                        <table class=\"infotable\">
                            <tbody>
                                <tr>
                                    <td>Statut</td>
                                    {# {% if manga.statut %}
                                    <td>{{ manga.statut }}</td>
                                    {% else %} #}
                                    <td>Inconnu</td>
                                    {# {% endif %} #}
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    {# {% if manga.type %}
                                    <td>{{ manga.type }}</td> #}
                                    {# {% else %} #}
                                    <td>Film</td>
                                    {# {% endif %} #}
                                </tr>
                                <tr>
                                    <td>Année</td>
                                    {# {% if manga.date %}
                                    <td>{{ manga.date }}</td>
                                    {% else %} #}
                                    <td>Inconnu</td>
                                    {# {% endif %} #}
                                </tr>
                                <tr>
                                    <td>Auteur</td>
                                    <td>Inconnu</td>
                                </tr>
                                <tr>
                                    <td>Prépublication</td>
                                    {# {% if manga.studio %}
                                    <td>{{ manga.studio }}</td>
                                    {% else %} #}
                                    <td>Inconnu</td>
                                    {# {% endif %} #}
                                </tr>
                            </tbody>
                        </table>
                        <div class=\"seriestugenre\">
                            {# {% for role in roles %} #}
                            <a href=\"#\" rel=\"tag\">Film</a>
                            <a href=\"#\" rel=\"tag\">Palpitant</a>
                            {# {% endfor %} #}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bixbox bxcl epcheck\">
        <div class=\"releases\">
            <h2>Voir : {{film.titre}}</h2>
        </div>
        <div class=\"search-chapter\" style=\"display: none;\">
            <input id=\"searchchapter\" type=\"text\" placeholder=\"Rechercher un film |\" autocomplete=\"off\">
        </div>
        <div class=\"eplister\" id=\"chapterlist\">
            {% if lecteurLinks is not empty %}
            <ul>
                <li data-num=\"Film numero 1\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"{{ path('voir_film', {'id': film.id}) }}\">
                                <span class=\"chapternum\"> Regarder maintenant</span>
                                <span class=\"chapterdate\">Sortie en {{film.getAnneeSortie()}}</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            {% else %}
            <ul>
                <li data-num=\"Film numero 1\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"#\">
                                <span class=\"chapternum\">Le film est indisponible</span>
                                <span class=\"chapterdate\">R.I.P</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            {% endif %}
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer la liste des animes dans le localStorage
        let filmList = JSON.parse(localStorage.getItem('films')) || [];
        let addToFavoritesBtn = document.getElementById('add-to-favorites');
        // Vérifier si l'anime est déjà dans les favoris
        let filmExists = filmList.some(film => film.id === {{ film.id }});
        if (filmExists) {
            addToFavoritesBtn.classList.add('btn-transparent');
        }
        addToFavoritesBtn.addEventListener('click', function() {
            filmExists = filmList.some(film => film.id === {{ film.id }});

            if (!filmExists) {
                filmList.push({
                    id: {{ film.id }},
                    titre: '{{ film.titre }}',
                    photo: '{{ film.photo }}',
                    type: 'film' 
                });
                this.classList.add('btn-transparent');

            } else {
                filmList = filmList.filter(film => film.id !== {{ film.id }});
                this.classList.remove('btn-transparent');
            }
            localStorage.setItem('films', JSON.stringify(filmList));
        });
    });

</script>
{% endblock %}
", "manga/films.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\manga\\films.html.twig");
    }
}
