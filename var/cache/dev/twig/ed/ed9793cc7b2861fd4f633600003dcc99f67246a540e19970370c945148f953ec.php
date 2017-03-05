<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b9722f19ed09fef2b51b2dd70e6c854f2e25abf70a6d3bbb338dcfaddfc89139 extends Twig_Template
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
        $__internal_ccae15d0f1358b5eb54f6b3d8d1546ebfa00be7ab978e93b557a58504a08be4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccae15d0f1358b5eb54f6b3d8d1546ebfa00be7ab978e93b557a58504a08be4d->enter($__internal_ccae15d0f1358b5eb54f6b3d8d1546ebfa00be7ab978e93b557a58504a08be4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c0cc40eb3d7794ba196a87e2650d034536d06505984e273dfd3281bca46c58fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cc40eb3d7794ba196a87e2650d034536d06505984e273dfd3281bca46c58fb->enter($__internal_c0cc40eb3d7794ba196a87e2650d034536d06505984e273dfd3281bca46c58fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ccae15d0f1358b5eb54f6b3d8d1546ebfa00be7ab978e93b557a58504a08be4d->leave($__internal_ccae15d0f1358b5eb54f6b3d8d1546ebfa00be7ab978e93b557a58504a08be4d_prof);

        
        $__internal_c0cc40eb3d7794ba196a87e2650d034536d06505984e273dfd3281bca46c58fb->leave($__internal_c0cc40eb3d7794ba196a87e2650d034536d06505984e273dfd3281bca46c58fb_prof);

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
