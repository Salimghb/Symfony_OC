<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e0f971210a2118e226bb84aee46a0abb2057b39af44c6fd69545236a42f8c632 extends Twig_Template
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
        $__internal_272de5822c785b66d27facc6a143820214133820d44d2f199fd2e2bc208eceee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272de5822c785b66d27facc6a143820214133820d44d2f199fd2e2bc208eceee->enter($__internal_272de5822c785b66d27facc6a143820214133820d44d2f199fd2e2bc208eceee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_db23e5d9b739ff459c2ae27ec3e06d880451d4f0d5a275a3f627675eb64b8a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db23e5d9b739ff459c2ae27ec3e06d880451d4f0d5a275a3f627675eb64b8a9a->enter($__internal_db23e5d9b739ff459c2ae27ec3e06d880451d4f0d5a275a3f627675eb64b8a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_272de5822c785b66d27facc6a143820214133820d44d2f199fd2e2bc208eceee->leave($__internal_272de5822c785b66d27facc6a143820214133820d44d2f199fd2e2bc208eceee_prof);

        
        $__internal_db23e5d9b739ff459c2ae27ec3e06d880451d4f0d5a275a3f627675eb64b8a9a->leave($__internal_db23e5d9b739ff459c2ae27ec3e06d880451d4f0d5a275a3f627675eb64b8a9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
