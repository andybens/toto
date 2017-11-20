<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d5d2d76372c373a5545a4be024a4886a45dd439a041aa85c13e88e7d4a8df97e extends Twig_Template
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
        $__internal_1e63c50d00127cef5adacaf9edeade9b8d05c6e652328fae868cb97a422ed476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e63c50d00127cef5adacaf9edeade9b8d05c6e652328fae868cb97a422ed476->enter($__internal_1e63c50d00127cef5adacaf9edeade9b8d05c6e652328fae868cb97a422ed476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f2d20ba6045fbcdccc4345fdd6153005fd4803df84c0a56d1dfb3ca623482ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d20ba6045fbcdccc4345fdd6153005fd4803df84c0a56d1dfb3ca623482ace->enter($__internal_f2d20ba6045fbcdccc4345fdd6153005fd4803df84c0a56d1dfb3ca623482ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1e63c50d00127cef5adacaf9edeade9b8d05c6e652328fae868cb97a422ed476->leave($__internal_1e63c50d00127cef5adacaf9edeade9b8d05c6e652328fae868cb97a422ed476_prof);

        
        $__internal_f2d20ba6045fbcdccc4345fdd6153005fd4803df84c0a56d1dfb3ca623482ace->leave($__internal_f2d20ba6045fbcdccc4345fdd6153005fd4803df84c0a56d1dfb3ca623482ace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
