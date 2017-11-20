<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_18e75b76d05421b70df9b8105b811dfea1e5176a199affdf5965d57990ca70eb extends Twig_Template
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
        $__internal_4e7f3b28bc63f07bf88905fedfbee7cdf14926748c6b4299301f5d2c445852c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7f3b28bc63f07bf88905fedfbee7cdf14926748c6b4299301f5d2c445852c5->enter($__internal_4e7f3b28bc63f07bf88905fedfbee7cdf14926748c6b4299301f5d2c445852c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bacdc505c4081c9478987e5aac82798ab9a1b17254f6464dea42ef6b2cefbc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacdc505c4081c9478987e5aac82798ab9a1b17254f6464dea42ef6b2cefbc43->enter($__internal_bacdc505c4081c9478987e5aac82798ab9a1b17254f6464dea42ef6b2cefbc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4e7f3b28bc63f07bf88905fedfbee7cdf14926748c6b4299301f5d2c445852c5->leave($__internal_4e7f3b28bc63f07bf88905fedfbee7cdf14926748c6b4299301f5d2c445852c5_prof);

        
        $__internal_bacdc505c4081c9478987e5aac82798ab9a1b17254f6464dea42ef6b2cefbc43->leave($__internal_bacdc505c4081c9478987e5aac82798ab9a1b17254f6464dea42ef6b2cefbc43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
