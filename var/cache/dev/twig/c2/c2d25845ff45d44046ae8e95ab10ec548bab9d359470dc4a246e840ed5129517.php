<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f4c2062366b000d00c1eca96b68f4f1dc01ad8ddfd3c7aebb78f02d346ddd27c extends Twig_Template
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
        $__internal_c019f98fe89977ea2de204f0b40cd7134709dd6523515dcc87d4ce8a76137f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c019f98fe89977ea2de204f0b40cd7134709dd6523515dcc87d4ce8a76137f94->enter($__internal_c019f98fe89977ea2de204f0b40cd7134709dd6523515dcc87d4ce8a76137f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_fd0baef31ef8cd3502a93d2dea6f20cffb4737f8b70746c612fc7b11dc70e87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0baef31ef8cd3502a93d2dea6f20cffb4737f8b70746c612fc7b11dc70e87e->enter($__internal_fd0baef31ef8cd3502a93d2dea6f20cffb4737f8b70746c612fc7b11dc70e87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c019f98fe89977ea2de204f0b40cd7134709dd6523515dcc87d4ce8a76137f94->leave($__internal_c019f98fe89977ea2de204f0b40cd7134709dd6523515dcc87d4ce8a76137f94_prof);

        
        $__internal_fd0baef31ef8cd3502a93d2dea6f20cffb4737f8b70746c612fc7b11dc70e87e->leave($__internal_fd0baef31ef8cd3502a93d2dea6f20cffb4737f8b70746c612fc7b11dc70e87e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
