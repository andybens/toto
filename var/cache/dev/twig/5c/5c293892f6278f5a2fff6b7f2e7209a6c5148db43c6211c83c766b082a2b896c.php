<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_224293414921d354fefd9e742e7bdb656ff7c9f59308665c78be46a64d2d3763 extends Twig_Template
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
        $__internal_c20e12da86977714158d9d2d7d9fdffd17cd62b8f9bbacae1e5c8fcbb02fff44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20e12da86977714158d9d2d7d9fdffd17cd62b8f9bbacae1e5c8fcbb02fff44->enter($__internal_c20e12da86977714158d9d2d7d9fdffd17cd62b8f9bbacae1e5c8fcbb02fff44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a699cca5d070785977ffb5c4ef56cf1941357e458e8f2a913095c3d28d684a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a699cca5d070785977ffb5c4ef56cf1941357e458e8f2a913095c3d28d684a76->enter($__internal_a699cca5d070785977ffb5c4ef56cf1941357e458e8f2a913095c3d28d684a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c20e12da86977714158d9d2d7d9fdffd17cd62b8f9bbacae1e5c8fcbb02fff44->leave($__internal_c20e12da86977714158d9d2d7d9fdffd17cd62b8f9bbacae1e5c8fcbb02fff44_prof);

        
        $__internal_a699cca5d070785977ffb5c4ef56cf1941357e458e8f2a913095c3d28d684a76->leave($__internal_a699cca5d070785977ffb5c4ef56cf1941357e458e8f2a913095c3d28d684a76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
