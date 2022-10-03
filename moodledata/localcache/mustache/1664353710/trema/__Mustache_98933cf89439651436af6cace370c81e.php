<?php

class __Mustache_98933cf89439651436af6cace370c81e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('summarytext');
        $buffer .= $this->sectionC74583827fb964b1ec0d208f33785ad9($context, $indent, $value);

        return $buffer;
    }

    private function sectionC74583827fb964b1ec0d208f33785ad9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="course-description-item summarytext">
        <div class="description-inner">
            {{{summarytext}}}
        </div>
    </div>
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
                
                $buffer .= $indent . '    <div class="course-description-item summarytext">
';
                $buffer .= $indent . '        <div class="description-inner">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('summarytext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
