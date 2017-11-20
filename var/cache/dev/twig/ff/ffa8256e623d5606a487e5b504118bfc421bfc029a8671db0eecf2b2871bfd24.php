<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5ea30bcedebe5df94d003c6fbef9e97608a5d79ef9673e48fc3aa7a3c7fd648a extends Twig_Template
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
        $__internal_d8c43e682519cf12e7e9f8a44b328665d1e8cd99422a9e5c803477daf24c04f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c43e682519cf12e7e9f8a44b328665d1e8cd99422a9e5c803477daf24c04f3->enter($__internal_d8c43e682519cf12e7e9f8a44b328665d1e8cd99422a9e5c803477daf24c04f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7ac446f001293e6e18ffa42f4e5cbaf61aa9935cc9e56d0792fab8297aee9c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac446f001293e6e18ffa42f4e5cbaf61aa9935cc9e56d0792fab8297aee9c90->enter($__internal_7ac446f001293e6e18ffa42f4e5cbaf61aa9935cc9e56d0792fab8297aee9c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d8c43e682519cf12e7e9f8a44b328665d1e8cd99422a9e5c803477daf24c04f3->leave($__internal_d8c43e682519cf12e7e9f8a44b328665d1e8cd99422a9e5c803477daf24c04f3_prof);

        
        $__internal_7ac446f001293e6e18ffa42f4e5cbaf61aa9935cc9e56d0792fab8297aee9c90->leave($__internal_7ac446f001293e6e18ffa42f4e5cbaf61aa9935cc9e56d0792fab8297aee9c90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
