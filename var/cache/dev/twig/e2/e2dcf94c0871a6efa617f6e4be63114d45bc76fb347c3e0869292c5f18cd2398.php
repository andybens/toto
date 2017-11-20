<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c20209b84a5125306a4f93e245b236c3b0f86d596853758303f9036ba0835174 extends Twig_Template
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
        $__internal_5f25613678adc3ef384dde6a102342749074064f8f07eab2543c0a17a305c3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f25613678adc3ef384dde6a102342749074064f8f07eab2543c0a17a305c3bb->enter($__internal_5f25613678adc3ef384dde6a102342749074064f8f07eab2543c0a17a305c3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d19a99b37e86f4fdd5e10789391cafae5386ac16fcdf03b0a99eb9fa8d744e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19a99b37e86f4fdd5e10789391cafae5386ac16fcdf03b0a99eb9fa8d744e9c->enter($__internal_d19a99b37e86f4fdd5e10789391cafae5386ac16fcdf03b0a99eb9fa8d744e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5f25613678adc3ef384dde6a102342749074064f8f07eab2543c0a17a305c3bb->leave($__internal_5f25613678adc3ef384dde6a102342749074064f8f07eab2543c0a17a305c3bb_prof);

        
        $__internal_d19a99b37e86f4fdd5e10789391cafae5386ac16fcdf03b0a99eb9fa8d744e9c->leave($__internal_d19a99b37e86f4fdd5e10789391cafae5386ac16fcdf03b0a99eb9fa8d744e9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
