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

/* core/themes/mahi/templates/content/comment.html.twig */
class __TwigTemplate_13be4be6ca2ac548d3c40ab0348f77d0 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        $context["classes"] = ["single-comment", "js-comment", (((        // line 71
($context["status"] ?? null) != "published")) ? (("comment--" . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 71, $this->source))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["comment"] ?? null), "owner", [], "any", false, false, true, 72), "anonymous", [], "any", false, false, true, 72)) ? ("by-anonymous") : ("")), (((        // line 73
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 73)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 73), 73, $this->source)) . "-author")) : (""))];
        // line 76
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        yield ">
  ";
        // line 82
        yield "
  <header class=\"single-comment-header\">
    <div class=\"comment-picture\">
      ";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 85, $this->source), "html", null, true);
        yield "
      <mark class=\"hidden\" data-comment-timestamp=\"";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 86, $this->source), "html", null, true);
        yield "\"></mark>
    </div>";
        // line 88
        yield "    <div class=\"comment-header\">
      ";
        // line 89
        if (($context["title"] ?? null)) {
            // line 90
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 90, $this->source), "html", null, true);
            yield "
        <h3";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["single-comment-title"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 91, $this->source), "html", null, true);
            yield "</h3>
        ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 92, $this->source), "html", null, true);
            yield "
      ";
        }
        // line 94
        yield "      <div class=\"single-comment-meta\">
        <span>";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 95, $this->source), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 95, $this->source), "html", null, true);
        yield "</span>
        ";
        // line 96
        if (($context["parent"] ?? null)) {
            // line 97
            yield "          <p class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 97, $this->source), "html", null, true);
            yield "</p>
        ";
        }
        // line 99
        yield "      </div>";
        // line 100
        yield "    </div>";
        // line 101
        yield "  </header>
  <div";
        // line 102
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["comment-body"], "method", false, false, true, 102), 102, $this->source), "html", null, true);
        yield ">
    ";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 103, $this->source), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["status", "comment", "author_id", "commented_entity", "attributes", "user_picture", "new_indicator_timestamp", "title", "title_prefix", "title_attributes", "title_suffix", "author", "created", "parent", "content_attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/mahi/templates/content/comment.html.twig";
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
        return array (  116 => 103,  112 => 102,  109 => 101,  107 => 100,  105 => 99,  99 => 97,  97 => 96,  91 => 95,  88 => 94,  83 => 92,  77 => 91,  72 => 90,  70 => 89,  67 => 88,  63 => 86,  59 => 85,  54 => 82,  49 => 76,  47 => 73,  46 => 72,  45 => 71,  44 => 68,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/mahi/templates/content/comment.html.twig", "C:\\xampp\\htdocs\\drupal11\\core\\themes\\mahi\\templates\\content\\comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 68, "if" => 89);
        static $filters = array("escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
