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

/* anime/new.html.twig */
class __TwigTemplate_bf0a2b01d69c505bc2822afc7604793c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anime/new.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html>
<head>
    <title>Upload Anime Links</title>
</head>
<body>
    <h1>Upload Anime Links</h1>

    <form action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anime_upload");
        yield "\" method=\"POST\">
        <label for=\"manga_id\">ID Manga:</label>
        <input style=\"width: 200px; height: 30px;\" type=\"number\" name=\"manga_id\" id=\"manga_id\" required>

        <label for=\"saison_numero\">Numéro de Saison:</label>
        <input style=\"width: 200px; height: 30px;\" type=\"number\" name=\"saison_numero\" id=\"saison_numero\" required>

        <label for=\"lecteur1\">Liens SIBNET (séparés par des virgules):</label>
        <textarea style=\"width: 1298px; height: 315px;\" name=\"lecteur1\" id=\"lecteur1\" required></textarea>

        <label for=\"lecteur2\">Liens VIDMOLY (séparés par des virgules):</label>
        <textarea style=\"width: 1298px; height: 315px;\" name=\"lecteur2\" id=\"lecteur2\" required></textarea>

        <label for=\"lecteur3\">Liens SENDVID (séparés par des virgules):</label>
        <textarea style=\"width: 1298px; height: 315px;\" name=\"lecteur3\" id=\"lecteur3\" required></textarea>

        <label for=\"is_film\">Cochez si c'est un film:</label>
        <input type=\"checkbox\" name=\"is_film\" id=\"is_film\" value=\"true\">

        <button type=\"submit\">Soumettre</button>
    </form>
</body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "anime/new.html.twig";
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
        return array (  52 => 11,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/anime/upload_form.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <title>Upload Anime Links</title>
</head>
<body>
    <h1>Upload Anime Links</h1>

    <form action=\"{{ path('anime_upload') }}\" method=\"POST\">
        <label for=\"manga_id\">ID Manga:</label>
        <input style=\"width: 200px; height: 30px;\" type=\"number\" name=\"manga_id\" id=\"manga_id\" required>

        <label for=\"saison_numero\">Numéro de Saison:</label>
        <input style=\"width: 200px; height: 30px;\" type=\"number\" name=\"saison_numero\" id=\"saison_numero\" required>

        <label for=\"lecteur1\">Liens SIBNET (séparés par des virgules):</label>
        <textarea style=\"width: 1298px; height: 315px;\" name=\"lecteur1\" id=\"lecteur1\" required></textarea>

        <label for=\"lecteur2\">Liens VIDMOLY (séparés par des virgules):</label>
        <textarea style=\"width: 1298px; height: 315px;\" name=\"lecteur2\" id=\"lecteur2\" required></textarea>

        <label for=\"lecteur3\">Liens SENDVID (séparés par des virgules):</label>
        <textarea style=\"width: 1298px; height: 315px;\" name=\"lecteur3\" id=\"lecteur3\" required></textarea>

        <label for=\"is_film\">Cochez si c'est un film:</label>
        <input type=\"checkbox\" name=\"is_film\" id=\"is_film\" value=\"true\">

        <button type=\"submit\">Soumettre</button>
    </form>
</body>
</html>

", "anime/new.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\anime\\new.html.twig");
    }
}
