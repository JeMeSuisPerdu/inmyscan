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
class __TwigTemplate_a2f7b2b7155b209f2d1b2244b474eedd extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
    // Récupérer les animes enregistrés dans le localStorage
    let animeList = JSON.parse(localStorage.getItem('animes')) || [];

    // Sélectionner les éléments du DOM
    let listElement = document.getElementById('anime-list');
    let noAnimeMessage = document.getElementById('no-anime');

    // Si la liste est vide, afficher un message
    function renderAnimeList() {
        listElement.innerHTML = ''; // Vider la liste actuelle avant de la remplir
        if (animeList.length === 0) {
            noAnimeMessage.style.display = 'block';
            listElement.style.display = 'none';
        } else {
            noAnimeMessage.style.display = 'none';
            listElement.style.display = 'flex'; 
            // Afficher les animes dans le DOM
            animeList.forEach(function(anime, index) {
                let listItem = document.createElement('li');

                // Construire le chemin de l'image
                const imageSrc = \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/anime_pfp/"), "html", null, true);
        yield "\" + \"photo_\" + anime.id + \".jpg\"; 

                // Créer une structure pour chaque anime favori avec une croix de suppression
                listItem.innerHTML = `
                    <img src=\"\${imageSrc}\" alt=\"\${anime.titre}\" class=\"anime-image\" />
                    <span class=\"anime-title\">\${anime.titre}</span>
                    <span class=\"close-btn\" data-index=\"\${index}\">&times;</span>
                `;

                // Ajouter un événement de clic sur la carte entière sauf la croix
                listItem.addEventListener('click', function(event) {
                    if (!event.target.classList.contains('close-btn')) {
                        // Rediriger vers la page manga/{id} en utilisant l'ID de l'anime
                        window.location.href = \"/manga/\" + anime.id;
                    }
                });

                listElement.appendChild(listItem);
            });
        }
    }

    // Fonction pour supprimer un anime de la liste
    function removeAnime(index) {
        animeList.splice(index, 1); // Supprimer l'anime de la liste
        localStorage.setItem('animes', JSON.stringify(animeList)); // Mettre à jour le localStorage
        renderAnimeList(); // Mettre à jour l'affichage de la liste
    }

    // Écouter les événements de clic sur la croix de suppression
    listElement.addEventListener('click', function(event) {
        if (event.target.classList.contains('close-btn')) {
            let index = event.target.getAttribute('data-index'); // Récupérer l'index de l'anime à supprimer
            removeAnime(index); // Appeler la fonction de suppression
        }
    });

    // Initialiser l'affichage de la liste des animes
    renderAnimeList();
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
    max-width: 990px;
    margin: 50px auto;
    padding: 30px;
    background-color: #ffffff0f;
    border-radius: 15px;
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
    background-color: #ffffffa8;
    padding: 5px;
    border-radius: 5px;
    }

    .close-btn:hover {
        color: #fff;
        background-color: #ff4c4c;
    }
    .anime-listing li {
        background-color: #3f51b58c;
        color: white;
        padding: 12px;
        margin-bottom: 12px;
        border-radius: 8px;
        font-size: 1.3rem;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        cursor: pointer;
        display: flex; /* Pour aligner l'image et le texte */
        flex-direction: column; /* Mettre l'image au-dessus du texte */
        align-items: center; /* Centrer horizontalement */
        width: 200px; /* Largeur fixe pour chaque élément */
        flex-wrap: nowrap; /* Éviter le passage à la ligne */
        position: relative;

    }

    .anime-image {
        width: auto; /* Ajuster la largeur automatiquement */
        height: 100px; /* Hauteur fixe de 100px pour les images */
        border-radius: 4px; /* Arrondir les coins de l'image */
        margin-bottom: 8px; /* Espacement entre l'image et le titre */
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
        return array (  97 => 41,  58 => 5,  51 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/index.html.twig", "/home/inmyscan.com/templates/profile/index.html.twig");
    }
}
