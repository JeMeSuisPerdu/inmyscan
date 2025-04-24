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

/* scan_view/scan.html.twig */
class __TwigTemplate_507120912cc963bfb7aea3a22b8161cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scan_view/scan.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scan_view/scan.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scan_view/scan.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield " - Scan en VOSTFR Gratuit
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<h1 style=\"color:#ffda00d6;text-align: center;\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>

<div class=\"scan-chapter-container\">
    <select id=\"chapterSelector\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 13, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["chapter"]) {
            // line 14
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["chapter"], "html", null, true);
            yield "\" ";
            if (($context["chapter"] == (isset($context["selectedChapter"]) || array_key_exists("selectedChapter", $context) ? $context["selectedChapter"] : (function () { throw new RuntimeError('Variable "selectedChapter" does not exist.', 14, $this->source); })()))) {
                yield "selected";
            }
            yield ">
                Chapitre ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15), "html", null, true);
            yield "  <!-- Affichage formaté des chapitres -->
            </option>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chapter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </select>
    <div>
        <button class=\"scan-buttons prevChapterBtn\">Chapitre Précédent</button>
        <button class=\"scan-buttons nextChapterBtn\">Chapitre Suivant</button>
    </div>
</div>

<div class=\"scan-img-container\" style=\"text-align: center; position: relative;\">
    <ul style=\"padding:0; display: inline-block;\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["selectedLinks"]) || array_key_exists("selectedLinks", $context) ? $context["selectedLinks"] : (function () { throw new RuntimeError('Variable "selectedLinks" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 28
            yield "            ";
            $context["id"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["link"], "="));
            yield "  ";
            // line 29
            yield "            ";
            $context["thumbnailUrl"] = (("https://drive.google.com/thumbnail?id=" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 29, $this->source); })())) . "&sz=w1000");
            yield "  ";
            // line 30
            yield "            <li>
                <img class=\"scan-img\" src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "\" alt=\"Miniature\" />
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </ul>
</div>

<div style=\"text-align:center;\">
    <button class=\"scan-buttons prevChapterBtn\">Chapitre Précédent</button>
    <button class=\"scan-buttons nextChapterBtn\">Chapitre Suivant</button>
</div>
";
        // line 41
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#chapterSelector').change(function() {
            const selectedChapter = \$(this).val();
            window.location.href = \"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        yield "?chapter=\" + selectedChapter;
        });

        // Boutons de navigation (précédent et suivant) pour le haut et le bas
        \$('.prevChapterBtn').click(function() {
            const currentChapter = \$('#chapterSelector').val();
            const chapterIndex = ";
        // line 54
        yield json_encode((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 54, $this->source); })()));
        yield ".indexOf(currentChapter);
            if (chapterIndex > 0) {
                const prevChapter = ";
        // line 56
        yield json_encode((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 56, $this->source); })()));
        yield "[chapterIndex - 1];
                window.location.href = \"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        yield "?chapter=\" + prevChapter;
            }
        });

        \$('.nextChapterBtn').click(function() {
            const currentChapter = \$('#chapterSelector').val();
            const chapterIndex = ";
        // line 63
        yield json_encode((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 63, $this->source); })()));
        yield ".indexOf(currentChapter);
            if (chapterIndex < ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 64, $this->source); })())), "html", null, true);
        yield " - 1) {
                const nextChapter = ";
        // line 65
        yield json_encode((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 65, $this->source); })()));
        yield "[chapterIndex + 1];
                window.location.href = \"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        yield "?chapter=\" + nextChapter;
            }
        });

        // Applique le comportement du curseur sur toutes les images
        \$('.scan-img').mousemove(function(e) {
            var imgWidth = \$(this).width();
            var cursorPos = e.offsetX;  // Position du curseur dans l'image

            // Si le curseur est sur la partie gauche
            if (cursorPos < imgWidth / 2) {
                \$(this).css('cursor', 'url(\"left-arrow.png\"), pointer');  // Curseur à gauche
            } else {
                \$(this).css('cursor', 'url(\"right-arrow.png\"), pointer');  // Curseur à droite
            }
        });

        // Clic sur l'image pour changer de chapitre
        \$('.scan-img').click(function(e) {
            var imgWidth = \$(this).width();
            var cursorPos = e.offsetX;  // Position du curseur dans l'image

            const currentChapter = \$('#chapterSelector').val();
            const chapterIndex = ";
        // line 89
        yield json_encode((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 89, $this->source); })()));
        yield ".indexOf(currentChapter);

            // Si on clique à gauche de l'image, on va au chapitre précédent
            if (cursorPos < imgWidth / 2 && chapterIndex > 0) {
                const prevChapter = ";
        // line 93
        yield json_encode((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 93, $this->source); })()));
        yield "[chapterIndex - 1];
                window.location.href = \"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        yield "?chapter=\" + prevChapter;
            }
            // Si on clique à droite de l'image, on va au chapitre suivant
            else if (cursorPos >= imgWidth / 2 && chapterIndex < ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 97, $this->source); })())), "html", null, true);
        yield " - 1) {
                const nextChapter = ";
        // line 98
        yield json_encode((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 98, $this->source); })()));
        yield "[chapterIndex + 1];
                window.location.href = \"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["manga"]) || array_key_exists("manga", $context) ? $context["manga"] : (function () { throw new RuntimeError('Variable "manga" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        yield "?chapter=\" + nextChapter;
            }
        });
    });
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
        return "scan_view/scan.html.twig";
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
        return array (  301 => 99,  297 => 98,  293 => 97,  287 => 94,  283 => 93,  276 => 89,  250 => 66,  246 => 65,  242 => 64,  238 => 63,  229 => 57,  225 => 56,  220 => 54,  211 => 48,  201 => 41,  192 => 34,  183 => 31,  180 => 30,  176 => 29,  172 => 28,  168 => 27,  157 => 18,  140 => 15,  131 => 14,  114 => 13,  107 => 9,  103 => 8,  90 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
{{ manga.titre }} - Scan en VOSTFR Gratuit
{% endblock %}

{% block body %}
{{navbar()}}
<h1 style=\"color:#ffda00d6;text-align: center;\">{{ manga.titre }}</h1>

<div class=\"scan-chapter-container\">
    <select id=\"chapterSelector\">
        {% for chapter in chapters %}
            <option value=\"{{ chapter }}\" {% if chapter == selectedChapter %}selected{% endif %}>
                Chapitre {{ loop.index }}  <!-- Affichage formaté des chapitres -->
            </option>
        {% endfor %}
    </select>
    <div>
        <button class=\"scan-buttons prevChapterBtn\">Chapitre Précédent</button>
        <button class=\"scan-buttons nextChapterBtn\">Chapitre Suivant</button>
    </div>
</div>

<div class=\"scan-img-container\" style=\"text-align: center; position: relative;\">
    <ul style=\"padding:0; display: inline-block;\">
        {% for link in selectedLinks %}
            {% set id = link|split('=')|last %}  {# Extraire l'ID de l'URL #}
            {% set thumbnailUrl = 'https://drive.google.com/thumbnail?id=' ~ id ~ '&sz=w1000' %}  {# Construire l'URL de miniature #}
            <li>
                <img class=\"scan-img\" src=\"{{ thumbnailUrl }}\" alt=\"Miniature\" />
            </li>
        {% endfor %}
    </ul>
</div>

<div style=\"text-align:center;\">
    <button class=\"scan-buttons prevChapterBtn\">Chapitre Précédent</button>
    <button class=\"scan-buttons nextChapterBtn\">Chapitre Suivant</button>
</div>
{{footer()}}

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#chapterSelector').change(function() {
            const selectedChapter = \$(this).val();
            window.location.href = \"{{ path('manga_scans', { id: manga.id }) }}?chapter=\" + selectedChapter;
        });

        // Boutons de navigation (précédent et suivant) pour le haut et le bas
        \$('.prevChapterBtn').click(function() {
            const currentChapter = \$('#chapterSelector').val();
            const chapterIndex = {{ chapters|json_encode|raw }}.indexOf(currentChapter);
            if (chapterIndex > 0) {
                const prevChapter = {{ chapters|json_encode|raw }}[chapterIndex - 1];
                window.location.href = \"{{ path('manga_scans', { id: manga.id }) }}?chapter=\" + prevChapter;
            }
        });

        \$('.nextChapterBtn').click(function() {
            const currentChapter = \$('#chapterSelector').val();
            const chapterIndex = {{ chapters|json_encode|raw }}.indexOf(currentChapter);
            if (chapterIndex < {{ chapters|length }} - 1) {
                const nextChapter = {{ chapters|json_encode|raw }}[chapterIndex + 1];
                window.location.href = \"{{ path('manga_scans', { id: manga.id }) }}?chapter=\" + nextChapter;
            }
        });

        // Applique le comportement du curseur sur toutes les images
        \$('.scan-img').mousemove(function(e) {
            var imgWidth = \$(this).width();
            var cursorPos = e.offsetX;  // Position du curseur dans l'image

            // Si le curseur est sur la partie gauche
            if (cursorPos < imgWidth / 2) {
                \$(this).css('cursor', 'url(\"left-arrow.png\"), pointer');  // Curseur à gauche
            } else {
                \$(this).css('cursor', 'url(\"right-arrow.png\"), pointer');  // Curseur à droite
            }
        });

        // Clic sur l'image pour changer de chapitre
        \$('.scan-img').click(function(e) {
            var imgWidth = \$(this).width();
            var cursorPos = e.offsetX;  // Position du curseur dans l'image

            const currentChapter = \$('#chapterSelector').val();
            const chapterIndex = {{ chapters|json_encode|raw }}.indexOf(currentChapter);

            // Si on clique à gauche de l'image, on va au chapitre précédent
            if (cursorPos < imgWidth / 2 && chapterIndex > 0) {
                const prevChapter = {{ chapters|json_encode|raw }}[chapterIndex - 1];
                window.location.href = \"{{ path('manga_scans', { id: manga.id }) }}?chapter=\" + prevChapter;
            }
            // Si on clique à droite de l'image, on va au chapitre suivant
            else if (cursorPos >= imgWidth / 2 && chapterIndex < {{ chapters|length }} - 1) {
                const nextChapter = {{ chapters|json_encode|raw }}[chapterIndex + 1];
                window.location.href = \"{{ path('manga_scans', { id: manga.id }) }}?chapter=\" + nextChapter;
            }
        });
    });
</script>

{% endblock %}
", "scan_view/scan.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\scan_view\\scan.html.twig");
    }
}
