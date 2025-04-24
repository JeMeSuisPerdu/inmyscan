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

/* catalogue/catalogue.html.twig */
class __TwigTemplate_4c7a8994c12547c7e5b66a3fc5bd2e54 extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/catalogue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/catalogue.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Catalogue | Anime VOSTFR - Regarder les meilleurs animes en VOSTFR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        yield "    <meta name=\"description\" content=\"Découvrez notre catalogue d'animes VOSTFR. Filtrez par rôle et regardez vos animes préférés dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"catalogue anime, anime VOSTFR, animes à voir, filtrer anime, regarder anime en ligne\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "

<h1 style=\"display: flex;justify-content: center;\">CATALOGUE D'ANIMES</h1>

<div class=\"anime-container-filter\">
    <div class=\"anime-catalogue-filter\">
        <h2 style=\"margin-left: 20px;display: flex;justify-content: center;\">Filtrer par rôle</h2>
        <div class=\"filter-container\" style=\"display: flex;flex-wrap: wrap;justify-content: center;\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 20
            yield "            <div class=\"checkbox-wrapper-16\">
                <label class=\"checkbox-wrapper\">
                    <input type=\"checkbox\" class=\"checkbox-input\" value=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "nom", [], "any", false, false, false, 22), "html", null, true);
            yield "\" />
                    <span class=\"checkbox-tile\">
                        <span class=\"checkbox-label\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "nom", [], "any", false, false, false, 24), "html", null, true);
            yield "</span>
                    </span>
                </label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "        </div>
    </div>
</div>

<div class=\"search-container\" style=\"text-align: center;\">
<input type=\"text\" id=\"search-input\" placeholder=\"Rechercher un manga...\" autocomplete=\"off\"></div>


<div class=\"anime-catalogue-box\">
<div class=\"anime-catalogue-list\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mangas"]) || array_key_exists("mangas", $context) ? $context["mangas"] : (function () { throw new RuntimeError('Variable "mangas" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 40
            yield "        <article class=\"anime-catalogue-container\">
            <div class=\"anime-catalogue-item\">
                <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" aria-label=\"Voir l'anime ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 42), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 43))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 43), "html", null, true);
            yield " - Regarder en VOSTFR\" loading=\"lazy\" class=\"clickable-image\">
                </a>
            </div>
            <h2>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 46), "html", null, true);
            yield "</h2>
            <p style=\"display:none;\" class=\"roles-catalogue\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mangasWithRoles"]) || array_key_exists("mangasWithRoles", $context) ? $context["mangasWithRoles"] : (function () { throw new RuntimeError('Variable "mangasWithRoles" does not exist.', 47, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 47), [], "array", false, false, false, 47), ", "), "html", null, true);
            yield "</p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "</div>

</div>
<!-- Indicateur de chargement -->
<div id=\"loadingContainer\">
    <iframe scrolling = \"no\" frameBorder = \"0\"  id=\"loadingIndicator\"src=\"https://lottie.host/embed/a8f510d3-a527-4cd3-a00d-7bdc845bf2f7/bZ1cY1VT2M.json\"></iframe>
</div>
    ";
        // line 58
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "
<script>
let currentPage = 1; // Commencez à la page 1
const totalPages = ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 61, $this->source); })()), "html", null, true);
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalogue/catalogue.html.twig";
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
        return array (  196 => 61,  190 => 58,  181 => 51,  175 => 50,  167 => 47,  163 => 46,  155 => 43,  149 => 42,  145 => 40,  140 => 39,  128 => 29,  117 => 24,  112 => 22,  108 => 20,  104 => 19,  93 => 11,  86 => 10,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Catalogue | Anime VOSTFR - Regarder les meilleurs animes en VOSTFR{% endblock %}

{% block meta %}
    <meta name=\"description\" content=\"Découvrez notre catalogue d'animes VOSTFR. Filtrez par rôle et regardez vos animes préférés dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"catalogue anime, anime VOSTFR, animes à voir, filtrer anime, regarder anime en ligne\" />
{% endblock %}

{% block body %}
{{ navbar() }}

<h1 style=\"display: flex;justify-content: center;\">CATALOGUE D'ANIMES</h1>

<div class=\"anime-container-filter\">
    <div class=\"anime-catalogue-filter\">
        <h2 style=\"margin-left: 20px;display: flex;justify-content: center;\">Filtrer par rôle</h2>
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
            <h2>{{ manga.titre }}</h2>
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
", "catalogue/catalogue.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\catalogue\\catalogue.html.twig");
    }
}
