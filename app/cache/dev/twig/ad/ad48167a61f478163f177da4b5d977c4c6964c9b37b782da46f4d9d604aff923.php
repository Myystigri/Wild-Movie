<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_99a211045f80846788171566e704a6e1a96a46448cea1d035f40d4ddf9565073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da0fdccedb86dd10504b4c286e5f7d1a6996eee7dd198781011e21d7e54e5da9 = $this->env->getExtension("native_profiler");
        $__internal_da0fdccedb86dd10504b4c286e5f7d1a6996eee7dd198781011e21d7e54e5da9->enter($__internal_da0fdccedb86dd10504b4c286e5f7d1a6996eee7dd198781011e21d7e54e5da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da0fdccedb86dd10504b4c286e5f7d1a6996eee7dd198781011e21d7e54e5da9->leave($__internal_da0fdccedb86dd10504b4c286e5f7d1a6996eee7dd198781011e21d7e54e5da9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_335f82c440e766839eb2f6d097d31393036820649e464068df77d44fbce64552 = $this->env->getExtension("native_profiler");
        $__internal_335f82c440e766839eb2f6d097d31393036820649e464068df77d44fbce64552->enter($__internal_335f82c440e766839eb2f6d097d31393036820649e464068df77d44fbce64552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_335f82c440e766839eb2f6d097d31393036820649e464068df77d44fbce64552->leave($__internal_335f82c440e766839eb2f6d097d31393036820649e464068df77d44fbce64552_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c960dd63fa5232c57905dafec7e8ac895a0bde2490e6dbfc3a8e9b590f266861 = $this->env->getExtension("native_profiler");
        $__internal_c960dd63fa5232c57905dafec7e8ac895a0bde2490e6dbfc3a8e9b590f266861->enter($__internal_c960dd63fa5232c57905dafec7e8ac895a0bde2490e6dbfc3a8e9b590f266861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c960dd63fa5232c57905dafec7e8ac895a0bde2490e6dbfc3a8e9b590f266861->leave($__internal_c960dd63fa5232c57905dafec7e8ac895a0bde2490e6dbfc3a8e9b590f266861_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfaa982e94776828b6e84eb081c307be70423d665fc4bb77bdfdc8e48892dc5e = $this->env->getExtension("native_profiler");
        $__internal_bfaa982e94776828b6e84eb081c307be70423d665fc4bb77bdfdc8e48892dc5e->enter($__internal_bfaa982e94776828b6e84eb081c307be70423d665fc4bb77bdfdc8e48892dc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bfaa982e94776828b6e84eb081c307be70423d665fc4bb77bdfdc8e48892dc5e->leave($__internal_bfaa982e94776828b6e84eb081c307be70423d665fc4bb77bdfdc8e48892dc5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
