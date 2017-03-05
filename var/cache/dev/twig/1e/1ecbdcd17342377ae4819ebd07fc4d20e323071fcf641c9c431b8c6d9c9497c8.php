<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f124d37a05b2262eb56cd6ffd21cd10989e9b2c0d575529b58e1af382450dda8 extends Twig_Template
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
        $__internal_f4825a36e4a978c6ec72600fbddb2dc77114843d7e916e9294762fc810c3dd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4825a36e4a978c6ec72600fbddb2dc77114843d7e916e9294762fc810c3dd1a->enter($__internal_f4825a36e4a978c6ec72600fbddb2dc77114843d7e916e9294762fc810c3dd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_372b53f26fcc4f53bedb15d4904f520f58fef8fa2c354843924e568dead11c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372b53f26fcc4f53bedb15d4904f520f58fef8fa2c354843924e568dead11c1c->enter($__internal_372b53f26fcc4f53bedb15d4904f520f58fef8fa2c354843924e568dead11c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f4825a36e4a978c6ec72600fbddb2dc77114843d7e916e9294762fc810c3dd1a->leave($__internal_f4825a36e4a978c6ec72600fbddb2dc77114843d7e916e9294762fc810c3dd1a_prof);

        
        $__internal_372b53f26fcc4f53bedb15d4904f520f58fef8fa2c354843924e568dead11c1c->leave($__internal_372b53f26fcc4f53bedb15d4904f520f58fef8fa2c354843924e568dead11c1c_prof);

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
