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

/* @mahi/parts/footer.html.twig */
class __TwigTemplate_0172ec09f9a6827b1dba8f40d805005a extends Template
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
        // line 1
        yield "<footer class=\"footer dark\">
  <div class=\"container footer-container\">
    ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 3)) {
            // line 4
            yield "      <section class=\"footer-top footer-region\">
        ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            yield "
      </section>
    ";
        }
        // line 7
        yield "<!-- /footer-top -->
    ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 8)) {
            // line 9
            yield "      <section class=\"footer-blocks footer-region\">
        ";
            // line 10
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            yield "
      </section>
    ";
        }
        // line 12
        yield "<!-- /footer -->
    ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 13)) {
            // line 14
            yield "      <section class=\"footer-bottom footer-region\">
        ";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            yield "
      </section>
    ";
        }
        // line 17
        yield "<!-- /footer-bottom -->
    ";
        // line 18
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 19
            yield "    <section class=\"footer-bottom-last footer-region\">
      ";
            // line 20
            if (($context["copyright_text"] ?? null)) {
                // line 21
                yield "        <div class=\"copyright\">
          &copy; ";
                // line 22
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 22, $this->source), "html", null, true);
                yield ", All rights reserved.
        </div>
      ";
            }
            // line 24
            yield " <!-- end if copyright -->
        ";
            // line 25
            if (($context["all_icons_show"] ?? null)) {
                // line 26
                yield "          <div class=\"footer-social\">
            ";
                // line 27
                yield from                 $this->loadTemplate("@mahi/parts/social.html.twig", "@mahi/parts/footer.html.twig", 27)->unwrap()->yield($context);
                // line 28
                yield "          </div>
        ";
            }
            // line 29
            yield " <!-- end if all_icons_show -->
    </section><!-- /footer-bottom-last -->
    ";
        }
        // line 32
        yield "  </div><!-- /container -->
</footer>
";
        // line 34
        if (($context["scrolltotop_on"] ?? null)) {
            // line 35
            yield "<div class=\"scrolltop\"><i class=\"icon-arrow-up size-large\"></i></div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyright_text", "all_icons_show", "site_name", "scrolltotop_on"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@mahi/parts/footer.html.twig";
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
        return array (  133 => 35,  131 => 34,  127 => 32,  122 => 29,  118 => 28,  116 => 27,  113 => 26,  111 => 25,  108 => 24,  100 => 22,  97 => 21,  95 => 20,  92 => 19,  90 => 18,  87 => 17,  81 => 15,  78 => 14,  76 => 13,  73 => 12,  67 => 10,  64 => 9,  62 => 8,  59 => 7,  53 => 5,  50 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@mahi/parts/footer.html.twig", "C:\\xampp\\htdocs\\drupal11\\core\\themes\\mahi\\templates\\parts\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 27);
        static $filters = array("escape" => 5, "date" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
