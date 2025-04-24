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

/* navbar/footer.html.twig */
class __TwigTemplate_489b4528b8033c4dffc94340c2df2619 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<footer>
    <div class=\"footer-content\">
        <div class=\"footer-section about\">
            <h3>À propos</h3>
        </div>
    <div class=\"footer-section links\">
        <h3>DMCA</h3>
    </div>
    ";
        // line 12
        yield "</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navbar/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  52 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navbar/footer.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\navbar\\footer.html.twig");
    }
}
