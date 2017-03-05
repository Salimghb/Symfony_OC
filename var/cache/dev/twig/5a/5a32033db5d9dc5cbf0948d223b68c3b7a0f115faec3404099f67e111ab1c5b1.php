<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6023dfddd742055927c2478bd8aca76cd5d258ed0deeafefe067b10a6c6dc2c0 extends Twig_Template
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
        $__internal_00f8274b3236b4ce2856c9cd80ed81df075be85b63a11e63f8e216996fefc58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f8274b3236b4ce2856c9cd80ed81df075be85b63a11e63f8e216996fefc58d->enter($__internal_00f8274b3236b4ce2856c9cd80ed81df075be85b63a11e63f8e216996fefc58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_acdd3f4097094d90d58b3ea569cb038ab78e4fdb95cc37e594a7db463277ace1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdd3f4097094d90d58b3ea569cb038ab78e4fdb95cc37e594a7db463277ace1->enter($__internal_acdd3f4097094d90d58b3ea569cb038ab78e4fdb95cc37e594a7db463277ace1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00f8274b3236b4ce2856c9cd80ed81df075be85b63a11e63f8e216996fefc58d->leave($__internal_00f8274b3236b4ce2856c9cd80ed81df075be85b63a11e63f8e216996fefc58d_prof);

        
        $__internal_acdd3f4097094d90d58b3ea569cb038ab78e4fdb95cc37e594a7db463277ace1->leave($__internal_acdd3f4097094d90d58b3ea569cb038ab78e4fdb95cc37e594a7db463277ace1_prof);

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
