<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_90cc28985f70a5565b2dfbe2fc2ae162ae28e880f88b6f3138a49f376b796536 extends Twig_Template
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
        $__internal_c90289c5232365995273676025e742d0d5532b65caa0ee4ef710d55b283bad96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90289c5232365995273676025e742d0d5532b65caa0ee4ef710d55b283bad96->enter($__internal_c90289c5232365995273676025e742d0d5532b65caa0ee4ef710d55b283bad96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a3252d806c6a385490355c51f240ee87fe46f1900ce073565f00fb6afc4e85b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3252d806c6a385490355c51f240ee87fe46f1900ce073565f00fb6afc4e85b8->enter($__internal_a3252d806c6a385490355c51f240ee87fe46f1900ce073565f00fb6afc4e85b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c90289c5232365995273676025e742d0d5532b65caa0ee4ef710d55b283bad96->leave($__internal_c90289c5232365995273676025e742d0d5532b65caa0ee4ef710d55b283bad96_prof);

        
        $__internal_a3252d806c6a385490355c51f240ee87fe46f1900ce073565f00fb6afc4e85b8->leave($__internal_a3252d806c6a385490355c51f240ee87fe46f1900ce073565f00fb6afc4e85b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
