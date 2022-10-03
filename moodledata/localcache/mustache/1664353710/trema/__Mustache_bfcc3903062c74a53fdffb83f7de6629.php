<?php

class __Mustache_bfcc3903062c74a53fdffb83f7de6629 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<span class="badge badge-danger">';
        $value = $this->resolveValue($context->find('status'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';

        return $buffer;
    }
}
