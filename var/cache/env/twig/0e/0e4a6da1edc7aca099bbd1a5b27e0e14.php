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

/* manga/profile.html.twig */
class __TwigTemplate_94ac7b07ceeba053f75346d06ee935ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manga/profile.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Profil du Manga - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<main class=\"profile-anime-section\">
    <h1>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
    <div class=\"image-profil-container\" style=\"height: 350px; margin: 0 auto;\">
        <img style=\"border: 1px solid #574e92; height: 100%; width: 100%; object-fit: cover;\" 
            src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 12, $this->source); })()), "photo", [], "any", false, false, false, 12))), "html", null, true);
        yield "\" 
            alt=\"Couverture de ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "\" class=\"clickable-image\">
    </div>

    <section class=\"main-profile-container\">
<button id=\"add-to-favorites\" class=\"favbtn add-to-favorites\">Ajouter aux Favoris</button>

        ";
        // line 19
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19))) {
            // line 20
            yield "            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
        ";
        } else {
            // line 22
            yield "            <p style=\"background:none;\">La description pour ce scan / anime n'est pas encore disponible... On la mettra peut-être un jour, qui sait ? 🥹</p>
        ";
        }
        // line 24
        yield "        
        <section class=\"profile-manga-roles\">
            <h2 style=\"width: 100%;background: #5d5d5d40;padding: 15px;border-radius: 10px;\">Rôles</h2>
            <ul>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 29
            yield "                    <li><strong style=\"font-weight: normal;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</strong></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "            </ul>
        </section>


        ";
        // line 35
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["saisons"]) || array_key_exists("saisons", $context) ? $context["saisons"] : (function () { throw new RuntimeError('Variable "saisons" does not exist.', 35, $this->source); })()))) {
            // line 36
            yield "        <h2 style=\"width: 100%;background: #5d5d5d40;padding: 15px;border-radius: 10px;\">Les saisons de l'anime</h2>
        <div class=\"saisons-container\">
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["saisons"]) || array_key_exists("saisons", $context) ? $context["saisons"] : (function () { throw new RuntimeError('Variable "saisons" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["saison_numero"] => $context["episodes"]) {
                // line 39
                yield "                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3>Saison ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["saison_numero"], "html", null, true);
                yield "</h3>
                        <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_anime", ["mangaId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "saison" => $context["saison_numero"]]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Voir les épisodes</a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['saison_numero'], $context['episodes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "        </div>
        ";
        }
        // line 48
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["scans"]) || array_key_exists("scans", $context) ? $context["scans"] : (function () { throw new RuntimeError('Variable "scans" does not exist.', 48, $this->source); })()))) {
            // line 49
            yield "            <h2 style=\"width: 100%;background: #5d5d5d40;padding: 15px;border-radius: 10px;\">Lire les scans</h2>
            <div class=\"saisons-container\">
                <div class=\"button-container\">
                    <div class=\"card\">
                        <h3>Voir les scans</h3>
                        <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn\">Voir les scans</a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 59
        yield "
        <p>L'auteur de <strong style=\"padding: 0 5px;\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 60, $this->source); })()), "titre", [], "any", false, false, false, 60), "html", null, true);
        yield "</strong> est : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 60, $this->source); })()), "author", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>

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
    
    // Vérifier si l'anime est déjà dans les favoris
    let animeExists = animeList.some(anime => anime.id === ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90), "html", null, true);
        yield ");

    // Si l'anime est déjà dans les favoris, appliquer la classe .btn-transparent
    if (animeExists) {
        document.getElementById('add-to-favorites').classList.add('btn-transparent');
    }

    document.getElementById('add-to-favorites').addEventListener('click', function() {
        // Vérifier à nouveau si l'anime est déjà dans les favoris
        animeExists = animeList.some(anime => anime.id === ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99), "html", null, true);
        yield ");

        if (!animeExists) {
            // Ajouter l'anime aux favoris
            animeList.push({
                id: ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104), "html", null, true);
        yield ",
                titre: '";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 105, $this->source); })()), "titre", [], "any", false, false, false, 105), "html", null, true);
        yield "'
            });

            // Mettre à jour le localStorage
            localStorage.setItem('animes', JSON.stringify(animeList));

            // Modifier le style du bouton pour indiquer que l'anime a été ajouté
            this.classList.add('btn-transparent');
        } else {
            // Retirer l'anime des favoris
            animeList = animeList.filter(anime => anime.id !== ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115), "html", null, true);
        yield ");

            // Mettre à jour le localStorage
            localStorage.setItem('animes', JSON.stringify(animeList));

            // Réinitialiser le style du bouton
            this.classList.remove('btn-transparent');
        }
    });
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
        return "manga/profile.html.twig";
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
        return array (  262 => 115,  249 => 105,  245 => 104,  237 => 99,  225 => 90,  190 => 60,  187 => 59,  179 => 54,  172 => 49,  169 => 48,  165 => 46,  155 => 42,  151 => 41,  147 => 39,  143 => 38,  139 => 36,  137 => 35,  131 => 31,  122 => 29,  118 => 28,  112 => 24,  108 => 22,  102 => 20,  100 => 19,  91 => 13,  87 => 12,  81 => 9,  76 => 7,  69 => 6,  54 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/profile/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Profil du Manga - {{ manga.titre }}{% endblock %}

{% block body %}
{{ navbar() }}
<main class=\"profile-anime-section\">
    <h1>{{ manga.titre }}</h1>
    <div class=\"image-profil-container\" style=\"height: 350px; margin: 0 auto;\">
        <img style=\"border: 1px solid #574e92; height: 100%; width: 100%; object-fit: cover;\" 
            src=\"{{ asset('img/anime_pfp/' ~ manga.photo) }}\" 
            alt=\"Couverture de {{ manga.titre }}\" class=\"clickable-image\">
    </div>

    <section class=\"main-profile-container\">
<button id=\"add-to-favorites\" class=\"favbtn add-to-favorites\">Ajouter aux Favoris</button>

        {% if manga.description is not empty %}
            <p>{{ manga.description }}</p>
        {% else %}
            <p style=\"background:none;\">La description pour ce scan / anime n'est pas encore disponible... On la mettra peut-être un jour, qui sait ? 🥹</p>
        {% endif %}
        
        <section class=\"profile-manga-roles\">
            <h2 style=\"width: 100%;background: #5d5d5d40;padding: 15px;border-radius: 10px;\">Rôles</h2>
            <ul>
                {% for role in roles %}
                    <li><strong style=\"font-weight: normal;\">{{ role }}</strong></li>
                {% endfor %}
            </ul>
        </section>


        {% if saisons is not empty %}
        <h2 style=\"width: 100%;background: #5d5d5d40;padding: 15px;border-radius: 10px;\">Les saisons de l'anime</h2>
        <div class=\"saisons-container\">
            {% for saison_numero, episodes in saisons %}
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3>Saison {{ saison_numero }}</h3>
                        <a href=\"{{ path('voir_anime', {'mangaId': manga.id, 'saison': saison_numero}) }}\" class=\"btn btn-primary\">Voir les épisodes</a>
                    </div>
                </div>
            {% endfor %}
        </div>
        {% endif %}
        {% if scans is not empty %}
            <h2 style=\"width: 100%;background: #5d5d5d40;padding: 15px;border-radius: 10px;\">Lire les scans</h2>
            <div class=\"saisons-container\">
                <div class=\"button-container\">
                    <div class=\"card\">
                        <h3>Voir les scans</h3>
                        <a href=\"{{ path('manga_scans', {'id': manga.id}) }}\" class=\"btn\">Voir les scans</a>
                    </div>
                </div>
            </div>
        {% endif %}

        <p>L'auteur de <strong style=\"padding: 0 5px;\">{{ manga.titre }}</strong> est : {{ manga.author }}</p>

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
    
    // Vérifier si l'anime est déjà dans les favoris
    let animeExists = animeList.some(anime => anime.id === {{ manga.id }});

    // Si l'anime est déjà dans les favoris, appliquer la classe .btn-transparent
    if (animeExists) {
        document.getElementById('add-to-favorites').classList.add('btn-transparent');
    }

    document.getElementById('add-to-favorites').addEventListener('click', function() {
        // Vérifier à nouveau si l'anime est déjà dans les favoris
        animeExists = animeList.some(anime => anime.id === {{ manga.id }});

        if (!animeExists) {
            // Ajouter l'anime aux favoris
            animeList.push({
                id: {{ manga.id }},
                titre: '{{ manga.titre }}'
            });

            // Mettre à jour le localStorage
            localStorage.setItem('animes', JSON.stringify(animeList));

            // Modifier le style du bouton pour indiquer que l'anime a été ajouté
            this.classList.add('btn-transparent');
        } else {
            // Retirer l'anime des favoris
            animeList = animeList.filter(anime => anime.id !== {{ manga.id }});

            // Mettre à jour le localStorage
            localStorage.setItem('animes', JSON.stringify(animeList));

            // Réinitialiser le style du bouton
            this.classList.remove('btn-transparent');
        }
    });
});
</script>
{% endblock %}
", "manga/profile.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\manga\\profile.html.twig");
    }
}
