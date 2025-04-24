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

/* manga_upload/index.html.twig */
class __TwigTemplate_59aef09cc89c9d900928f9a1edff5b85 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "manga_upload/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <h1 style=\"text-align: center; color: #fafafa; font-family: Arial, sans-serif;\">Créer un Manga</h1>
            <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_upload_form");
        yield "\" style=\"padding: 12px; display: flex; background-color: #43375b87; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;justify-content: center; width: 400px; margin: 50px auto;\">
                Publiez un épisode d'un manga ou un film.
            </a>
    <div style=\"max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\">
        <form action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_create");
        yield "\" method=\"post\" enctype=\"multipart/form-data\" style=\"display: flex; flex-direction: column;\">
            <!-- Champ caché pour l'ID -->

            <label for=\"title\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Titre :</label>
            <input type=\"text\" id=\"title\" name=\"title\" required style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\">

            <label for=\"description\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Description :</label>
            <textarea id=\"description\" name=\"description\" required style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc; height: 100px;\"></textarea>

            <label for=\"author\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Auteur :</label>
            <input type=\"text\" id=\"author\" name=\"author\" required style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\">

            <label for=\"photo\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Photo :</label>
            <input type=\"file\" id=\"photo\" name=\"photo\" accept=\"image/*\" required style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\" onchange=\"displayFileName()\">
            <p id=\"file-name\" style=\"color: #555;\"></p> <!-- Pour afficher le nom du fichier -->

            <button type=\"submit\" style=\"padding: 12px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;\">
                Créer le Manga
            </button>
        </form>
    </div>

    <script>
        function displayFileName() {
            const fileInput = document.getElementById('photo');
            const fileNameDisplay = document.getElementById('file-name');
            const fileName = fileInput.files[0] ? fileInput.files[0].name : '';
            fileNameDisplay.textContent = fileName ? `Fichier sélectionné : \${fileName}` : '';
        }
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "manga_upload/index.html.twig";
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
        return array (  68 => 9,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "manga_upload/index.html.twig", "/home/inmyscan.com/templates/manga_upload/index.html.twig");
    }
}
