<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1a9a810cc4e4d83f2b0ee64df9ff55e20ecd11517b7769394c18510474948ed2 extends Twig_Template
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
        $__internal_025d4e154b0ed168379c572f6b194aee235aba6f2d2c0933f2e2bebb54f392e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025d4e154b0ed168379c572f6b194aee235aba6f2d2c0933f2e2bebb54f392e9->enter($__internal_025d4e154b0ed168379c572f6b194aee235aba6f2d2c0933f2e2bebb54f392e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_114bf1961e2055e76f4323363baa9ccd3b5c1b390d2daa5163f280603d1630c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114bf1961e2055e76f4323363baa9ccd3b5c1b390d2daa5163f280603d1630c8->enter($__internal_114bf1961e2055e76f4323363baa9ccd3b5c1b390d2daa5163f280603d1630c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_025d4e154b0ed168379c572f6b194aee235aba6f2d2c0933f2e2bebb54f392e9->leave($__internal_025d4e154b0ed168379c572f6b194aee235aba6f2d2c0933f2e2bebb54f392e9_prof);

        
        $__internal_114bf1961e2055e76f4323363baa9ccd3b5c1b390d2daa5163f280603d1630c8->leave($__internal_114bf1961e2055e76f4323363baa9ccd3b5c1b390d2daa5163f280603d1630c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
