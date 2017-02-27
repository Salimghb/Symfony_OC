<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_03e1df71ce0b6b49bc6927a38f198ba44bb38c50e09e9b103aa8ee49de9a3883 extends Twig_Template
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
        $__internal_c5d205e7ac2af523927e5483bed96c9a9e75a96e0fff590243ee740cf1cec260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d205e7ac2af523927e5483bed96c9a9e75a96e0fff590243ee740cf1cec260->enter($__internal_c5d205e7ac2af523927e5483bed96c9a9e75a96e0fff590243ee740cf1cec260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_65aa8a1d3cadb3c12fe4661e97c8915eb0ab9d50975fdea004e368529a3c9151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65aa8a1d3cadb3c12fe4661e97c8915eb0ab9d50975fdea004e368529a3c9151->enter($__internal_65aa8a1d3cadb3c12fe4661e97c8915eb0ab9d50975fdea004e368529a3c9151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c5d205e7ac2af523927e5483bed96c9a9e75a96e0fff590243ee740cf1cec260->leave($__internal_c5d205e7ac2af523927e5483bed96c9a9e75a96e0fff590243ee740cf1cec260_prof);

        
        $__internal_65aa8a1d3cadb3c12fe4661e97c8915eb0ab9d50975fdea004e368529a3c9151->leave($__internal_65aa8a1d3cadb3c12fe4661e97c8915eb0ab9d50975fdea004e368529a3c9151_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
