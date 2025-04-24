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

/* anime/voir_anime.html.twig */
class __TwigTemplate_c0a9624929b3488377cc21ff947a03ea extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anime/voir_anime.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "anime/voir_anime.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " | Anime VOSTFR";
        
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
        yield "    <meta name=\"description\" content=\"Regardez ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield " en VOSTFR. Choisissez parmi différents lecteurs et épisodes. Profitez de l'anime dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"anime, ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield ", VOSTFR, regarder anime, épisodes d'anime\" />
    <meta name=\"author\" content=\"Votre Nom\" /> ";
        // line 9
        yield "    <meta http-equiv=\"Content-Language\" content=\"fr\" />
    <link rel=\"canonical\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_anime", ["mangaId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "saison" => 1]), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "

    <div class=\"anime-lecture-container\">
    <h1>
        <a style=\"color: white;\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
    </h1>        
    <h2>Choisissez un lecteur :</h2>
        <div class=\"anime-lecture-box\">
            <div class=\"anime-lecture-content-vid\">
                <div class=\"select-anime-lecteur\" style=\"display:flex;\">
                    <select id=\"episode-select\" aria-label=\"Sélectionnez un épisode\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["episodes"]) || array_key_exists("episodes", $context) ? $context["episodes"] : (function () { throw new RuntimeError('Variable "episodes" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["episodeNumber"] => $context["lecteurLinks"]) {
            // line 26
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["episodeNumber"], "html", null, true);
            yield "\">ÉPISODE ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["episodeNumber"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['episodeNumber'], $context['lecteurLinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "                    </select>
                    <select id=\"lecteur-select\" style=\"display: none;\" aria-label=\"Sélectionnez un lecteur\"></select>
                </div>
            </div>
        </div>
        <div id=\"video-container\" style=\"margin-top: 20px;\">
            <iframe id=\"video-iframe\" src=\"\" frameborder=\"0\" height=\"500\" width=\"1000\" allowfullscreen style=\"display: none;margin-bottom: 40px;
\"></iframe>
        </div>
        <div id=\"lecteur-message\" style=\"display: none; color: red; margin-top: 10px;\">
            Essayez de changer de lecteur...
        </div>
    </div>
    ";
        // line 41
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "

    
    ";
        // line 45
        yield "    <script type=\"application/ld+json\">
        \"@context\": \"https://schema.org\",
        \"@type\": \"VideoObject\",
        \"name\": \"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 48, $this->source); })()), "titre", [], "any", false, false, false, 48), "html", null, true);
        yield "\",
        \"description\": \"Regardez ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 49, $this->source); })()), "titre", [], "any", false, false, false, 49), "html", null, true);
        yield " en VOSTFR. Choisissez parmi différents lecteurs.\",
        \"thumbnailUrl\": \"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 50, $this->source); })()), "photo", [], "any", false, false, false, 50))), "html", null, true);
        yield "\",
        \"uploadDate\": \"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\",
        \"duration\": \"PT1H30M\",  
        \"contentUrl\": \"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_anime", ["mangaId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53), "saison" => 1]), "html", null, true);
        yield "\"
    </script>
<script>
var episodeLinks = ";
        // line 56
        yield json_encode((isset($context["episodes"]) || array_key_exists("episodes", $context) ? $context["episodes"] : (function () { throw new RuntimeError('Variable "episodes" does not exist.', 56, $this->source); })()));
        yield "; // Récupérer les liens des épisodes

var episodeSelect = document.getElementById('episode-select');
var lecteurSelect = document.getElementById('lecteur-select');
var videoIframe = document.getElementById('video-iframe');
var lecteurMessage = document.getElementById('lecteur-message'); // Référence au message d'avertissement

// Fonction pour mettre à jour la vidéo dans l'iframe
function updateVideo(link) {
    if (link) {
        videoIframe.src = link; // Met à jour l'attribut src de l'iframe avec le lien du lecteur
        videoIframe.style.display = 'block'; // Affiche l'iframe
        console.log(`Vidéo mise à jour avec le lien : \${link}`);
    }
}

// Fonction pour mettre à jour les lecteurs en fonction de l'épisode sélectionné
function updateLecteurs(episodeNumber) {
    lecteurSelect.innerHTML = ''; // Réinitialiser
    lecteurSelect.style.display = 'none'; // Masquer le select des lecteurs

    console.log(`Mise à jour des lecteurs pour l'épisode \${episodeNumber}`);

    if (episodeNumber) {
        var lecteurs = episodeLinks[episodeNumber];
        if (lecteurs) { // Vérifiez si des lecteurs existent
            for (var lecteur in lecteurs) {
                if (lecteurs.hasOwnProperty(lecteur)) {
                    var option = document.createElement('option');
                    option.value = lecteurs[lecteur]; // Lien du lecteur
                    option.textContent = lecteur; // Nom du lecteur
                    lecteurSelect.appendChild(option);
                }
            }
            // Affichez le sélecteur de lecteurs uniquement s'il y a des lecteurs
            if (lecteurSelect.options.length > 0) {
                lecteurSelect.style.display = 'block';
                lecteurMessage.style.display = 'none'; // Masquer le message d'avertissement

                // Récupérer le nom du lecteur actuel depuis le localStorage
                var storedLecteurName = localStorage.getItem('currentLecteurName'); 
                console.log(`Lecteur stocké dans localStorage : \${storedLecteurName}`);

                // Vérification si le lecteur actuel est valide
                if (storedLecteurName) {
                    // Vérifier si le lecteur existant correspond à un des lecteurs de la liste
                    var validLecteur = Array.from(lecteurSelect.options).find(option => option.textContent === storedLecteurName);
                    if (validLecteur) {
                        lecteurSelect.value = validLecteur.value; // Conserver le lien du lecteur correspondant
                        console.log(`Lecteur conservé depuis localStorage : \${storedLecteurName}`);
                    } else {
                        // Si le lecteur stocké n'est pas valide, sélectionner le premier lecteur
                        lecteurSelect.value = lecteurSelect.options[0].value; 
                        console.log(`Lecteur par défaut sélectionné : \${lecteurSelect.value}`);
                    }
                } else {
                    // Sélectionner le premier lecteur par défaut si aucun n'est stocké
                    lecteurSelect.value = lecteurSelect.options[0].value; 
                    console.log(`Lecteur par défaut sélectionné : \${lecteurSelect.value}`);
                }

                updateVideo(lecteurSelect.value); // Charger la vidéo avec le lecteur actuel
            } else {
                lecteurMessage.style.display = 'block'; // Afficher le message d'avertissement si aucun lecteur
            }
        }
    }
}

// Gestion du changement de sélection du lecteur
lecteurSelect.addEventListener('change', function() {
    var selectedLink = this.value;
    var selectedLecteurName = this.options[this.selectedIndex].textContent; // Récupérer le nom du lecteur sélectionné
    localStorage.setItem('currentLecteurName', selectedLecteurName); // Sauvegarder le nom du lecteur dans le localStorage
    updateVideo(selectedLink); // Mettre à jour la vidéo avec le nouveau lecteur
    console.log(`Lecteur actuel sauvegardé dans localStorage : \${selectedLecteurName}`);
});

// Initialisation : sélectionner automatiquement le premier épisode et mettre à jour les lecteurs
document.addEventListener('DOMContentLoaded', function() {
    var firstEpisodeNumber = Object.keys(episodeLinks)[0]; // Obtenir le premier épisode
    episodeSelect.value = firstEpisodeNumber; // Sélectionner le premier épisode

    updateLecteurs(firstEpisodeNumber); // Mettre à jour les lecteurs pour le premier épisode
});

// Gestion du changement de sélection de l'épisode
episodeSelect.addEventListener('change', function() {
    var episodeNumber = this.value;
    console.log(`Épisode sélectionné : \${episodeNumber}`);

    // Mettre à jour les lecteurs sans changer le lecteur sélectionné
    updateLecteurs(episodeNumber);
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
        return "anime/voir_anime.html.twig";
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
        return array (  190 => 56,  184 => 53,  179 => 51,  175 => 50,  171 => 49,  167 => 48,  162 => 45,  156 => 41,  141 => 28,  130 => 26,  126 => 25,  114 => 18,  106 => 14,  99 => 13,  89 => 10,  86 => 9,  82 => 7,  77 => 6,  70 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ manga.titre }} | Anime VOSTFR{% endblock %}

{% block meta %}
    <meta name=\"description\" content=\"Regardez {{ manga.titre }} en VOSTFR. Choisissez parmi différents lecteurs et épisodes. Profitez de l'anime dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"anime, {{ manga.titre }}, VOSTFR, regarder anime, épisodes d'anime\" />
    <meta name=\"author\" content=\"Votre Nom\" /> {# Remplacez par le nom de l'auteur #}
    <meta http-equiv=\"Content-Language\" content=\"fr\" />
    <link rel=\"canonical\" href=\"{{ path('voir_anime', { 'mangaId': manga.id, 'saison': 1 }) }}\" />
{% endblock %}

{% block body %}
    {{ navbar() }}

    <div class=\"anime-lecture-container\">
    <h1>
        <a style=\"color: white;\" href=\"{{ path('manga_profile', { 'id': manga.id }) }}\">{{ manga.titre }}</a>
    </h1>        
    <h2>Choisissez un lecteur :</h2>
        <div class=\"anime-lecture-box\">
            <div class=\"anime-lecture-content-vid\">
                <div class=\"select-anime-lecteur\" style=\"display:flex;\">
                    <select id=\"episode-select\" aria-label=\"Sélectionnez un épisode\">
                        {% for episodeNumber, lecteurLinks in episodes %}
                            <option value=\"{{ episodeNumber }}\">ÉPISODE {{ episodeNumber }}</option>
                        {% endfor %}
                    </select>
                    <select id=\"lecteur-select\" style=\"display: none;\" aria-label=\"Sélectionnez un lecteur\"></select>
                </div>
            </div>
        </div>
        <div id=\"video-container\" style=\"margin-top: 20px;\">
            <iframe id=\"video-iframe\" src=\"\" frameborder=\"0\" height=\"500\" width=\"1000\" allowfullscreen style=\"display: none;margin-bottom: 40px;
\"></iframe>
        </div>
        <div id=\"lecteur-message\" style=\"display: none; color: red; margin-top: 10px;\">
            Essayez de changer de lecteur...
        </div>
    </div>
    {{ footer() }}

    
    {# Données structurées pour l'anime #}
    <script type=\"application/ld+json\">
        \"@context\": \"https://schema.org\",
        \"@type\": \"VideoObject\",
        \"name\": \"{{ manga.titre }}\",
        \"description\": \"Regardez {{ manga.titre }} en VOSTFR. Choisissez parmi différents lecteurs.\",
        \"thumbnailUrl\": \"{{ asset('img/anime_pfp/' ~ manga.photo) }}\",
        \"uploadDate\": \"{{ 'now'|date('Y-m-d') }}\",
        \"duration\": \"PT1H30M\",  
        \"contentUrl\": \"{{ path('voir_anime', { 'mangaId': manga.id, 'saison': 1 }) }}\"
    </script>
<script>
var episodeLinks = {{ episodes | json_encode | raw }}; // Récupérer les liens des épisodes

var episodeSelect = document.getElementById('episode-select');
var lecteurSelect = document.getElementById('lecteur-select');
var videoIframe = document.getElementById('video-iframe');
var lecteurMessage = document.getElementById('lecteur-message'); // Référence au message d'avertissement

// Fonction pour mettre à jour la vidéo dans l'iframe
function updateVideo(link) {
    if (link) {
        videoIframe.src = link; // Met à jour l'attribut src de l'iframe avec le lien du lecteur
        videoIframe.style.display = 'block'; // Affiche l'iframe
        console.log(`Vidéo mise à jour avec le lien : \${link}`);
    }
}

// Fonction pour mettre à jour les lecteurs en fonction de l'épisode sélectionné
function updateLecteurs(episodeNumber) {
    lecteurSelect.innerHTML = ''; // Réinitialiser
    lecteurSelect.style.display = 'none'; // Masquer le select des lecteurs

    console.log(`Mise à jour des lecteurs pour l'épisode \${episodeNumber}`);

    if (episodeNumber) {
        var lecteurs = episodeLinks[episodeNumber];
        if (lecteurs) { // Vérifiez si des lecteurs existent
            for (var lecteur in lecteurs) {
                if (lecteurs.hasOwnProperty(lecteur)) {
                    var option = document.createElement('option');
                    option.value = lecteurs[lecteur]; // Lien du lecteur
                    option.textContent = lecteur; // Nom du lecteur
                    lecteurSelect.appendChild(option);
                }
            }
            // Affichez le sélecteur de lecteurs uniquement s'il y a des lecteurs
            if (lecteurSelect.options.length > 0) {
                lecteurSelect.style.display = 'block';
                lecteurMessage.style.display = 'none'; // Masquer le message d'avertissement

                // Récupérer le nom du lecteur actuel depuis le localStorage
                var storedLecteurName = localStorage.getItem('currentLecteurName'); 
                console.log(`Lecteur stocké dans localStorage : \${storedLecteurName}`);

                // Vérification si le lecteur actuel est valide
                if (storedLecteurName) {
                    // Vérifier si le lecteur existant correspond à un des lecteurs de la liste
                    var validLecteur = Array.from(lecteurSelect.options).find(option => option.textContent === storedLecteurName);
                    if (validLecteur) {
                        lecteurSelect.value = validLecteur.value; // Conserver le lien du lecteur correspondant
                        console.log(`Lecteur conservé depuis localStorage : \${storedLecteurName}`);
                    } else {
                        // Si le lecteur stocké n'est pas valide, sélectionner le premier lecteur
                        lecteurSelect.value = lecteurSelect.options[0].value; 
                        console.log(`Lecteur par défaut sélectionné : \${lecteurSelect.value}`);
                    }
                } else {
                    // Sélectionner le premier lecteur par défaut si aucun n'est stocké
                    lecteurSelect.value = lecteurSelect.options[0].value; 
                    console.log(`Lecteur par défaut sélectionné : \${lecteurSelect.value}`);
                }

                updateVideo(lecteurSelect.value); // Charger la vidéo avec le lecteur actuel
            } else {
                lecteurMessage.style.display = 'block'; // Afficher le message d'avertissement si aucun lecteur
            }
        }
    }
}

// Gestion du changement de sélection du lecteur
lecteurSelect.addEventListener('change', function() {
    var selectedLink = this.value;
    var selectedLecteurName = this.options[this.selectedIndex].textContent; // Récupérer le nom du lecteur sélectionné
    localStorage.setItem('currentLecteurName', selectedLecteurName); // Sauvegarder le nom du lecteur dans le localStorage
    updateVideo(selectedLink); // Mettre à jour la vidéo avec le nouveau lecteur
    console.log(`Lecteur actuel sauvegardé dans localStorage : \${selectedLecteurName}`);
});

// Initialisation : sélectionner automatiquement le premier épisode et mettre à jour les lecteurs
document.addEventListener('DOMContentLoaded', function() {
    var firstEpisodeNumber = Object.keys(episodeLinks)[0]; // Obtenir le premier épisode
    episodeSelect.value = firstEpisodeNumber; // Sélectionner le premier épisode

    updateLecteurs(firstEpisodeNumber); // Mettre à jour les lecteurs pour le premier épisode
});

// Gestion du changement de sélection de l'épisode
episodeSelect.addEventListener('change', function() {
    var episodeNumber = this.value;
    console.log(`Épisode sélectionné : \${episodeNumber}`);

    // Mettre à jour les lecteurs sans changer le lecteur sélectionné
    updateLecteurs(episodeNumber);
});
</script>





{% endblock %}
", "anime/voir_anime.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\anime\\voir_anime.html.twig");
    }
}
