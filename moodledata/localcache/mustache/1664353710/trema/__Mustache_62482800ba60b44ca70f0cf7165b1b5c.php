<?php

class __Mustache_62482800ba60b44ca70f0cf7165b1b5c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('metadata');
        $buffer .= $this->section0182226ade6fd26f85ea433b6aca118f($context, $indent, $value);
        $buffer .= $indent . '<span class="avatars">
';
        $value = $context->find('avatardata');
        $buffer .= $this->section6bde236a3d1356f050a1eaea0aebab4e($context, $indent, $value);
        $buffer .= $indent . '</span>
';

        return $buffer;
    }

    private function section0182226ade6fd26f85ea433b6aca118f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="usertext d-flex mr-3">
        <span class="meta d-flex {{classes}}">
            {{{content}}}
        </span>
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
                
                $buffer .= $indent . '    <span class="usertext d-flex mr-3">
';
                $buffer .= $indent . '        <span class="meta d-flex ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bde236a3d1356f050a1eaea0aebab4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="avatar {{classes}}">
            {{{content}}}
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
                
                $buffer .= $indent . '        <span class="avatar ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
