<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ec6d46555e2034d392cd4f045ddf46fc6f02ca06ac3658e287a7488bdcb299c3 extends Twig_Template
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
        $__internal_8a51b6a58f93c2c3f17ccc8b676015a12ce7c1fbd52b1ae5d106b3f4f469813d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a51b6a58f93c2c3f17ccc8b676015a12ce7c1fbd52b1ae5d106b3f4f469813d->enter($__internal_8a51b6a58f93c2c3f17ccc8b676015a12ce7c1fbd52b1ae5d106b3f4f469813d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_903d7364386d9deaf616eaebfded7842fbefadd2aa0e5053d69bf9009f932574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903d7364386d9deaf616eaebfded7842fbefadd2aa0e5053d69bf9009f932574->enter($__internal_903d7364386d9deaf616eaebfded7842fbefadd2aa0e5053d69bf9009f932574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8a51b6a58f93c2c3f17ccc8b676015a12ce7c1fbd52b1ae5d106b3f4f469813d->leave($__internal_8a51b6a58f93c2c3f17ccc8b676015a12ce7c1fbd52b1ae5d106b3f4f469813d_prof);

        
        $__internal_903d7364386d9deaf616eaebfded7842fbefadd2aa0e5053d69bf9009f932574->leave($__internal_903d7364386d9deaf616eaebfded7842fbefadd2aa0e5053d69bf9009f932574_prof);

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
