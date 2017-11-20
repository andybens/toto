<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_64d43046d27fad40a670fe18243f1cc9b4e88da584b6dc93adf0029a7d388b03 extends Twig_Template
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
        $__internal_8afff10acbaf88df0eb13fc3beef1c41686218b2b2794cc6aec6b58442bcd44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afff10acbaf88df0eb13fc3beef1c41686218b2b2794cc6aec6b58442bcd44d->enter($__internal_8afff10acbaf88df0eb13fc3beef1c41686218b2b2794cc6aec6b58442bcd44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_eafc2c6885636f4a98e58017c6835505218a30dd6726fa8f6ab3e78c1f3748b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafc2c6885636f4a98e58017c6835505218a30dd6726fa8f6ab3e78c1f3748b5->enter($__internal_eafc2c6885636f4a98e58017c6835505218a30dd6726fa8f6ab3e78c1f3748b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8afff10acbaf88df0eb13fc3beef1c41686218b2b2794cc6aec6b58442bcd44d->leave($__internal_8afff10acbaf88df0eb13fc3beef1c41686218b2b2794cc6aec6b58442bcd44d_prof);

        
        $__internal_eafc2c6885636f4a98e58017c6835505218a30dd6726fa8f6ab3e78c1f3748b5->leave($__internal_eafc2c6885636f4a98e58017c6835505218a30dd6726fa8f6ab3e78c1f3748b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
