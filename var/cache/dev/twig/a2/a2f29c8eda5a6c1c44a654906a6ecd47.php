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

/* serie/voir_serie.html.twig */
class __TwigTemplate_8dc70e28a72a4130913fdaed9d0bdc39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serie/voir_serie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serie/voir_serie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "serie/voir_serie.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - Saison ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["saison"]) || array_key_exists("saison", $context) ? $context["saison"] : (function () { throw new RuntimeError('Variable "saison" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " | Streaming";
        
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
        yield "    <meta name=\"description\" content=\"Regardez tous les épisodes de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield " - Saison ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["saison"]) || array_key_exists("saison", $context) ? $context["saison"] : (function () { throw new RuntimeError('Variable "saison" does not exist.', 6, $this->source); })()), "html", null, true);
        yield ". Choisissez parmi différents lecteurs et épisodes. Streaming disponible.\" />
    <meta name=\"keywords\" content=\"serie, ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield ", saison ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["saison"]) || array_key_exists("saison", $context) ? $context["saison"] : (function () { throw new RuntimeError('Variable "saison" does not exist.', 7, $this->source); })()), "html", null, true);
        yield ", streaming, épisodes\" />
    <meta name=\"author\" content=\"Votre Nom\" />
    <meta http-equiv=\"Content-Language\" content=\"fr\" />
    <link rel=\"canonical\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_series", ["serieId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "saison" => (isset($context["saison"]) || array_key_exists("saison", $context) ? $context["saison"] : (function () { throw new RuntimeError('Variable "saison" does not exist.', 10, $this->source); })())]), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "

    <div class=\"film-lecture-container\">
        <h1>
            <a style=\"color: white;\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_series", ["serieId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "saison" => (isset($context["saison"]) || array_key_exists("saison", $context) ? $context["saison"] : (function () { throw new RuntimeError('Variable "saison" does not exist.', 18, $this->source); })())]), "html", null, true);
        yield "\">
                ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), "html", null, true);
        yield " - Saison ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["saison"]) || array_key_exists("saison", $context) ? $context["saison"] : (function () { throw new RuntimeError('Variable "saison" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "
            </a>
        </h1>
        <div class=\"film-lecture-box\">
            <div class=\"film-lecture-content-vid\">
                <div class=\"select-film-lecteur\" style=\"display:flex;\">
                    <select id=\"episode-select\" aria-label=\"Sélectionnez un épisode\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["episodes"]) || array_key_exists("episodes", $context) ? $context["episodes"] : (function () { throw new RuntimeError('Variable "episodes" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["episodeNumber"] => $context["lecteurs"]) {
            // line 27
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["episodeNumber"], "html", null, true);
            yield "\">ÉPISODE ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["episodeNumber"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['episodeNumber'], $context['lecteurs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "                    </select>
                    <select id=\"lecteur-select\" style=\"display: none;\" aria-label=\"Sélectionnez un lecteur\"></select>
                </div>
            </div>
        </div>

        <div id=\"video-container\" style=\"margin-top: 20px;\">
            <iframe id=\"video-iframe\" src=\"\" frameborder=\"0\" height=\"700\" width=\"1200\" allowfullscreen style=\"display: none; margin-bottom: 40px;\"></iframe>
        </div>
        <div id=\"lecteur-message\" style=\"display: none; color: red; margin-top: 10px;\">
            Essayez de changer de lecteur...
        </div>
    </div>

    ";
        // line 43
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "

    <script>
        var episodeLinks = ";
        // line 46
        yield json_encode((isset($context["episodes"]) || array_key_exists("episodes", $context) ? $context["episodes"] : (function () { throw new RuntimeError('Variable "episodes" does not exist.', 46, $this->source); })()));
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
                    var lecteurIndex = 0; // Initialise un compteur pour les lecteurs
                    for (var lecteur in lecteurs) {
                        if (lecteurs.hasOwnProperty(lecteur)) {
                            var option = document.createElement('option');
                            option.value = lecteurs[lecteur]; // Lien du lecteur
                            option.textContent = `Lecteur \${lecteurIndex}`; // Affiche \"Lecteur X\"
                            lecteurSelect.appendChild(option);
                            lecteurIndex++; // Incrémente le compteur
                        }
                    }
                    // Affichez le sélecteur de lecteurs uniquement s'il y a des lecteurs
                    if (lecteurSelect.options.length > 0) {
                        lecteurSelect.style.display = 'block';
                        lecteurMessage.style.display = 'none'; // Masquer le message d'avertissement

                        lecteurSelect.value = lecteurSelect.options[0].value; // Sélectionner le premier lecteur par défaut
                        updateVideo(lecteurSelect.value); // Charger la vidéo avec le lecteur actuel
                    } else {
                        lecteurMessage.style.display = 'block'; // Afficher le message d'avertissement si aucun lecteur
                    }
                }
            }
        }

        // Gestion du changement de sélection du lecteur
        lecteurSelect.addEventListener('change', function() {
            updateVideo(this.value); // Mettre à jour la vidéo avec le nouveau lecteur
        });

        // Initialisation : sélectionner automatiquement le premier épisode et mettre à jour les lecteurs
        document.addEventListener('DOMContentLoaded', function() {
            var firstEpisodeNumber = Object.keys(episodeLinks)[0]; // Obtenir le premier épisode
            episodeSelect.value = firstEpisodeNumber; // Sélectionner le premier épisode

            updateLecteurs(firstEpisodeNumber); // Mettre à jour les lecteurs pour le premier épisode
        });

        // Gestion du changement de sélection de l'épisode
        episodeSelect.addEventListener('change', function() {
            updateLecteurs(this.value);
        });
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
        return "serie/voir_serie.html.twig";
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
        return array (  206 => 46,  200 => 43,  184 => 29,  173 => 27,  169 => 26,  157 => 19,  153 => 18,  145 => 14,  132 => 13,  119 => 10,  111 => 7,  104 => 6,  91 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ serie.titre }} - Saison {{ saison }} | Streaming{% endblock %}

{% block meta %}
    <meta name=\"description\" content=\"Regardez tous les épisodes de {{ serie.titre }} - Saison {{ saison }}. Choisissez parmi différents lecteurs et épisodes. Streaming disponible.\" />
    <meta name=\"keywords\" content=\"serie, {{ serie.titre }}, saison {{ saison }}, streaming, épisodes\" />
    <meta name=\"author\" content=\"Votre Nom\" />
    <meta http-equiv=\"Content-Language\" content=\"fr\" />
    <link rel=\"canonical\" href=\"{{ path('voir_series', { 'serieId': serie.id, 'saison': saison }) }}\" />
{% endblock %}

{% block body %}
    {{ navbar() }}

    <div class=\"film-lecture-container\">
        <h1>
            <a style=\"color: white;\" href=\"{{ path('voir_series', { 'serieId': serie.id, 'saison': saison }) }}\">
                {{ serie.titre }} - Saison {{ saison }}
            </a>
        </h1>
        <div class=\"film-lecture-box\">
            <div class=\"film-lecture-content-vid\">
                <div class=\"select-film-lecteur\" style=\"display:flex;\">
                    <select id=\"episode-select\" aria-label=\"Sélectionnez un épisode\">
                        {% for episodeNumber, lecteurs in episodes %}
                            <option value=\"{{ episodeNumber }}\">ÉPISODE {{ episodeNumber }}</option>
                        {% endfor %}
                    </select>
                    <select id=\"lecteur-select\" style=\"display: none;\" aria-label=\"Sélectionnez un lecteur\"></select>
                </div>
            </div>
        </div>

        <div id=\"video-container\" style=\"margin-top: 20px;\">
            <iframe id=\"video-iframe\" src=\"\" frameborder=\"0\" height=\"700\" width=\"1200\" allowfullscreen style=\"display: none; margin-bottom: 40px;\"></iframe>
        </div>
        <div id=\"lecteur-message\" style=\"display: none; color: red; margin-top: 10px;\">
            Essayez de changer de lecteur...
        </div>
    </div>

    {{ footer() }}

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
            }
        }

        // Fonction pour mettre à jour les lecteurs en fonction de l'épisode sélectionné
        function updateLecteurs(episodeNumber) {
            lecteurSelect.innerHTML = ''; // Réinitialiser
            lecteurSelect.style.display = 'none'; // Masquer le select des lecteurs

            if (episodeNumber) {
                var lecteurs = episodeLinks[episodeNumber];
                if (lecteurs) { // Vérifiez si des lecteurs existent
                    var lecteurIndex = 0; // Initialise un compteur pour les lecteurs
                    for (var lecteur in lecteurs) {
                        if (lecteurs.hasOwnProperty(lecteur)) {
                            var option = document.createElement('option');
                            option.value = lecteurs[lecteur]; // Lien du lecteur
                            option.textContent = `Lecteur \${lecteurIndex}`; // Affiche \"Lecteur X\"
                            lecteurSelect.appendChild(option);
                            lecteurIndex++; // Incrémente le compteur
                        }
                    }
                    // Affichez le sélecteur de lecteurs uniquement s'il y a des lecteurs
                    if (lecteurSelect.options.length > 0) {
                        lecteurSelect.style.display = 'block';
                        lecteurMessage.style.display = 'none'; // Masquer le message d'avertissement

                        lecteurSelect.value = lecteurSelect.options[0].value; // Sélectionner le premier lecteur par défaut
                        updateVideo(lecteurSelect.value); // Charger la vidéo avec le lecteur actuel
                    } else {
                        lecteurMessage.style.display = 'block'; // Afficher le message d'avertissement si aucun lecteur
                    }
                }
            }
        }

        // Gestion du changement de sélection du lecteur
        lecteurSelect.addEventListener('change', function() {
            updateVideo(this.value); // Mettre à jour la vidéo avec le nouveau lecteur
        });

        // Initialisation : sélectionner automatiquement le premier épisode et mettre à jour les lecteurs
        document.addEventListener('DOMContentLoaded', function() {
            var firstEpisodeNumber = Object.keys(episodeLinks)[0]; // Obtenir le premier épisode
            episodeSelect.value = firstEpisodeNumber; // Sélectionner le premier épisode

            updateLecteurs(firstEpisodeNumber); // Mettre à jour les lecteurs pour le premier épisode
        });

        // Gestion du changement de sélection de l'épisode
        episodeSelect.addEventListener('change', function() {
            updateLecteurs(this.value);
        });
    </script>
{% endblock %}
", "serie/voir_serie.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\serie\\voir_serie.html.twig");
    }
}
