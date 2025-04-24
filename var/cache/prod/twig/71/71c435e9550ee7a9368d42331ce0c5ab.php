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

/* anime/voir_anime.html.twig */
class __TwigTemplate_7f0ba35591d7e53c11af655ede633811 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "anime/voir_anime.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " | Anime VOSTFR";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <meta name=\"description\" content=\"Regardez ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield " en VOSTFR. Choisissez parmi différents lecteurs et épisodes. Profitez de l'anime dans la meilleure qualité.\" />
    <meta name=\"keywords\" content=\"anime, ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield ", VOSTFR, regarder anime, épisodes d'anime\" />
    <meta name=\"author\" content=\"Votre Nom\" />
    <meta http-equiv=\"Content-Language\" content=\"fr\" />
    <link rel=\"canonical\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_anime", ["mangaId" => CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 10), "saison" => 1]), "html", null, true);
        yield "\" />
";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "

    <div class=\"anime-lecture-container\">
        <h1>
            <a style=\"color: white;\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
        </h1>        
        <div class=\"anime-lecture-box\">
            <div class=\"anime-lecture-content-vid\">
                <div class=\"select-anime-lecteur\" style=\"display:flex;\">
                    <select id=\"episode-select\" aria-label=\"Sélectionnez un épisode\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["episodes"] ?? null));
        foreach ($context['_seq'] as $context["episodeNumber"] => $context["lecteurLinks"]) {
            // line 25
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["episodeNumber"], "html", null, true);
            yield "\">ÉPISODE ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["episodeNumber"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['episodeNumber'], $context['lecteurLinks'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "                    </select>
                    <select id=\"lecteur-select\" style=\"display: none;\" aria-label=\"Sélectionnez un lecteur\"></select>
                </div>
            </div>
        </div>
        <div id=\"video-container\" style=\"margin-top: 20px;\">
            <iframe id=\"video-iframe\" src=\"\" frameborder=\"0\" height=\"700\" width=\"1100\" allowfullscreen style=\"display: none;margin-bottom: 40px;\"></iframe>
        </div>
        <div id=\"lecteur-message\" style=\"display: none; color: red; margin-top: 10px;\">
            Essayez de changer de lecteur...
        </div>
    </div>
    ";
        // line 39
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "

    ";
        // line 42
        yield "    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"VideoObject\",
        \"name\": \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 46), "html", null, true);
        yield "\",
        \"description\": \"Regardez ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 47), "html", null, true);
        yield " en VOSTFR. Choisissez parmi différents lecteurs.\",
        \"thumbnailUrl\": \"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "photo", [], "any", false, false, false, 48))), "html", null, true);
        yield "\",
        \"uploadDate\": \"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\",
        \"duration\": \"PT1H30M\",  
        \"contentUrl\": \"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_anime", ["mangaId" => CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 51), "saison" => 1]), "html", null, true);
        yield "\"
    }
    </script>

    <script>
        var episodeLinks = ";
        // line 56
        yield json_encode(($context["episodes"] ?? null));
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
            }
        }

        // Fonction pour mettre à jour les lecteurs en fonction de l'épisode sélectionné
        function updateLecteurs(episodeNumber) {
            lecteurSelect.innerHTML = ''; // Réinitialiser
            lecteurSelect.style.display = 'none'; // Masquer le select des lecteurs

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

                        // Vérification si le lecteur actuel est valide
                        if (storedLecteurName) {
                            var validLecteur = Array.from(lecteurSelect.options).find(option => option.textContent === storedLecteurName);
                            if (validLecteur) {
                                lecteurSelect.value = validLecteur.value; // Conserver le lien du lecteur correspondant
                            } else {
                                lecteurSelect.value = lecteurSelect.options[0].value; // Sélectionner le premier lecteur
                            }
                        } else {
                            lecteurSelect.value = lecteurSelect.options[0].value; // Sélectionner le premier lecteur par défaut
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
            updateLecteurs(episodeNumber);
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
        return "anime/voir_anime.html.twig";
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
        return array (  181 => 56,  173 => 51,  168 => 49,  164 => 48,  160 => 47,  156 => 46,  150 => 42,  145 => 39,  131 => 27,  120 => 25,  116 => 24,  105 => 18,  97 => 14,  90 => 13,  83 => 10,  77 => 7,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "anime/voir_anime.html.twig", "/home/inmyscan.com/templates/anime/voir_anime.html.twig");
    }
}
