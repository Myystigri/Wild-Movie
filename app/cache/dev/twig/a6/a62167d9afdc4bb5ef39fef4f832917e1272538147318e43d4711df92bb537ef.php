<?php

/* post/index.html.twig */
class __TwigTemplate_e7434aa03e3073776c8f84ed41b229f312735be02c1e5678fecb9e25a10f1e9f extends Twig_Template
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
        $__internal_f29ded321c98c3e30adfae2aba9c61805d4509e87b714a82be9a574632da8c8c = $this->env->getExtension("native_profiler");
        $__internal_f29ded321c98c3e30adfae2aba9c61805d4509e87b714a82be9a574632da8c8c->enter($__internal_f29ded321c98c3e30adfae2aba9c61805d4509e87b714a82be9a574632da8c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab"))));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    <div class=\"commentaire\">
        <p>Commentaire de : <b>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "username", array(), "array"), "html", null, true);
            echo "</b></p>
        <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array(), "array"), "html", null, true);
            echo "</p>
        <p>Publié le ";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array(), "array"), "m/d/Y à H:i"), "html", null, true);
            echo " </p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f29ded321c98c3e30adfae2aba9c61805d4509e87b714a82be9a574632da8c8c->leave($__internal_f29ded321c98c3e30adfae2aba9c61805d4509e87b714a82be9a574632da8c8c_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for post in tab|reverse %}*/
/*     <div class="commentaire">*/
/*         <p>Commentaire de : <b>{{ post['username'] }}</b></p>*/
/*         <p>{{ post['content'] }}</p>*/
/*         <p>Publié le {{ post['date']|date("m/d/Y à H:i") }} </p>*/
/*     </div>*/
/* {% endfor %}*/
