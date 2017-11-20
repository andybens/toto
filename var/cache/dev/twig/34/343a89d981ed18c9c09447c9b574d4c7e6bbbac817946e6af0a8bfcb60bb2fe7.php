<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7aed6c1ae1820eb37138a3b7970a349f95dd8d29587fa2d204b2965b54f8abe1 extends Twig_Template
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
        $__internal_c10b628efe28be8bb980230c94670bcb4a0aada1ed8a4c83ce98f0c3cf002df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10b628efe28be8bb980230c94670bcb4a0aada1ed8a4c83ce98f0c3cf002df2->enter($__internal_c10b628efe28be8bb980230c94670bcb4a0aada1ed8a4c83ce98f0c3cf002df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b2d090ae47da2358983e62ac00c0de60fdadb3facac066ea83b3bedf7d40e9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d090ae47da2358983e62ac00c0de60fdadb3facac066ea83b3bedf7d40e9ac->enter($__internal_b2d090ae47da2358983e62ac00c0de60fdadb3facac066ea83b3bedf7d40e9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c10b628efe28be8bb980230c94670bcb4a0aada1ed8a4c83ce98f0c3cf002df2->leave($__internal_c10b628efe28be8bb980230c94670bcb4a0aada1ed8a4c83ce98f0c3cf002df2_prof);

        
        $__internal_b2d090ae47da2358983e62ac00c0de60fdadb3facac066ea83b3bedf7d40e9ac->leave($__internal_b2d090ae47da2358983e62ac00c0de60fdadb3facac066ea83b3bedf7d40e9ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
