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

/* sitemap/index.html.twig */
class __TwigTemplate_8a6054cf51cc520fefc722e9eac9e6b1 extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["urls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 4
            yield "        <url>
            <loc>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 5), "html", null, true);
            yield "</loc>
            ";
            // line 6
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["url"], "lastmod", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["url"], "lastmod", [], "any", false, false, false, 6)))) {
                // line 7
                yield "                <lastmod>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "lastmod", [], "any", false, false, false, 7), "html", null, true);
                yield "</lastmod>
            ";
            }
            // line 9
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["url"], "changefreq", [], "any", true, true, false, 9)) {
                // line 10
                yield "                <changefreq>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "changefreq", [], "any", false, false, false, 10), "html", null, true);
                yield "</changefreq>
            ";
            }
            // line 12
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["url"], "priority", [], "any", true, true, false, 12)) {
                // line 13
                yield "                <priority>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "priority", [], "any", false, false, false, 13), "html", null, true);
                yield "</priority>
            ";
            }
            // line 15
            yield "        </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['url'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "</urlset>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sitemap/index.html.twig";
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
        return array (  90 => 17,  83 => 15,  77 => 13,  74 => 12,  68 => 10,  65 => 9,  59 => 7,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sitemap/index.html.twig", "/home/inmyscan.com/templates/sitemap/index.html.twig");
    }
}
