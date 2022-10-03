<?php

class __Mustache_8bb82b23fe88ed0c1100e512e3b7214f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('summarytext');
        $buffer .= $this->section91afe74c04cb9a75be9a5a8143ce4706($context, $indent, $value);

        return $buffer;
    }

    private function section91afe74c04cb9a75be9a5a8143ce4706(Mustache_Context $context, $indent, $value)
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
