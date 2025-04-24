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
class __TwigTemplate_5748ba8a592efc2f7a41e727f4e30f8a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "scan_view/scan.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield " - Scan en VOSTFR Gratuit
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<h1 style=\"color:#ffda00d6;\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>

<div class=\"scan-chapter-container\">
    <select id=\"chapterSelector\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["chapters"] ?? null));
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
            if (($context["chapter"] == ($context["selectedChapter"] ?? null))) {
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
    <button id=\"prevChapter\" class=\"scan-buttons\">Chapitre Précédent</button>
    <button id=\"nextChapter\" class=\"scan-buttons\">Chapitre Suivant</button>
</div>
</div>

<div class=\"scan-img-container\" style=\"text-align: center;\">
    <ul style=\"padding:0;\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["selectedLinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 28
            yield "            ";
            $context["id"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["link"], "="));
            yield "  ";
            // line 29
            yield "            ";
            $context["thumbnailUrl"] = (("https://drive.google.com/thumbnail?id=" . ($context["id"] ?? null)) . "&sz=w1000");
            yield "  ";
            // line 30
            yield "            <li><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["thumbnailUrl"] ?? null), "html", null, true);
            yield "\" alt=\"Miniature\" /></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "    </ul>
</div>

<div style=\"text-align:center;\">
    <button id=\"prevChapter\" class=\"scan-buttons\">Chapitre Précédent</button>
    <button id=\"nextChapter\" class=\"scan-buttons\">Chapitre Suivant</button>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#chapterSelector').change(function() {
            const selectedChapter = \$(this).val();
            window.location.href = \"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "?chapter=\" + selectedChapter;
        });

        \$('#prevChapter').click(function() {
            const currentChapter = \$('#chapterSelector').val();
            const chapterIndex = ";
        // line 49
        yield json_encode(($context["chapters"] ?? null));
        yield ".indexOf(currentChapter);
            if (chapterIndex > 0) {
                const prevChapter = ";
        // line 51
        yield json_encode(($context["chapters"] ?? null));
        yield "[chapterIndex - 1];
                window.location.href = \"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 52)]), "html", null, true);
        yield "?chapter=\" + prevChapter;
            }
        });

        \$('#nextChapter').click(function() {
            const currentChapter = \$('#chapterSelector').val();
            const chapterIndex = ";
        // line 58
        yield json_encode(($context["chapters"] ?? null));
        yield ".indexOf(currentChapter);
            if (chapterIndex < ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["chapters"] ?? null)), "html", null, true);
        yield " - 1) {
                const nextChapter = ";
        // line 60
        yield json_encode(($context["chapters"] ?? null));
        yield "[chapterIndex + 1];
                window.location.href = \"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_scans", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["manga"] ?? null), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "?chapter=\" + nextChapter;
            }
        });
    });
</script>
";
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
        return array (  211 => 61,  207 => 60,  203 => 59,  199 => 58,  190 => 52,  186 => 51,  181 => 49,  173 => 44,  159 => 32,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  127 => 18,  110 => 15,  101 => 14,  84 => 13,  77 => 9,  73 => 8,  66 => 7,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "scan_view/scan.html.twig", "/home/inmyscan.com/templates/scan_view/scan.html.twig");
    }
}
