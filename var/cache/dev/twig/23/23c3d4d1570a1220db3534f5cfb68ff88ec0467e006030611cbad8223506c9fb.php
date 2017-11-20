<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_b5d124c6d9ebb69db4ef7ac4a737c0e6a5cb6a7b13ab936dd4ce261f5c9150c2 extends Twig_Template
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
        $__internal_b9d2d6ef7869b5d80ea6d4368ad1a500e5265ce9bd6f0352dc28cec1d59cf8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d2d6ef7869b5d80ea6d4368ad1a500e5265ce9bd6f0352dc28cec1d59cf8b3->enter($__internal_b9d2d6ef7869b5d80ea6d4368ad1a500e5265ce9bd6f0352dc28cec1d59cf8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_dc870df4454381a84c22279eb8c9e3821d0645a0b0ca3fb7c890018591e6c4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc870df4454381a84c22279eb8c9e3821d0645a0b0ca3fb7c890018591e6c4ca->enter($__internal_dc870df4454381a84c22279eb8c9e3821d0645a0b0ca3fb7c890018591e6c4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b9d2d6ef7869b5d80ea6d4368ad1a500e5265ce9bd6f0352dc28cec1d59cf8b3->leave($__internal_b9d2d6ef7869b5d80ea6d4368ad1a500e5265ce9bd6f0352dc28cec1d59cf8b3_prof);

        
        $__internal_dc870df4454381a84c22279eb8c9e3821d0645a0b0ca3fb7c890018591e6c4ca->leave($__internal_dc870df4454381a84c22279eb8c9e3821d0645a0b0ca3fb7c890018591e6c4ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
