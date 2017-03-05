<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_85b25b27080361146b493977e63d8cfc90c12c43f5bfd11f29079cce126d93cf extends Twig_Template
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
        $__internal_15b16a6c0b7f87008723da00f54395644c277da357f1fe0ef6c7555540a5cd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b16a6c0b7f87008723da00f54395644c277da357f1fe0ef6c7555540a5cd07->enter($__internal_15b16a6c0b7f87008723da00f54395644c277da357f1fe0ef6c7555540a5cd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a5e067df6cffc4d43875e2633f40fe028e42a407b8288be835c7925fb18ba45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e067df6cffc4d43875e2633f40fe028e42a407b8288be835c7925fb18ba45b->enter($__internal_a5e067df6cffc4d43875e2633f40fe028e42a407b8288be835c7925fb18ba45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_15b16a6c0b7f87008723da00f54395644c277da357f1fe0ef6c7555540a5cd07->leave($__internal_15b16a6c0b7f87008723da00f54395644c277da357f1fe0ef6c7555540a5cd07_prof);

        
        $__internal_a5e067df6cffc4d43875e2633f40fe028e42a407b8288be835c7925fb18ba45b->leave($__internal_a5e067df6cffc4d43875e2633f40fe028e42a407b8288be835c7925fb18ba45b_prof);

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
