<?php

/* form_table_layout.html.twig */
class __TwigTemplate_926791c6e6a086c3c6087bbba6775a7e75a34a034d1772e200c65a84bb01d286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cad8186a3a65ed65af372a6244e9ede28acf62d64b17f77408ef2bdc24cd193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cad8186a3a65ed65af372a6244e9ede28acf62d64b17f77408ef2bdc24cd193->enter($__internal_1cad8186a3a65ed65af372a6244e9ede28acf62d64b17f77408ef2bdc24cd193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_1a74b8ee5cce81bac4c173de8b5fc557e956b9be1f75b90a90b515d1189c9cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a74b8ee5cce81bac4c173de8b5fc557e956b9be1f75b90a90b515d1189c9cb0->enter($__internal_1a74b8ee5cce81bac4c173de8b5fc557e956b9be1f75b90a90b515d1189c9cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_1cad8186a3a65ed65af372a6244e9ede28acf62d64b17f77408ef2bdc24cd193->leave($__internal_1cad8186a3a65ed65af372a6244e9ede28acf62d64b17f77408ef2bdc24cd193_prof);

        
        $__internal_1a74b8ee5cce81bac4c173de8b5fc557e956b9be1f75b90a90b515d1189c9cb0->leave($__internal_1a74b8ee5cce81bac4c173de8b5fc557e956b9be1f75b90a90b515d1189c9cb0_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5025b0b18c7738eec1fd146ca7281fa0659d13a13ee26d8ba70f7d60e911d6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5025b0b18c7738eec1fd146ca7281fa0659d13a13ee26d8ba70f7d60e911d6d6->enter($__internal_5025b0b18c7738eec1fd146ca7281fa0659d13a13ee26d8ba70f7d60e911d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_15f3f61b6a54a8dee99453729d567f373f29fb051d29dbd4f654c7ffee6834dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f3f61b6a54a8dee99453729d567f373f29fb051d29dbd4f654c7ffee6834dd->enter($__internal_15f3f61b6a54a8dee99453729d567f373f29fb051d29dbd4f654c7ffee6834dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_15f3f61b6a54a8dee99453729d567f373f29fb051d29dbd4f654c7ffee6834dd->leave($__internal_15f3f61b6a54a8dee99453729d567f373f29fb051d29dbd4f654c7ffee6834dd_prof);

        
        $__internal_5025b0b18c7738eec1fd146ca7281fa0659d13a13ee26d8ba70f7d60e911d6d6->leave($__internal_5025b0b18c7738eec1fd146ca7281fa0659d13a13ee26d8ba70f7d60e911d6d6_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_11215124b359914977bffe390da8d8ac314f8bf2ba03bf347efa9ce9b7d81ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11215124b359914977bffe390da8d8ac314f8bf2ba03bf347efa9ce9b7d81ccc->enter($__internal_11215124b359914977bffe390da8d8ac314f8bf2ba03bf347efa9ce9b7d81ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_db6ca6be66f9965c83dcfff0d87b73262880946d18dbfe6f102daaae3be703dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6ca6be66f9965c83dcfff0d87b73262880946d18dbfe6f102daaae3be703dd->enter($__internal_db6ca6be66f9965c83dcfff0d87b73262880946d18dbfe6f102daaae3be703dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_db6ca6be66f9965c83dcfff0d87b73262880946d18dbfe6f102daaae3be703dd->leave($__internal_db6ca6be66f9965c83dcfff0d87b73262880946d18dbfe6f102daaae3be703dd_prof);

        
        $__internal_11215124b359914977bffe390da8d8ac314f8bf2ba03bf347efa9ce9b7d81ccc->leave($__internal_11215124b359914977bffe390da8d8ac314f8bf2ba03bf347efa9ce9b7d81ccc_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_080aca05b8f23d5bfd73bf1b63524dff52cff52fc74c816b105777cef4358f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080aca05b8f23d5bfd73bf1b63524dff52cff52fc74c816b105777cef4358f45->enter($__internal_080aca05b8f23d5bfd73bf1b63524dff52cff52fc74c816b105777cef4358f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_b66ee29ccf8e2804dcce859f2a22adb8de047c96c3c51fd8112d4bde2a8c4777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66ee29ccf8e2804dcce859f2a22adb8de047c96c3c51fd8112d4bde2a8c4777->enter($__internal_b66ee29ccf8e2804dcce859f2a22adb8de047c96c3c51fd8112d4bde2a8c4777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_b66ee29ccf8e2804dcce859f2a22adb8de047c96c3c51fd8112d4bde2a8c4777->leave($__internal_b66ee29ccf8e2804dcce859f2a22adb8de047c96c3c51fd8112d4bde2a8c4777_prof);

        
        $__internal_080aca05b8f23d5bfd73bf1b63524dff52cff52fc74c816b105777cef4358f45->leave($__internal_080aca05b8f23d5bfd73bf1b63524dff52cff52fc74c816b105777cef4358f45_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_cd3fd0b48cbf43d5d16a5b4101e354e13278a2bb97a307af4cd59236e6ee0896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3fd0b48cbf43d5d16a5b4101e354e13278a2bb97a307af4cd59236e6ee0896->enter($__internal_cd3fd0b48cbf43d5d16a5b4101e354e13278a2bb97a307af4cd59236e6ee0896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_f4729017cd1383697e9e3b3310a9da661d6582eb797b22585902462dceb85c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4729017cd1383697e9e3b3310a9da661d6582eb797b22585902462dceb85c07->enter($__internal_f4729017cd1383697e9e3b3310a9da661d6582eb797b22585902462dceb85c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_f4729017cd1383697e9e3b3310a9da661d6582eb797b22585902462dceb85c07->leave($__internal_f4729017cd1383697e9e3b3310a9da661d6582eb797b22585902462dceb85c07_prof);

        
        $__internal_cd3fd0b48cbf43d5d16a5b4101e354e13278a2bb97a307af4cd59236e6ee0896->leave($__internal_cd3fd0b48cbf43d5d16a5b4101e354e13278a2bb97a307af4cd59236e6ee0896_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
