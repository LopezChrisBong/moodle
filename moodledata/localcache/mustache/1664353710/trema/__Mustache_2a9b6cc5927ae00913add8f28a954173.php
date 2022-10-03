<?php

class __Mustache_2a9b6cc5927ae00913add8f28a954173 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="frontpage-cards" class="container mt-5">
';
        $buffer .= $indent . '    <div id="frontpage-cards-title" class="row mx-3 p-4 pt-0 text-center">
';
        $buffer .= $indent . '        <div class="col-12 pt-3 pb-3">
';
        $value = $context->find('cardstitle');
        $buffer .= $this->section1d31d9b9c1827760b33929384b2b3687($context, $indent, $value);
        $value = $context->find('cardssubtitle');
        $buffer .= $this->section11c56091f0c7bf8c90019f70f0853e0c($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="frontpage-cards-content" class="row">
';
        $value = $context->find('cardssettings');
        $buffer .= $this->sectionD29a180413de23229f3df5248d99463d($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section1d31d9b9c1827760b33929384b2b3687(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h2 class="border-bottom p-3 m-2 mb-4">{{{cardstitle}}}</h2>
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
                
                $buffer .= $indent . '                <h2 class="border-bottom p-3 m-2 mb-4">';
                $value = $this->resolveValue($context->find('cardstitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11c56091f0c7bf8c90019f70f0853e0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p class="font-weight-light">
                    {{{cardssubtitle}}}
                </p>
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
                
                $buffer .= $indent . '                <p class="font-weight-light">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('cardssubtitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA53ae97108302af8fb5550bfe73ba8dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{cardlink}}">';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('cardlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ae39e3dce9945d5872a2a828daa4528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</a>';
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
                
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD29a180413de23229f3df5248d99463d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="frontpage-card col-sm-6 p-5">
            {{#cardlink}}<a href="{{cardlink}}">{{/cardlink}}
                <span class="fa {{cardicon}} fa-4x float-left mr-4 mt-2" style="color: {{cardiconcolor}};"></span>
            {{#cardlink}}</a>{{/cardlink}}
            {{#cardlink}}<a href="{{cardlink}}">{{/cardlink}}
                <h3>{{{cardtitle}}}</h3>
            {{#cardlink}}</a>{{/cardlink}}
            <p class="font-weight-light">{{{cardsubtitle}}}</p>
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
                
                $buffer .= $indent . '        <div class="frontpage-card col-sm-6 p-5">
';
                $buffer .= $indent . '            ';
                $value = $context->find('cardlink');
                $buffer .= $this->sectionA53ae97108302af8fb5550bfe73ba8dd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <span class="fa ';
                $value = $this->resolveValue($context->find('cardicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' fa-4x float-left mr-4 mt-2" style="color: ';
                $value = $this->resolveValue($context->find('cardiconcolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';"></span>
';
                $buffer .= $indent . '            ';
                $value = $context->find('cardlink');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $context->find('cardlink');
                $buffer .= $this->sectionA53ae97108302af8fb5550bfe73ba8dd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <h3>';
                $value = $this->resolveValue($context->find('cardtitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '            ';
                $value = $context->find('cardlink');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            <p class="font-weight-light">';
                $value = $this->resolveValue($context->find('cardsubtitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
