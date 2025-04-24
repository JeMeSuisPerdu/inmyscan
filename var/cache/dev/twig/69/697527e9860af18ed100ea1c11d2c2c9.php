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
class __TwigTemplate_89b2d2e7a09395861f03ce8b07ec9576 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga_upload/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manga_upload/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manga_upload/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  86 => 9,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 style=\"text-align: center; color: #fafafa; font-family: Arial, sans-serif;\">Créer un Manga</h1>
            <a href=\"{{path('episode_upload_form')}}\" style=\"padding: 12px; display: flex; background-color: #43375b87; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;justify-content: center; width: 400px; margin: 50px auto;\">
                Publiez un épisode d'un manga ou un film.
            </a>
    <div style=\"max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\">
        <form action=\"{{ path('manga_create') }}\" method=\"post\" enctype=\"multipart/form-data\" style=\"display: flex; flex-direction: column;\">
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
{% endblock %}
", "manga_upload/index.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\manga_upload\\index.html.twig");
    }
}
