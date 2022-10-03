<?php

class __Mustache_b08a27e00e8696aa3e4248b8a3b5a05c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="hidden" data-filterregion="filtertypedata">
';
        $value = $context->find('filtertypes');
        $buffer .= $this->sectionFc7939485a5087dba2577e463b5b75cc($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="hidden">
';
        $buffer .= $indent . '    <select disabled="disabled" data-filterfield="type" data-filterregion="filtertypelist">
';
        $buffer .= $indent . '        <option value="">';
        $value = $context->find('str');
        $buffer .= $this->sectionB35c829631908d0e4566cff258649931($context, $indent, $value);
        $buffer .= '</option>
';
        $value = $context->find('filtertypes');
        $buffer .= $this->sectionB64f93437fbaa1a20a7ce1f7481a1f58($context, $indent, $value);
        $buffer .= $indent . '    </select>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionFc7939485a5087dba2577e463b5b75cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_user/local/participantsfilter/filtertype}}
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
                
                if ($partial = $this->mustache->loadPartial('core_user/local/participantsfilter/filtertype')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB35c829631908d0e4566cff258649931(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectfiltertype, core_user';
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
                
                $buffer .= 'selectfiltertype, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB64f93437fbaa1a20a7ce1f7481a1f58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option value="{{name}}">{{title}}</option>
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
                
                $buffer .= $indent . '        <option value="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
