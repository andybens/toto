<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_0ad072fdc84edfb1cab4ab7cc8c8d33e34734693c37e9013f1c8d8dd0ec33637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8efdf41c383e858f14be5a6f1466a2a8a7ca9320fe1ad32b7f56d0889dd92b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8efdf41c383e858f14be5a6f1466a2a8a7ca9320fe1ad32b7f56d0889dd92b9f->enter($__internal_8efdf41c383e858f14be5a6f1466a2a8a7ca9320fe1ad32b7f56d0889dd92b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_4bb7318856e1f3aabbbb748ad992f5b16ed0b326b841f68b8935c61c92f8226a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb7318856e1f3aabbbb748ad992f5b16ed0b326b841f68b8935c61c92f8226a->enter($__internal_4bb7318856e1f3aabbbb748ad992f5b16ed0b326b841f68b8935c61c92f8226a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_8efdf41c383e858f14be5a6f1466a2a8a7ca9320fe1ad32b7f56d0889dd92b9f->leave($__internal_8efdf41c383e858f14be5a6f1466a2a8a7ca9320fe1ad32b7f56d0889dd92b9f_prof);

        
        $__internal_4bb7318856e1f3aabbbb748ad992f5b16ed0b326b841f68b8935c61c92f8226a->leave($__internal_4bb7318856e1f3aabbbb748ad992f5b16ed0b326b841f68b8935c61c92f8226a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
