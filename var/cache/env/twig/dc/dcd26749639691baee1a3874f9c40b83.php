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

/* scan_view/scan.html.twig */
class __TwigTemplate_489fb3adb927611237bbb4d0783beb69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scan_view/scan.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scan_view/scan.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Lecture du scan";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<div class=\"home-container container\">
    <section class=\"home-threads-group\">
        <h1 id=\"nameChapter\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })()), ["%20" => " "]), "html", null, true);
        yield "</h1>
        <h2 style=\"text-align:center; font-weight:normal;\">Chapitre ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chapter"]) || array_key_exists("chapter", $context) ? $context["chapter"] : (function () { throw new RuntimeError('Variable "chapter" does not exist.', 10, $this->source); })()), "html", null, true);
        yield " | Page ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</h2>
        <div class=\"cover-container\">
            <img style=\"width: 500px;\" src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coverImage"]) || array_key_exists("coverImage", $context) ? $context["coverImage"] : (function () { throw new RuntimeError('Variable "coverImage" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" alt=\"Couverture du Chapitre\" />
        </div>
        <div class=\"navigation-buttons\">
            <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapter_cover", ["name" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 15, $this->source); })()), "chapter" => (isset($context["chapter"]) || array_key_exists("chapter", $context) ? $context["chapter"] : (function () { throw new RuntimeError('Variable "chapter" does not exist.', 15, $this->source); })()), "page" => ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 15, $this->source); })()) > 1)) ? (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 15, $this->source); })()) - 1)) : (1))]), "html", null, true);
        yield "\">
                <button>Page précédente</button>
            </a>
            <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapter_cover", ["name" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 18, $this->source); })()), "chapter" => (isset($context["chapter"]) || array_key_exists("chapter", $context) ? $context["chapter"] : (function () { throw new RuntimeError('Variable "chapter" does not exist.', 18, $this->source); })()), "page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 18, $this->source); })()) + 1)]), "html", null, true);
        yield "\">
                <button>Page suivante</button>
            </a>
        </div>
    </section>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scan_view/scan.html.twig";
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
        return array (  104 => 18,  98 => 15,  92 => 12,  85 => 10,  81 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lecture du scan{% endblock %}

{% block body %}
{{ navbar() }}
<div class=\"home-container container\">
    <section class=\"home-threads-group\">
        <h1 id=\"nameChapter\">{{ name|replace({'%20': ' '}) }}</h1>
        <h2 style=\"text-align:center; font-weight:normal;\">Chapitre {{ chapter }} | Page {{ page }}</h2>
        <div class=\"cover-container\">
            <img style=\"width: 500px;\" src=\"{{ coverImage }}\" alt=\"Couverture du Chapitre\" />
        </div>
        <div class=\"navigation-buttons\">
            <a href=\"{{ path('chapter_cover', {'name': name, 'chapter': chapter, 'page': page > 1 ? page - 1 : 1}) }}\">
                <button>Page précédente</button>
            </a>
            <a href=\"{{ path('chapter_cover', {'name': name, 'chapter': chapter, 'page': page + 1}) }}\">
                <button>Page suivante</button>
            </a>
        </div>
    </section>
</div>
{% endblock %}

", "scan_view/scan.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\scan_view\\scan.html.twig");
    }
}
