<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_751b1e3df6cbabc12a9c69e27e69bcaddacfce5a6373207c9658f731b09e2fa6 extends Twig_Template
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
        $__internal_c1405bc5f54534b3bfec6c1893520a7503c3f8d65b2db9351124eb0a54c3b025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1405bc5f54534b3bfec6c1893520a7503c3f8d65b2db9351124eb0a54c3b025->enter($__internal_c1405bc5f54534b3bfec6c1893520a7503c3f8d65b2db9351124eb0a54c3b025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c871d8cc0e94a6217fac07664ace2cc0f20c22440af3462c73d9b653444ecce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c871d8cc0e94a6217fac07664ace2cc0f20c22440af3462c73d9b653444ecce0->enter($__internal_c871d8cc0e94a6217fac07664ace2cc0f20c22440af3462c73d9b653444ecce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c1405bc5f54534b3bfec6c1893520a7503c3f8d65b2db9351124eb0a54c3b025->leave($__internal_c1405bc5f54534b3bfec6c1893520a7503c3f8d65b2db9351124eb0a54c3b025_prof);

        
        $__internal_c871d8cc0e94a6217fac07664ace2cc0f20c22440af3462c73d9b653444ecce0->leave($__internal_c871d8cc0e94a6217fac07664ace2cc0f20c22440af3462c73d9b653444ecce0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
