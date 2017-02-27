<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_81494e1519c8eb68a477a6627cef51320fcef019083c1897a7c0aaf9e2116c29 extends Twig_Template
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
        $__internal_d25fb806d32a732193f5ba83330ce65107dc12cd4e132e15a74b2ab8572361cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25fb806d32a732193f5ba83330ce65107dc12cd4e132e15a74b2ab8572361cf->enter($__internal_d25fb806d32a732193f5ba83330ce65107dc12cd4e132e15a74b2ab8572361cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_49b368e9c57d06ea7a9d74546b4b87a27b6008c545302eef54c6de69836b093b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b368e9c57d06ea7a9d74546b4b87a27b6008c545302eef54c6de69836b093b->enter($__internal_49b368e9c57d06ea7a9d74546b4b87a27b6008c545302eef54c6de69836b093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d25fb806d32a732193f5ba83330ce65107dc12cd4e132e15a74b2ab8572361cf->leave($__internal_d25fb806d32a732193f5ba83330ce65107dc12cd4e132e15a74b2ab8572361cf_prof);

        
        $__internal_49b368e9c57d06ea7a9d74546b4b87a27b6008c545302eef54c6de69836b093b->leave($__internal_49b368e9c57d06ea7a9d74546b4b87a27b6008c545302eef54c6de69836b093b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
