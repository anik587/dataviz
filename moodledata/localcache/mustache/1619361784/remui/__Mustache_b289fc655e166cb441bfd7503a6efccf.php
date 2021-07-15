<?php

class __Mustache_b289fc655e166cb441bfd7503a6efccf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row justify-content-center">
';
        $buffer .= $indent . '    <div class="page-brand-info">
';
        // 'loginpage_context' section
        $value = $context->find('loginpage_context');
        $buffer .= $this->section1f4b6a55173cea6913b5814e0e357070($context, $indent, $value);
        // 'sitedesc' section
        $value = $context->find('sitedesc');
        $buffer .= $this->sectionEb7f6f81876cdb5acb7719dbce98ca5a($context, $indent, $value);
        // 'sitedesc' inverted section
        $value = $context->find('sitedesc');
        if (empty($value)) {
            
            // 'hasinstructions' section
            $value = $context->find('hasinstructions');
            $buffer .= $this->section65fdcab97903d248e3945ff6b4d18e5f($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="p-0 loginform">
';
        $buffer .= $indent . '        <div class="card">
';
        $buffer .= $indent . '            <div class="card-block p-5">
';
        // 'loginpage_context' section
        $value = $context->find('loginpage_context');
        $buffer .= $this->section08136e042be4bb57169ca005e6c508b5($context, $indent, $value);
        $buffer .= $indent . '                <div class="card-body">
';
        // 'cansignup' section
        $value = $context->find('cansignup');
        $buffer .= $this->section3ed0850dd27dd906874a40aae6c4ef8b($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->section73468e018561554b53f4451b41103336($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="row justify-content-md-center">
';
        $buffer .= $indent . '                        <div class="col-md-12">
';
        $buffer .= $indent . '                            <h3 class="mb-4">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section437badc16e3d879709cf3484728d15d3($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '                            <form class="my-3" action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="post" id="login">
';
        $buffer .= $indent . '                                <input id="anchor" type="hidden" name="anchor" value="">
';
        $buffer .= $indent . '                                <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
        $buffer .= $indent . '                                <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <label for="username" class="sr-only">
';
        // 'canloginbyemail' inverted section
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                                            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
            $buffer .= '
';
        }
        // 'canloginbyemail' section
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section033fe689124bfc85d32db892c3b5c159($context, $indent, $value);
        $buffer .= $indent . '                                    </label>
';
        $buffer .= $indent . '                                    <input type="text" name="username" id="username"
';
        $buffer .= $indent . '                                        class="form-control"
';
        $buffer .= $indent . '                                        value="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                                        placeholder=';
        // 'quote' section
        $value = $context->find('quote');
        $buffer .= $this->section4a2b2050243eb4dff6ce2b11212bbbcb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                        autocomplete="username">
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <label for="password" class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                                    <input type="password" name="password" id="password" value=""
';
        $buffer .= $indent . '                                        class="form-control"
';
        $buffer .= $indent . '                                        placeholder=';
        // 'quote' section
        $value = $context->find('quote');
        $buffer .= $this->section1e0c7d916e3932461ff09cf034c710f8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                        autocomplete="current-password">
';
        $buffer .= $indent . '                                </div>
';
        // 'rememberusername' section
        $value = $context->find('rememberusername');
        $buffer .= $this->sectionEefdf8c758d7da69533743e95e3d520c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <button type="submit" class="btn btn-primary btn-block mt-4" id="loginbtn">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                            </form>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        <div class="col-md-12">
';
        // 'hasinstructions' section
        $value = $context->find('hasinstructions');
        $buffer .= $this->section0d5568904d9d01bd68ad42f3e3acd3fc($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'canloginasguest' section
        $value = $context->find('canloginasguest');
        $buffer .= $this->section6c48880d5ed76f9f313fb303b31679be($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasidentityproviders' section
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->sectionD0a32a02862ae5c68f12e65452b00435($context, $indent, $value);
        $buffer .= $indent . '                            <footer class="page-copyright py-4">
';
        // 'loginsocial_context' section
        $value = $context->find('loginsocial_context');
        $buffer .= $this->section7b5d3047886a0c7e6a6c5698caa78b99($context, $indent, $value);
        $buffer .= $indent . '                            </footer>
';
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
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionA4f2b1bc49f102a8397589c2999827d7($context, $indent, $value);

        return $buffer;
    }

    private function section4e892358128a239888c588192618e869(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h2 class="card-header bg-transparent mb-3" ><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h2>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <h2 class="card-header bg-transparent mb-3" ><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/></h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f4b6a55173cea6913b5814e0e357070(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^logopos}}
            {{#logourl}}
                <h2 class="card-header bg-transparent mb-3" ><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h2>
            {{/logourl}}
            {{^logourl}}
                <h2 class="card-header bg-transparent mb-3"><i class="fa fa-{{siteicon}}"></i> {{sitename}}</h2>
            {{/logourl}}
        {{/logopos}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'logopos' inverted section
                $value = $context->find('logopos');
                if (empty($value)) {
                    
                    // 'logourl' section
                    $value = $context->find('logourl');
                    $buffer .= $this->section4e892358128a239888c588192618e869($context, $indent, $value);
                    // 'logourl' inverted section
                    $value = $context->find('logourl');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                <h2 class="card-header bg-transparent mb-3"><i class="fa fa-';
                        $value = $this->resolveValue($context->find('siteicon'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '"></i> ';
                        $value = $this->resolveValue($context->find('sitename'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '</h2>
';
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb7f6f81876cdb5acb7719dbce98ca5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p class="font-size-20 site-desc">{{{sitedesc}}}</p>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p class="font-size-20 site-desc">';
                $value = $this->resolveValue($context->find('sitedesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65fdcab97903d248e3945ff6b4d18e5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p class="font-size-20 instructions">{{{instructions}}}</p>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p class="font-size-20 instructions">';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29e7cac85c6a4d6041d1daed26877f87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <h2 class="card-header text-center bg-transparent mb-3 p-4" ><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h2>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <h2 class="card-header text-center bg-transparent mb-3 p-4" ><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/></h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45a14b0da5b38d099f9fa2769c433f2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#logourl}}
                        <h2 class="card-header text-center bg-transparent mb-3 p-4" ><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h2>
                    {{/logourl}}
                    {{^logourl}}
                        <h2 class="card-header text-center bg-transparent mb-3 p-4"><i class="fa fa-{{siteicon}}"></i> {{sitename}}</h2>
                    {{/logourl}}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'logourl' section
                $value = $context->find('logourl');
                $buffer .= $this->section29e7cac85c6a4d6041d1daed26877f87($context, $indent, $value);
                // 'logourl' inverted section
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <h2 class="card-header text-center bg-transparent mb-3 p-4"><i class="fa fa-';
                    $value = $this->resolveValue($context->find('siteicon'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"></i> ';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</h2>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08136e042be4bb57169ca005e6c508b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#logopos}}
                    {{#logourl}}
                        <h2 class="card-header text-center bg-transparent mb-3 p-4" ><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h2>
                    {{/logourl}}
                    {{^logourl}}
                        <h2 class="card-header text-center bg-transparent mb-3 p-4"><i class="fa fa-{{siteicon}}"></i> {{sitename}}</h2>
                    {{/logourl}}
                {{/logopos}}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'logopos' section
                $value = $context->find('logopos');
                $buffer .= $this->section45a14b0da5b38d099f9fa2769c433f2d($context, $indent, $value);
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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

    private function section3ed0850dd27dd906874a40aae6c4ef8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="sr-only">
                            <a href="{{signupurl}}">{{#str}} tocreatenewaccount {{/str}}</a>
                        </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="sr-only">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73468e018561554b53f4451b41103336(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="loginerrors mt-3">
                            <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                            <div class="alert alert-danger" role="alert" data-aria-autofocus="true">{{error}}</div>
                        </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="loginerrors mt-3">
';
                $buffer .= $indent . '                            <a href="#" id="loginerrormessage" class="accesshide">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            <div class="alert alert-danger" role="alert" data-aria-autofocus="true">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section437badc16e3d879709cf3484728d15d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' signin, theme_remui ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' signin, theme_remui ';
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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

    private function section033fe689124bfc85d32db892c3b5c159(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#str}} usernameemail {{/str}}
                                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            ';
                // 'str' section
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'str' section
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'canloginbyemail' inverted section
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                // 'canloginbyemail' section
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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

    private function sectionAde9318c94c2f3a55f9a22a57e193ad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rememberusername, admin ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' rememberusername, admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9590e3c0e25cf1d81bdcef006f93b7df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' forgotpassword, theme_remui ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' forgotpassword, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEefdf8c758d7da69533743e95e3d520c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="rememberpass mt-3 checkbox-custom">
                                        <input type="checkbox" name="rememberusername" id="rememberusername" value="1" {{#username}}checked="checked"{{/username}} />
                                        <label for="rememberusername">{{#str}} rememberusername, admin {{/str}}</label>
                                        <a class="float-right" href="{{forgotpasswordurl}}">{{# str }} forgotpassword, theme_remui {{/ str }}</a> 
                                    </div>
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="rememberpass mt-3 checkbox-custom">
';
                $buffer .= $indent . '                                        <input type="checkbox" name="rememberusername" id="rememberusername" value="1" ';
                // 'username' section
                $value = $context->find('username');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= ' />
';
                $buffer .= $indent . '                                        <label for="rememberusername">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAde9318c94c2f3a55f9a22a57e193ad0($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                                        <a class="float-right" href="';
                $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9590e3c0e25cf1d81bdcef006f93b7df($context, $indent, $value);
                $buffer .= '</a> 
';
                $buffer .= $indent . '                                    </div>
';
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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

    private function section32cd50b3caf44627cabfa81985452bd4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noaccount, theme_remui ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noaccount, theme_remui ';
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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

    private function section2591fe0d497e96333b73628b451b88db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <p>{{# str }} noaccount, theme_remui {{/ str }} <a href="{{signupurl}}">{{#str}}startsignup{{/str}}</a></p>
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section32cd50b3caf44627cabfa81985452bd4($context, $indent, $value);
                $buffer .= ' <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d5568904d9d01bd68ad42f3e3acd3fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#cansignup}}
                                    <p>{{# str }} noaccount, theme_remui {{/ str }} <a href="{{signupurl}}">{{#str}}startsignup{{/str}}</a></p>
                                {{/cansignup}}
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'cansignup' section
                $value = $context->find('cansignup');
                $buffer .= $this->section2591fe0d497e96333b73628b451b88db($context, $indent, $value);
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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

    private function section6c48880d5ed76f9f313fb303b31679be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="mt-2">
                                    <form action="{{loginurl}}" method="post" id="guestlogin">
                                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                                        <input type="hidden" name="username" value="guest" />
                                        <input type="hidden" name="password" value="guest" />
                                        <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                                    </form>
                                </div>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="mt-2">
';
                $buffer .= $indent . '                                    <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                                        <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                                        <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                                        <button class="btn btn-secondary btn-block" type="submit">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                                    </form>
';
                $buffer .= $indent . '                                </div>
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4aa56fb7ecc76d79a0b154c7c011b9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e589fbcf06567f6181339f6d4bc3d50(Mustache_Context $context, $indent, $value)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="potentialidp">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= ' class="btn btn-secondary btn-block">
';
                // 'iconurl' section
                $value = $context->find('iconurl');
                $buffer .= $this->sectionC4aa56fb7ecc76d79a0b154c7c011b9d($context, $indent, $value);
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0a32a02862ae5c68f12e65452b00435(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <h6 class="mt-3">{{#str}} potentialidps, auth {{/str}}</h6>
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <h6 class="mt-3">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                                <div class="potentialidplist" class="mt-3">
';
                // 'identityproviders' section
                $value = $context->find('identityproviders');
                $buffer .= $this->section6e589fbcf06567f6181339f6d4bc3d50($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3fb2f17b1f054f7dd01e69c8c533992(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' followus, theme_remui ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' followus, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9a1c90529a72d6b26d53a364ddf652c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-1"><i class="icon fa text-white fa-facebook" aria-hidden="true"></i></a>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-facebook m-1"><i class="icon fa text-white fa-facebook" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section609c62d7860cfd468f21f543b29a8845(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-1"><i class="icon fa text-white fa-twitter" aria-hidden="true"></i></a>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-twitter m-1"><i class="icon fa text-white fa-twitter" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a4fb809d3a7bb2e0f57f905eee11407(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest"><i class="icon fa text-white fa-quora" aria-hidden="true"></i></a>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('quora'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-pinterest"><i class="icon fa text-white fa-quora" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section798e97eec85fb30e531cf92ec8d40b9e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-1"><i class="icon fa text-white fa-linkedin" aria-hidden="true"></i></a>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-linkedin m-1"><i class="icon fa text-white fa-linkedin" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7daa828f2ba9b2415c1fcb27c7a4d63b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-1"><i class="icon fa text-white fa-google-plus" aria-hidden="true"></i></a>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('gplus'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-google-plus m-1"><i class="icon fa text-white fa-google-plus" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCac0da1df3c8297813a9f1f0822433be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-1"><i class="icon fa text-white fa-instagram" aria-hidden="true"></i></a>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-instagram m-1"><i class="icon fa text-white fa-instagram" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c508aff739e15f417855d0db00db95b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-1"><i class="icon fa text-white fa-youtube" aria-hidden="true"></i></a>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-youtube m-1"><i class="icon fa text-white fa-youtube" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section873188a5d7a3037d072eb48838179698(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-1"><i class="icon fa text-white fa-pinterest" aria-hidden="true"></i></a>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('pinterest'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-pinterest m-1"><i class="icon fa text-white fa-pinterest" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2dd2b052669d796a2a61531101f6a4fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <p class="text-center">{{# str }} followus, theme_remui {{/ str }}</p>
                                <div class="social text-center">
                                    {{# facebook }}
                                        <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-1"><i class="icon fa text-white fa-facebook" aria-hidden="true"></i></a>
                                    {{/ facebook }}
                                    {{# twitter }}
                                        <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-1"><i class="icon fa text-white fa-twitter" aria-hidden="true"></i></a>
                                    {{/ twitter }}
                                    {{# quora }}
                                        <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest"><i class="icon fa text-white fa-quora" aria-hidden="true"></i></a>
                                    {{/ quora }}
                                    {{# linkedin }}
                                        <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-1"><i class="icon fa text-white fa-linkedin" aria-hidden="true"></i></a>
                                    {{/ linkedin }}
                                    {{# gplus }}
                                        <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-1"><i class="icon fa text-white fa-google-plus" aria-hidden="true"></i></a>
                                    {{/ gplus }}
                                    {{# instagram }}
                                        <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-1"><i class="icon fa text-white fa-instagram" aria-hidden="true"></i></a>
                                    {{/ instagram }}
                                    {{# youtube }}
                                        <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-1"><i class="icon fa text-white fa-youtube" aria-hidden="true"></i></a>
                                    {{/ youtube }}
                                    {{# pinterest }}
                                        <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-1"><i class="icon fa text-white fa-pinterest" aria-hidden="true"></i></a>
                                    {{/ pinterest }}
                                </div>
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <p class="text-center">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE3fb2f17b1f054f7dd01e69c8c533992($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                <div class="social text-center">
';
                // 'facebook' section
                $value = $context->find('facebook');
                $buffer .= $this->sectionE9a1c90529a72d6b26d53a364ddf652c($context, $indent, $value);
                // 'twitter' section
                $value = $context->find('twitter');
                $buffer .= $this->section609c62d7860cfd468f21f543b29a8845($context, $indent, $value);
                // 'quora' section
                $value = $context->find('quora');
                $buffer .= $this->section6a4fb809d3a7bb2e0f57f905eee11407($context, $indent, $value);
                // 'linkedin' section
                $value = $context->find('linkedin');
                $buffer .= $this->section798e97eec85fb30e531cf92ec8d40b9e($context, $indent, $value);
                // 'gplus' section
                $value = $context->find('gplus');
                $buffer .= $this->section7daa828f2ba9b2415c1fcb27c7a4d63b($context, $indent, $value);
                // 'instagram' section
                $value = $context->find('instagram');
                $buffer .= $this->sectionCac0da1df3c8297813a9f1f0822433be($context, $indent, $value);
                // 'youtube' section
                $value = $context->find('youtube');
                $buffer .= $this->section1c508aff739e15f417855d0db00db95b($context, $indent, $value);
                // 'pinterest' section
                $value = $context->find('pinterest');
                $buffer .= $this->section873188a5d7a3037d072eb48838179698($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b5d3047886a0c7e6a6c5698caa78b99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{# social }}
                                <p class="text-center">{{# str }} followus, theme_remui {{/ str }}</p>
                                <div class="social text-center">
                                    {{# facebook }}
                                        <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-1"><i class="icon fa text-white fa-facebook" aria-hidden="true"></i></a>
                                    {{/ facebook }}
                                    {{# twitter }}
                                        <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-1"><i class="icon fa text-white fa-twitter" aria-hidden="true"></i></a>
                                    {{/ twitter }}
                                    {{# quora }}
                                        <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest"><i class="icon fa text-white fa-quora" aria-hidden="true"></i></a>
                                    {{/ quora }}
                                    {{# linkedin }}
                                        <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-1"><i class="icon fa text-white fa-linkedin" aria-hidden="true"></i></a>
                                    {{/ linkedin }}
                                    {{# gplus }}
                                        <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-1"><i class="icon fa text-white fa-google-plus" aria-hidden="true"></i></a>
                                    {{/ gplus }}
                                    {{# instagram }}
                                        <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-1"><i class="icon fa text-white fa-instagram" aria-hidden="true"></i></a>
                                    {{/ instagram }}
                                    {{# youtube }}
                                        <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-1"><i class="icon fa text-white fa-youtube" aria-hidden="true"></i></a>
                                    {{/ youtube }}
                                    {{# pinterest }}
                                        <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-1"><i class="icon fa text-white fa-pinterest" aria-hidden="true"></i></a>
                                    {{/ pinterest }}
                                </div>
                                {{/ social }}
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'social' section
                $value = $context->find('social');
                $buffer .= $this->section2dd2b052669d796a2a61531101f6a4fc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c05631471aa808569dc409f6b90d52b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
        });
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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

    private function section910c82971845ca8b1f4a35920af1957d(Mustache_Context $context, $indent, $value)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
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

    private function sectionA4f2b1bc49f102a8397589c2999827d7(Mustache_Context $context, $indent, $value)
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
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'error' section
                $value = $context->find('error');
                $buffer .= $this->section1c05631471aa808569dc409f6b90d52b($context, $indent, $value);
                // 'error' inverted section
                $value = $context->find('error');
                if (empty($value)) {
                    
                    // 'autofocusform' section
                    $value = $context->find('autofocusform');
                    $buffer .= $this->section910c82971845ca8b1f4a35920af1957d($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
