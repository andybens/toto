<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_cf8502c00ea400f5fb71a4128f4dfffbd7d8a8389baa277f66bd42a8ee293918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ec25e9351a786036b163e3e6eb128d33987c154c7568982cd71c201c6a34487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec25e9351a786036b163e3e6eb128d33987c154c7568982cd71c201c6a34487->enter($__internal_1ec25e9351a786036b163e3e6eb128d33987c154c7568982cd71c201c6a34487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_a987fc9c24b2504587e1e012e784e00304c8cd66489890fe851d5846be120293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a987fc9c24b2504587e1e012e784e00304c8cd66489890fe851d5846be120293->enter($__internal_a987fc9c24b2504587e1e012e784e00304c8cd66489890fe851d5846be120293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec25e9351a786036b163e3e6eb128d33987c154c7568982cd71c201c6a34487->leave($__internal_1ec25e9351a786036b163e3e6eb128d33987c154c7568982cd71c201c6a34487_prof);

        
        $__internal_a987fc9c24b2504587e1e012e784e00304c8cd66489890fe851d5846be120293->leave($__internal_a987fc9c24b2504587e1e012e784e00304c8cd66489890fe851d5846be120293_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b3bcd33525d98d933d495c6f206d78a0ae0597b3f14d008830f2bd0e31e4bda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bcd33525d98d933d495c6f206d78a0ae0597b3f14d008830f2bd0e31e4bda7->enter($__internal_b3bcd33525d98d933d495c6f206d78a0ae0597b3f14d008830f2bd0e31e4bda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d7229e71310481ad824bd679f083568955ea5f5964fb2c7a033150d4d9c64612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7229e71310481ad824bd679f083568955ea5f5964fb2c7a033150d4d9c64612->enter($__internal_d7229e71310481ad824bd679f083568955ea5f5964fb2c7a033150d4d9c64612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d7229e71310481ad824bd679f083568955ea5f5964fb2c7a033150d4d9c64612->leave($__internal_d7229e71310481ad824bd679f083568955ea5f5964fb2c7a033150d4d9c64612_prof);

        
        $__internal_b3bcd33525d98d933d495c6f206d78a0ae0597b3f14d008830f2bd0e31e4bda7->leave($__internal_b3bcd33525d98d933d495c6f206d78a0ae0597b3f14d008830f2bd0e31e4bda7_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ed1d8cc92fb223604844878d1ce425745b7b0f3e24df53f35719c60c84564a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1d8cc92fb223604844878d1ce425745b7b0f3e24df53f35719c60c84564a92->enter($__internal_ed1d8cc92fb223604844878d1ce425745b7b0f3e24df53f35719c60c84564a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_93d963ca45f37617c5aaa7f7f64eec84587b025eb69237b8688a65aceb5a5c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d963ca45f37617c5aaa7f7f64eec84587b025eb69237b8688a65aceb5a5c3d->enter($__internal_93d963ca45f37617c5aaa7f7f64eec84587b025eb69237b8688a65aceb5a5c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_93d963ca45f37617c5aaa7f7f64eec84587b025eb69237b8688a65aceb5a5c3d->leave($__internal_93d963ca45f37617c5aaa7f7f64eec84587b025eb69237b8688a65aceb5a5c3d_prof);

        
        $__internal_ed1d8cc92fb223604844878d1ce425745b7b0f3e24df53f35719c60c84564a92->leave($__internal_ed1d8cc92fb223604844878d1ce425745b7b0f3e24df53f35719c60c84564a92_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f10f71efa1594b34fc8f82c3feeb7a77641141f14745a128ecfe9338245b1a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10f71efa1594b34fc8f82c3feeb7a77641141f14745a128ecfe9338245b1a70->enter($__internal_f10f71efa1594b34fc8f82c3feeb7a77641141f14745a128ecfe9338245b1a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_eb836862304ce26ecb76198bb84a9d7a7aeff0ea760574b2d62746a779dfb775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb836862304ce26ecb76198bb84a9d7a7aeff0ea760574b2d62746a779dfb775->enter($__internal_eb836862304ce26ecb76198bb84a9d7a7aeff0ea760574b2d62746a779dfb775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_eb836862304ce26ecb76198bb84a9d7a7aeff0ea760574b2d62746a779dfb775->leave($__internal_eb836862304ce26ecb76198bb84a9d7a7aeff0ea760574b2d62746a779dfb775_prof);

        
        $__internal_f10f71efa1594b34fc8f82c3feeb7a77641141f14745a128ecfe9338245b1a70->leave($__internal_f10f71efa1594b34fc8f82c3feeb7a77641141f14745a128ecfe9338245b1a70_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_94b23d3d85fd7e6d58c6383b31eb918c0b0491d415b9e493e34176b4237cbbf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b23d3d85fd7e6d58c6383b31eb918c0b0491d415b9e493e34176b4237cbbf8->enter($__internal_94b23d3d85fd7e6d58c6383b31eb918c0b0491d415b9e493e34176b4237cbbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_32a74e6b7e7c6b1ba6bf5355cce9a0146e47d72d731922e81e823dd1925263c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a74e6b7e7c6b1ba6bf5355cce9a0146e47d72d731922e81e823dd1925263c9->enter($__internal_32a74e6b7e7c6b1ba6bf5355cce9a0146e47d72d731922e81e823dd1925263c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_32a74e6b7e7c6b1ba6bf5355cce9a0146e47d72d731922e81e823dd1925263c9->leave($__internal_32a74e6b7e7c6b1ba6bf5355cce9a0146e47d72d731922e81e823dd1925263c9_prof);

        
        $__internal_94b23d3d85fd7e6d58c6383b31eb918c0b0491d415b9e493e34176b4237cbbf8->leave($__internal_94b23d3d85fd7e6d58c6383b31eb918c0b0491d415b9e493e34176b4237cbbf8_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_eb045a311c9aa9f794fb4e029282754daf3056d8b3cda2ab5807a38c96e529b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb045a311c9aa9f794fb4e029282754daf3056d8b3cda2ab5807a38c96e529b7->enter($__internal_eb045a311c9aa9f794fb4e029282754daf3056d8b3cda2ab5807a38c96e529b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_80a48fd3bc5c9f26ba09f5a09b9ec0449ae648e265b7e997cc6340584a8dd0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a48fd3bc5c9f26ba09f5a09b9ec0449ae648e265b7e997cc6340584a8dd0f8->enter($__internal_80a48fd3bc5c9f26ba09f5a09b9ec0449ae648e265b7e997cc6340584a8dd0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_80a48fd3bc5c9f26ba09f5a09b9ec0449ae648e265b7e997cc6340584a8dd0f8->leave($__internal_80a48fd3bc5c9f26ba09f5a09b9ec0449ae648e265b7e997cc6340584a8dd0f8_prof);

        
        $__internal_eb045a311c9aa9f794fb4e029282754daf3056d8b3cda2ab5807a38c96e529b7->leave($__internal_eb045a311c9aa9f794fb4e029282754daf3056d8b3cda2ab5807a38c96e529b7_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1ee88908b7ef02e1ee154659d7712dcda0b7059555fb298d569f1214ae606555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee88908b7ef02e1ee154659d7712dcda0b7059555fb298d569f1214ae606555->enter($__internal_1ee88908b7ef02e1ee154659d7712dcda0b7059555fb298d569f1214ae606555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_f57b8fde30ed26d6127ec073ee357e2f4b91a5ab85a71488cf91760bc80c41ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57b8fde30ed26d6127ec073ee357e2f4b91a5ab85a71488cf91760bc80c41ba->enter($__internal_f57b8fde30ed26d6127ec073ee357e2f4b91a5ab85a71488cf91760bc80c41ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_f57b8fde30ed26d6127ec073ee357e2f4b91a5ab85a71488cf91760bc80c41ba->leave($__internal_f57b8fde30ed26d6127ec073ee357e2f4b91a5ab85a71488cf91760bc80c41ba_prof);

        
        $__internal_1ee88908b7ef02e1ee154659d7712dcda0b7059555fb298d569f1214ae606555->leave($__internal_1ee88908b7ef02e1ee154659d7712dcda0b7059555fb298d569f1214ae606555_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6f82273c1bfecc004126223fb08a7ba71ce076113c3d2d23967e1cba7de4795f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f82273c1bfecc004126223fb08a7ba71ce076113c3d2d23967e1cba7de4795f->enter($__internal_6f82273c1bfecc004126223fb08a7ba71ce076113c3d2d23967e1cba7de4795f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5822901f05e9653598a43397b4d850b33077ae234900bc8037c361f5a0b11490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5822901f05e9653598a43397b4d850b33077ae234900bc8037c361f5a0b11490->enter($__internal_5822901f05e9653598a43397b4d850b33077ae234900bc8037c361f5a0b11490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_5822901f05e9653598a43397b4d850b33077ae234900bc8037c361f5a0b11490->leave($__internal_5822901f05e9653598a43397b4d850b33077ae234900bc8037c361f5a0b11490_prof);

        
        $__internal_6f82273c1bfecc004126223fb08a7ba71ce076113c3d2d23967e1cba7de4795f->leave($__internal_6f82273c1bfecc004126223fb08a7ba71ce076113c3d2d23967e1cba7de4795f_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7041d9e0bb4ab003757f35131f5cc05fdc905e232323478cd733af3def805a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7041d9e0bb4ab003757f35131f5cc05fdc905e232323478cd733af3def805a67->enter($__internal_7041d9e0bb4ab003757f35131f5cc05fdc905e232323478cd733af3def805a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bd96048a0cde178f2a0f362df6a67409bce113bd5b2777fe6f6ac81afee83dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd96048a0cde178f2a0f362df6a67409bce113bd5b2777fe6f6ac81afee83dc7->enter($__internal_bd96048a0cde178f2a0f362df6a67409bce113bd5b2777fe6f6ac81afee83dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_bd96048a0cde178f2a0f362df6a67409bce113bd5b2777fe6f6ac81afee83dc7->leave($__internal_bd96048a0cde178f2a0f362df6a67409bce113bd5b2777fe6f6ac81afee83dc7_prof);

        
        $__internal_7041d9e0bb4ab003757f35131f5cc05fdc905e232323478cd733af3def805a67->leave($__internal_7041d9e0bb4ab003757f35131f5cc05fdc905e232323478cd733af3def805a67_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_aff74c2eb0da21aae1e40917a15259636c010b07e2a1fdde4662f642002c1c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff74c2eb0da21aae1e40917a15259636c010b07e2a1fdde4662f642002c1c09->enter($__internal_aff74c2eb0da21aae1e40917a15259636c010b07e2a1fdde4662f642002c1c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b9024a1ec691b6e2778a471668f35c990b68e6cb013476d239e3721dc5510379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9024a1ec691b6e2778a471668f35c990b68e6cb013476d239e3721dc5510379->enter($__internal_b9024a1ec691b6e2778a471668f35c990b68e6cb013476d239e3721dc5510379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_b9024a1ec691b6e2778a471668f35c990b68e6cb013476d239e3721dc5510379->leave($__internal_b9024a1ec691b6e2778a471668f35c990b68e6cb013476d239e3721dc5510379_prof);

        
        $__internal_aff74c2eb0da21aae1e40917a15259636c010b07e2a1fdde4662f642002c1c09->leave($__internal_aff74c2eb0da21aae1e40917a15259636c010b07e2a1fdde4662f642002c1c09_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_48982c73593a921901a20bdacd2527a38060dd7a48a9877115040a38ddd1c69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48982c73593a921901a20bdacd2527a38060dd7a48a9877115040a38ddd1c69f->enter($__internal_48982c73593a921901a20bdacd2527a38060dd7a48a9877115040a38ddd1c69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5763e23023f8f064e1d201d689facea65ae0f925fb4ae7835c3d3ee8053f8ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5763e23023f8f064e1d201d689facea65ae0f925fb4ae7835c3d3ee8053f8ef8->enter($__internal_5763e23023f8f064e1d201d689facea65ae0f925fb4ae7835c3d3ee8053f8ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_5763e23023f8f064e1d201d689facea65ae0f925fb4ae7835c3d3ee8053f8ef8->leave($__internal_5763e23023f8f064e1d201d689facea65ae0f925fb4ae7835c3d3ee8053f8ef8_prof);

        
        $__internal_48982c73593a921901a20bdacd2527a38060dd7a48a9877115040a38ddd1c69f->leave($__internal_48982c73593a921901a20bdacd2527a38060dd7a48a9877115040a38ddd1c69f_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7d56c26c4708f7b7a9e16ae3987013030db9a74769cbb6adcbced7ea1ed27257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d56c26c4708f7b7a9e16ae3987013030db9a74769cbb6adcbced7ea1ed27257->enter($__internal_7d56c26c4708f7b7a9e16ae3987013030db9a74769cbb6adcbced7ea1ed27257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c0853dc10ba4e84819309ec35d692839abac69757e3557c46b6e4622c7360c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0853dc10ba4e84819309ec35d692839abac69757e3557c46b6e4622c7360c63->enter($__internal_c0853dc10ba4e84819309ec35d692839abac69757e3557c46b6e4622c7360c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_c0853dc10ba4e84819309ec35d692839abac69757e3557c46b6e4622c7360c63->leave($__internal_c0853dc10ba4e84819309ec35d692839abac69757e3557c46b6e4622c7360c63_prof);

        
        $__internal_7d56c26c4708f7b7a9e16ae3987013030db9a74769cbb6adcbced7ea1ed27257->leave($__internal_7d56c26c4708f7b7a9e16ae3987013030db9a74769cbb6adcbced7ea1ed27257_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b632f61802daaa317aef021722d19a235fd4463f3f303a877e109f4ec8a9dd84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b632f61802daaa317aef021722d19a235fd4463f3f303a877e109f4ec8a9dd84->enter($__internal_b632f61802daaa317aef021722d19a235fd4463f3f303a877e109f4ec8a9dd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_64adfbbfad8fe3fe4485d44c39d902b3fa03f0d8013a661a3dd6b8bd6f18b807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64adfbbfad8fe3fe4485d44c39d902b3fa03f0d8013a661a3dd6b8bd6f18b807->enter($__internal_64adfbbfad8fe3fe4485d44c39d902b3fa03f0d8013a661a3dd6b8bd6f18b807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_64adfbbfad8fe3fe4485d44c39d902b3fa03f0d8013a661a3dd6b8bd6f18b807->leave($__internal_64adfbbfad8fe3fe4485d44c39d902b3fa03f0d8013a661a3dd6b8bd6f18b807_prof);

        
        $__internal_b632f61802daaa317aef021722d19a235fd4463f3f303a877e109f4ec8a9dd84->leave($__internal_b632f61802daaa317aef021722d19a235fd4463f3f303a877e109f4ec8a9dd84_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f96c31043fabc8da52ca50e6b6256ebf5883f52d767ebe279673cda1f9e9289e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96c31043fabc8da52ca50e6b6256ebf5883f52d767ebe279673cda1f9e9289e->enter($__internal_f96c31043fabc8da52ca50e6b6256ebf5883f52d767ebe279673cda1f9e9289e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_93a8eabd3e7a8095746e0476e44fa7a4e9a67ff452a1c5ddac3aa882b6433aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a8eabd3e7a8095746e0476e44fa7a4e9a67ff452a1c5ddac3aa882b6433aec->enter($__internal_93a8eabd3e7a8095746e0476e44fa7a4e9a67ff452a1c5ddac3aa882b6433aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_93a8eabd3e7a8095746e0476e44fa7a4e9a67ff452a1c5ddac3aa882b6433aec->leave($__internal_93a8eabd3e7a8095746e0476e44fa7a4e9a67ff452a1c5ddac3aa882b6433aec_prof);

        
        $__internal_f96c31043fabc8da52ca50e6b6256ebf5883f52d767ebe279673cda1f9e9289e->leave($__internal_f96c31043fabc8da52ca50e6b6256ebf5883f52d767ebe279673cda1f9e9289e_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ca8e573eddf03f02869a66e4c7438e9cc63126c397e74a17df2d828180499bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8e573eddf03f02869a66e4c7438e9cc63126c397e74a17df2d828180499bff->enter($__internal_ca8e573eddf03f02869a66e4c7438e9cc63126c397e74a17df2d828180499bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_cc6164f1d4c1593af1a1f03a189c73b8732aa369ab0da2048c64665e6109462b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6164f1d4c1593af1a1f03a189c73b8732aa369ab0da2048c64665e6109462b->enter($__internal_cc6164f1d4c1593af1a1f03a189c73b8732aa369ab0da2048c64665e6109462b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_cc6164f1d4c1593af1a1f03a189c73b8732aa369ab0da2048c64665e6109462b->leave($__internal_cc6164f1d4c1593af1a1f03a189c73b8732aa369ab0da2048c64665e6109462b_prof);

        
        $__internal_ca8e573eddf03f02869a66e4c7438e9cc63126c397e74a17df2d828180499bff->leave($__internal_ca8e573eddf03f02869a66e4c7438e9cc63126c397e74a17df2d828180499bff_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_55ab9843e2c8b79725ba1728168416640412877ad4c0ac6214f3f5f5f8157645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ab9843e2c8b79725ba1728168416640412877ad4c0ac6214f3f5f5f8157645->enter($__internal_55ab9843e2c8b79725ba1728168416640412877ad4c0ac6214f3f5f5f8157645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_2c3f8d06ba585934413fe38326f8f473a25f42aee76ee329a296d5039ddb3455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3f8d06ba585934413fe38326f8f473a25f42aee76ee329a296d5039ddb3455->enter($__internal_2c3f8d06ba585934413fe38326f8f473a25f42aee76ee329a296d5039ddb3455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2c3f8d06ba585934413fe38326f8f473a25f42aee76ee329a296d5039ddb3455->leave($__internal_2c3f8d06ba585934413fe38326f8f473a25f42aee76ee329a296d5039ddb3455_prof);

        
        $__internal_55ab9843e2c8b79725ba1728168416640412877ad4c0ac6214f3f5f5f8157645->leave($__internal_55ab9843e2c8b79725ba1728168416640412877ad4c0ac6214f3f5f5f8157645_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1d4a717c899426a07a61e145bc0fff366ff4eac3dae2ec25d4b17f29e3ff2bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4a717c899426a07a61e145bc0fff366ff4eac3dae2ec25d4b17f29e3ff2bbf->enter($__internal_1d4a717c899426a07a61e145bc0fff366ff4eac3dae2ec25d4b17f29e3ff2bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a7b99a2a53130e4c2ecde1186f78ebbb6f07c58a672418995480bcc7cd852485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b99a2a53130e4c2ecde1186f78ebbb6f07c58a672418995480bcc7cd852485->enter($__internal_a7b99a2a53130e4c2ecde1186f78ebbb6f07c58a672418995480bcc7cd852485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a7b99a2a53130e4c2ecde1186f78ebbb6f07c58a672418995480bcc7cd852485->leave($__internal_a7b99a2a53130e4c2ecde1186f78ebbb6f07c58a672418995480bcc7cd852485_prof);

        
        $__internal_1d4a717c899426a07a61e145bc0fff366ff4eac3dae2ec25d4b17f29e3ff2bbf->leave($__internal_1d4a717c899426a07a61e145bc0fff366ff4eac3dae2ec25d4b17f29e3ff2bbf_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d47a04fcb7f71f0c0c7292610afc44b61049e05dc9d0161e5f803592afca5ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47a04fcb7f71f0c0c7292610afc44b61049e05dc9d0161e5f803592afca5ca5->enter($__internal_d47a04fcb7f71f0c0c7292610afc44b61049e05dc9d0161e5f803592afca5ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_07ed4dedae3394461588aba88d677ab42d3d7148ae3028310676040e8e8a3f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ed4dedae3394461588aba88d677ab42d3d7148ae3028310676040e8e8a3f71->enter($__internal_07ed4dedae3394461588aba88d677ab42d3d7148ae3028310676040e8e8a3f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_07ed4dedae3394461588aba88d677ab42d3d7148ae3028310676040e8e8a3f71->leave($__internal_07ed4dedae3394461588aba88d677ab42d3d7148ae3028310676040e8e8a3f71_prof);

        
        $__internal_d47a04fcb7f71f0c0c7292610afc44b61049e05dc9d0161e5f803592afca5ca5->leave($__internal_d47a04fcb7f71f0c0c7292610afc44b61049e05dc9d0161e5f803592afca5ca5_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_01a416c13b77e8e9c9e1b3a71967117c7bf7f61f4ddaa310e2be15a588d607ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a416c13b77e8e9c9e1b3a71967117c7bf7f61f4ddaa310e2be15a588d607ff->enter($__internal_01a416c13b77e8e9c9e1b3a71967117c7bf7f61f4ddaa310e2be15a588d607ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1483b89c99085f8f27f200c9c940870f9054ee435ec822bdf4ac9a053b27a6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1483b89c99085f8f27f200c9c940870f9054ee435ec822bdf4ac9a053b27a6e0->enter($__internal_1483b89c99085f8f27f200c9c940870f9054ee435ec822bdf4ac9a053b27a6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_1483b89c99085f8f27f200c9c940870f9054ee435ec822bdf4ac9a053b27a6e0->leave($__internal_1483b89c99085f8f27f200c9c940870f9054ee435ec822bdf4ac9a053b27a6e0_prof);

        
        $__internal_01a416c13b77e8e9c9e1b3a71967117c7bf7f61f4ddaa310e2be15a588d607ff->leave($__internal_01a416c13b77e8e9c9e1b3a71967117c7bf7f61f4ddaa310e2be15a588d607ff_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3422a0f313d5c784baf2439c70bf1150df8a8a9287ea73879bf584905bfb8295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3422a0f313d5c784baf2439c70bf1150df8a8a9287ea73879bf584905bfb8295->enter($__internal_3422a0f313d5c784baf2439c70bf1150df8a8a9287ea73879bf584905bfb8295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4970be99ebcbbbc2254b2c92859e699a2dcfa075e1eb97ec0ff6cf7b5e627588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4970be99ebcbbbc2254b2c92859e699a2dcfa075e1eb97ec0ff6cf7b5e627588->enter($__internal_4970be99ebcbbbc2254b2c92859e699a2dcfa075e1eb97ec0ff6cf7b5e627588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4970be99ebcbbbc2254b2c92859e699a2dcfa075e1eb97ec0ff6cf7b5e627588->leave($__internal_4970be99ebcbbbc2254b2c92859e699a2dcfa075e1eb97ec0ff6cf7b5e627588_prof);

        
        $__internal_3422a0f313d5c784baf2439c70bf1150df8a8a9287ea73879bf584905bfb8295->leave($__internal_3422a0f313d5c784baf2439c70bf1150df8a8a9287ea73879bf584905bfb8295_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6e136f74c64530bac63e1b955d2d91e33d4c7d5c12ce13b46c1ec55fc62db7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e136f74c64530bac63e1b955d2d91e33d4c7d5c12ce13b46c1ec55fc62db7cb->enter($__internal_6e136f74c64530bac63e1b955d2d91e33d4c7d5c12ce13b46c1ec55fc62db7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1ccf87a1fc9a98da4477be9cab7e950c6cdd784a649c9ea06c7c87c2dd2d38ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccf87a1fc9a98da4477be9cab7e950c6cdd784a649c9ea06c7c87c2dd2d38ea->enter($__internal_1ccf87a1fc9a98da4477be9cab7e950c6cdd784a649c9ea06c7c87c2dd2d38ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1ccf87a1fc9a98da4477be9cab7e950c6cdd784a649c9ea06c7c87c2dd2d38ea->leave($__internal_1ccf87a1fc9a98da4477be9cab7e950c6cdd784a649c9ea06c7c87c2dd2d38ea_prof);

        
        $__internal_6e136f74c64530bac63e1b955d2d91e33d4c7d5c12ce13b46c1ec55fc62db7cb->leave($__internal_6e136f74c64530bac63e1b955d2d91e33d4c7d5c12ce13b46c1ec55fc62db7cb_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_76e3a61e71fc24f73d2132ae7158a70be5ce14565c0aee7d59eb2619faf638b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e3a61e71fc24f73d2132ae7158a70be5ce14565c0aee7d59eb2619faf638b5->enter($__internal_76e3a61e71fc24f73d2132ae7158a70be5ce14565c0aee7d59eb2619faf638b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0cd9db0b5c2cc6177a1cd659e2ffa552712d949c901209b8f80441162b32205a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd9db0b5c2cc6177a1cd659e2ffa552712d949c901209b8f80441162b32205a->enter($__internal_0cd9db0b5c2cc6177a1cd659e2ffa552712d949c901209b8f80441162b32205a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0cd9db0b5c2cc6177a1cd659e2ffa552712d949c901209b8f80441162b32205a->leave($__internal_0cd9db0b5c2cc6177a1cd659e2ffa552712d949c901209b8f80441162b32205a_prof);

        
        $__internal_76e3a61e71fc24f73d2132ae7158a70be5ce14565c0aee7d59eb2619faf638b5->leave($__internal_76e3a61e71fc24f73d2132ae7158a70be5ce14565c0aee7d59eb2619faf638b5_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_07ab6e151fb0312e8a9223bc1396e0c71bf4d8680dd43ed4ca79a39fcc14114f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ab6e151fb0312e8a9223bc1396e0c71bf4d8680dd43ed4ca79a39fcc14114f->enter($__internal_07ab6e151fb0312e8a9223bc1396e0c71bf4d8680dd43ed4ca79a39fcc14114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3c67905359e411588569b9dbf08a8d5f94a21ef6fa2f7c3d1c1de5d8bfd1c719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c67905359e411588569b9dbf08a8d5f94a21ef6fa2f7c3d1c1de5d8bfd1c719->enter($__internal_3c67905359e411588569b9dbf08a8d5f94a21ef6fa2f7c3d1c1de5d8bfd1c719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3c67905359e411588569b9dbf08a8d5f94a21ef6fa2f7c3d1c1de5d8bfd1c719->leave($__internal_3c67905359e411588569b9dbf08a8d5f94a21ef6fa2f7c3d1c1de5d8bfd1c719_prof);

        
        $__internal_07ab6e151fb0312e8a9223bc1396e0c71bf4d8680dd43ed4ca79a39fcc14114f->leave($__internal_07ab6e151fb0312e8a9223bc1396e0c71bf4d8680dd43ed4ca79a39fcc14114f_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_36b8d35100a7add5211af73064b79cd69c0f9aac84a69fe42c1fd1892f83645b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b8d35100a7add5211af73064b79cd69c0f9aac84a69fe42c1fd1892f83645b->enter($__internal_36b8d35100a7add5211af73064b79cd69c0f9aac84a69fe42c1fd1892f83645b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e69a9cb49869532a517be6d7326ea16b9166b85d9605b9d101021f0614da4d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69a9cb49869532a517be6d7326ea16b9166b85d9605b9d101021f0614da4d0a->enter($__internal_e69a9cb49869532a517be6d7326ea16b9166b85d9605b9d101021f0614da4d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_e69a9cb49869532a517be6d7326ea16b9166b85d9605b9d101021f0614da4d0a->leave($__internal_e69a9cb49869532a517be6d7326ea16b9166b85d9605b9d101021f0614da4d0a_prof);

        
        $__internal_36b8d35100a7add5211af73064b79cd69c0f9aac84a69fe42c1fd1892f83645b->leave($__internal_36b8d35100a7add5211af73064b79cd69c0f9aac84a69fe42c1fd1892f83645b_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_fc4b2ffef86fdf59ccd85ec71a82ce0ba9fb6af51d385115a4c5da8965b9170d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4b2ffef86fdf59ccd85ec71a82ce0ba9fb6af51d385115a4c5da8965b9170d->enter($__internal_fc4b2ffef86fdf59ccd85ec71a82ce0ba9fb6af51d385115a4c5da8965b9170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7af8f8bc321b013c76ab26467c1d9d0d017e476d4232f4cb78231385a401c43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af8f8bc321b013c76ab26467c1d9d0d017e476d4232f4cb78231385a401c43c->enter($__internal_7af8f8bc321b013c76ab26467c1d9d0d017e476d4232f4cb78231385a401c43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_7af8f8bc321b013c76ab26467c1d9d0d017e476d4232f4cb78231385a401c43c->leave($__internal_7af8f8bc321b013c76ab26467c1d9d0d017e476d4232f4cb78231385a401c43c_prof);

        
        $__internal_fc4b2ffef86fdf59ccd85ec71a82ce0ba9fb6af51d385115a4c5da8965b9170d->leave($__internal_fc4b2ffef86fdf59ccd85ec71a82ce0ba9fb6af51d385115a4c5da8965b9170d_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f999ec95974f55dbf0a227544b426a41fc61cabfb6f1414b781a602ac8708111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f999ec95974f55dbf0a227544b426a41fc61cabfb6f1414b781a602ac8708111->enter($__internal_f999ec95974f55dbf0a227544b426a41fc61cabfb6f1414b781a602ac8708111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6390e8bf098ee4687035e330f615beef3297c10d80882b04c419a5ab3b2fc8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6390e8bf098ee4687035e330f615beef3297c10d80882b04c419a5ab3b2fc8ea->enter($__internal_6390e8bf098ee4687035e330f615beef3297c10d80882b04c419a5ab3b2fc8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6390e8bf098ee4687035e330f615beef3297c10d80882b04c419a5ab3b2fc8ea->leave($__internal_6390e8bf098ee4687035e330f615beef3297c10d80882b04c419a5ab3b2fc8ea_prof);

        
        $__internal_f999ec95974f55dbf0a227544b426a41fc61cabfb6f1414b781a602ac8708111->leave($__internal_f999ec95974f55dbf0a227544b426a41fc61cabfb6f1414b781a602ac8708111_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
