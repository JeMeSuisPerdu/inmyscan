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

/* manga/profile.html.twig */
class __TwigTemplate_48cc9a71eb8d2eaf203e7b3606c33942 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manga/profile.html.twig", 2);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield " | Animes & Scans gratuits sur InMyScan";
        
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
        yield "    <meta name=\"description\" content=\"Regarder/Lire ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield " en streaming VF/VOSTF [Gratuit] sur InMyScan.\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<div class=\"main-manga-profile\">
    <div class=\"seriestucon\">
        <div class=\"seriestuheader\">
            <h1 class=\"entry-title\" itemprop=\"name\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"seriestucontent\">
            <div class=\"seriestucontl\">
                <div class=\"thumb\" itemprop=\"image\" itemscope=\"\" itemtype=\"https://schema.org/ImageObject\"> 
                    <img width=\"1444\" height=\"2048\" src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 20, $this->source); })()), "photo", [], "any", false, false, false, 20))), "html", null, true);
        yield "\" alt=\"Couverture de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "html", null, true);
        yield "\"  class=\"attachment- size- wp-post-image\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "html", null, true);
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
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30)) {
            // line 31
            yield "                            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                        ";
        } else {
            // line 33
            yield "                            <p>La description pour ce scan / anime n'est pas encore disponible... On la mettra peut-être un jour, qui sait ?</p>
                        ";
        }
        // line 35
        yield "                    </div>
                </div>
                <div class=\"seriestucont\">
                    <div class=\"seriestucontr\">
                        <table class=\"infotable\">
                            <tbody>
                                <tr>
                                    <td>Statut</td>
                                    ";
        // line 46
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 48
        yield "                                </tr>
                                <tr>
                                    <td>Type</td>
                                    ";
        // line 53
        yield "                                    ";
        // line 54
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 56
        yield "                                </tr>
                                <tr>
                                    <td>Année</td>
                                    ";
        // line 62
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 64
        yield "                                </tr>
                                <tr>
                                    <td>Auteur</td>
                                    ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67)) {
            // line 68
            yield "                                    <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 68, $this->source); })()), "author", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                                    ";
        } else {
            // line 70
            yield "                                    <td>Inconnu</td>
                                    ";
        }
        // line 72
        yield "                                </tr>
                                <tr>
                                    <td>Prépublication</td>
                                    ";
        // line 78
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 80
        yield "                                </tr>
                            </tbody>
                        </table>
                        <div class=\"seriestugenre\">
                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 85
            yield "                            <a href=\"#\" rel=\"tag\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bixbox bxcl epcheck\">
        <div class=\"releases\">
            <h2>Voir : ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 96, $this->source); })()), "titre", [], "any", false, false, false, 96), "html", null, true);
        yield "</h2>
        </div>
        <div class=\"search-chapter\" style=\"display: none;\">
            <input id=\"searchchapter\" type=\"text\" placeholder=\"Rechercher un chapitre ou un volume | Exemple: 11 ou 317\" autocomplete=\"off\">
        </div>
        <div class=\"eplister\" id=\"chapterlist\">
            ";
        // line 102
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["saisons"]) || array_key_exists("saisons", $context) ? $context["saisons"] : (function () { throw new RuntimeError('Variable "saisons" does not exist.', 102, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["scans"]) || array_key_exists("scans", $context) ? $context["scans"] : (function () { throw new RuntimeError('Variable "scans" does not exist.', 102, $this->source); })())))) {
            // line 103
            yield "            <ul>
            ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["saisons"]) || array_key_exists("saisons", $context) ? $context["saisons"] : (function () { throw new RuntimeError('Variable "saisons" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["saison_numero"] => $context["episodes"]) {
                // line 105
                yield "                <li data-num=\"Saison ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["saison_numero"], "html", null, true);
                yield "\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_anime", ["mangaId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108), "saison" => $context["saison_numero"]]), "html", null, true);
                yield "\">
                                <span class=\"chapternum\"> Saison ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["saison_numero"], "html", null, true);
                yield "</span>
                                <span class=\"chapterdate\">juin 4, 2024</span>
                            </a>
                        </div>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['saison_numero'], $context['episodes'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "                ";
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["scans"]) || array_key_exists("scans", $context) ? $context["scans"] : (function () { throw new RuntimeError('Variable "scans" does not exist.', 116, $this->source); })()))) {
                // line 117
                yield "                <li data-num=\"Lire les scans\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
                yield "\">
                                <span class=\"chapternum\">Lire les chapitres</span>
                                <span class=\"chapterdate\">juin 4, 2024</span>
                            </a>
                        </div>
                    </div>
                </li>
                ";
            }
            // line 128
            yield "            </ul>
            ";
        }
        // line 130
        yield "        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer la liste des animes dans le localStorage
        let animeList = JSON.parse(localStorage.getItem('animes')) || [];
        let addToFavoritesBtn = document.getElementById('add-to-favorites');
        // Vérifier si l'anime est déjà dans les favoris
        let animeExists = animeList.some(anime => anime.id === ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140), "html", null, true);
        yield ");
        if (animeExists) {
            addToFavoritesBtn.classList.add('btn-transparent');
        }
        addToFavoritesBtn.addEventListener('click', function() {
            animeExists = animeList.some(anime => anime.id === ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145), "html", null, true);
        yield ");

            if (!animeExists) {
                animeList.push({
                    id: ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149), "html", null, true);
        yield ",
                    titre: '";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 150, $this->source); })()), "titre", [], "any", false, false, false, 150), "html", null, true);
        yield "'
                });
                this.classList.add('btn-transparent');

            } else {
                animeList = animeList.filter(anime => anime.id !== ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155), "html", null, true);
        yield ");
                this.classList.remove('btn-transparent');
            }
            localStorage.setItem('animes', JSON.stringify(animeList));
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
        return "manga/profile.html.twig";
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
        return array (  364 => 155,  356 => 150,  352 => 149,  345 => 145,  337 => 140,  325 => 130,  321 => 128,  310 => 120,  305 => 117,  302 => 116,  289 => 109,  285 => 108,  278 => 105,  274 => 104,  271 => 103,  269 => 102,  260 => 96,  249 => 87,  240 => 85,  236 => 84,  230 => 80,  227 => 78,  222 => 72,  218 => 70,  212 => 68,  210 => 67,  205 => 64,  202 => 62,  197 => 56,  194 => 54,  192 => 53,  187 => 48,  184 => 46,  174 => 35,  170 => 33,  164 => 31,  162 => 30,  145 => 20,  137 => 15,  129 => 11,  116 => 10,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profile/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ manga.titre }} | Animes & Scans gratuits sur InMyScan{% endblock %}

{% block meta_description %}
    <meta name=\"description\" content=\"Regarder/Lire {{ manga.titre }} en streaming VF/VOSTF [Gratuit] sur InMyScan.\">
{% endblock %}

{% block body %}
    {{ navbar() }}
<div class=\"main-manga-profile\">
    <div class=\"seriestucon\">
        <div class=\"seriestuheader\">
            <h1 class=\"entry-title\" itemprop=\"name\">{{ manga.titre }}</h1>
        </div>
        <div class=\"seriestucontent\">
            <div class=\"seriestucontl\">
                <div class=\"thumb\" itemprop=\"image\" itemscope=\"\" itemtype=\"https://schema.org/ImageObject\"> 
                    <img width=\"1444\" height=\"2048\" src=\"{{ asset('img/anime_pfp/' ~ manga.photo) }}\" alt=\"Couverture de {{ manga.titre }}\"  class=\"attachment- size- wp-post-image\" title=\"{{ manga.titre }}\" itemprop=\"image\" decoding=\"async\" fetchpriority=\"high\">
                </div>
                <div data-id=\"5029\" class=\"bookmark\" id=\"add-to-favorites\">
                    <i class=\"far fa-bookmark\"  aria-hidden=\"true\"></i> Ajouter à votre liste 
                </div>
                <div class=\"bmc\"></div>
            </div>
            <div class=\"seriestucontentr\">
                <div class=\"seriestuhead\">
                    <div class=\"entry-content entry-content-single\" itemprop=\"description\">
                        {% if manga.description %}
                            <p>{{manga.description}}</p>
                        {% else %}
                            <p>La description pour ce scan / anime n'est pas encore disponible... On la mettra peut-être un jour, qui sait ?</p>
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
                                    <td>Inconnu</td>
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
                                    {% if manga.description %}
                                    <td>{{ manga.author }}</td>
                                    {% else %}
                                    <td>Inconnu</td>
                                    {% endif %}
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
                            {% for role in roles %}
                            <a href=\"#\" rel=\"tag\">{{role}}</a>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bixbox bxcl epcheck\">
        <div class=\"releases\">
            <h2>Voir : {{manga.titre}}</h2>
        </div>
        <div class=\"search-chapter\" style=\"display: none;\">
            <input id=\"searchchapter\" type=\"text\" placeholder=\"Rechercher un chapitre ou un volume | Exemple: 11 ou 317\" autocomplete=\"off\">
        </div>
        <div class=\"eplister\" id=\"chapterlist\">
            {% if saisons is not empty or scans is not empty %}
            <ul>
            {% for saison_numero, episodes in saisons %}
                <li data-num=\"Saison {{saison_numero}}\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"{{ path('voir_anime', {'mangaId': manga.id, 'saison': saison_numero}) }}\">
                                <span class=\"chapternum\"> Saison {{saison_numero}}</span>
                                <span class=\"chapterdate\">juin 4, 2024</span>
                            </a>
                        </div>
                    </div>
                </li>
            {% endfor %}
                {% if scans is not empty %}
                <li data-num=\"Lire les scans\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"{{ path('manga_scans', {'id': manga.id}) }}\">
                                <span class=\"chapternum\">Lire les chapitres</span>
                                <span class=\"chapterdate\">juin 4, 2024</span>
                            </a>
                        </div>
                    </div>
                </li>
                {% endif %}
            </ul>
            {% endif %}
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer la liste des animes dans le localStorage
        let animeList = JSON.parse(localStorage.getItem('animes')) || [];
        let addToFavoritesBtn = document.getElementById('add-to-favorites');
        // Vérifier si l'anime est déjà dans les favoris
        let animeExists = animeList.some(anime => anime.id === {{ manga.id }});
        if (animeExists) {
            addToFavoritesBtn.classList.add('btn-transparent');
        }
        addToFavoritesBtn.addEventListener('click', function() {
            animeExists = animeList.some(anime => anime.id === {{ manga.id }});

            if (!animeExists) {
                animeList.push({
                    id: {{ manga.id }},
                    titre: '{{ manga.titre }}'
                });
                this.classList.add('btn-transparent');

            } else {
                animeList = animeList.filter(anime => anime.id !== {{ manga.id }});
                this.classList.remove('btn-transparent');
            }
            localStorage.setItem('animes', JSON.stringify(animeList));
        });
    });

</script>
{% endblock %}
", "manga/profile.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\manga\\profile.html.twig");
    }
}
