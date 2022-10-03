<?php

class __Mustache_7d07b29cc0853629ddfc77618a15e237 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="clearer"></div>
';
        $buffer .= $indent . '<div class="h5p-reporting-main-container">
';
        $buffer .= $indent . '  <div class="h5p-reporting-main-header">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!--Title-->
';
        $buffer .= $indent . '    <div class="h5p-reporting-main-title">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!--Scoring-->
';
        $value = $context->find('maxScore');
        $buffer .= $this->sectionCb7db36ab1bc5ffca500743ce2a76ef1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!--Render report as html-->
';
        $buffer .= $indent . '  <div class="h5p-report-view">';
        $value = $this->resolveValue($context->find('report'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section4e92c091bc3ae97490b890e3a6319288(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reportingscorelabel, mod_hvp ';
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
                
                $buffer .= ' reportingscorelabel, mod_hvp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ae2fbc3c6ea1c224ae443b5301c7d10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reportingscoredelimiter, mod_hvp ';
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
                
                $buffer .= ' reportingscoredelimiter, mod_hvp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD066033d4712ebb3c36aea59f4be61b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reportingscaledscorelabel, mod_hvp ';
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
                
                $buffer .= ' reportingscaledscorelabel, mod_hvp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb7db36ab1bc5ffca500743ce2a76ef1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="h5p-reporting-main-score-wrapper">

      <!--Raw score-->
      <div class="h5p-reporting-main-score-container">
        <span class="h5p-reporting-main-score-label">
          {{# str }} reportingscorelabel, mod_hvp {{/ str }}
        </span>
        <span class="h5p-reporting-main-score">
          <span class="h5p-reporting-main-score-raw-score">
            {{rawScore}}
          </span>
          {{# str }} reportingscoredelimiter, mod_hvp {{/ str }} {{maxScore}}
        </span>
      </div>

      <!--Scaled score-->
      <div class="h5p-reporting-main-scaled-container">
        <span class="h5p-reporting-scaled-label">
          {{# str }} reportingscaledscorelabel, mod_hvp {{/ str }}
        </span>
        <span class="h5p-reporting-scaled-score">
          <span class="h5p-reporting-main-score-scaled-score">
            {{scaledScore}}
          </span>
          {{# str }} reportingscoredelimiter, mod_hvp {{/ str }} {{maxScaledScore}}
        </span>
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
                
                $buffer .= $indent . '    <div class="h5p-reporting-main-score-wrapper">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      <!--Raw score-->
';
                $buffer .= $indent . '      <div class="h5p-reporting-main-score-container">
';
                $buffer .= $indent . '        <span class="h5p-reporting-main-score-label">
';
                $buffer .= $indent . '          ';
                $value = $context->find('str');
                $buffer .= $this->section4e92c091bc3ae97490b890e3a6319288($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '        <span class="h5p-reporting-main-score">
';
                $buffer .= $indent . '          <span class="h5p-reporting-main-score-raw-score">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('rawScore'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '          </span>
';
                $buffer .= $indent . '          ';
                $value = $context->find('str');
                $buffer .= $this->section5ae2fbc3c6ea1c224ae443b5301c7d10($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('maxScore'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      <!--Scaled score-->
';
                $buffer .= $indent . '      <div class="h5p-reporting-main-scaled-container">
';
                $buffer .= $indent . '        <span class="h5p-reporting-scaled-label">
';
                $buffer .= $indent . '          ';
                $value = $context->find('str');
                $buffer .= $this->sectionD066033d4712ebb3c36aea59f4be61b2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '        <span class="h5p-reporting-scaled-score">
';
                $buffer .= $indent . '          <span class="h5p-reporting-main-score-scaled-score">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('scaledScore'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '          </span>
';
                $buffer .= $indent . '          ';
                $value = $context->find('str');
                $buffer .= $this->section5ae2fbc3c6ea1c224ae443b5301c7d10($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('maxScaledScore'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
