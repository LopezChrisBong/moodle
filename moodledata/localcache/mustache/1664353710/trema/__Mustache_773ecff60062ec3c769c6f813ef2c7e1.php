<?php

class __Mustache_773ecff60062ec3c769c6f813ef2c7e1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('loginpagecreatefirst');
        $buffer .= $this->section517fe649ad6f56fcf49c59f4185eca04($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row justify-content-center">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '     <div  class="d-none d-sm-block " class="col-xl-6 col-md-6 col-sm-6" class="justify-content-sm-center">
';
        $buffer .= $indent . '        <div  id="logo-login" class="row justify-content-md-center">
';
        $value = $context->find('logourl');
        $buffer .= $this->sectionA9e1aeb0740573a9d624a7a4505c8692($context, $indent, $value);
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <h1 class="h2 card-header text-center">';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</h1>
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div >
';
        $buffer .= $indent . '                <h1 id="welcome"> Welcome to <br> Davao del Norte <br>State College</h1>
';
        $buffer .= $indent . '                <h2 style="background-color: green; color:white; width:280px;">Learning Management </h2><br><h2 style="background-color: green; color:white; width:100px; margin-top: -20px;"> System</h2>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    <div class="col-xl-5 col-md-6 col-sm-6 ">
';
        $buffer .= $indent . '    <div  id="card-login" class="card shadow-sm">
';
        $buffer .= $indent . '    <div class="card-block ">
';
        $buffer .= $indent . '        <div class="card-body">
';
        $value = $context->find('loginpagecreatefirst');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="d-block d-sm-none " >
';
            $value = $context->find('logourl');
            $buffer .= $this->sectionA9e1aeb0740573a9d624a7a4505c8692($context, $indent, $value);
            $value = $context->find('logourl');
            if (empty($value)) {
                
                $buffer .= $indent . '                    <h1 class="h2 card-header text-center">';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h1>
';
            }
            $buffer .= $indent . '         </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '           
';
            $buffer .= $indent . '          
';
        }
        $value = $context->find('cansignup');
        $buffer .= $this->section35239f0b9315349c31019b367900fdce($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('error');
        $buffer .= $this->sectionCb00be4435d5a843d6b4af49ad67f6c7($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="row justify-content-md-center ">
';
        $buffer .= $indent . '                <div class="col-sm-8 col-md-10 col-lg-10">
';
        $buffer .= $indent . '                    <form class="mt-3" action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="post" id="login">
';
        $buffer .= $indent . '                        <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                        <input id="anchor" type="hidden" name="anchor" value="">
';
        $buffer .= $indent . '                        <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
        $buffer .= $indent . '                        <div class="form-group">
';
        $buffer .= $indent . '                             <h2> <b>Sign In </b></h2>
';
        $buffer .= $indent . '                            <label for="username" class="sr-only">
';
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                                    ';
            $value = $context->find('str');
            $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
            $buffer .= '
';
        }
        $value = $context->find('canloginbyemail');
        $buffer .= $this->sectionEa2b3441945bf8138506249d6ebce314($context, $indent, $value);
        $buffer .= $indent . '                            </label>
';
        $buffer .= $indent . '                            <div class="input-icons">
';
        $buffer .= $indent . '                           <i class="fa fa-lg fa-user-circle-o" aria-hidden="true"></i>
';
        $buffer .= $indent . '                                 <input class="input-field" type="text" name="username" id="username"
';
        $buffer .= $indent . '                                        class="form-control"
';
        $buffer .= $indent . '                                         value="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                                         placeholder=';
        $value = $context->find('quote');
        $buffer .= $this->section4a2b2050243eb4dff6ce2b11212bbbcb($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                         </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <div class="form-group">
';
        $buffer .= $indent . '                            <div class="input-icons">
';
        $buffer .= $indent . '                            <i class="fa fa-lg fa-lock" aria-hidden="true"></i>
';
        $buffer .= $indent . '                            <label for="password" class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                            <input  class="input-field" type="password" name="password" id="password" value=""
';
        $buffer .= $indent . '                                class="form-control"
';
        $buffer .= $indent . '                                placeholder=';
        $value = $context->find('quote');
        $buffer .= $this->section1e0c7d916e3932461ff09cf034c710f8($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                          </div>
';
        $buffer .= $indent . '                         <div class="text-center mb-2">
';
        $buffer .= $indent . '                            <button type="submit" class="btn btn-primary btn-block" id="loginbtn">';
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                         </div>
';
        $buffer .= $indent . '                         <div  class="row text-center">
';
        $value = $context->find('rememberusername');
        $buffer .= $this->sectionDd1fc9f2928cdd791b07300e7ddd35bf($context, $indent, $value);
        $buffer .= $indent . '                         <div class=" forgetpass mx-auto ';
        $value = $context->find('rememberusername');
        $buffer .= $this->sectionFcf804eb49bc60eefe137c8157d2814e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                            <p><a href="';
        $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section6aa95a7e496f5307b40bee7262bd9321($context, $indent, $value);
        $buffer .= '</a></p>
';
        $buffer .= $indent . '                            <p>Or Login using:</p>
';
        $buffer .= $indent . '                         </div>
';
        $buffer .= $indent . '                         
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                     <div>
';
        $buffer .= $indent . '                        <a href="" class="btn btn-secondary btn-block"><img src="https://accounts.google.com/favicon.ico" alt="" width="24" height="24"> Google</a>
';
        $buffer .= $indent . '                     </div>
';
        $buffer .= $indent . '                     
';
        $buffer .= $indent . '                </form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div  class="sr-only" class="col-md-10 text-center">
';
        $buffer .= $indent . '                    <div class="">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section946f040476794b323defa7b00688109b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('cookieshelpiconformatted'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $value = $context->find('canloginasguest');
        $buffer .= $this->section4842cb62ee27d6ae528a8db5c2b2df0f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->sectionD80c0b6fc44f8cb357b521fa026d6f80($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('loginpagecreatefirst');
        if (empty($value)) {
            
            $value = $context->find('hasinstructions');
            $buffer .= $this->sectionD5fc66cde75e27e413eace4139ad6002($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section1020ab5080a8f852902fc6a7fbbfa3c0($context, $indent, $value);

        return $buffer;
    }

    private function sectionFb238189ec0e41b6a51ccd2a459a6209(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <h1 class="h2 card-header text-center" ><img src="{{logourl}}" class="img-responsive" title="{{sitename}}" alt="{{sitename}}"/></h1>
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
                
                $buffer .= $indent . '                        <h1 class="h2 card-header text-center" ><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="img-responsive" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/></h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB681534bda1faeeb31506c30e72ff16e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firsttime';
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
                
                $buffer .= 'firsttime';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
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
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section546d33017be5de44f006312310eb0501(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <form class="mt-3" action="{{signupurl}}" method="get" id="signup">
                                <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
                            </form>
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
                
                $buffer .= $indent . '                            <form class="mt-3" action="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="get" id="signup">
';
                $buffer .= $indent . '                                <button type="submit" class="btn btn-secondary">';
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                            </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section527ff315a7e50f5b25583ada016c3f58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="row justify-content-center">
        
            <div class="col-xl-6 col-sm-8">
                <div id="card-login-instructions" class="card">
                    {{#logourl}}
                        <h1 class="h2 card-header text-center" ><img src="{{logourl}}" class="img-responsive" title="{{sitename}}" alt="{{sitename}}"/></h1>
                    {{/logourl}}
                    {{^logourl}}
                        <h1 class="h2 card-header text-center">{{sitename}}</h1>
                    {{/logourl}}
                    <div class="card-body">
                        <div class="card-title">
                            <h2>{{#str}}firsttime{{/str}}</h2>
                        </div>
                        <div>
                        {{{instructions}}}
                        {{#cansignup}}
                            <form class="mt-3" action="{{signupurl}}" method="get" id="signup">
                                <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
                            </form>
                        {{/cansignup}}
                        </div>
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
                
                $buffer .= $indent . '        <div class="row justify-content-center">
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '            <div class="col-xl-6 col-sm-8">
';
                $buffer .= $indent . '                <div id="card-login-instructions" class="card">
';
                $value = $context->find('logourl');
                $buffer .= $this->sectionFb238189ec0e41b6a51ccd2a459a6209($context, $indent, $value);
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <h1 class="h2 card-header text-center">';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h1>
';
                }
                $buffer .= $indent . '                    <div class="card-body">
';
                $buffer .= $indent . '                        <div class="card-title">
';
                $buffer .= $indent . '                            <h2>';
                $value = $context->find('str');
                $buffer .= $this->sectionB681534bda1faeeb31506c30e72ff16e($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('cansignup');
                $buffer .= $this->section546d33017be5de44f006312310eb0501($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section517fe649ad6f56fcf49c59f4185eca04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#hasinstructions}}
        <div class="row justify-content-center">
        
            <div class="col-xl-6 col-sm-8">
                <div id="card-login-instructions" class="card">
                    {{#logourl}}
                        <h1 class="h2 card-header text-center" ><img src="{{logourl}}" class="img-responsive" title="{{sitename}}" alt="{{sitename}}"/></h1>
                    {{/logourl}}
                    {{^logourl}}
                        <h1 class="h2 card-header text-center">{{sitename}}</h1>
                    {{/logourl}}
                    <div class="card-body">
                        <div class="card-title">
                            <h2>{{#str}}firsttime{{/str}}</h2>
                        </div>
                        <div>
                        {{{instructions}}}
                        {{#cansignup}}
                            <form class="mt-3" action="{{signupurl}}" method="get" id="signup">
                                <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
                            </form>
                        {{/cansignup}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{/hasinstructions}}
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
                
                $value = $context->find('hasinstructions');
                $buffer .= $this->section527ff315a7e50f5b25583ada016c3f58($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9e1aeb0740573a9d624a7a4505c8692(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <h1 class="h2 card-header text-center" ><img src="{{logourl}}" class="img-responsive" title="{{sitename}}" alt="{{sitename}}"/></h1>
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
                
                $buffer .= $indent . '                    <h1 class="h2 card-header text-center" ><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="img-responsive" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/></h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
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
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35239f0b9315349c31019b367900fdce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="sr-only">
                    <a href="{{signupurl}}">{{#str}} tocreatenewaccount {{/str}}</a>
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
                
                $buffer .= $indent . '                <div class="sr-only">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb00be4435d5a843d6b4af49ad67f6c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="loginerrors mt-3">
                    <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                    <div class="alert alert-danger" role="alert">{{error}}</div>
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
                
                $buffer .= $indent . '                <div class="loginerrors mt-3">
';
                $buffer .= $indent . '                    <a href="#" id="loginerrormessage" class="accesshide">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                    <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
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
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
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
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa2b3441945bf8138506249d6ebce314(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#str}} usernameemail {{/str}}
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
                
                $buffer .= $indent . '                                    ';
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
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
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
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
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cfee3b9563446af7cf73b3dabe83fe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}usernameemail{{/str}}';
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
                
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a2b2050243eb4dff6ce2b11212bbbcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^canloginbyemail}}{{#str}}username{{/str}}{{/canloginbyemail}}{{#canloginbyemail}}{{#str}}usernameemail{{/str}}{{/canloginbyemail}}';
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
                
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section1cfee3b9563446af7cf73b3dabe83fe5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
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
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
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
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e0c7d916e3932461ff09cf034c710f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}password{{/str}}';
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
                
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
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
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
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
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e9e1c91e62a2295e727645032f06842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rememberusername, theme_trema ';
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
                
                $buffer .= ' rememberusername, theme_trema ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd1fc9f2928cdd791b07300e7ddd35bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="sr-only" class="rememberpass col-md-6">
                                    <input type="checkbox" name="rememberusername" id="rememberusername" value="1" {{#username}}checked="checked"{{/username}} />
                                    <label for="rememberusername">{{#str}} rememberusername, theme_trema {{/str}}</label>
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
                
                $buffer .= $indent . '                                <div class="sr-only" class="rememberpass col-md-6">
';
                $buffer .= $indent . '                                    <input type="checkbox" name="rememberusername" id="rememberusername" value="1" ';
                $value = $context->find('username');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= ' />
';
                $buffer .= $indent . '                                    <label for="rememberusername">';
                $value = $context->find('str');
                $buffer .= $this->section5e9e1c91e62a2295e727645032f06842($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcf804eb49bc60eefe137c8157d2814e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-md-12';
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
                
                $buffer .= 'col-md-12';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aa95a7e496f5307b40bee7262bd9321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotten';
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
                
                $buffer .= 'forgotten';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section946f040476794b323defa7b00688109b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cookiesenabled ';
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
                
                $buffer .= ' cookiesenabled ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93e4b62aaf677bf7878b06c5ac540671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'someallowguest';
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
                
                $buffer .= 'someallowguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
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
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4842cb62ee27d6ae528a8db5c2b2df0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="mt-2">
                            <p>{{#str}}someallowguest{{/str}}</p>
                            <form action="{{loginurl}}" method="post" id="guestlogin">
                                <input type="hidden" name="username" value="guest" />
                                <input type="hidden" name="password" value="guest" />
                                <input type="hidden" name="logintoken" value="{{logintoken}}">
                                <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                            </form>
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
                
                $buffer .= $indent . '                        <div class="mt-2">
';
                $buffer .= $indent . '                            <p>';
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                            <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                                <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                                <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                                <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <button class="btn btn-secondary btn-block" type="submit">';
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                            </form>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
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
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fc38b71bab296fb0efdd08834d72587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}';
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
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1756fc01662d55d147d858136ca68376(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
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
                
                $buffer .= $indent . '                                        <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ba2bfc071e57d8079260ce79cdbc2da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="potentialidp">
                                <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                                    {{#iconurl}}
                                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                    {{/iconurl}}
                                    {{name}}
                                </a>
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
                
                $buffer .= $indent . '                            <div class="potentialidp">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title=';
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= ' class="btn btn-secondary btn-block">
';
                $value = $context->find('iconurl');
                $buffer .= $this->section1756fc01662d55d147d858136ca68376($context, $indent, $value);
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD80c0b6fc44f8cb357b521fa026d6f80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <h2 class="h6 mt-2">{{#str}} potentialidps, auth {{/str}}</h2>
                    <div class="potentialidplist" class="mt-3">
                        {{#identityproviders}}
                            <div class="potentialidp">
                                <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                                    {{#iconurl}}
                                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                    {{/iconurl}}
                                    {{name}}
                                </a>
                            </div>
                        {{/identityproviders}}
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
                
                $buffer .= $indent . '                    <h2 class="h6 mt-2">';
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    <div class="potentialidplist" class="mt-3">
';
                $value = $context->find('identityproviders');
                $buffer .= $this->section5ba2bfc071e57d8079260ce79cdbc2da($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB41d1a1bb43b881c002765da28bf8772(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <form class="mt-3" action="{{signupurl}}" method="get" id="signup">
                <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
            </form>
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
                
                $buffer .= $indent . '            <form class="mt-3" action="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="get" id="signup">
';
                $buffer .= $indent . '                <button type="submit" class="btn btn-secondary">';
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '            </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5fc66cde75e27e413eace4139ad6002(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row justify-content-center">
<div class="col-xl-6 col-sm-8">
<div id="card-login-instructions" class="card">
    <div class="card-body">
        <div class="card-title">
            <h2>{{#str}}firsttime{{/str}}</h2>
        </div>
        <div>
        {{{instructions}}}
        {{#cansignup}}
            <form class="mt-3" action="{{signupurl}}" method="get" id="signup">
                <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
            </form>
        {{/cansignup}}
        </div>
    </div>
</div>
</div>
</div>

<div class="loader"></div>
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
                
                $buffer .= $indent . '<div class="row justify-content-center">
';
                $buffer .= $indent . '<div class="col-xl-6 col-sm-8">
';
                $buffer .= $indent . '<div id="card-login-instructions" class="card">
';
                $buffer .= $indent . '    <div class="card-body">
';
                $buffer .= $indent . '        <div class="card-title">
';
                $buffer .= $indent . '            <h2>';
                $value = $context->find('str');
                $buffer .= $this->sectionB681534bda1faeeb31506c30e72ff16e($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('cansignup');
                $buffer .= $this->sectionB41d1a1bb43b881c002765da28bf8772($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="loader"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD139a41686973e049b75db5b5e459907(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
        });
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
                
                $buffer .= $indent . '        require([\'jquery\'], function($) {
';
                $buffer .= $indent . '            $(\'#loginerrormessage\').focus();
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc78ec36fa22882994867946717d9b9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            require([\'jquery\'], function($) {
                if ($(\'#username\').val()) {
                    $(\'#password\').focus();
                } else {
                    $(\'#username\').focus();
                }
            });
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
                
                $buffer .= $indent . '            require([\'jquery\'], function($) {
';
                $buffer .= $indent . '                if ($(\'#username\').val()) {
';
                $buffer .= $indent . '                    $(\'#password\').focus();
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    $(\'#username\').focus();
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1020ab5080a8f852902fc6a7fbbfa3c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#error}}
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
        });
    {{/error}}
    {{^error}}
        {{#autofocusform}}
            require([\'jquery\'], function($) {
                if ($(\'#username\').val()) {
                    $(\'#password\').focus();
                } else {
                    $(\'#username\').focus();
                }
            });
        {{/autofocusform}}
    {{/error}}
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
                
                $value = $context->find('error');
                $buffer .= $this->sectionD139a41686973e049b75db5b5e459907($context, $indent, $value);
                $value = $context->find('error');
                if (empty($value)) {
                    
                    $value = $context->find('autofocusform');
                    $buffer .= $this->sectionFc78ec36fa22882994867946717d9b9b($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
