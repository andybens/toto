<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d5e35d282fac4223e470cdc384a1c88be9876639b3d0b02c71c3b2ffbd77e338 extends Twig_Template
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
        $__internal_4916de7636e1b8ea51a6853adb506b2ba54f5060fb0c098c1e8c313d8915d2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4916de7636e1b8ea51a6853adb506b2ba54f5060fb0c098c1e8c313d8915d2c8->enter($__internal_4916de7636e1b8ea51a6853adb506b2ba54f5060fb0c098c1e8c313d8915d2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8b511336904101b1b7bc017ff9c4394095eb828dde406899d55c74fb9ba07d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b511336904101b1b7bc017ff9c4394095eb828dde406899d55c74fb9ba07d2b->enter($__internal_8b511336904101b1b7bc017ff9c4394095eb828dde406899d55c74fb9ba07d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4916de7636e1b8ea51a6853adb506b2ba54f5060fb0c098c1e8c313d8915d2c8->leave($__internal_4916de7636e1b8ea51a6853adb506b2ba54f5060fb0c098c1e8c313d8915d2c8_prof);

        
        $__internal_8b511336904101b1b7bc017ff9c4394095eb828dde406899d55c74fb9ba07d2b->leave($__internal_8b511336904101b1b7bc017ff9c4394095eb828dde406899d55c74fb9ba07d2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
