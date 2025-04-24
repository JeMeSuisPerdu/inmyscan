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

/* catalogue/catalogue.html.twig */
class __TwigTemplate_38ff4ab5e3bc6d74062fcd600b154b91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/catalogue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/catalogue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/catalogue.html.twig", 1);
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

        yield " Catalogue | Anime VOSTFR - Regarder les meilleurs animes en VOSTFR";
        
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
        yield "    <meta name=\"description\" content=\"Découvrez notre catalogue d'animes VOSTFR. Filtrez par rôle et regardez vos animes préférés dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"catalogue anime, anime VOSTFR, animes à voir, filtrer anime, regarder anime en ligne\" />
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
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "

<h1 style=\"display: flex;justify-content: center;\">Catalogue d'animes</h1>


<div class=\"anime-container-filter\">
    <div class=\"anime-catalogue-filter\">
    <p style=\"margin-left: 20px;display: flex;justify-content: center;\">Filtrer par rôle</p>
        <div class=\"filter-container\" style=\"display: flex;flex-wrap: wrap;justify-content: center;\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 21
            yield "            <div class=\"checkbox-wrapper-16\">
                <label class=\"checkbox-wrapper\">
                    <input type=\"checkbox\" class=\"checkbox-input\" value=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "nom", [], "any", false, false, false, 23), "html", null, true);
            yield "\" />
                    <span class=\"checkbox-tile\">
                        <span class=\"checkbox-label\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "nom", [], "any", false, false, false, 25), "html", null, true);
            yield "</span>
                    </span>
                </label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "        </div>
    </div>
</div>

<div class=\"search-container\" style=\"text-align: center;\">
<input type=\"text\" id=\"search-input\" placeholder=\"Rechercher un manga...\" autocomplete=\"off\"></div>


<div class=\"anime-catalogue-box\">
<div class=\"anime-catalogue-list\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mangas"]) || array_key_exists("mangas", $context) ? $context["mangas"] : (function () { throw new RuntimeError('Variable "mangas" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 41
            yield "        <article class=\"anime-catalogue-container\">
            <div class=\"anime-catalogue-item\">
                <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" aria-label=\"Voir l'anime ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 44))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 44), "html", null, true);
            yield " - Regarder en VOSTFR\" loading=\"lazy\" class=\"clickable-image\">
                </a>
            </div>
            <p>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 47), "html", null, true);
            yield "</p>
            <p style=\"display:none;\" class=\"roles-catalogue\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mangasWithRoles"]) || array_key_exists("mangasWithRoles", $context) ? $context["mangasWithRoles"] : (function () { throw new RuntimeError('Variable "mangasWithRoles" does not exist.', 48, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 48), [], "array", false, false, false, 48), ", "), "html", null, true);
            yield "</p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['manga'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "</div>

</div>
<!-- Indicateur de chargement -->
<div id=\"loadingContainer\">
    <iframe scrolling = \"no\" frameBorder = \"0\"  id=\"loadingIndicator\"src=\"https://lottie.host/embed/a8f510d3-a527-4cd3-a00d-7bdc845bf2f7/bZ1cY1VT2M.json\"></iframe>
</div>
    ";
        // line 59
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "
<script>
let currentPage = 1; // Commencez à la page 1
const totalPages = ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "; // Total des pages à partir de Twig
const loadingIndicator = document.getElementById('loadingIndicator');
const checkboxes = document.querySelectorAll('.checkbox-input'); // Sélectionnez tous les checkboxes
const searchInput = document.getElementById('search-input'); // Sélectionnez l'input de recherche

window.addEventListener('scroll', () => {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 900) { // Vérifiez si l'utilisateur a défilé vers le bas
        if (currentPage < totalPages) {
            currentPage++;
            loadMoreMangas(currentPage);
        }
    }
});

// Écoutez les changements dans les cases à cocher
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        loadFilteredMangas(); // Chargez les mangas filtrés
    });
});

// Écoutez la saisie dans la barre de recherche
searchInput.addEventListener('input', () => {
    loadFilteredMangas(); // Chargez les mangas filtrés
});

function loadMoreMangas(page) {
    loadingIndicator.style.display = 'block'; // Affiche l'indicateur de chargement

    const selectedRoles = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);
    
    const searchTerm = searchInput.value;

    // Construction de l'URL avec les paramètres de filtre
    const url = new URL(`/catalogue`, window.location.origin);
    url.searchParams.append('page', page);
    
    if (selectedRoles.length > 0) {
        url.searchParams.append('roles', selectedRoles.join(',')); // Ajoutez les rôles sélectionnés
    }
    
    if (searchTerm) {
        url.searchParams.append('search', searchTerm); // Ajoutez le terme de recherche
    }

    fetch(url)
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');
            const mangasContainer = document.querySelector('.anime-catalogue-list');
            const newMangas = doc.querySelector('.anime-catalogue-list').innerHTML; // Récupérez le HTML des nouveaux mangas
            
            // Ajoutez les nouveaux mangas à la fin uniquement si ce ne sont pas des résultats filtrés
            if (currentPage > 1) {
                mangasContainer.insertAdjacentHTML('beforeend', newMangas); // Ajoutez les nouveaux mangas
            } else {
                mangasContainer.innerHTML = newMangas; // Remplacez les mangas
            }
        })
        .catch(error => console.error('Erreur lors du chargement des mangas:', error))
        .finally(() => {
            loadingIndicator.style.display = 'none'; // Masque l'indicateur de chargement
        });
}

// Charger les mangas filtrés sans pagination
function loadFilteredMangas() {
    loadingIndicator.style.display = 'block'; // Affiche l'indicateur de chargement
    currentPage = 1; // Réinitialisez la page pour le nouveau chargement

    const selectedRoles = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);
    
    const searchTerm = searchInput.value;

    // Construction de l'URL avec les paramètres de filtre
    const url = new URL(`/catalogue`, window.location.origin);
    url.searchParams.append('page', currentPage);
    
    // Ajout des rôles sélectionnés uniquement s'il y en a
    if (selectedRoles.length > 0) {
        url.searchParams.append('roles', selectedRoles.join(','));
    }
    
    // Ajout du terme de recherche uniquement s'il n'est pas vide
    if (searchTerm) {
        url.searchParams.append('search', searchTerm);
    }

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur de chargement des mangas'); // Gérer les erreurs
            }
            return response.text();
        })
        .then(data => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');
            const mangasContainer = document.querySelector('.anime-catalogue-list');
            const newMangas = doc.querySelector('.anime-catalogue-list').innerHTML;

            // Remplacez les mangas seulement si le contenu est différent
            if (newMangas.trim() !== '') {
                mangasContainer.innerHTML = newMangas; // Remplacez les mangas
            } else {
                mangasContainer.innerHTML = '<p>Aucun résultat trouvé.</p>'; // Message d'absence de résultat
            }
            currentPage = 1; // Réinitialisez la page
        })
        .catch(error => console.error('Erreur lors du chargement des mangas:', error))
        .finally(() => {
            loadingIndicator.style.display = 'none'; // Masque l'indicateur de chargement
        });
}

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
        return "catalogue/catalogue.html.twig";
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
        return array (  231 => 62,  225 => 59,  216 => 52,  210 => 51,  202 => 48,  198 => 47,  190 => 44,  184 => 43,  180 => 41,  175 => 40,  163 => 30,  152 => 25,  147 => 23,  143 => 21,  139 => 20,  127 => 11,  114 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Catalogue | Anime VOSTFR - Regarder les meilleurs animes en VOSTFR{% endblock %}

{% block meta %}
    <meta name=\"description\" content=\"Découvrez notre catalogue d'animes VOSTFR. Filtrez par rôle et regardez vos animes préférés dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"catalogue anime, anime VOSTFR, animes à voir, filtrer anime, regarder anime en ligne\" />
{% endblock %}

{% block body %}
{{ navbar() }}

<h1 style=\"display: flex;justify-content: center;\">Catalogue d'animes</h1>


<div class=\"anime-container-filter\">
    <div class=\"anime-catalogue-filter\">
    <p style=\"margin-left: 20px;display: flex;justify-content: center;\">Filtrer par rôle</p>
        <div class=\"filter-container\" style=\"display: flex;flex-wrap: wrap;justify-content: center;\">
            {% for role in roles %}
            <div class=\"checkbox-wrapper-16\">
                <label class=\"checkbox-wrapper\">
                    <input type=\"checkbox\" class=\"checkbox-input\" value=\"{{ role.nom }}\" />
                    <span class=\"checkbox-tile\">
                        <span class=\"checkbox-label\">{{ role.nom }}</span>
                    </span>
                </label>
            </div>
        {% endfor %}
        </div>
    </div>
</div>

<div class=\"search-container\" style=\"text-align: center;\">
<input type=\"text\" id=\"search-input\" placeholder=\"Rechercher un manga...\" autocomplete=\"off\"></div>


<div class=\"anime-catalogue-box\">
<div class=\"anime-catalogue-list\">
    {% for manga in mangas %}
        <article class=\"anime-catalogue-container\">
            <div class=\"anime-catalogue-item\">
                <a href=\"{{ path('manga_profile', { 'id': manga.id}) }}\" aria-label=\"Voir l'anime {{ manga.titre }}\">
                    <img src=\"{{ asset('img/anime_pfp/' ~ manga.photo) }}\" alt=\"{{ manga.titre }} - Regarder en VOSTFR\" loading=\"lazy\" class=\"clickable-image\">
                </a>
            </div>
            <p>{{ manga.titre }}</p>
            <p style=\"display:none;\" class=\"roles-catalogue\">{{ mangasWithRoles[manga.id]|join(', ') }}</p>
        </article>
    {% else %}
    {% endfor %}
</div>

</div>
<!-- Indicateur de chargement -->
<div id=\"loadingContainer\">
    <iframe scrolling = \"no\" frameBorder = \"0\"  id=\"loadingIndicator\"src=\"https://lottie.host/embed/a8f510d3-a527-4cd3-a00d-7bdc845bf2f7/bZ1cY1VT2M.json\"></iframe>
</div>
    {{ footer() }}
<script>
let currentPage = 1; // Commencez à la page 1
const totalPages = {{ totalPages }}; // Total des pages à partir de Twig
const loadingIndicator = document.getElementById('loadingIndicator');
const checkboxes = document.querySelectorAll('.checkbox-input'); // Sélectionnez tous les checkboxes
const searchInput = document.getElementById('search-input'); // Sélectionnez l'input de recherche

window.addEventListener('scroll', () => {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 900) { // Vérifiez si l'utilisateur a défilé vers le bas
        if (currentPage < totalPages) {
            currentPage++;
            loadMoreMangas(currentPage);
        }
    }
});

// Écoutez les changements dans les cases à cocher
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        loadFilteredMangas(); // Chargez les mangas filtrés
    });
});

// Écoutez la saisie dans la barre de recherche
searchInput.addEventListener('input', () => {
    loadFilteredMangas(); // Chargez les mangas filtrés
});

function loadMoreMangas(page) {
    loadingIndicator.style.display = 'block'; // Affiche l'indicateur de chargement

    const selectedRoles = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);
    
    const searchTerm = searchInput.value;

    // Construction de l'URL avec les paramètres de filtre
    const url = new URL(`/catalogue`, window.location.origin);
    url.searchParams.append('page', page);
    
    if (selectedRoles.length > 0) {
        url.searchParams.append('roles', selectedRoles.join(',')); // Ajoutez les rôles sélectionnés
    }
    
    if (searchTerm) {
        url.searchParams.append('search', searchTerm); // Ajoutez le terme de recherche
    }

    fetch(url)
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');
            const mangasContainer = document.querySelector('.anime-catalogue-list');
            const newMangas = doc.querySelector('.anime-catalogue-list').innerHTML; // Récupérez le HTML des nouveaux mangas
            
            // Ajoutez les nouveaux mangas à la fin uniquement si ce ne sont pas des résultats filtrés
            if (currentPage > 1) {
                mangasContainer.insertAdjacentHTML('beforeend', newMangas); // Ajoutez les nouveaux mangas
            } else {
                mangasContainer.innerHTML = newMangas; // Remplacez les mangas
            }
        })
        .catch(error => console.error('Erreur lors du chargement des mangas:', error))
        .finally(() => {
            loadingIndicator.style.display = 'none'; // Masque l'indicateur de chargement
        });
}

// Charger les mangas filtrés sans pagination
function loadFilteredMangas() {
    loadingIndicator.style.display = 'block'; // Affiche l'indicateur de chargement
    currentPage = 1; // Réinitialisez la page pour le nouveau chargement

    const selectedRoles = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);
    
    const searchTerm = searchInput.value;

    // Construction de l'URL avec les paramètres de filtre
    const url = new URL(`/catalogue`, window.location.origin);
    url.searchParams.append('page', currentPage);
    
    // Ajout des rôles sélectionnés uniquement s'il y en a
    if (selectedRoles.length > 0) {
        url.searchParams.append('roles', selectedRoles.join(','));
    }
    
    // Ajout du terme de recherche uniquement s'il n'est pas vide
    if (searchTerm) {
        url.searchParams.append('search', searchTerm);
    }

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur de chargement des mangas'); // Gérer les erreurs
            }
            return response.text();
        })
        .then(data => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');
            const mangasContainer = document.querySelector('.anime-catalogue-list');
            const newMangas = doc.querySelector('.anime-catalogue-list').innerHTML;

            // Remplacez les mangas seulement si le contenu est différent
            if (newMangas.trim() !== '') {
                mangasContainer.innerHTML = newMangas; // Remplacez les mangas
            } else {
                mangasContainer.innerHTML = '<p>Aucun résultat trouvé.</p>'; // Message d'absence de résultat
            }
            currentPage = 1; // Réinitialisez la page
        })
        .catch(error => console.error('Erreur lors du chargement des mangas:', error))
        .finally(() => {
            loadingIndicator.style.display = 'none'; // Masque l'indicateur de chargement
        });
}

</script>



{% endblock %}
", "catalogue/catalogue.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\catalogue\\catalogue.html.twig");
    }
}
