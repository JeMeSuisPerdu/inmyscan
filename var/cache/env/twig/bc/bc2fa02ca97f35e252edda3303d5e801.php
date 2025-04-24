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

/* home/home.html.twig */
class __TwigTemplate_29b59d2453806f36b36c257437f108f6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil | Animes et scans gratuits et en VOSTFR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
    <div class=\"home-container-box\">
        <div class=\"header-section\">
            <div class=\"header-background\">
                <img style=\"width: 100%;height: 100%;object-fit: cover;\" src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/video/border1.gif"), "html", null, true);
        yield "\" alt=\"Bannière anime\">
                <div class=\"header-image\" aria-hidden=\"true\"></div>
                <div class=\"header-overlay\" aria-hidden=\"true\"></div>
            </div>
            <div class=\"quote-container\">
                <div class=\"header-content-wrapper\">
                    <div class=\"header-content\">
                        <form action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_manga");
        yield "\" class=\"search-form\" method=\"get\" role=\"search\">
                            <button class=\"search-button\" type=\"submit\" aria-label=\"Rechercher un scan\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
                                </svg>
                            </button>
                            <input autocomplete=\"off\" id=\"searchMangaDownload\" name=\"query\" class=\"search-input\" placeholder=\"Rechercher un manga\" required type=\"text\" aria-label=\"Rechercher un manga\">
                            <button class=\"reset-button\" type=\"reset\" aria-label=\"Réinitialiser la recherche\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18 18 6M6 6l12 12\" />
                                </svg>
                            </button>
                            <button id=\"searchButtonBar\" type=\"submit\">Rechercher</button>
                        </form>
                        <ul id=\"search-results\" class=\"search-results\" role=\"list\"></ul>
                    </div>
                </div>
            </div>
        </div>

    <div class=\"main-video-container\">
        <div class=\"video-container\">
            <h2 style=\"display: flex; justify-content: center;\">Halloween avant l'heure ça te tente ?</h2>
            <div class=\"anime-box\">
                <div class=\"anime-list\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actionMangas"]) || array_key_exists("actionMangas", $context) ? $context["actionMangas"] : (function () { throw new RuntimeError('Variable "actionMangas" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 43
            yield "                        <article class=\"anime-container\">
                            <div class=\"anime-item\">
                                <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 45), "html", null, true);
            yield "\">
                                    <img src=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 46))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 46), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\">
                                </a>
                            </div>
                            <h2>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 49), "html", null, true);
            yield "</h2>
                            <p>
                                ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["mangasWithRoles"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 51), [], "array", true, true, false, 51)) {
                // line 52
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mangasWithRoles"]) || array_key_exists("mangasWithRoles", $context) ? $context["mangasWithRoles"] : (function () { throw new RuntimeError('Variable "mangasWithRoles" does not exist.', 52, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 52), [], "array", false, false, false, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 53
                    yield "                                        <span style=\"display: none;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                yield "                                ";
            } else {
                // line 56
                yield "                                ";
            }
            // line 57
            yield "                            </p>
                        </article>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            yield "                        <p>Aucun manga d'action trouvé.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                </div>
            </div>

            <h3 style=\"display: flex; justify-content: center;\">Une touche de romance, ça te dit, non ?</h3>
            <div class=\"anime-box\">
                <div class=\"anime-list\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["romanceMangas"]) || array_key_exists("romanceMangas", $context) ? $context["romanceMangas"] : (function () { throw new RuntimeError('Variable "romanceMangas" does not exist.', 68, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 69
            yield "                        <article class=\"anime-container\">
                            <div class=\"anime-item\">
                                <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 71), "html", null, true);
            yield "\">
                                    <img src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 72))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 72), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\">
                                </a>
                            </div>
                            <h2>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 75), "html", null, true);
            yield "</h2>
                            <p>
                                ";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["mangasWithRoles"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 77), [], "array", true, true, false, 77)) {
                // line 78
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mangasWithRoles"]) || array_key_exists("mangasWithRoles", $context) ? $context["mangasWithRoles"] : (function () { throw new RuntimeError('Variable "mangasWithRoles" does not exist.', 78, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 78), [], "array", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 79
                    yield "                                        <span style=\"display: none;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                yield "                                ";
            } else {
                // line 82
                yield "                                ";
            }
            // line 83
            yield "                            </p>
                        </article>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            yield "                        <p>Aucun manga trouvé.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                </div>
            </div>
        </div>
        
    <div class=\"main-anime-container\">
        <h3 style=\"display: flex; justify-content: center;\">L'aléatoire nous surprendra toujours...</h3>
        <div class=\"anime-box\">
            <div class=\"anime-list\">
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mangas"]) || array_key_exists("mangas", $context) ? $context["mangas"] : (function () { throw new RuntimeError('Variable "mangas" does not exist.', 96, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 97
            yield "                    <article class=\"anime-container\">
                        <div class=\"anime-item\">
                            <a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 99), "html", null, true);
            yield "\">
                                <img src=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 100))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 100), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\">
                            </a>
                        </div>
                        <h2>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 103), "html", null, true);
            yield "</h2>
                        <p>
                            ";
            // line 105
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["mangasWithRoles"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 105), [], "array", true, true, false, 105)) {
                // line 106
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mangasWithRoles"]) || array_key_exists("mangasWithRoles", $context) ? $context["mangasWithRoles"] : (function () { throw new RuntimeError('Variable "mangasWithRoles" does not exist.', 106, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 106), [], "array", false, false, false, 106));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 107
                    yield "                                    <span style=\"display: none;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                yield "                            ";
            } else {
                // line 110
                yield "                            ";
            }
            // line 111
            yield "                        </p>
                    </article>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 114
            yield "                    <p>Aucun manga trouvé.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "            </div>
        </div>
    </div>
    </div>
    </div>
    <div class=\"scan-container-box\" style=\"width: 100%;background: #171717;\">
        <h3 style=\"display: flex; justify-content: center;padding: 20px;margin: 0;\">Lire un petit scan pour commencer ?</h3>
        <div class=\"scan-box\">
            <div class=\"scan-list\">
                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scans"]) || array_key_exists("scans", $context) ? $context["scans"] : (function () { throw new RuntimeError('Variable "scans" does not exist.', 125, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["scan"]) {
            // line 126
            yield "                    ";
            $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "lien", [], "any", false, false, false, 126), "/");
            // line 127
            yield "                    ";
            $context["nomManga"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 127, $this->source); })()), 3, [], "array", false, false, false, 127);
            // line 128
            yield "                    <article class=\"scan-container\">
                        <div class=\"scan-item\">
                            <img src=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "lien", [], "any", false, false, false, 130), "html", null, true);
            yield "\" alt=\"Scan de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "nom", [], "any", false, false, false, 130), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\" data-nom=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nomManga"]) || array_key_exists("nomManga", $context) ? $context["nomManga"] : (function () { throw new RuntimeError('Variable "nomManga" does not exist.', 130, $this->source); })()), "html", null, true);
            yield "\">
                        </div>
                        <h2>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "nom", [], "any", false, false, false, 132), "html", null, true);
            yield "</h2>
                        <p>
                            ";
            // line 134
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["scansWithRoles"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "nom", [], "any", false, false, false, 134), [], "array", true, true, false, 134)) {
                // line 135
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scansWithRoles"]) || array_key_exists("scansWithRoles", $context) ? $context["scansWithRoles"] : (function () { throw new RuntimeError('Variable "scansWithRoles" does not exist.', 135, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "nom", [], "any", false, false, false, 135), [], "array", false, false, false, 135));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 136
                    yield "                                    <span style=\"display: none;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                yield "                            ";
            } else {
                // line 139
                yield "                            ";
            }
            // line 140
            yield "                        </p>
                    </article>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 143
            yield "                    <p>Aucun scan trouvé.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "            </div>
        </div>
    </div>
</div>
    ";
        // line 149
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "

    
<script>
document.querySelectorAll('.clickable-image').forEach(image => {
    image.addEventListener('click', function() {
        // Récupère le lien de l'image
        const lien = this.src;
        
        // Découpe l'URL pour extraire le nom du manga
        const parts = lien.split('/');
        const nomManga = parts[parts.length - 3]; // Récupère le nom qui se trouve avant le chapitre et la page
        
        const chapter = 1; // Chapitre souhaité
        const page = 1; // Numéro de page souhaité
        window.location.href = `manga/scan/\${encodeURIComponent(nomManga)}/\${chapter}/\${page}`;
    });
});
</script> 

<script>
document.getElementById('searchMangaDownload').addEventListener('input', function() {
    const query = this.value;

    if (query.length < 1) {
        document.getElementById('search-results').innerHTML = '';
        return;
    }

    fetch(`/manga/search/ajax?query=\${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            const resultsContainer = document.getElementById('search-results');
            resultsContainer.innerHTML = '';

            data.forEach(manga => {
                const li = document.createElement('li');
                li.textContent = manga.titre; // Affiche le titre du manga
                li.onclick = () => {
                    window.location.href = `manga/\${manga.id}`; // Redirige vers la route manga_profile avec l'ID
                };
                resultsContainer.appendChild(li);
            });
        });
});
</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/home.html.twig";
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
        return array (  413 => 149,  407 => 145,  400 => 143,  393 => 140,  390 => 139,  387 => 138,  378 => 136,  373 => 135,  371 => 134,  366 => 132,  357 => 130,  353 => 128,  350 => 127,  347 => 126,  342 => 125,  331 => 116,  324 => 114,  317 => 111,  314 => 110,  311 => 109,  302 => 107,  297 => 106,  295 => 105,  290 => 103,  282 => 100,  276 => 99,  272 => 97,  267 => 96,  257 => 88,  250 => 86,  243 => 83,  240 => 82,  237 => 81,  228 => 79,  223 => 78,  221 => 77,  216 => 75,  208 => 72,  202 => 71,  198 => 69,  193 => 68,  185 => 62,  178 => 60,  171 => 57,  168 => 56,  165 => 55,  156 => 53,  151 => 52,  149 => 51,  144 => 49,  136 => 46,  130 => 45,  126 => 43,  121 => 42,  93 => 17,  83 => 10,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil | Animes et scans gratuits et en VOSTFR{% endblock %}

{% block body %}
    {{ navbar() }}
    <div class=\"home-container-box\">
        <div class=\"header-section\">
            <div class=\"header-background\">
                <img style=\"width: 100%;height: 100%;object-fit: cover;\" src=\"{{ asset('img/video/border1.gif') }}\" alt=\"Bannière anime\">
                <div class=\"header-image\" aria-hidden=\"true\"></div>
                <div class=\"header-overlay\" aria-hidden=\"true\"></div>
            </div>
            <div class=\"quote-container\">
                <div class=\"header-content-wrapper\">
                    <div class=\"header-content\">
                        <form action=\"{{ path('search_manga') }}\" class=\"search-form\" method=\"get\" role=\"search\">
                            <button class=\"search-button\" type=\"submit\" aria-label=\"Rechercher un scan\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
                                </svg>
                            </button>
                            <input autocomplete=\"off\" id=\"searchMangaDownload\" name=\"query\" class=\"search-input\" placeholder=\"Rechercher un manga\" required type=\"text\" aria-label=\"Rechercher un manga\">
                            <button class=\"reset-button\" type=\"reset\" aria-label=\"Réinitialiser la recherche\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18 18 6M6 6l12 12\" />
                                </svg>
                            </button>
                            <button id=\"searchButtonBar\" type=\"submit\">Rechercher</button>
                        </form>
                        <ul id=\"search-results\" class=\"search-results\" role=\"list\"></ul>
                    </div>
                </div>
            </div>
        </div>

    <div class=\"main-video-container\">
        <div class=\"video-container\">
            <h2 style=\"display: flex; justify-content: center;\">Halloween avant l'heure ça te tente ?</h2>
            <div class=\"anime-box\">
                <div class=\"anime-list\">
                    {% for manga in actionMangas %}
                        <article class=\"anime-container\">
                            <div class=\"anime-item\">
                                <a href=\"{{ path('manga_profile', { 'id': manga.id}) }}\" aria-label=\"Voir {{ manga.titre }}\">
                                    <img src=\"{{ asset('img/anime_pfp/' ~ manga.photo) }}\" alt=\"Couverture de {{ manga.titre }}\" loading=\"lazy\" class=\"clickable-image\">
                                </a>
                            </div>
                            <h2>{{ manga.titre }}</h2>
                            <p>
                                {% if mangasWithRoles[manga.titre] is defined %}
                                    {% for role in mangasWithRoles[manga.titre] %}
                                        <span style=\"display: none;\">{{ role }}</span>
                                    {% endfor %}
                                {% else %}
                                {% endif %}
                            </p>
                        </article>
                    {% else %}
                        <p>Aucun manga d'action trouvé.</p>
                    {% endfor %}
                </div>
            </div>

            <h3 style=\"display: flex; justify-content: center;\">Une touche de romance, ça te dit, non ?</h3>
            <div class=\"anime-box\">
                <div class=\"anime-list\">
                    {% for manga in romanceMangas %}
                        <article class=\"anime-container\">
                            <div class=\"anime-item\">
                                <a href=\"{{ path('manga_profile', { 'id': manga.id}) }}\" aria-label=\"Voir {{ manga.titre }}\">
                                    <img src=\"{{ asset('img/anime_pfp/' ~ manga.photo) }}\" alt=\"Couverture de {{ manga.titre }}\" loading=\"lazy\" class=\"clickable-image\">
                                </a>
                            </div>
                            <h2>{{ manga.titre }}</h2>
                            <p>
                                {% if mangasWithRoles[manga.titre] is defined %}
                                    {% for role in mangasWithRoles[manga.titre] %}
                                        <span style=\"display: none;\">{{ role }}</span>
                                    {% endfor %}
                                {% else %}
                                {% endif %}
                            </p>
                        </article>
                    {% else %}
                        <p>Aucun manga trouvé.</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        
    <div class=\"main-anime-container\">
        <h3 style=\"display: flex; justify-content: center;\">L'aléatoire nous surprendra toujours...</h3>
        <div class=\"anime-box\">
            <div class=\"anime-list\">
                {% for manga in mangas %}
                    <article class=\"anime-container\">
                        <div class=\"anime-item\">
                            <a href=\"{{ path('manga_profile', { 'id': manga.id}) }}\" aria-label=\"Voir {{ manga.titre }}\">
                                <img src=\"{{ asset('img/anime_pfp/' ~ manga.photo) }}\" alt=\"Couverture de {{ manga.titre }}\" loading=\"lazy\" class=\"clickable-image\">
                            </a>
                        </div>
                        <h2>{{ manga.titre }}</h2>
                        <p>
                            {% if mangasWithRoles[manga.titre] is defined %}
                                {% for role in mangasWithRoles[manga.titre] %}
                                    <span style=\"display: none;\">{{ role }}</span>
                                {% endfor %}
                            {% else %}
                            {% endif %}
                        </p>
                    </article>
                {% else %}
                    <p>Aucun manga trouvé.</p>
                {% endfor %}
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class=\"scan-container-box\" style=\"width: 100%;background: #171717;\">
        <h3 style=\"display: flex; justify-content: center;padding: 20px;margin: 0;\">Lire un petit scan pour commencer ?</h3>
        <div class=\"scan-box\">
            <div class=\"scan-list\">
                {% for scan in scans %}
                    {% set parts = scan.lien|split('/') %}
                    {% set nomManga = parts[3] %}
                    <article class=\"scan-container\">
                        <div class=\"scan-item\">
                            <img src=\"{{ scan.lien }}\" alt=\"Scan de {{ scan.nom }}\" loading=\"lazy\" class=\"clickable-image\" data-nom=\"{{ nomManga }}\">
                        </div>
                        <h2>{{ scan.nom }}</h2>
                        <p>
                            {% if scansWithRoles[scan.nom] is defined %}
                                {% for role in scansWithRoles[scan.nom] %}
                                    <span style=\"display: none;\">{{ role }}</span>
                                {% endfor %}
                            {% else %}
                            {% endif %}
                        </p>
                    </article>
                {% else %}
                    <p>Aucun scan trouvé.</p>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
    {{ footer() }}

    
<script>
document.querySelectorAll('.clickable-image').forEach(image => {
    image.addEventListener('click', function() {
        // Récupère le lien de l'image
        const lien = this.src;
        
        // Découpe l'URL pour extraire le nom du manga
        const parts = lien.split('/');
        const nomManga = parts[parts.length - 3]; // Récupère le nom qui se trouve avant le chapitre et la page
        
        const chapter = 1; // Chapitre souhaité
        const page = 1; // Numéro de page souhaité
        window.location.href = `manga/scan/\${encodeURIComponent(nomManga)}/\${chapter}/\${page}`;
    });
});
</script> 

<script>
document.getElementById('searchMangaDownload').addEventListener('input', function() {
    const query = this.value;

    if (query.length < 1) {
        document.getElementById('search-results').innerHTML = '';
        return;
    }

    fetch(`/manga/search/ajax?query=\${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            const resultsContainer = document.getElementById('search-results');
            resultsContainer.innerHTML = '';

            data.forEach(manga => {
                const li = document.createElement('li');
                li.textContent = manga.titre; // Affiche le titre du manga
                li.onclick = () => {
                    window.location.href = `manga/\${manga.id}`; // Redirige vers la route manga_profile avec l'ID
                };
                resultsContainer.appendChild(li);
            });
        });
});
</script>


{% endblock %}
", "home/home.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\home\\home.html.twig");
    }
}
