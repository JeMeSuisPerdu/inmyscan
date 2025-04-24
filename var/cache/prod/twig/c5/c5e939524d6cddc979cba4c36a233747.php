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

/* home/home.html.twig */
class __TwigTemplate_1d1251889a859c3bc4653c2a93515d88 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "InMyScan | Animes, Films et scans gratuits en VOSTFR - Sans limites";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
    <div class=\"home-container-box\" itemscope itemtype=\"https://schema.org/WebPage\">
        <meta itemprop=\"name\" content=\"InMyScan\">
        <meta itemprop=\"description\" content=\"Regardez des animes, films et lisez des scans gratuitement en VOSTFR. Explorez notre catalogue complet sans limites.\">
        <meta itemprop=\"inLanguage\" content=\"fr-FR\">
      
<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"WebSite\",
  \"name\": \"InMyScan\",
  \"url\": \"https://inmyscan.com\",
  \"potentialAction\": {
    \"@type\": \"SearchAction\",
    \"target\": {
      \"@type\": \"EntryPoint\",
      \"urlTemplate\": \"https://inmyscan.com/search_manga?query={query}\"
    },
    \"query-input\": \"required name=query\"
  }
}
</script>
   ";
        // line 53
        yield "        </div>
";
        // line 68
        yield "
<div class=\"main-anime-container\">
    <h1 style=\"display: flex; justify-content: center;\">Derniers Scans / Animes Sortis</h1>
    <div class=\"scan-box\">
        <div class=\"last-scan-list\">
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recentScans"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["scan"]) {
            // line 74
            yield "                <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                    <div class=\"scan-item\">
                        ";
            // line 76
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "getMangaId", [], "method", false, false, false, 76))) {
                // line 77
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "getMangaId", [], "method", false, false, false, 77)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "getId", [], "method", false, false, false, 77)]), "html", null, true);
                yield "\" aria-label=\"Voir ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "nom", [], "any", false, false, false, 77), "html", null, true);
                yield "\" itemprop=\"url\">
                                <img src=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "getMangaId", [], "method", false, false, false, 78)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "getPhoto", [], "method", false, false, false, 78))), "html", null, true);
                yield "\" alt=\"Couverture de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "nom", [], "any", false, false, false, 78), "html", null, true);
                yield "\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                            </a>
                        ";
            } else {
                // line 81
                yield "                            <a href=\"#\" aria-label=\"Couverture non disponible\" itemprop=\"url\">
                                <img src=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/path/to/default/cover.jpg"), "html", null, true);
                yield "\" alt=\"Couverture par défaut\" loading=\"lazy\" class=\"clickable-image\" style=\"width: 100px; height: auto;\">
                            </a>
                        ";
            }
            // line 85
            yield "                    </div>
                    <p itemprop=\"name\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "nom", [], "any", false, false, false, 86), "html", null, true);
            yield "</p>
                </article>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            yield "                <p>Aucun scan récent disponible.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['scan'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "        </div>
    </div>
</div>



        <div class=\"main-video-container\">
            <div class=\"video-container\">
                <h2 style=\"display: flex; justify-content: center;\">Halloween avant l'heure ça te tente ?</h2>
                <div class=\"anime-box\">
                    <div class=\"anime-list\">
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actionMangas"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 103
            yield "                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 105), "html", null, true);
            yield "\" itemprop=\"url\">
                                        <img src=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 106))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 106), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                    </a>
                                </div>
                                <p itemprop=\"name\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 109), "html", null, true);
            yield "</p>
                             </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            yield "                            <p>Aucun manga d'action trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['manga'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                    </div>
                </div>

                <h3 style=\"display: flex; justify-content: center;\">Une touche de romance, ça te dit, non ?</h3>
                <div class=\"anime-box\">
                    <div class=\"anime-list\">
                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["romanceMangas"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 121
            yield "                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 123), "html", null, true);
            yield "\" itemprop=\"url\">
                                        <img src=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 124))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 124), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                    </a>
                                </div>
                                <p itemprop=\"name\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 127), "html", null, true);
            yield "</p>
                             </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            yield "                            <p>Aucun manga trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['manga'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                    </div>
                </div>
            </div>
            <div class=\"main-anime-container\">
                <h3 style=\"display: flex; justify-content: center;\">L'aléatoire nous surprendra toujours...</h3>
                <div class=\"anime-box\">
                    <div class=\"anime-list\">
                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mangas"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 140
            yield "                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 142), "html", null, true);
            yield "\" itemprop=\"url\">
                                        <img src=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 143))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 143), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                    </a>
                                </div>
                                <p itemprop=\"name\">";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 146), "html", null, true);
            yield "</p>
                             </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 149
            yield "                            <p>Aucun manga trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['manga'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "                    </div>
                </div>
            </div>
        </div>
        
    ";
        // line 173
        yield "</div>

    ";
        // line 175
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "

    <script>
        // Script de redirection sur clic image
        document.querySelectorAll('.clickable-image').forEach(image => {
            image.addEventListener('click', function() {
                const lien = this.src;
                const parts = lien.split('/');
                const nomManga = parts[parts.length - 3]; 
                const chapter = 1;
                const page = 1;
                window.location.href = `manga/scan/\${encodeURIComponent(nomManga)}/\${chapter}/\${page}`;
            });
        });
    </script> 


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/home.html.twig";
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
        return array (  314 => 175,  310 => 173,  303 => 151,  296 => 149,  288 => 146,  280 => 143,  274 => 142,  270 => 140,  265 => 139,  256 => 132,  249 => 130,  241 => 127,  233 => 124,  227 => 123,  223 => 121,  218 => 120,  210 => 114,  203 => 112,  195 => 109,  187 => 106,  181 => 105,  177 => 103,  172 => 102,  159 => 91,  152 => 89,  144 => 86,  141 => 85,  135 => 82,  132 => 81,  124 => 78,  117 => 77,  115 => 76,  111 => 74,  106 => 73,  99 => 68,  96 => 53,  70 => 4,  63 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/home.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\home\\home.html.twig");
    }
}
