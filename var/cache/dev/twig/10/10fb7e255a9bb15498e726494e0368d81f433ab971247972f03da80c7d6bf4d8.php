<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_9180046bf02ff38dd6a9835864ac35b1577928e942edfbf5a37fa0c3230f321f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12dd84a5d571de858c841fe414b1551c0e8fc8b5f424fc88e292d4bc19b29cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dd84a5d571de858c841fe414b1551c0e8fc8b5f424fc88e292d4bc19b29cf9->enter($__internal_12dd84a5d571de858c841fe414b1551c0e8fc8b5f424fc88e292d4bc19b29cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_fb624654352a24a9e3b40c5553207073263a10f5d42dc7aa25fc33c932253231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb624654352a24a9e3b40c5553207073263a10f5d42dc7aa25fc33c932253231->enter($__internal_fb624654352a24a9e3b40c5553207073263a10f5d42dc7aa25fc33c932253231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_12dd84a5d571de858c841fe414b1551c0e8fc8b5f424fc88e292d4bc19b29cf9->leave($__internal_12dd84a5d571de858c841fe414b1551c0e8fc8b5f424fc88e292d4bc19b29cf9_prof);

        
        $__internal_fb624654352a24a9e3b40c5553207073263a10f5d42dc7aa25fc33c932253231->leave($__internal_fb624654352a24a9e3b40c5553207073263a10f5d42dc7aa25fc33c932253231_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0c4dfc4ca436d877e7c1038c09ffaaaf5debbef00d58fab72684cc35ef6d173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c4dfc4ca436d877e7c1038c09ffaaaf5debbef00d58fab72684cc35ef6d173->enter($__internal_f0c4dfc4ca436d877e7c1038c09ffaaaf5debbef00d58fab72684cc35ef6d173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38446d8a455c95148e385cfa470c45b113feb807c50b1956e1fa102996e47366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38446d8a455c95148e385cfa470c45b113feb807c50b1956e1fa102996e47366->enter($__internal_38446d8a455c95148e385cfa470c45b113feb807c50b1956e1fa102996e47366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_38446d8a455c95148e385cfa470c45b113feb807c50b1956e1fa102996e47366->leave($__internal_38446d8a455c95148e385cfa470c45b113feb807c50b1956e1fa102996e47366_prof);

        
        $__internal_f0c4dfc4ca436d877e7c1038c09ffaaaf5debbef00d58fab72684cc35ef6d173->leave($__internal_f0c4dfc4ca436d877e7c1038c09ffaaaf5debbef00d58fab72684cc35ef6d173_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8071f442d77bfc7e02dd18ae2f602e8c32556f9ddc24d6801a53073b8a1b384b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8071f442d77bfc7e02dd18ae2f602e8c32556f9ddc24d6801a53073b8a1b384b->enter($__internal_8071f442d77bfc7e02dd18ae2f602e8c32556f9ddc24d6801a53073b8a1b384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_02078c73b37860b4c5af288da203e2fee13bb948c4f3a5b45962bbb6e6e0eb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02078c73b37860b4c5af288da203e2fee13bb948c4f3a5b45962bbb6e6e0eb95->enter($__internal_02078c73b37860b4c5af288da203e2fee13bb948c4f3a5b45962bbb6e6e0eb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_02078c73b37860b4c5af288da203e2fee13bb948c4f3a5b45962bbb6e6e0eb95->leave($__internal_02078c73b37860b4c5af288da203e2fee13bb948c4f3a5b45962bbb6e6e0eb95_prof);

        
        $__internal_8071f442d77bfc7e02dd18ae2f602e8c32556f9ddc24d6801a53073b8a1b384b->leave($__internal_8071f442d77bfc7e02dd18ae2f602e8c32556f9ddc24d6801a53073b8a1b384b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_63d9165e0861064b2ad3e85f2a3603588c638ab63e0807b211d27acc4847e28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d9165e0861064b2ad3e85f2a3603588c638ab63e0807b211d27acc4847e28f->enter($__internal_63d9165e0861064b2ad3e85f2a3603588c638ab63e0807b211d27acc4847e28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_176710979b1fdd379e0d67c3e8c355da4713f6f6c69d761d1bbb37f3556932c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176710979b1fdd379e0d67c3e8c355da4713f6f6c69d761d1bbb37f3556932c0->enter($__internal_176710979b1fdd379e0d67c3e8c355da4713f6f6c69d761d1bbb37f3556932c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_176710979b1fdd379e0d67c3e8c355da4713f6f6c69d761d1bbb37f3556932c0->leave($__internal_176710979b1fdd379e0d67c3e8c355da4713f6f6c69d761d1bbb37f3556932c0_prof);

        
        $__internal_63d9165e0861064b2ad3e85f2a3603588c638ab63e0807b211d27acc4847e28f->leave($__internal_63d9165e0861064b2ad3e85f2a3603588c638ab63e0807b211d27acc4847e28f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
