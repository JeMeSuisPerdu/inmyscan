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

/* scan_view/add.html.twig */
class __TwigTemplate_d5391d7f6845868a10e4f691a5f6a49f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "scan_view/add.html.twig", 1);
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
        yield "    <h1>Ajouter des Chapitres au Scan ID: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["scanId"] ?? null), "html", null, true);
        yield "</h1>
    <form action=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_chapitre", ["id" => ($context["scanId"] ?? null)]), "html", null, true);
        yield "\" method=\"POST\">
        <label for=\"eps\">Numéro de l'Épisode (ex: eps3) :</label>
        <input type=\"text\" id=\"eps\" name=\"eps\" required>

        <label for=\"liens\">Liens des Chapitres (séparés par une virgule) :</label>
        <textarea id=\"liens\" name=\"liens\" required></textarea>

        <button type=\"submit\">Ajouter les Chapitres</button>
    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scan_view/add.html.twig";
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
        return array (  63 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "scan_view/add.html.twig", "/home/inmyscan.com/templates/scan_view/add.html.twig");
    }
}
