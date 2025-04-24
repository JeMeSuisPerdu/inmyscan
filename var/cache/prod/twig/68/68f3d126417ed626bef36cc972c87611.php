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

/* anime/season_upload.html.twig */
class __TwigTemplate_68e461dcb73f1f5b5dbe8cc21d021cf7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "anime/season_upload.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Uploader des Liens par Saison";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <h1>Uploader des Liens pour une Saison</h1>

    <form action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anime_season_upload");
        yield "\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"manga_id\">ID du Manga:</label>
            <input type=\"text\" id=\"manga_id\" name=\"manga_id\" class=\"form-control\" required>
        </div>

        <div class=\"form-group\">
            <label for=\"saison_numero\">Numéro de la Saison:</label>
            <input type=\"number\" id=\"saison_numero\" name=\"saison_numero\" class=\"form-control\" required>
        </div>

        <div class=\"form-group\">
            <label for=\"is_film\">Est-ce un film ?</label>
            <input type=\"checkbox\" id=\"is_film\" name=\"is_film\" value=\"true\">
        </div>

        <h3>Ajouter les liens des lecteurs</h3>
        
        <div class=\"form-group\">
            <label for=\"lecteur1\">Liens pour Lecteur SIBNET (séparés par des virgules):</label>
            <textarea id=\"lecteur1\" name=\"lecteur1\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <div class=\"form-group\">
            <label for=\"lecteur2\">Liens pour Lecteur VIDMOLY (séparés par des virgules):</label>
            <textarea id=\"lecteur2\" name=\"lecteur2\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <div class=\"form-group\">
            <label for=\"lecteur3\">Liens pour Lecteur SENDVID (séparés par des virgules):</label>
            <textarea id=\"lecteur3\" name=\"lecteur3\" class=\"form-control\" rows=\"3\" placeholder=\"ex: lien1, lien2, lien3\"></textarea>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Uploader les Liens</button>
    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "anime/season_upload.html.twig";
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
        return array (  74 => 8,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "anime/season_upload.html.twig", "/home/inmyscan.com/templates/anime/season_upload.html.twig");
    }
}
