<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_65d8d6c4f68c8e998b7a814363b2f4f13085cd8b85c75c002d89207411a53ee8 extends Twig_Template
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
        $__internal_7a3477bf3b503502350fdbac65dcd2b6c87e9f7b27f89f45300e0c11e02ef8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3477bf3b503502350fdbac65dcd2b6c87e9f7b27f89f45300e0c11e02ef8b7->enter($__internal_7a3477bf3b503502350fdbac65dcd2b6c87e9f7b27f89f45300e0c11e02ef8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_65bd705efa06ed0c678fc2ee7df3a163d85a39c8266d037d43eb88bb4009b771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bd705efa06ed0c678fc2ee7df3a163d85a39c8266d037d43eb88bb4009b771->enter($__internal_65bd705efa06ed0c678fc2ee7df3a163d85a39c8266d037d43eb88bb4009b771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7a3477bf3b503502350fdbac65dcd2b6c87e9f7b27f89f45300e0c11e02ef8b7->leave($__internal_7a3477bf3b503502350fdbac65dcd2b6c87e9f7b27f89f45300e0c11e02ef8b7_prof);

        
        $__internal_65bd705efa06ed0c678fc2ee7df3a163d85a39c8266d037d43eb88bb4009b771->leave($__internal_65bd705efa06ed0c678fc2ee7df3a163d85a39c8266d037d43eb88bb4009b771_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
