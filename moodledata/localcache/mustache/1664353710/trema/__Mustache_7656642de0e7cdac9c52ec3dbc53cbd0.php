<?php

class __Mustache_7656642de0e7cdac9c52ec3dbc53cbd0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('settingsmenu');
        $buffer .= $this->section7bbc396ea23fdcc1feffc303df406ed0($context, $indent, $value);

        return $buffer;
    }

    private function section7bbc396ea23fdcc1feffc303df406ed0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="frontpage-settings-menu" class="p-1">
	<div class="context-header-settings-menu">
	    {{{settingsmenu}}}
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
                
                $buffer .= $indent . '<div id="frontpage-settings-menu" class="p-1">
';
                $buffer .= $indent . '	<div class="context-header-settings-menu">
';
                $buffer .= $indent . '	    ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
