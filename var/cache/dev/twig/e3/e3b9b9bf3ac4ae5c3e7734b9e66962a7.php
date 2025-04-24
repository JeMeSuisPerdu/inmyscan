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
class __TwigTemplate_c8bac71755fc43a6a982199e7d2703bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        // line 1
        yield "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 3, $this->source); })()));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  96 => 17,  89 => 15,  83 => 13,  80 => 12,  74 => 10,  71 => 9,  65 => 7,  63 => 6,  59 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% for url in urls %}
        <url>
            <loc>{{ url.loc }}</loc>
            {% if url.lastmod is defined and url.lastmod is not null %}
                <lastmod>{{ url.lastmod }}</lastmod>
            {% endif %}
            {% if url.changefreq is defined %}
                <changefreq>{{ url.changefreq }}</changefreq>
            {% endif %}
            {% if url.priority is defined %}
                <priority>{{ url.priority }}</priority>
            {% endif %}
        </url>
    {% endfor %}
</urlset>

", "sitemap/index.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\sitemap\\index.html.twig");
    }
}
