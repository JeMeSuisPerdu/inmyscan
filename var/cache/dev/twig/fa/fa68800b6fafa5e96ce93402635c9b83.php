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

/* manga/series.html.twig */
class __TwigTemplate_62aaf62957039fdb29044f977dce2fc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga/series.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga/series.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manga/series.html.twig", 2);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield " | Série en streaming VF et VOSTF [Gratuit] sur InMyScan";
        
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
    <meta name=\"description\" content=\"Regardez la série ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        yield " en streaming VF/VOSTF [Gratuit] sur InMyScan\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<div class=\"main-manga-profile\">
    <div class=\"seriestucon\">
        <div class=\"seriestuheader\">
            <h1 class=\"entry-title\" itemprop=\"name\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"seriestucontent\">
            <div class=\"seriestucontl\">
                <div class=\"thumb\" itemprop=\"image\" itemscope=\"\" itemtype=\"https://schema.org/ImageObject\"> 
                    <img width=\"1444\" height=\"2048\" src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/serie_img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 21, $this->source); })()), "photo", [], "any", false, false, false, 21))), "html", null, true);
        yield "\" alt=\"Couverture de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), "html", null, true);
        yield "\"  class=\"attachment- size- wp-post-image\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), "html", null, true);
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
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31)) {
            // line 32
            yield "                            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                        ";
        } else {
            // line 34
            yield "                            <p>La description pour cette série n'est pas encore disponible... On la mettra peut-être un jour, qui sait ?</p>
                        ";
        }
        // line 36
        yield "                    </div>
                </div>
                <div class=\"seriestucont\">
                    <div class=\"seriestucontr\">
                        <table class=\"infotable\">
                            <tbody>
                                <tr>
                                    <td>Statut</td>
                                    ";
        // line 47
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 49
        yield "                                </tr>
                                <tr>
                                    <td>Type</td>
                                    ";
        // line 54
        yield "                                    ";
        // line 55
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 57
        yield "                                </tr>
                                <tr>
                                    <td>Année</td>
                                    ";
        // line 63
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 65
        yield "                                </tr>
                                <tr>
                                    <td>Auteur</td>
                                    ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 68, $this->source); })()), "author", [], "any", false, false, false, 68)) {
            // line 69
            yield "                                    <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 69, $this->source); })()), "author", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                                    ";
        } else {
            // line 71
            yield "                                    <td>Inconnu</td>
                                    ";
        }
        // line 73
        yield "                                </tr>
                                <tr>
                                    <td>Prépublication</td>
                                    ";
        // line 79
        yield "                                    <td>Inconnu</td>
                                    ";
        // line 81
        yield "                                </tr>
                            </tbody>
                        </table>
                        <div class=\"seriestugenre\">
                            ";
        // line 86
        yield "                            <a href=\"#\" rel=\"tag\">Recommandé</a>
                            <a href=\"#\" rel=\"tag\">A voir</a>
                            ";
        // line 89
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bixbox bxcl epcheck\">
        <div class=\"releases\">
            <h2>Voir : ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 98, $this->source); })()), "titre", [], "any", false, false, false, 98), "html", null, true);
        yield "</h2>
        </div>
        <div class=\"search-chapter\" style=\"display: none;\">
            <input id=\"searchchapter\" type=\"text\" placeholder=\"Rechercher un chapitre ou un volume | Exemple: 11 ou 317\" autocomplete=\"off\">
        </div>
        <div class=\"eplister\" id=\"chapterlist\">
            ";
        // line 104
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["saisons"]) || array_key_exists("saisons", $context) ? $context["saisons"] : (function () { throw new RuntimeError('Variable "saisons" does not exist.', 104, $this->source); })()))) {
            // line 105
            yield "            <ul>
            ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["saisons"]) || array_key_exists("saisons", $context) ? $context["saisons"] : (function () { throw new RuntimeError('Variable "saisons" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["saison_numero"] => $context["episodes"]) {
                // line 107
                yield "                <li data-num=\"Saison ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["saison_numero"], "html", null, true);
                yield "\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_series", ["serieId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110), "saison" => $context["saison_numero"]]), "html", null, true);
                yield "\">
                                <span class=\"chapternum\"> Saison ";
                // line 111
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
            // line 118
            yield "            </ul>
            ";
        }
        // line 120
        yield "        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer la liste des animes dans le localStorage
        let serieList = JSON.parse(localStorage.getItem('serie')) || [];
        let addToFavoritesBtn = document.getElementById('add-to-favorites');
        // Vérifier si l'anime est déjà dans les favoris
        let serieExists = serieList.some(serie => serie.id === ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130), "html", null, true);
        yield ");
        if (serieExists) {
            addToFavoritesBtn.classList.add('btn-transparent');
        }
        addToFavoritesBtn.addEventListener('click', function() {
            serieExists = serieList.some(serie => serie.id === ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135), "html", null, true);
        yield ");

            if (!serieExists) {
                serieList.push({
                    id: ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139), "html", null, true);
        yield ",
                    titre: '";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 140, $this->source); })()), "titre", [], "any", false, false, false, 140), "html", null, true);
        yield "',
                    photo: '";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 141, $this->source); })()), "photo", [], "any", false, false, false, 141), "html", null, true);
        yield "',
                    type: 'serie'
                });
                this.classList.add('btn-transparent');

            } else {
                serieList = serieList.filter(serie => serie.id !== ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147), "html", null, true);
        yield ");
                this.classList.remove('btn-transparent');
            }
            localStorage.setItem('serie', JSON.stringify(serieList));
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
        return "manga/series.html.twig";
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
        return array (  343 => 147,  334 => 141,  330 => 140,  326 => 139,  319 => 135,  311 => 130,  299 => 120,  295 => 118,  282 => 111,  278 => 110,  271 => 107,  267 => 106,  264 => 105,  262 => 104,  253 => 98,  242 => 89,  238 => 86,  232 => 81,  229 => 79,  224 => 73,  220 => 71,  214 => 69,  212 => 68,  207 => 65,  204 => 63,  199 => 57,  196 => 55,  194 => 54,  189 => 49,  186 => 47,  176 => 36,  172 => 34,  166 => 32,  164 => 31,  147 => 21,  139 => 16,  131 => 12,  118 => 11,  105 => 8,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profile/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ serie.titre }} | Série en streaming VF et VOSTF [Gratuit] sur InMyScan{% endblock %}

{% block meta_description %}
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\"/>
    <meta name=\"description\" content=\"Regardez la série {{ serie.titre }} en streaming VF/VOSTF [Gratuit] sur InMyScan\">
{% endblock %}

{% block body %}
    {{ navbar() }}
<div class=\"main-manga-profile\">
    <div class=\"seriestucon\">
        <div class=\"seriestuheader\">
            <h1 class=\"entry-title\" itemprop=\"name\">{{ serie.titre }}</h1>
        </div>
        <div class=\"seriestucontent\">
            <div class=\"seriestucontl\">
                <div class=\"thumb\" itemprop=\"image\" itemscope=\"\" itemtype=\"https://schema.org/ImageObject\"> 
                    <img width=\"1444\" height=\"2048\" src=\"{{ asset('img/serie_img/' ~ serie.photo) }}\" alt=\"Couverture de {{ serie.titre }}\"  class=\"attachment- size- wp-post-image\" title=\"{{ serie.titre }}\" itemprop=\"image\" decoding=\"async\" fetchpriority=\"high\">
                </div>
                <div data-id=\"5029\" class=\"bookmark\" id=\"add-to-favorites\">
                    <i class=\"far fa-bookmark\"  aria-hidden=\"true\"></i> Ajouter à votre liste 
                </div>
                <div class=\"bmc\"></div>
            </div>
            <div class=\"seriestucontentr\">
                <div class=\"seriestuhead\">
                    <div class=\"entry-content entry-content-single\" itemprop=\"description\">
                        {% if serie.description %}
                            <p>{{serie.description}}</p>
                        {% else %}
                            <p>La description pour cette série n'est pas encore disponible... On la mettra peut-être un jour, qui sait ?</p>
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
                                    {% if serie.author %}
                                    <td>{{ serie.author }}</td>
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
                            {# {% for role in roles %} #}
                            <a href=\"#\" rel=\"tag\">Recommandé</a>
                            <a href=\"#\" rel=\"tag\">A voir</a>
                            {# {% endfor %} #}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bixbox bxcl epcheck\">
        <div class=\"releases\">
            <h2>Voir : {{serie.titre}}</h2>
        </div>
        <div class=\"search-chapter\" style=\"display: none;\">
            <input id=\"searchchapter\" type=\"text\" placeholder=\"Rechercher un chapitre ou un volume | Exemple: 11 ou 317\" autocomplete=\"off\">
        </div>
        <div class=\"eplister\" id=\"chapterlist\">
            {% if saisons is not empty %}
            <ul>
            {% for saison_numero, episodes in saisons %}
                <li data-num=\"Saison {{saison_numero}}\">
                    <div class=\"chbox\">
                        <div class=\"eph-num\">
                            <a href=\"{{ path('voir_series', {'serieId': serie.id, 'saison': saison_numero}) }}\">
                                <span class=\"chapternum\"> Saison {{saison_numero}}</span>
                                <span class=\"chapterdate\">juin 4, 2024</span>
                            </a>
                        </div>
                    </div>
                </li>
            {% endfor %}
            </ul>
            {% endif %}
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer la liste des animes dans le localStorage
        let serieList = JSON.parse(localStorage.getItem('serie')) || [];
        let addToFavoritesBtn = document.getElementById('add-to-favorites');
        // Vérifier si l'anime est déjà dans les favoris
        let serieExists = serieList.some(serie => serie.id === {{ serie.id }});
        if (serieExists) {
            addToFavoritesBtn.classList.add('btn-transparent');
        }
        addToFavoritesBtn.addEventListener('click', function() {
            serieExists = serieList.some(serie => serie.id === {{ serie.id }});

            if (!serieExists) {
                serieList.push({
                    id: {{ serie.id }},
                    titre: '{{ serie.titre }}',
                    photo: '{{ serie.photo }}',
                    type: 'serie'
                });
                this.classList.add('btn-transparent');

            } else {
                serieList = serieList.filter(serie => serie.id !== {{ serie.id }});
                this.classList.remove('btn-transparent');
            }
            localStorage.setItem('serie', JSON.stringify(serieList));
        });
    });

</script>
{% endblock %}
", "manga/series.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\manga\\series.html.twig");
    }
}
