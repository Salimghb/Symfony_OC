<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b8db74e7388c9908fdb56448401f378844b9ff3ea808bac03bf574c8f6c49ddf extends Twig_Template
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
        $__internal_fe3ed9ebb9843e808d22bb980b4987f31ac7d885d4cd1bee0ad8f2dfc8d8cb0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3ed9ebb9843e808d22bb980b4987f31ac7d885d4cd1bee0ad8f2dfc8d8cb0c->enter($__internal_fe3ed9ebb9843e808d22bb980b4987f31ac7d885d4cd1bee0ad8f2dfc8d8cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_5a1eec75dd5e92227f38a1c1882229a133429df541c5d926627d319f4f59ede0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1eec75dd5e92227f38a1c1882229a133429df541c5d926627d319f4f59ede0->enter($__internal_5a1eec75dd5e92227f38a1c1882229a133429df541c5d926627d319f4f59ede0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe3ed9ebb9843e808d22bb980b4987f31ac7d885d4cd1bee0ad8f2dfc8d8cb0c->leave($__internal_fe3ed9ebb9843e808d22bb980b4987f31ac7d885d4cd1bee0ad8f2dfc8d8cb0c_prof);

        
        $__internal_5a1eec75dd5e92227f38a1c1882229a133429df541c5d926627d319f4f59ede0->leave($__internal_5a1eec75dd5e92227f38a1c1882229a133429df541c5d926627d319f4f59ede0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
