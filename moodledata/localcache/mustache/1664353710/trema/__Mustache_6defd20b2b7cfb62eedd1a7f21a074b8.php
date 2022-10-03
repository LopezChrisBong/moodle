<?php

class __Mustache_6defd20b2b7cfb62eedd1a7f21a074b8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('url');
        $buffer .= $this->section1b65be6eceef4c27b6f2a8ace3b0e0cc($context, $indent, $value);

        return $buffer;
    }

    private function section1c5184a29e85d6a13ad82b24031521f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{$ core/inplace_editable }}
                            {{> core/inplace_editable }}
                        {{/ core/inplace_editable }}
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
                
                $blockFunction = $context->findInBlock('core/inplace_editable');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core/inplace_editable')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b65be6eceef4c27b6f2a8ace3b0e0cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="activity-instance d-flex flex-column">
        <div class="activitytitle media {{textclasses}} modtype_{{modname}} position-relative align-self-start">
            <div class="activityiconcontainer {{purpose}} courseicon align-self-start mr-3">
                <img src="{{{icon}}}" class="activityicon " alt="{{{modname}}} icon">
            </div>
            <div class="media-body align-self-center">
                <div class="text-uppercase small">
                    {{{pluginname}}}
                </div>
                <div class="activityname">
                    {{#activityname}}
                        {{$ core/inplace_editable }}
                            {{> core/inplace_editable }}
                        {{/ core/inplace_editable }}
                    {{/activityname}}
                </div>
            </div>
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
                
                $buffer .= $indent . '    <div class="activity-instance d-flex flex-column">
';
                $buffer .= $indent . '        <div class="activitytitle media ';
                $value = $this->resolveValue($context->find('textclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' position-relative align-self-start">
';
                $buffer .= $indent . '            <div class="activityiconcontainer ';
                $value = $this->resolveValue($context->find('purpose'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' courseicon align-self-start mr-3">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="activityicon " alt="';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' icon">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="media-body align-self-center">
';
                $buffer .= $indent . '                <div class="text-uppercase small">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('pluginname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="activityname">
';
                $value = $context->find('activityname');
                $buffer .= $this->section1c5184a29e85d6a13ad82b24031521f1($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
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
