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
class __TwigTemplate_b0b83c467cdbeef0a47e613ced8300a8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "manga/profile.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield " | Animes & scans gratuits sur InMyScan";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    <meta name=\"description\" content=\"Découvrez le profil du manga ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield ". Lisez la description, consultez les rôles et explorez les saisons et scans disponibles.\">
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
    <main class=\"profile-anime-section\" itemscope itemtype=\"http://schema.org/Movie\">
        <h1 itemprop=\"name\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "</h1>
        
        <div class=\"image-profil-container\" style=\"height: 350px; margin: 0 auto;\">
            <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "photo", [], "any", false, false, false, 16))), "html", null, true);
        yield "\" 
                 alt=\"Couverture de ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 17), "html", null, true);
        yield "\" 
                 class=\"clickable-image\" 
                 style=\"border: 1px solid #574e92; height: 100%; width: 100%; object-fit: cover;\" 
                 itemprop=\"image\">
        </div>

        <section class=\"main-profile-container\">
            <button id=\"add-to-favorites\" class=\"favbtn add-to-favorites\" aria-label=\"Ajouter ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 24), "html", null, true);
        yield " aux favoris\">Ajouter aux Favoris</button>

            <p itemprop=\"description\" style=\"background:none;\">
                ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "description", [], "any", false, false, false, 27)) {
            // line 28
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "description", [], "any", false, false, false, 28), "html", null, true);
            yield "
                ";
        } else {
            // line 30
            yield "                    <span>La description pour ce scan / anime n'est pas encore disponible... On la mettra peut-être un jour, qui sait ?</span>
                ";
        }
        // line 32
        yield "            </p>

            <section class=\"profile-manga-roles\" itemprop=\"character\" itemscope itemtype=\"http://schema.org/Person\">
                <h2 style=\"main-profile-title\">Rôles</h2>
                <ul>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 38
            yield "                        <li><strong style=\"font-weight: normal;\" itemprop=\"jobTitle\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</strong></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                </ul>
            </section>

            ";
        // line 43
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["saisons"] ?? null))) {
            // line 44
            yield "                <h2 style=\"main-profile-title\">Les saisons de l'anime</h2>
                <div class=\"saisons-container\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["saisons"] ?? null));
            foreach ($context['_seq'] as $context["saison_numero"] => $context["episodes"]) {
                // line 47
                yield "                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h3>Saison ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["saison_numero"], "html", null, true);
                yield "</h3>
                                <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_anime", ["mangaId" => CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 50), "saison" => $context["saison_numero"]]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Voir les épisodes</a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['saison_numero'], $context['episodes'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                </div>
            ";
        }
        // line 56
        yield "
            ";
        // line 57
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["scans"] ?? null))) {
            // line 58
            yield "                <h2 style=\"main-profile-title\">Lire les scans</h2>
                <div class=\"saisons-container\">
                    <div class=\"button-container\">
                        <div class=\"card\">
                            <h3>Voir les scans</h3>
                            <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn\">Voir les scans</a>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 68
        yield "
            <p>L'auteur de <strong style=\"padding:0 15px\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 69), "html", null, true);
        yield "</strong> est : <span itemprop=\"author\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "author", [], "any", false, false, false, 69), "html", null, true);
        yield "</span></p>
        </section>
    </main>

    <style>
        .btn-transparent {
            background-color: rgba(255, 255, 255, 0.3)!important; /* Transparent avec un fond blanc */
            transition: background-color 0.3s ease; /* Animation de transition */
        }
        .add-to-favorites:hover {
            background-color: #5d56a4c7;
        }
        .favbtn {
            margin-top: 20px;
            border: none;
            background-color: #362f7ec7;
            color: white; /* Assurez-vous que le texte est visible */
            padding: 10px 20px; /* Ajoutez du padding pour un meilleur style */
            cursor: pointer; /* Change le curseur pour indiquer que c'est cliquable */
            border-radius: 5px; /* Arrondir les coins pour un meilleur style */
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Récupérer la liste des animes dans le localStorage
            let animeList = JSON.parse(localStorage.getItem('animes')) || [];
            let addToFavoritesBtn = document.getElementById('add-to-favorites');

            // Vérifier si l'anime est déjà dans les favoris
            let animeExists = animeList.some(anime => anime.id === ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 99), "html", null, true);
        yield ");
            if (animeExists) {
                addToFavoritesBtn.classList.add('btn-transparent');
            }

            addToFavoritesBtn.addEventListener('click', function() {
                animeExists = animeList.some(anime => anime.id === ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 105), "html", null, true);
        yield ");

                if (!animeExists) {
                    // Ajouter l'anime aux favoris
                    animeList.push({
                        id: ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 110), "html", null, true);
        yield ",
                        titre: '";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 111), "html", null, true);
        yield "'
                    });
                    this.classList.add('btn-transparent');
                } else {
                    // Retirer l'anime des favoris
                    animeList = animeList.filter(anime => anime.id !== ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 116), "html", null, true);
        yield ");
                    this.classList.remove('btn-transparent');
                }

                // Mettre à jour le localStorage
                localStorage.setItem('animes', JSON.stringify(animeList));
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
        return array (  275 => 116,  267 => 111,  263 => 110,  255 => 105,  246 => 99,  211 => 69,  208 => 68,  200 => 63,  193 => 58,  191 => 57,  188 => 56,  184 => 54,  174 => 50,  170 => 49,  166 => 47,  162 => 46,  158 => 44,  156 => 43,  151 => 40,  142 => 38,  138 => 37,  131 => 32,  127 => 30,  121 => 28,  119 => 27,  113 => 24,  103 => 17,  99 => 16,  93 => 13,  87 => 11,  80 => 10,  72 => 7,  65 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "manga/profile.html.twig", "/home/inmyscan.com/templates/manga/profile.html.twig");
    }
}
