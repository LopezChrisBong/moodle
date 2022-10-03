<?php

class __Mustache_d6798297bf7d484d91de68183810cf44 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div data-region="timeline-view-dates">
';
        if ($partial = $this->mustache->loadPartial('block_timeline/event-list')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
