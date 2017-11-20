<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1e29ab6e967ddb9b3f1e1deec02edbbbcc6411d9a717d3027e83ee1b1e675eb4 extends Twig_Template
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
        $__internal_e8769f0bdea81687f19e8f5de1e57c86b0ca8141ceaa15638c41d99f1bfa3089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8769f0bdea81687f19e8f5de1e57c86b0ca8141ceaa15638c41d99f1bfa3089->enter($__internal_e8769f0bdea81687f19e8f5de1e57c86b0ca8141ceaa15638c41d99f1bfa3089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0a59c489dc814743319012c3eb18e2a782bb89bef4b60f465576a412d22250f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a59c489dc814743319012c3eb18e2a782bb89bef4b60f465576a412d22250f7->enter($__internal_0a59c489dc814743319012c3eb18e2a782bb89bef4b60f465576a412d22250f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e8769f0bdea81687f19e8f5de1e57c86b0ca8141ceaa15638c41d99f1bfa3089->leave($__internal_e8769f0bdea81687f19e8f5de1e57c86b0ca8141ceaa15638c41d99f1bfa3089_prof);

        
        $__internal_0a59c489dc814743319012c3eb18e2a782bb89bef4b60f465576a412d22250f7->leave($__internal_0a59c489dc814743319012c3eb18e2a782bb89bef4b60f465576a412d22250f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
