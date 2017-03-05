<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3c1e989bc1e6d036adbf4dd72cdd5c30b24d7b1eb719f118ff343db1b4c092b8 extends Twig_Template
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
        $__internal_60701d97dda70340694b8d718007217d2cc40677a3f98a497bc8d18b5e438764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60701d97dda70340694b8d718007217d2cc40677a3f98a497bc8d18b5e438764->enter($__internal_60701d97dda70340694b8d718007217d2cc40677a3f98a497bc8d18b5e438764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_65dbe5535bfc54998b6f24b1b68c24194c7c2847d33a864a2ce355022c8b1694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dbe5535bfc54998b6f24b1b68c24194c7c2847d33a864a2ce355022c8b1694->enter($__internal_65dbe5535bfc54998b6f24b1b68c24194c7c2847d33a864a2ce355022c8b1694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_60701d97dda70340694b8d718007217d2cc40677a3f98a497bc8d18b5e438764->leave($__internal_60701d97dda70340694b8d718007217d2cc40677a3f98a497bc8d18b5e438764_prof);

        
        $__internal_65dbe5535bfc54998b6f24b1b68c24194c7c2847d33a864a2ce355022c8b1694->leave($__internal_65dbe5535bfc54998b6f24b1b68c24194c7c2847d33a864a2ce355022c8b1694_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
