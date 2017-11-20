<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4782aa83db4e20729d3aa6885b5adff8e7f4d652bfe80ac294639d6c719d9347 extends Twig_Template
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
        $__internal_b9f7541bf831e36fe4dce8ea09151133cbb992e5f5e0e9a0d2c5f4ad01926859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f7541bf831e36fe4dce8ea09151133cbb992e5f5e0e9a0d2c5f4ad01926859->enter($__internal_b9f7541bf831e36fe4dce8ea09151133cbb992e5f5e0e9a0d2c5f4ad01926859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_017c04299e0329197960b455cb1090e23430842177b874ce91aa5c75c7a57350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017c04299e0329197960b455cb1090e23430842177b874ce91aa5c75c7a57350->enter($__internal_017c04299e0329197960b455cb1090e23430842177b874ce91aa5c75c7a57350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b9f7541bf831e36fe4dce8ea09151133cbb992e5f5e0e9a0d2c5f4ad01926859->leave($__internal_b9f7541bf831e36fe4dce8ea09151133cbb992e5f5e0e9a0d2c5f4ad01926859_prof);

        
        $__internal_017c04299e0329197960b455cb1090e23430842177b874ce91aa5c75c7a57350->leave($__internal_017c04299e0329197960b455cb1090e23430842177b874ce91aa5c75c7a57350_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
