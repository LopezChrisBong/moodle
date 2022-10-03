<?php

class __Mustache_72312a4b6aa7ecd18513980177ea8ecc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="text-center pt-3 icon-size-4">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';

        return $buffer;
    }
}
