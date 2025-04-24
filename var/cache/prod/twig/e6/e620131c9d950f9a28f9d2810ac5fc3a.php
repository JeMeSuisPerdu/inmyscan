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

/* error/notfound.html.twig */
class __TwigTemplate_be22eb0378753ad30edbd1f466962023 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "error/notfound.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Page Non Trouvée | Anime VOSTFR";
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
        yield "    <meta name=\"description\" content=\"Désolé, ce chapitre d'anime n'a pas pu être trouvé. Vérifiez l'URL ou retournez à la page d'accueil pour explorer d'autres contenus.\" />
    <meta name=\"robots\" content=\"noindex, nofollow\" />
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "<style>
    .error-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f8f9fa;
        color: #333;
        text-align: center;
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    
    .error-container h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #dc3545; /* Rouge pour indiquer une erreur */
    }
    
    .error-container p {
        font-size: 1.2rem;
        margin-bottom: 1.5rem;
    }

    .error-container button {
        padding: 10px 20px;
        font-size: 1rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .error-container button:hover {
        background-color: #0056b3;
    }
</style>

<div class=\"error-container\">
    <h1>ERR0R 404</h1>
    <p>Nous n'avons pas pu trouver cette page. Veuillez retourner à la page d'accueil.</p>
    <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
        <button>Retour à la page d'accueil</button>
    </a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error/notfound.html.twig";
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
        return array (  131 => 55,  85 => 11,  78 => 10,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "error/notfound.html.twig", "/home/inmyscan.com/templates/error/notfound.html.twig");
    }
}
