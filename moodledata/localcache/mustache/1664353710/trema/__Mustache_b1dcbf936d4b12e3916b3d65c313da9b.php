<?php

class __Mustache_b1dcbf936d4b12e3916b3d65c313da9b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('output.login_lang_menu');
        $buffer .= $this->section9b0a7c56972c9e8a5e5cbc702130ca4b($context, $indent, $value);

        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
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
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
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
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA82988197d185fd129c430882e522fc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="logo d-inline">
                    <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}">
                </span>
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
                
                $buffer .= $indent . '                <span class="logo d-inline">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b0a7c56972c9e8a5e5cbc702130ca4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<nav class="fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex" aria-label="{{#str}}sitemenubar, admin{{/str}}">
        <a href="{{{ config.wwwroot }}}" class="navbar-brand d-flex align-items-center {{# output.should_display_navbar_logo }}has-logo{{/ output.should_display_navbar_logo }}">
            {{# output.should_display_navbar_logo }}
                <span class="logo d-inline">
                    <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}">
                </span>
            {{/ output.should_display_navbar_logo }}
            {{^ output.should_display_navbar_logo }}
                <span class="site-name d-inline">{{{ sitename }}}</span>
            {{/ output.should_display_navbar_logo }}
        </a>

        <ul class="nav navbar-nav usernav" style="float:right;">
            <li class="dropdown nav-item">
                {{{ output.login_lang_menu }}}
            </li>
        </ul>
        <!-- search_box -->
</nav>
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
                
                $buffer .= $indent . '<nav class="fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="navbar-brand d-flex align-items-center ';
                $value = $context->findDot('output.should_display_navbar_logo');
                $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->findDot('output.should_display_navbar_logo');
                $buffer .= $this->sectionA82988197d185fd129c430882e522fc7($context, $indent, $value);
                $value = $context->findDot('output.should_display_navbar_logo');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <span class="site-name d-inline">';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <ul class="nav navbar-nav usernav" style="float:right;">
';
                $buffer .= $indent . '            <li class="dropdown nav-item">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.login_lang_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </li>
';
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        <!-- search_box -->
';
                $buffer .= $indent . '</nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
