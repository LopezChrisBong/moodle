<?php

class __Mustache_a124d87feb87e25c4e4c80d3ae648e8a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="page-footer" class="footer-trema">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="row gtr-200 gtr-uniform">
';
        $buffer .= $indent . '            <section class="col-12 text-center col-12-medium col-12-xsmall footer-info">
';
        $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer"></div>
';
        $buffer .= $indent . '                <nav class="nav navbar-nav d-md-none">
';
        $value = $context->findDot('output.custom_menu_flat');
        $buffer .= $this->section5135824a718254635e85e321ca7b1ba7($context, $indent, $value);
        $buffer .= $indent . '                </nav>
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <section class="col-12 footer-info">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('defaultfrontpagefooter'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '
';
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->sectionD6a39d8cff99e3a72713297d0647c41c($context, $indent, $value);
        $buffer .= $indent . '            <section class="col-12 text-center col-12-medium col-12-xsmall footer-info smalltext ';
        $value = $context->find('footerinfo');
        if (empty($value)) {
            
            $buffer .= 'd-none';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                <div class="logininfo">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="footer-content-debugging py-sm-3">
';
        $buffer .= $indent . '                    <div class="container">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('footerinfo');
        $buffer .= $this->section8c14a583e3d2f08b7ab16dbb5c611e3b($context, $indent, $value);
        $buffer .= $indent . '</footer>
';

        return $buffer;
    }

    private function section5135824a718254635e85e321ca7b1ba7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <ul class="list-unstyled pt-3">
                            {{> theme_boost/custom_menu_footer }}
                        </ul>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <ul class="list-unstyled pt-3">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6a39d8cff99e3a72713297d0647c41c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="helplink col-12 text-center col-12-medium col-12-xsmall footer-info smalltext {{^footerinfo}}d-none{{/footerinfo}}">{{{ output.page_doc_link }}}</div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="helplink col-12 text-center col-12-medium col-12-xsmall footer-info smalltext ';
                $value = $context->find('footerinfo');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbe7de8ec77eee68589d4abc1534bc9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'footertitle, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'footertitle, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c14a583e3d2f08b7ab16dbb5c611e3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="copyleft"><span>&copy;</span>{{#str}}footertitle, theme_trema{{/str}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="copyleft"><span>&copy;</span>';
                $value = $context->find('str');
                $buffer .= $this->sectionAbe7de8ec77eee68589d4abc1534bc9c($context, $indent, $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
