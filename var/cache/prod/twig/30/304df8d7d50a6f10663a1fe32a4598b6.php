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
class __TwigTemplate_61fc95e78fd0944c63398a36784d662e extends Template
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
        // line 2
        yield "
<div class=\"auth-links\" data-turbolinks=\"false\">
    <div class=\"home-navbar-container container\">

            ";
        // line 7
        yield "        <div class=\"menu-icon\" id=\"menuIcon\" onclick=\"toggleSidebar()\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"45\" height=\"45\" fill=\"white\">
                <path d=\"M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z\"/>
            </svg>
        </div>
        <a class=\"logo-site\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <img height=\"40\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo.png"), "html", null, true);
        yield "\" alt=\"Logo InMyScan\">InMyScan</a>


        <div class=\"home-icon-account\">
            <a style=\"color: white; font-weight: bold;\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\">CATALOGUE</a>
            <a style=\"color: white; font-weight: bold;display: flex; margin-left:17px;\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">PROFIL</a>

            ";
        // line 21
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21)) {
            // line 22
            yield "                <div class=\"dropdown\" style=\"display: inline-block; position: relative;\">
                    <button onclick=\"toggleDropdown()\" style=\"background-color: transparent; border: none; color: white; font-weight: bold; margin-left: 20px; cursor: pointer;\">ADMIN ▼</button>
                    <div class=\"dropdown-content\" id=\"adminDropdown\" style=\"display: none; position: absolute; background-color: #f9f9f9; box-shadow: 0 8px 16px rgba(0,0,0,0.2); z-index: 1000;width: 200px;\">
                        <a style=\"color: black; padding: 10px 20px; text-decoration: none; display: block;\" href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_create_form");
            yield "\">Créer Manga</a>
                        <a style=\"color: black; padding: 10px 20px; text-decoration: none; display: block;\" href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_upload_form");
            yield "\">Publier Manga</a>
                        <a href=\"";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"color: 000; font-weight: bold; margin-left: 20px; cursor: pointer;\">Déconnexion</a>
                    </div>
                </div>
            ";
        }
        // line 31
        yield "        </div>

            <form action=\"";
        // line 33
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
            </form>
    </div>
    ";
        // line 48
        yield "<div class=\"sidebar\" id=\"sidebarMenu\">
    <div class=\"close-icon\" onclick=\"toggleSidebar()\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" width=\"24\" height=\"24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
        </svg>
    </div>
    <ul>
        <li><a style=\"color: white; font-weight: bold;\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\">CATALOGUE</a></li>
        <li><a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\" style=\"color: white; font-weight: bold;\">PROFIL</a></li>
        <li><a href=\"#item3\"></a></li>
    </ul>
</div>


</div>


<div class=\"search-results-container\">
    <ul id=\"search-results\" class=\"search-results\" role=\"list\"></ul>
</div>
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

<style>
    .dropdown-content a:hover {
        background-color: #ddd; /* Change la couleur de fond au survol */
    }
</style>
<script>
    // Script de recherche AJAX
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
                    li.textContent = manga.titre;
                    li.onclick = () => {
                        window.location.href = `/manga/\${manga.id}`;
                    };
                    resultsContainer.appendChild(li);
                });

                // Afficher les résultats
                resultsContainer.style.display = 'block'; // ou utiliser une classe CSS pour afficher
            });
    });

    // Événement pour fermer le menu des résultats si on clique à l'extérieur
    document.addEventListener('click', function(event) {
        const resultsContainer = document.getElementById('search-results');
        const searchInput = document.getElementById('searchMangaDownload');

        // Vérifier si le clic est à l'extérieur du champ de recherche et des résultats
        if (!resultsContainer.contains(event.target) && event.target !== searchInput) {
            resultsContainer.style.display = 'none'; // ou utilisez une classe CSS pour masquer
        }
    });
</script>

<style>
    /* Exemple de style pour cacher les résultats par défaut */
    #search-results {
        display: none; /* Cacher par défaut */
        /* Autres styles si nécessaire */
    }


.close-icon {
    position: absolute;
    top: 10px; /* Ajustez cette valeur selon vos besoins */
    right: 10px; /* Ajustez cette valeur selon vos besoins */
    cursor: pointer; /* Montre que c'est cliquable */
}

</style>
";
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
        return array (  132 => 56,  128 => 55,  119 => 48,  102 => 33,  98 => 31,  91 => 27,  87 => 26,  83 => 25,  78 => 22,  75 => 21,  70 => 18,  66 => 17,  59 => 13,  55 => 12,  48 => 7,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navbar/navbar.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\navbar\\navbar.html.twig");
    }
}
