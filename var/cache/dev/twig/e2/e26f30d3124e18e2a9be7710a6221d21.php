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

/* navbar/navbar.html.twig */
class __TwigTemplate_baac00eafd1815d6e033441d73aecea8 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        // line 2
        yield "<div class=\"th headerni\">
    <div class=\"centernav bound\">
        <div class=\"menu-icon\" id=\"menuIcon\" onclick=\"toggleSidebar()\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"45\" height=\"45\" fill=\"white\">
                <path d=\"M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z\"/>
            </svg>
        </div>
        <header role=\"banner\" itemscope=\"\" itemtype=\"http://schema.org/WPHeader\">
            <div class=\"site-branding logox\">
                <span class=\"logos\">
                    <a title=\"InMyScan - Anime & Manga\" itemprop=\"url\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo.png"), "html", null, true);
        yield "\" width=\"50\" height=\"50\" alt=\"InMyScan - Anime & Manga\">
                        <span class=\"logo-inmy\">INMY</span>
                        <span class=\"logo-scan\">SCAN</span>
                    </a>
                </span>
            </div>
        </header>
        
        <!-- Navigation Menu -->
        <nav id=\"main-menu\" class=\"mm\">
            <span itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\" role=\"navigation\">
                <ul id=\"menu-menu\" class=\"menu\">
                    <li class=\"menu-item\"><a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("serie_catalogue");
        yield "\"><i class=\"fas fa-tv\"></i><span>Séries</span></a></li>
                    <li class=\"menu-item\"><a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_catalogue");
        yield "\"><i class=\"fas fa-film\"></i><span>Films</span></a></li>
                    <li class=\"menu-item\"><a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\"><i class=\"fas fa-book\"></i><span>Animes</span></a></li>
                    <li class=\"menu-item\"><a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\"><i class=\"fas fa-user\"></i><span>Ma Liste</span></a></li>
                    ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            yield "                        <div class=\"dropdown\" style=\"display: inline-block; position: relative;\">
                            <button onclick=\"toggleDropdown()\" style=\"background-color: transparent; border: none; color: white; font-weight: bold; margin-left: 20px; cursor: pointer;\">ADMIN ▼</button>
                            <div class=\"dropdown-content\" id=\"adminDropdown\" style=\"display: none; position: absolute; background-color: #f9f9f9; box-shadow: 0 8px 16px rgba(0,0,0,0.2); z-index: 1000;width: 200px;\">
                                <a style=\"color: black; padding: 10px 20px; text-decoration: none; display: block;\" href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_create_form");
            yield "\">Créer Manga</a>
                                <a style=\"color: black; padding: 10px 20px; text-decoration: none; display: block;\" href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_upload_form");
            yield "\">Publier Manga</a>
                                <a href=\"";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"color: 000; font-weight: bold; margin-left: 20px; cursor: pointer;\">Déconnexion</a>
                            </div>
                        </div>
                    ";
        }
        // line 39
        yield "                </ul>
            </span>
        </nav>

        <!-- Menu caché par défaut -->
    <div class=\"sidebar\" id=\"sidebarMenu\">
        <div class=\"close-icon\" onclick=\"toggleSidebar()\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" width=\"30\" height=\"30\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
            </svg>
        </div>
        <ul>
            <li>
                <a class=\"menu-logo-site\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    <span class=\"logo-text\">
                        <span class=\"logo-inmy\">InMy</span><span class=\"logo-scan\">Scan</span>
                    </span>
                </a>
            </li>
            <li><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"color: white; font-weight: bold;\">ACCUEIL</a></li>
            <li><a style=\"color: white; font-weight: bold;\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\">ANIMES</a></li>
            <li><a style=\"color: white; font-weight: bold;\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("serie_catalogue");
        yield "\">SERIES</a></li>
            <li><a style=\"color: white; font-weight: bold;\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_catalogue");
        yield "\">FILMS</a></li>
            <li><a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\" style=\"color: white; font-weight: bold;\">MA LISTE</a></li>
        </ul>
    </div>

        <!-- Search Form -->
        <div class=\"searchx minmb\">
            <form action=\"https://inmyscan.com/\" id=\"form\" method=\"get\" itemprop=\"potentialAction\" itemscope=\"\" itemtype=\"http://schema.org/SearchAction\">
                <meta itemprop=\"target\" content=\"https://inmyscan.com/?s={query}\">
                <input id=\"s\" itemprop=\"query-input\" class=\"search-live\" type=\"text\" placeholder=\"Recherche\" name=\"s\" autocomplete=\"off\">
                ";
        // line 77
        yield "            </form>
        </div>
        <div id=\"live-search_sb\" class=\"live-search_sb\" style=\"position: absolute; width: 350px; z-index: 9999;right: 39px;top: 56px;\">
            <div class=\"live-search_sb_cont\">
                <div class=\"live-search_sb_top\"></div>
                <div id=\"live-search_results\" style=\"width: 100%;\">
                    <div id=\"live-search_val\">
                        <ul class=\"live-search_main\">
                            <li class=\"live-search_header\">Search</li>
                            <li>
                                <div class=\"live-search_result_container\">
                                    <ul>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id=\"live-search_more\"></div>
                </div>
                <div class=\"live-search_sb_bottom\"></div>
            </div>
        </div>
    </div>
</div>

<style>

    /* Barre de navigation */
    .headerni {
        background-color: #403774;
        color: white;
    }

    .centernav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
    }

    /* Logo */
    .site-branding {
        display: flex;
        align-items: center;
    }

    .site-branding .logos a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: white;
    }

    .site-branding .logos img {
        margin-right: 10px;
    }

    .site-branding .hdl {
        font-size: 1.5rem;
        font-weight: bold;
    }

    /* Menu de navigation */
    .mm {
        display: flex;
        justify-content: center;
        flex-grow: 1;
    }

    .menu {
        list-style: none;
        display: flex;
        gap: 15px;
    }

    .menu-item a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    .menu-item i {
        margin-right: 5px;
    }

    .menu-item a:hover {
        color: #ffde9b;
    }

    /* Barre de recherche */
    .searchx {
        display: flex;
        align-items: center;
        position: relative;
        max-width: 400px;
        width: 100%;
        background-color: #f9f9f9;
        border-radius: 25px;
        border: 1px solid #ccc;
    }

    .searchx input[type=\"text\"] {
        flex: 1;
        padding: 12px;
        border: none;
        outline: none;
        font-size: 14px;
        border-radius: 25px;
        background: transparent;
    }

    .searchx button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 8px 12px;
        color: #333;
        font-size: 18px;
    }

    .searchx button:hover {
        color: #ff6600;
    }

    /* Icône de fermeture pour mobile */
    .srcmob {
        display: none;
    }

    .srcmob i {
        font-size: 20px;
        color: white;
    }
    .logo-inmy {
        color: #ffde9b; 
        
    }
    .logo-inmy, .logo-scan{
        text-decoration: none;
        font-family: revert;
        font-weight: bolder;
        font-size: 25px;
        align-items: center;
        display: flex;
        font-style: italic;
        text-transform: uppercase;
    }
    .logo-scan {
        color: white; 
    }
    .logos{
        margin: 0 50px;
    }
    /* Apparence mobile */
    @media (max-width: 768px) {
        .menu {
            flex-direction: column;
            align-items: flex-start;
        }

        .menu-item a {
            padding: 10px 0;
        }

        .searchx {
            width: 100%;
            margin-top: 10px;
        }

        .srcmob {
            display: block;
        }
    }
    /* Conteneur des résultats de recherche */
    #live-search_sb {
    background: #000000a1;
    border: 1px solid #1c1c1c;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    display: none;
    backdrop-filter: blur(30px);
    }

    /* Contenu des résultats */
    .live-search_sb_cont {
        padding: 10px;
        max-height: 300px;
        overflow-y: auto;
    }

    /* Résultats individuels */
    .live-search_main {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .live-search_item {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .live-search_item:hover {
        background-color: #f5f5f5;
    }

    /* Image miniature */
    .live-search_item .post-thumbnail img {
        border-radius: 4px;
        margin-right: 10px;
        width: 50px;
        height: 75px;
        object-fit: cover;
    }

    /* Contenu texte des résultats */
    .live-search_item .over {
        flex: 1;
    }

    .live-search_item .autotitle {
        font-size: 14px;
        font-weight: bold;
        color: #787777;
    }

    .live-search_item .post-meta {
        font-size: 12px;
        color: #666;
    }

    .live-search_item span {
        display: block;
    }

    /* Voir tous les résultats */
    .live-search_more a {
        display: block;
        text-align: center;
        padding: 10px;
        color: #007BFF;
        text-decoration: none;
        border-top: 1px solid #eee;
    }

    .live-search_more a:hover {
        background-color: #f5f5f5;
    }
    .ancre-search-info{
        display:flex;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('s'); // Champ de recherche
        const resultsContainer = document.getElementById('live-search_sb'); // Conteneur des résultats
        const resultsList = document.getElementById('live-search_results'); // Liste des résultats

        // Ajouter un événement sur l'input
        searchInput.addEventListener('input', function () {
            const query = this.value.trim();

            if (query.length < 1) {
                resultsContainer.style.display = 'none'; // Masquer les résultats si le champ est vide
                resultsList.innerHTML = ''; // Vider les résultats existants
                return;
            }

            // Effectuer la recherche via AJAX
            fetch(`/manga/search/ajax?query=\${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    resultsList.innerHTML = ''; // Vider les résultats existants

                    if (data.length === 0) {
                        // Aucun résultat trouvé
                        const noResults = document.createElement('div');
                        noResults.textContent = 'Aucun résultat trouvé.';
                        noResults.style.padding = '10px';
                        noResults.style.color = '#666';
                        resultsList.appendChild(noResults);
                    } else {
                        // Afficher les résultats
                        data.forEach(item => {
                            const li = document.createElement('li');
                            li.className = 'live-search_item';

                            const link = document.createElement('a');
                            link.className='ancre-search-info';
                            link.onclick = () => {
                                // Redirige vers l'URL appropriée selon le type
                                if (item.type === 'manga') {
                                    window.location.href = `/manga/\${item.id}`;
                                } else if (item.type === 'film') {
                                    window.location.href = `/film/id/\${item.id}`;
                                } else if (item.type === 'serie') {
                                    window.location.href = `/series/\${item.id}`;
                                }
                            };

                            // Gérer les chemins d'images selon le type
                            let imagePath = 'img/default-thumbnail.jpg'; // Chemin par défaut si pas d'image
                            if (item.type === 'manga') {
                                imagePath = `/img/anime_pfp/\${item.photo}`;  // Dossier manga
                            } else if (item.type === 'film') {
                                imagePath = `/img/film_img/\${item.photo}`;  // Dossier film
                            } else if (item.type === 'serie') {
                                imagePath = `/img/serie_img/\${item.photo}`;  // Dossier serie
                            }

                            link.innerHTML = `
                                <div class=\"post-thumbnail\">
                                    <img src=\"\${imagePath}\" alt=\"\${item.titre}\">
                                </div>
                                <div class=\"over\">
                                    <div class=\"autotitle\">\${item.titre}</div>
                                    <span class=\"post-meta\">\${item.meta || 'Aucune description'}</span>
                                </div>
                            `;
                            li.appendChild(link);

                            resultsList.appendChild(li);
                        });
                    }

                    resultsContainer.style.display = 'block'; // Afficher les résultats
                })
                .catch(error => {
                    console.error('Erreur lors de la recherche :', error);
                });
        });

        // Masquer les résultats si on clique à l'extérieur
        document.addEventListener('click', function (event) {
            if (!resultsContainer.contains(event.target) && event.target !== searchInput) {
                resultsContainer.style.display = 'none';
            }
        });

        // Empêcher la soumission du formulaire via \"Entrée\"
        searchInput.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Bloquer l'action par défaut
            }
        });
    });
</script>



<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebarMenu');
        // Vérifiez si le menu a la classe active
        if (sidebar.classList.contains('active')) {
            sidebar.classList.remove('active'); // Masquer le menu
        } else {
            sidebar.classList.add('active'); // Afficher le menu
        }
    }

    function toggleDropdown() {
        const dropdown = document.getElementById('adminDropdown');
        // Vérifiez si le menu déroulant est visible
        if (dropdown.style.display === \"none\" || dropdown.style.display === \"\") {
            dropdown.style.display = \"block\"; // Afficher le menu déroulant
        } else {
            dropdown.style.display = \"none\"; // Masquer le menu déroulant
        }
    }

    // Fermer le dropdown si l'utilisateur clique en dehors de celui-ci
    window.onclick = function(event) {
        if (!event.target.matches('.dropdown button')) {
            const dropdowns = document.getElementsByClassName(\"dropdown-content\");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.style.display === 'block') {
                    openDropdown.style.display = 'none';
                }
            }
        }
    }
</script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navbar/navbar.html.twig";
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
        return array (  169 => 77,  157 => 62,  153 => 61,  149 => 60,  145 => 59,  141 => 58,  132 => 52,  117 => 39,  110 => 35,  106 => 34,  102 => 33,  97 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  64 => 13,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/navbar/navbar.html.twig #}
<div class=\"th headerni\">
    <div class=\"centernav bound\">
        <div class=\"menu-icon\" id=\"menuIcon\" onclick=\"toggleSidebar()\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"45\" height=\"45\" fill=\"white\">
                <path d=\"M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z\"/>
            </svg>
        </div>
        <header role=\"banner\" itemscope=\"\" itemtype=\"http://schema.org/WPHeader\">
            <div class=\"site-branding logox\">
                <span class=\"logos\">
                    <a title=\"InMyScan - Anime & Manga\" itemprop=\"url\" href=\"{{ path('app_home') }}\">
                        <img src=\"{{ asset('img/logo/logo.png') }}\" width=\"50\" height=\"50\" alt=\"InMyScan - Anime & Manga\">
                        <span class=\"logo-inmy\">INMY</span>
                        <span class=\"logo-scan\">SCAN</span>
                    </a>
                </span>
            </div>
        </header>
        
        <!-- Navigation Menu -->
        <nav id=\"main-menu\" class=\"mm\">
            <span itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\" role=\"navigation\">
                <ul id=\"menu-menu\" class=\"menu\">
                    <li class=\"menu-item\"><a href=\"{{ path('serie_catalogue') }}\"><i class=\"fas fa-tv\"></i><span>Séries</span></a></li>
                    <li class=\"menu-item\"><a href=\"{{ path('films_catalogue') }}\"><i class=\"fas fa-film\"></i><span>Films</span></a></li>
                    <li class=\"menu-item\"><a href=\"{{ path('catalogue') }}\"><i class=\"fas fa-book\"></i><span>Animes</span></a></li>
                    <li class=\"menu-item\"><a href=\"{{ path('profile') }}\"><i class=\"fas fa-user\"></i><span>Ma Liste</span></a></li>
                    {% if app.user %}
                        <div class=\"dropdown\" style=\"display: inline-block; position: relative;\">
                            <button onclick=\"toggleDropdown()\" style=\"background-color: transparent; border: none; color: white; font-weight: bold; margin-left: 20px; cursor: pointer;\">ADMIN ▼</button>
                            <div class=\"dropdown-content\" id=\"adminDropdown\" style=\"display: none; position: absolute; background-color: #f9f9f9; box-shadow: 0 8px 16px rgba(0,0,0,0.2); z-index: 1000;width: 200px;\">
                                <a style=\"color: black; padding: 10px 20px; text-decoration: none; display: block;\" href=\"{{ path('manga_create_form') }}\">Créer Manga</a>
                                <a style=\"color: black; padding: 10px 20px; text-decoration: none; display: block;\" href=\"{{ path('episode_upload_form') }}\">Publier Manga</a>
                                <a href=\"{{ path('app_logout') }}\" style=\"color: 000; font-weight: bold; margin-left: 20px; cursor: pointer;\">Déconnexion</a>
                            </div>
                        </div>
                    {% endif %}
                </ul>
            </span>
        </nav>

        <!-- Menu caché par défaut -->
    <div class=\"sidebar\" id=\"sidebarMenu\">
        <div class=\"close-icon\" onclick=\"toggleSidebar()\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" width=\"30\" height=\"30\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
            </svg>
        </div>
        <ul>
            <li>
                <a class=\"menu-logo-site\" href=\"{{ path('app_home') }}\">
                    <span class=\"logo-text\">
                        <span class=\"logo-inmy\">InMy</span><span class=\"logo-scan\">Scan</span>
                    </span>
                </a>
            </li>
            <li><a href=\"{{ path('app_home') }}\" style=\"color: white; font-weight: bold;\">ACCUEIL</a></li>
            <li><a style=\"color: white; font-weight: bold;\" href=\"{{ path('catalogue') }}\">ANIMES</a></li>
            <li><a style=\"color: white; font-weight: bold;\" href=\"{{ path('serie_catalogue') }}\">SERIES</a></li>
            <li><a style=\"color: white; font-weight: bold;\" href=\"{{ path('films_catalogue') }}\">FILMS</a></li>
            <li><a href=\"{{ path('profile') }}\" style=\"color: white; font-weight: bold;\">MA LISTE</a></li>
        </ul>
    </div>

        <!-- Search Form -->
        <div class=\"searchx minmb\">
            <form action=\"https://inmyscan.com/\" id=\"form\" method=\"get\" itemprop=\"potentialAction\" itemscope=\"\" itemtype=\"http://schema.org/SearchAction\">
                <meta itemprop=\"target\" content=\"https://inmyscan.com/?s={query}\">
                <input id=\"s\" itemprop=\"query-input\" class=\"search-live\" type=\"text\" placeholder=\"Recherche\" name=\"s\" autocomplete=\"off\">
                {# <button type=\"submit\" id=\"submit\" aria-label=\"search\">
                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                </button>
                <div class=\"srcmob srccls\">
                    <i class=\"fas fa-times-circle\"></i>
                </div> #}
            </form>
        </div>
        <div id=\"live-search_sb\" class=\"live-search_sb\" style=\"position: absolute; width: 350px; z-index: 9999;right: 39px;top: 56px;\">
            <div class=\"live-search_sb_cont\">
                <div class=\"live-search_sb_top\"></div>
                <div id=\"live-search_results\" style=\"width: 100%;\">
                    <div id=\"live-search_val\">
                        <ul class=\"live-search_main\">
                            <li class=\"live-search_header\">Search</li>
                            <li>
                                <div class=\"live-search_result_container\">
                                    <ul>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id=\"live-search_more\"></div>
                </div>
                <div class=\"live-search_sb_bottom\"></div>
            </div>
        </div>
    </div>
</div>

<style>

    /* Barre de navigation */
    .headerni {
        background-color: #403774;
        color: white;
    }

    .centernav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
    }

    /* Logo */
    .site-branding {
        display: flex;
        align-items: center;
    }

    .site-branding .logos a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: white;
    }

    .site-branding .logos img {
        margin-right: 10px;
    }

    .site-branding .hdl {
        font-size: 1.5rem;
        font-weight: bold;
    }

    /* Menu de navigation */
    .mm {
        display: flex;
        justify-content: center;
        flex-grow: 1;
    }

    .menu {
        list-style: none;
        display: flex;
        gap: 15px;
    }

    .menu-item a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    .menu-item i {
        margin-right: 5px;
    }

    .menu-item a:hover {
        color: #ffde9b;
    }

    /* Barre de recherche */
    .searchx {
        display: flex;
        align-items: center;
        position: relative;
        max-width: 400px;
        width: 100%;
        background-color: #f9f9f9;
        border-radius: 25px;
        border: 1px solid #ccc;
    }

    .searchx input[type=\"text\"] {
        flex: 1;
        padding: 12px;
        border: none;
        outline: none;
        font-size: 14px;
        border-radius: 25px;
        background: transparent;
    }

    .searchx button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 8px 12px;
        color: #333;
        font-size: 18px;
    }

    .searchx button:hover {
        color: #ff6600;
    }

    /* Icône de fermeture pour mobile */
    .srcmob {
        display: none;
    }

    .srcmob i {
        font-size: 20px;
        color: white;
    }
    .logo-inmy {
        color: #ffde9b; 
        
    }
    .logo-inmy, .logo-scan{
        text-decoration: none;
        font-family: revert;
        font-weight: bolder;
        font-size: 25px;
        align-items: center;
        display: flex;
        font-style: italic;
        text-transform: uppercase;
    }
    .logo-scan {
        color: white; 
    }
    .logos{
        margin: 0 50px;
    }
    /* Apparence mobile */
    @media (max-width: 768px) {
        .menu {
            flex-direction: column;
            align-items: flex-start;
        }

        .menu-item a {
            padding: 10px 0;
        }

        .searchx {
            width: 100%;
            margin-top: 10px;
        }

        .srcmob {
            display: block;
        }
    }
    /* Conteneur des résultats de recherche */
    #live-search_sb {
    background: #000000a1;
    border: 1px solid #1c1c1c;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    display: none;
    backdrop-filter: blur(30px);
    }

    /* Contenu des résultats */
    .live-search_sb_cont {
        padding: 10px;
        max-height: 300px;
        overflow-y: auto;
    }

    /* Résultats individuels */
    .live-search_main {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .live-search_item {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .live-search_item:hover {
        background-color: #f5f5f5;
    }

    /* Image miniature */
    .live-search_item .post-thumbnail img {
        border-radius: 4px;
        margin-right: 10px;
        width: 50px;
        height: 75px;
        object-fit: cover;
    }

    /* Contenu texte des résultats */
    .live-search_item .over {
        flex: 1;
    }

    .live-search_item .autotitle {
        font-size: 14px;
        font-weight: bold;
        color: #787777;
    }

    .live-search_item .post-meta {
        font-size: 12px;
        color: #666;
    }

    .live-search_item span {
        display: block;
    }

    /* Voir tous les résultats */
    .live-search_more a {
        display: block;
        text-align: center;
        padding: 10px;
        color: #007BFF;
        text-decoration: none;
        border-top: 1px solid #eee;
    }

    .live-search_more a:hover {
        background-color: #f5f5f5;
    }
    .ancre-search-info{
        display:flex;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('s'); // Champ de recherche
        const resultsContainer = document.getElementById('live-search_sb'); // Conteneur des résultats
        const resultsList = document.getElementById('live-search_results'); // Liste des résultats

        // Ajouter un événement sur l'input
        searchInput.addEventListener('input', function () {
            const query = this.value.trim();

            if (query.length < 1) {
                resultsContainer.style.display = 'none'; // Masquer les résultats si le champ est vide
                resultsList.innerHTML = ''; // Vider les résultats existants
                return;
            }

            // Effectuer la recherche via AJAX
            fetch(`/manga/search/ajax?query=\${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    resultsList.innerHTML = ''; // Vider les résultats existants

                    if (data.length === 0) {
                        // Aucun résultat trouvé
                        const noResults = document.createElement('div');
                        noResults.textContent = 'Aucun résultat trouvé.';
                        noResults.style.padding = '10px';
                        noResults.style.color = '#666';
                        resultsList.appendChild(noResults);
                    } else {
                        // Afficher les résultats
                        data.forEach(item => {
                            const li = document.createElement('li');
                            li.className = 'live-search_item';

                            const link = document.createElement('a');
                            link.className='ancre-search-info';
                            link.onclick = () => {
                                // Redirige vers l'URL appropriée selon le type
                                if (item.type === 'manga') {
                                    window.location.href = `/manga/\${item.id}`;
                                } else if (item.type === 'film') {
                                    window.location.href = `/film/id/\${item.id}`;
                                } else if (item.type === 'serie') {
                                    window.location.href = `/series/\${item.id}`;
                                }
                            };

                            // Gérer les chemins d'images selon le type
                            let imagePath = 'img/default-thumbnail.jpg'; // Chemin par défaut si pas d'image
                            if (item.type === 'manga') {
                                imagePath = `/img/anime_pfp/\${item.photo}`;  // Dossier manga
                            } else if (item.type === 'film') {
                                imagePath = `/img/film_img/\${item.photo}`;  // Dossier film
                            } else if (item.type === 'serie') {
                                imagePath = `/img/serie_img/\${item.photo}`;  // Dossier serie
                            }

                            link.innerHTML = `
                                <div class=\"post-thumbnail\">
                                    <img src=\"\${imagePath}\" alt=\"\${item.titre}\">
                                </div>
                                <div class=\"over\">
                                    <div class=\"autotitle\">\${item.titre}</div>
                                    <span class=\"post-meta\">\${item.meta || 'Aucune description'}</span>
                                </div>
                            `;
                            li.appendChild(link);

                            resultsList.appendChild(li);
                        });
                    }

                    resultsContainer.style.display = 'block'; // Afficher les résultats
                })
                .catch(error => {
                    console.error('Erreur lors de la recherche :', error);
                });
        });

        // Masquer les résultats si on clique à l'extérieur
        document.addEventListener('click', function (event) {
            if (!resultsContainer.contains(event.target) && event.target !== searchInput) {
                resultsContainer.style.display = 'none';
            }
        });

        // Empêcher la soumission du formulaire via \"Entrée\"
        searchInput.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Bloquer l'action par défaut
            }
        });
    });
</script>



<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebarMenu');
        // Vérifiez si le menu a la classe active
        if (sidebar.classList.contains('active')) {
            sidebar.classList.remove('active'); // Masquer le menu
        } else {
            sidebar.classList.add('active'); // Afficher le menu
        }
    }

    function toggleDropdown() {
        const dropdown = document.getElementById('adminDropdown');
        // Vérifiez si le menu déroulant est visible
        if (dropdown.style.display === \"none\" || dropdown.style.display === \"\") {
            dropdown.style.display = \"block\"; // Afficher le menu déroulant
        } else {
            dropdown.style.display = \"none\"; // Masquer le menu déroulant
        }
    }

    // Fermer le dropdown si l'utilisateur clique en dehors de celui-ci
    window.onclick = function(event) {
        if (!event.target.matches('.dropdown button')) {
            const dropdowns = document.getElementsByClassName(\"dropdown-content\");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.style.display === 'block') {
                    openDropdown.style.display = 'none';
                }
            }
        }
    }
</script>

", "navbar/navbar.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\navbar\\navbar.html.twig");
    }
}
