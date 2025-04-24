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

/* profile/index.html.twig */
class __TwigTemplate_65797d7cbe8129690a501d52c91d84a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "

<div class=\"profile-page\">
    <h1 class=\"profile-title\">Mes Animes Enregistrés</h1>

    <ul id=\"anime-list\" class=\"anime-listing\" style=\"display: none;\">
        <!-- Les animes enregistrés seront affichés ici -->
    </ul>

    <div id=\"no-anime\" class=\"no-anime-message\" style=\"display: none;\">
        <p style=\"font-size: 0.9em;color:#ffffffcc;\">Vous n'avez pas encore enregistré d'animes.</p>
    </div>
</div>

<script>
    // Récupérer les animes et films enregistrés dans le localStorage
    let animeList = JSON.parse(localStorage.getItem('animes')) || [];
    let filmList = JSON.parse(localStorage.getItem('films')) || [];
    let serieList = JSON.parse(localStorage.getItem('serie')) || [];


    // Fusionner les deux listes
    let combinedList = [...animeList, ...filmList, ...serieList];

    // Sélectionner les éléments du DOM
    let listElement = document.getElementById('anime-list');
    let noAnimeMessage = document.getElementById('no-anime');

    // Si la liste est vide, afficher un message
    function renderCombinedList() {
        listElement.innerHTML = ''; // Vider la liste actuelle avant de la remplir
        if (combinedList.length === 0) {
            noAnimeMessage.style.display = 'block';
            listElement.style.display = 'none';
        } else {
            noAnimeMessage.style.display = 'none';
            listElement.style.display = 'flex';
            
            // Afficher les animes serie et films dans le DOM
            combinedList.forEach(function (item, index) {
                let listItem = document.createElement('li');

                // Construire le chemin de l'image
                let imageSrc;
                if (item.type === 'film') {
                    // Films : chemin spécifique avec nom de la photo
                    imageSrc = \"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/film_img/"), "html", null, true);
        yield "\" + item.photo;
                } else if (item.type === 'serie') {
                    // Films : chemin spécifique avec nom de la photo
                    imageSrc = \"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/serie_img/"), "html", null, true);
        yield "\" + item.photo;
                }else {
                    // Animes : chemin générique basé sur l'ID
                    imageSrc = \"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/anime_pfp/"), "html", null, true);
        yield "\" + \"photo_\" + item.id + \".jpg\";
                }

                // Créer une structure pour chaque item favori avec une croix de suppression
                listItem.innerHTML = `
                    <img src=\"\${imageSrc}\" alt=\"\${item.titre}\" class=\"anime-image\" />
                    <span class=\"anime-title\">\${item.titre}</span>
                    <span class=\"close-btn\" data-index=\"\${index}\">&times;</span>
                `;

                // Ajouter un événement de clic sur la carte entière sauf la croix
                listItem.addEventListener('click', function (event) {
                    if (!event.target.classList.contains('close-btn')) {
                        // Rediriger vers la page correspondante
                        let baseUrl;
                        if (item.type === 'film') {
                            baseUrl = '/films/';
                        } else if (item.type === 'serie') {
                            baseUrl = '/series/';
                        } else {
                            baseUrl = '/manga/';
                        }
                        window.location.href = baseUrl + item.id;
                    }
                });

                listElement.appendChild(listItem);
            });
        }
    }

    // Fonction pour supprimer un item de la liste
    function removeItem(index) {
        combinedList.splice(index, 1); // Supprimer l'item de la liste

        // Mettre à jour les localStorage
        animeList = combinedList.filter(item => item.type === 'anime');
        filmList = combinedList.filter(item => item.type === 'film');
        serieList = combinedList.filter(item => item.type === 'serie');

        localStorage.setItem('animes', JSON.stringify(animeList));
        localStorage.setItem('films', JSON.stringify(filmList));
        localStorage.setItem('serie', JSON.stringify(serieList));

        renderCombinedList(); // Mettre à jour l'affichage de la liste
    }

    // Écouter les événements de clic sur la croix de suppression
    listElement.addEventListener('click', function (event) {
        if (event.target.classList.contains('close-btn')) {
            let index = event.target.getAttribute('data-index'); // Récupérer l'index de l'item à supprimer
            removeItem(index); // Appeler la fonction de suppression
        }
    });

    // Initialiser l'affichage de la liste combinée
    renderCombinedList();
</script>




<style>
    /* Style général pour le conteneur du profil */
    .profile-page {
    max-width: 1200px;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    }

    /* Style du titre de la page */
    .profile-title {
        text-align: center;
        color: #ffffff;
        font-size: 2.5rem;
        margin-bottom: 25px;
    }

    /* Style de la liste d'animes */
    .anime-listing {
    list-style-type: none;
    overflow-x: auto;
    display: flex;
    gap: 50px;
    overflow-y: hidden;
    max-width: 1100px;
    margin: 50px auto;
    padding: 30px;
    background-color: #ffffff0f;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    flex-wrap: wrap;
    }
    .close-btn {
    position: absolute;
    top: 0px;
    right: 0px;
    font-size: 18px;
    cursor: pointer;
    color: #ffffff;
    background-color: #ff4c4c;
    padding: 5px;
    }

    .anime-listing li {
    background-color: #3f51b58c;
    color: white;
    /* padding: 12px; */
    /* margin-bottom: 12px; */
    /* border-radius: 8px; */
    /* font-size: 1.3rem; */
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: nowrap;
    position: relative;
    }

    .anime-image {
    height: 210px;
    border-radius: 4px;
    margin-bottom: 8px;
    width: 170px;
    object-fit: cover;
}

body{
    background-repeat: no-repeat;
}
    .anime-listing li:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    /* Message lorsqu'il n'y a pas d'animes enregistrés */
    .no-anime-message {
        text-align: center;
        font-size: 1.3rem;
        color: #666;
        padding: 25px;
        background-color: #f4f4f417;
        border-radius: 8px;
    }

    .anime-title {
        vertical-align: middle; /* Centrer verticalement */
        text-align: center; /* Centrer le texte */
        font-size: 1rem; /* Taille de police pour le titre */
        display:none;
    }
</style>

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
        return "profile/index.html.twig";
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
        return array (  137 => 57,  131 => 54,  125 => 51,  76 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profile/index.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
{{navbar()}}

<div class=\"profile-page\">
    <h1 class=\"profile-title\">Mes Animes Enregistrés</h1>

    <ul id=\"anime-list\" class=\"anime-listing\" style=\"display: none;\">
        <!-- Les animes enregistrés seront affichés ici -->
    </ul>

    <div id=\"no-anime\" class=\"no-anime-message\" style=\"display: none;\">
        <p style=\"font-size: 0.9em;color:#ffffffcc;\">Vous n'avez pas encore enregistré d'animes.</p>
    </div>
</div>

<script>
    // Récupérer les animes et films enregistrés dans le localStorage
    let animeList = JSON.parse(localStorage.getItem('animes')) || [];
    let filmList = JSON.parse(localStorage.getItem('films')) || [];
    let serieList = JSON.parse(localStorage.getItem('serie')) || [];


    // Fusionner les deux listes
    let combinedList = [...animeList, ...filmList, ...serieList];

    // Sélectionner les éléments du DOM
    let listElement = document.getElementById('anime-list');
    let noAnimeMessage = document.getElementById('no-anime');

    // Si la liste est vide, afficher un message
    function renderCombinedList() {
        listElement.innerHTML = ''; // Vider la liste actuelle avant de la remplir
        if (combinedList.length === 0) {
            noAnimeMessage.style.display = 'block';
            listElement.style.display = 'none';
        } else {
            noAnimeMessage.style.display = 'none';
            listElement.style.display = 'flex';
            
            // Afficher les animes serie et films dans le DOM
            combinedList.forEach(function (item, index) {
                let listItem = document.createElement('li');

                // Construire le chemin de l'image
                let imageSrc;
                if (item.type === 'film') {
                    // Films : chemin spécifique avec nom de la photo
                    imageSrc = \"{{ asset('img/film_img/') }}\" + item.photo;
                } else if (item.type === 'serie') {
                    // Films : chemin spécifique avec nom de la photo
                    imageSrc = \"{{ asset('img/serie_img/') }}\" + item.photo;
                }else {
                    // Animes : chemin générique basé sur l'ID
                    imageSrc = \"{{ asset('img/anime_pfp/') }}\" + \"photo_\" + item.id + \".jpg\";
                }

                // Créer une structure pour chaque item favori avec une croix de suppression
                listItem.innerHTML = `
                    <img src=\"\${imageSrc}\" alt=\"\${item.titre}\" class=\"anime-image\" />
                    <span class=\"anime-title\">\${item.titre}</span>
                    <span class=\"close-btn\" data-index=\"\${index}\">&times;</span>
                `;

                // Ajouter un événement de clic sur la carte entière sauf la croix
                listItem.addEventListener('click', function (event) {
                    if (!event.target.classList.contains('close-btn')) {
                        // Rediriger vers la page correspondante
                        let baseUrl;
                        if (item.type === 'film') {
                            baseUrl = '/films/';
                        } else if (item.type === 'serie') {
                            baseUrl = '/series/';
                        } else {
                            baseUrl = '/manga/';
                        }
                        window.location.href = baseUrl + item.id;
                    }
                });

                listElement.appendChild(listItem);
            });
        }
    }

    // Fonction pour supprimer un item de la liste
    function removeItem(index) {
        combinedList.splice(index, 1); // Supprimer l'item de la liste

        // Mettre à jour les localStorage
        animeList = combinedList.filter(item => item.type === 'anime');
        filmList = combinedList.filter(item => item.type === 'film');
        serieList = combinedList.filter(item => item.type === 'serie');

        localStorage.setItem('animes', JSON.stringify(animeList));
        localStorage.setItem('films', JSON.stringify(filmList));
        localStorage.setItem('serie', JSON.stringify(serieList));

        renderCombinedList(); // Mettre à jour l'affichage de la liste
    }

    // Écouter les événements de clic sur la croix de suppression
    listElement.addEventListener('click', function (event) {
        if (event.target.classList.contains('close-btn')) {
            let index = event.target.getAttribute('data-index'); // Récupérer l'index de l'item à supprimer
            removeItem(index); // Appeler la fonction de suppression
        }
    });

    // Initialiser l'affichage de la liste combinée
    renderCombinedList();
</script>




<style>
    /* Style général pour le conteneur du profil */
    .profile-page {
    max-width: 1200px;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    }

    /* Style du titre de la page */
    .profile-title {
        text-align: center;
        color: #ffffff;
        font-size: 2.5rem;
        margin-bottom: 25px;
    }

    /* Style de la liste d'animes */
    .anime-listing {
    list-style-type: none;
    overflow-x: auto;
    display: flex;
    gap: 50px;
    overflow-y: hidden;
    max-width: 1100px;
    margin: 50px auto;
    padding: 30px;
    background-color: #ffffff0f;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    flex-wrap: wrap;
    }
    .close-btn {
    position: absolute;
    top: 0px;
    right: 0px;
    font-size: 18px;
    cursor: pointer;
    color: #ffffff;
    background-color: #ff4c4c;
    padding: 5px;
    }

    .anime-listing li {
    background-color: #3f51b58c;
    color: white;
    /* padding: 12px; */
    /* margin-bottom: 12px; */
    /* border-radius: 8px; */
    /* font-size: 1.3rem; */
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: nowrap;
    position: relative;
    }

    .anime-image {
    height: 210px;
    border-radius: 4px;
    margin-bottom: 8px;
    width: 170px;
    object-fit: cover;
}

body{
    background-repeat: no-repeat;
}
    .anime-listing li:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    /* Message lorsqu'il n'y a pas d'animes enregistrés */
    .no-anime-message {
        text-align: center;
        font-size: 1.3rem;
        color: #666;
        padding: 25px;
        background-color: #f4f4f417;
        border-radius: 8px;
    }

    .anime-title {
        vertical-align: middle; /* Centrer verticalement */
        text-align: center; /* Centrer le texte */
        font-size: 1rem; /* Taille de police pour le titre */
        display:none;
    }
</style>

{% endblock %}
", "profile/index.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\profile\\index.html.twig");
    }
}
