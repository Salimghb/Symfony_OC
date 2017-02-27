<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_085a85f7e79281ea244521c36e11876f55a8fab2d97414eb6b08dbadae73c81a extends Twig_Template
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
        $__internal_b04f50262af0206a0ecc5828abc03b7d84ccd48ab9d2ab7d2bd9958d9c9a5b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04f50262af0206a0ecc5828abc03b7d84ccd48ab9d2ab7d2bd9958d9c9a5b43->enter($__internal_b04f50262af0206a0ecc5828abc03b7d84ccd48ab9d2ab7d2bd9958d9c9a5b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d4ef53a6c1a31f764fe309c8e71354f8ba7a6bede1c97294b6d52ff775d05033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ef53a6c1a31f764fe309c8e71354f8ba7a6bede1c97294b6d52ff775d05033->enter($__internal_d4ef53a6c1a31f764fe309c8e71354f8ba7a6bede1c97294b6d52ff775d05033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b04f50262af0206a0ecc5828abc03b7d84ccd48ab9d2ab7d2bd9958d9c9a5b43->leave($__internal_b04f50262af0206a0ecc5828abc03b7d84ccd48ab9d2ab7d2bd9958d9c9a5b43_prof);

        
        $__internal_d4ef53a6c1a31f764fe309c8e71354f8ba7a6bede1c97294b6d52ff775d05033->leave($__internal_d4ef53a6c1a31f764fe309c8e71354f8ba7a6bede1c97294b6d52ff775d05033_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
