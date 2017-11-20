<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e9ac447e871030633529a211e35a779f199b693ad1b3de372c905f648c1a9c12 extends Twig_Template
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
        $__internal_6a9e2b811443d5e06cb637e8433da14ad8ce3543ea4aeb5f84f82d5733666997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9e2b811443d5e06cb637e8433da14ad8ce3543ea4aeb5f84f82d5733666997->enter($__internal_6a9e2b811443d5e06cb637e8433da14ad8ce3543ea4aeb5f84f82d5733666997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_cc5e0a9b82e192976fd0916eee193f457abdc850b1db31fb8b7c4ffaec5285ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5e0a9b82e192976fd0916eee193f457abdc850b1db31fb8b7c4ffaec5285ae->enter($__internal_cc5e0a9b82e192976fd0916eee193f457abdc850b1db31fb8b7c4ffaec5285ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6a9e2b811443d5e06cb637e8433da14ad8ce3543ea4aeb5f84f82d5733666997->leave($__internal_6a9e2b811443d5e06cb637e8433da14ad8ce3543ea4aeb5f84f82d5733666997_prof);

        
        $__internal_cc5e0a9b82e192976fd0916eee193f457abdc850b1db31fb8b7c4ffaec5285ae->leave($__internal_cc5e0a9b82e192976fd0916eee193f457abdc850b1db31fb8b7c4ffaec5285ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
