<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e9b663f020a1f0b12ddc41e0f36ea90dec8742a12a567fa7202eab19f11c460c extends Twig_Template
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
        $__internal_8cc770c52496dab7e818bfe7223e56c8c3673a2030c821e815dab786ba2a3af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc770c52496dab7e818bfe7223e56c8c3673a2030c821e815dab786ba2a3af7->enter($__internal_8cc770c52496dab7e818bfe7223e56c8c3673a2030c821e815dab786ba2a3af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_770c5dfb4ee6d64a4c0c6d02b32ff6780a2029a315c941b977fd0632df948fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770c5dfb4ee6d64a4c0c6d02b32ff6780a2029a315c941b977fd0632df948fcd->enter($__internal_770c5dfb4ee6d64a4c0c6d02b32ff6780a2029a315c941b977fd0632df948fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8cc770c52496dab7e818bfe7223e56c8c3673a2030c821e815dab786ba2a3af7->leave($__internal_8cc770c52496dab7e818bfe7223e56c8c3673a2030c821e815dab786ba2a3af7_prof);

        
        $__internal_770c5dfb4ee6d64a4c0c6d02b32ff6780a2029a315c941b977fd0632df948fcd->leave($__internal_770c5dfb4ee6d64a4c0c6d02b32ff6780a2029a315c941b977fd0632df948fcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
