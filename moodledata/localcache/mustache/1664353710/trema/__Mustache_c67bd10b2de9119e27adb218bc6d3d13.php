<?php

class __Mustache_c67bd10b2de9119e27adb218bc6d3d13 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="p-3 bg-white">
';
        $buffer .= $indent . '    <p class="text-muted" data-region="text">';
        $value = $context->find('str');
        $buffer .= $this->section0b29c2994fe0ba8246f0e0b9c6a5a538($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0b29c2994fe0ba8246f0e0b9c6a5a538(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unabletomessage, core_message ';
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
                
                $buffer .= ' unabletomessage, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
