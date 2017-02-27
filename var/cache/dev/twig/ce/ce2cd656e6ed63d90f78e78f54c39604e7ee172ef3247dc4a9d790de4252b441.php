<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5b8f90c2ac6d95cbf7f26559f55f8ac683ae3e6bef4926eb61ae5049c779c3bd extends Twig_Template
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
        $__internal_a8b02f49abf4d21dd2d9dbe8809d62cd1cbc34a7ab5fa89e7051388b535b6d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b02f49abf4d21dd2d9dbe8809d62cd1cbc34a7ab5fa89e7051388b535b6d6e->enter($__internal_a8b02f49abf4d21dd2d9dbe8809d62cd1cbc34a7ab5fa89e7051388b535b6d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cf180e9653f37bc9e32a713a79448bbfa45a2897a30ffb8bc3df01a2b200b902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf180e9653f37bc9e32a713a79448bbfa45a2897a30ffb8bc3df01a2b200b902->enter($__internal_cf180e9653f37bc9e32a713a79448bbfa45a2897a30ffb8bc3df01a2b200b902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a8b02f49abf4d21dd2d9dbe8809d62cd1cbc34a7ab5fa89e7051388b535b6d6e->leave($__internal_a8b02f49abf4d21dd2d9dbe8809d62cd1cbc34a7ab5fa89e7051388b535b6d6e_prof);

        
        $__internal_cf180e9653f37bc9e32a713a79448bbfa45a2897a30ffb8bc3df01a2b200b902->leave($__internal_cf180e9653f37bc9e32a713a79448bbfa45a2897a30ffb8bc3df01a2b200b902_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
