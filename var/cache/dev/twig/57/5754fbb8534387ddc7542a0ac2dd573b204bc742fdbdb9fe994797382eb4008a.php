<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_afd69a60fbbab1d0a97c5a11b2c0f83d1cd2d06624156d9c07a98dfdcef570c0 extends Twig_Template
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
        $__internal_95075ec6a88f7d7c4170187665b61dfc7d053c48bdde8c092761248c7b30385f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95075ec6a88f7d7c4170187665b61dfc7d053c48bdde8c092761248c7b30385f->enter($__internal_95075ec6a88f7d7c4170187665b61dfc7d053c48bdde8c092761248c7b30385f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3d7b040d6ef17144b2576d8651a5c7ea849a716bafffd560fe3d17a035f095b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7b040d6ef17144b2576d8651a5c7ea849a716bafffd560fe3d17a035f095b7->enter($__internal_3d7b040d6ef17144b2576d8651a5c7ea849a716bafffd560fe3d17a035f095b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_95075ec6a88f7d7c4170187665b61dfc7d053c48bdde8c092761248c7b30385f->leave($__internal_95075ec6a88f7d7c4170187665b61dfc7d053c48bdde8c092761248c7b30385f_prof);

        
        $__internal_3d7b040d6ef17144b2576d8651a5c7ea849a716bafffd560fe3d17a035f095b7->leave($__internal_3d7b040d6ef17144b2576d8651a5c7ea849a716bafffd560fe3d17a035f095b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
