<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7959ef5ed9cdd813f00e4daf8ae070426af728311cdf56baa99670839740c46d extends Twig_Template
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
        $__internal_72fed7b5c27479a9313e57c18fa9ab8494faf5857f04c5330d9121a5857fc1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fed7b5c27479a9313e57c18fa9ab8494faf5857f04c5330d9121a5857fc1bd->enter($__internal_72fed7b5c27479a9313e57c18fa9ab8494faf5857f04c5330d9121a5857fc1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e08ab1d20c291e23ae20ad026aefbdcfc55c93e26230cb9b52fd53b103746135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08ab1d20c291e23ae20ad026aefbdcfc55c93e26230cb9b52fd53b103746135->enter($__internal_e08ab1d20c291e23ae20ad026aefbdcfc55c93e26230cb9b52fd53b103746135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_72fed7b5c27479a9313e57c18fa9ab8494faf5857f04c5330d9121a5857fc1bd->leave($__internal_72fed7b5c27479a9313e57c18fa9ab8494faf5857f04c5330d9121a5857fc1bd_prof);

        
        $__internal_e08ab1d20c291e23ae20ad026aefbdcfc55c93e26230cb9b52fd53b103746135->leave($__internal_e08ab1d20c291e23ae20ad026aefbdcfc55c93e26230cb9b52fd53b103746135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
