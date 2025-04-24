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

/* base.html.twig */
class __TwigTemplate_352828991b43a732bbc3283fcf76b5b3 extends Template
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
            'meta_description' => [$this, 'block_meta_description'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr-FR\">
<head>
    <meta charset=\"UTF-8\">
    
    ";
        // line 7
        yield "    <meta name=\"keywords\" content=\"inmyscan, anime, vostfr, scan, in my scan, vf, streaming, streaming vostfr, streaming\">
    
    ";
        // line 10
        yield "    ";
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        // line 14
        yield "    
    ";
        // line 16
        yield "    <meta property=\"og:title\" content=\"Bienvenue sur InMyScan\" />
    <meta property=\"og:description\" content=\"Regardez des animes, films et lisez des scans gratuitement en VOSTFR sur InMyScan.\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "uri", [], "any", false, false, false, 19), "html", null, true);
        yield "\" />
    <meta property=\"og:image\" content=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo.png"), "html", null, true);
        yield "\" />
    <meta property=\"og:site_name\" content=\"InMyScan\" />
    <meta property=\"og:locale\" content=\"fr_FR\" />

    ";
        // line 25
        yield "    <title>";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 28
        yield "    <link rel=\"canonical\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "uri", [], "any", false, false, false, 28), "html", null, true);
        yield "\">

    ";
        // line 31
        yield "    <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo.png"), "html", null, true);
        yield "\" type=\"image/png\">

    ";
        // line 34
        yield "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

    ";
        // line 37
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 41
        yield "    
    ";
        // line 43
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 46
        yield "</head>
<body>
    ";
        // line 48
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 49
        yield "</body>
</html>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "        <meta name=\"description\" content=\"Regardez des animes, films et lisez des scans gratuitement en VOSTFR sur InMyScan.\">
        <meta name=\"juicyads-site-verification\" content=\"5b1f0e8f895b0d6faae9f575ed4e0858\">
    ";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Bienvenue sur InMyScan";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
        ";
        // line 39
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("styles");
        yield "
    ";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    ";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  183 => 48,  175 => 44,  168 => 43,  161 => 39,  156 => 38,  149 => 37,  138 => 25,  131 => 11,  124 => 10,  117 => 49,  115 => 48,  111 => 46,  108 => 43,  105 => 41,  102 => 37,  98 => 34,  92 => 31,  86 => 28,  80 => 25,  73 => 20,  69 => 19,  64 => 16,  61 => 14,  58 => 10,  54 => 7,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/home/inmyscan.com/templates/base.html.twig");
    }
}
