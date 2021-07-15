<?php

class __Mustache_43df2bc6e201bb6deda6e73469189c7f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="page-footer" class="py-3">
';
        $buffer .= $indent . '    <div class="floating-buttons page-settings" data-html2canvas-ignore>
';
        $buffer .= $indent . '        <button id="gotop" type="button" class=" btn btn-floating btn-primary ';
        // 'hasblock' section
        $value = $context->find('hasblock');
        $buffer .= $this->section382ff3bfba89fe72450348c0f262593a($context, $indent, $value);
        $buffer .= ' d-none align-items-center justify-content-center" data-toggle="tooltip" data-original-title="Go Top" data-placement="left" data-trigger="hover" aria-label="Go To Top" role="button">
';
        $buffer .= $indent . '            <i class="fa fa-chevron-up" aria-hidden="true"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        
';
        // 'turneditingonurl' section
        $value = $context->find('turneditingonurl');
        $buffer .= $this->section39ca6a49a905a28f6317b472d9015e2c($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'focusdata.enabled' section
        $value = $context->findDot('focusdata.enabled');
        $buffer .= $this->section13a604044299c179804801438c26386d($context, $indent, $value);
        // 'floating_buttons' section
        $value = $context->find('floating_buttons');
        $buffer .= $this->sectionAd9edf100d5e13398058576ce90a6dc2($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        // 'footerdata' section
        $value = $context->find('footerdata');
        $buffer .= $this->sectionCf9a995f6394f0d90b8366fe530f27b3($context, $indent, $value);
        $buffer .= $indent . '</footer>
';

        return $buffer;
    }

    private function section382ff3bfba89fe72450348c0f262593a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hasblock';
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
                
                $buffer .= 'hasblock';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22cb24a0a369918b69452f530020dc0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Off';
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
                
                $buffer .= 'Off';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section447ae05379dd9ec82844aee8287e959b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fa-times';
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
                
                $buffer .= 'fa-times';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39ca6a49a905a28f6317b472d9015e2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<button type="button" class="btn btn-floating align-items-center justify-content-center d-flex" 
    		style="background: #eb6709!important;" 
    		data-toggle="tooltip" data-original-title="Turn Editing {{^editingon}}On{{/editingon}} {{#editingon}}Off{{/editingon}}" data-placement="left" data-trigger="hover" 
    		aria-label="Turn Editing {{^editingon}}On{{/editingon}} {{#editingon}}Off{{/editingon}}" 
    		role="switch" aria-checked="false" >
    		<a href="{{turneditingonurl}}" class="d-flex align-items-center text-decoration-none">
            	<i class="fa {{#editingon}}fa-times{{/editingon}}{{^editingon}}fa-pencil{{/editingon}}" aria-hidden="
            true"></i>
            </a>
    	</button>
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
                
                $buffer .= $indent . '		<button type="button" class="btn btn-floating align-items-center justify-content-center d-flex" 
';
                $buffer .= $indent . '    		style="background: #eb6709!important;" 
';
                $buffer .= $indent . '    		data-toggle="tooltip" data-original-title="Turn Editing ';
                // 'editingon' inverted section
                $value = $context->find('editingon');
                if (empty($value)) {
                    
                    $buffer .= 'On';
                }
                $buffer .= ' ';
                // 'editingon' section
                $value = $context->find('editingon');
                $buffer .= $this->section22cb24a0a369918b69452f530020dc0c($context, $indent, $value);
                $buffer .= '" data-placement="left" data-trigger="hover" 
';
                $buffer .= $indent . '    		aria-label="Turn Editing ';
                // 'editingon' inverted section
                $value = $context->find('editingon');
                if (empty($value)) {
                    
                    $buffer .= 'On';
                }
                $buffer .= ' ';
                // 'editingon' section
                $value = $context->find('editingon');
                $buffer .= $this->section22cb24a0a369918b69452f530020dc0c($context, $indent, $value);
                $buffer .= '" 
';
                $buffer .= $indent . '    		role="switch" aria-checked="false" >
';
                $buffer .= $indent . '    		<a href="';
                $value = $this->resolveValue($context->find('turneditingonurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="d-flex align-items-center text-decoration-none">
';
                $buffer .= $indent . '            	<i class="fa ';
                // 'editingon' section
                $value = $context->find('editingon');
                $buffer .= $this->section447ae05379dd9ec82844aee8287e959b($context, $indent, $value);
                // 'editingon' inverted section
                $value = $context->find('editingon');
                if (empty($value)) {
                    
                    $buffer .= 'fa-pencil';
                }
                $buffer .= '" aria-hidden="
';
                $buffer .= $indent . '            true"></i>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '    	</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13a604044299c179804801438c26386d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <button id="focusmodebutton" type="button" class="btn {{focusdata.btnbg}} btn-floating align-items-center justify-content-center d-flex" data-toggle="tooltip" data-original-title="Focus Mode" data-placement="left" data-trigger="hover" aria-label="Toggle Focus Mode" role="Button" aria-pressed="false" >
                <i class="fa {{focusdata.btnicon}}" aria-hidden="true"></i>
            </button>
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
                
                $buffer .= $indent . '            <button id="focusmodebutton" type="button" class="btn ';
                $value = $this->resolveValue($context->findDot('focusdata.btnbg'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' btn-floating align-items-center justify-content-center d-flex" data-toggle="tooltip" data-original-title="Focus Mode" data-placement="left" data-trigger="hover" aria-label="Toggle Focus Mode" role="Button" aria-pressed="false" >
';
                $buffer .= $indent . '                <i class="fa ';
                $value = $this->resolveValue($context->findDot('focusdata.btnicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-hidden="true"></i>
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd9edf100d5e13398058576ce90a6dc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{floating_buttons}}}
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
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('floating_buttons'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45be6c549947ccc4fb17dfad88f89525(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{ classes }} text-xs-center">
                    <div class="p-2">
                        <h4 class="card-title mt-1 text-white font-weight-normal font-size-18">{{{ title }}}</h4>
                        <div class="card-text text-white">{{{ content }}}</div>
                    </div>
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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' text-xs-center">
';
                $buffer .= $indent . '                    <div class="p-2">
';
                $buffer .= $indent . '                        <h4 class="card-title mt-1 text-white font-weight-normal font-size-18">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        <div class="card-text text-white">';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
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

    private function section091c80bca0da7d317e4f8f305fc0fd42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-1"><i class="icon fa fa-facebook" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-facebook m-1"><i class="icon fa fa-facebook" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37035bc5eb2b8541a4b7c3aabd2247e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-1"><i class="icon fa fa-twitter" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-twitter m-1"><i class="icon fa fa-twitter" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44901a24d7b4da2f4a6240590f7f039e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest"><i class="icon fa fa-quora" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('quora'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-pinterest"><i class="icon fa fa-quora" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2046666b303e5db7339bb6997cc8c94d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-1"><i class="icon fa fa-linkedin" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-linkedin m-1"><i class="icon fa fa-linkedin" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa17898a76dce3e75c0b19b89f49ca93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-1"><i class="icon fa fa-google-plus" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('gplus'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-google-plus m-1"><i class="icon fa fa-google-plus" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57e0cb1fb2d44d5c84841e398027cbc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-1"><i class="icon fa fa-instagram" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-instagram m-1"><i class="icon fa fa-instagram" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7cf65723f14d9019d7ef2400823dd04c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-1"><i class="icon fa fa-youtube" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-youtube m-1"><i class="icon fa fa-youtube" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2165a67a8abb214f7d53892dc67bc8c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-1"><i class="icon fa fa-pinterest" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('pinterest'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-pinterest m-1"><i class="icon fa fa-pinterest" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93ab2fb8cbd40bdfe92e986b18fdd0c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{ classes }} text-xs-center">
                    <div class="py-2 px-1">
                        <h4 class="card-title mt-1 text-white font-weight-normal font-size-18">{{# str }} followus, theme_remui {{/ str }}</h4>
                        <p class="card-text">
                            {{# facebook }}
                                <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-1"><i class="icon fa fa-facebook" aria-hidden="true"></i></a>
                            {{/ facebook }}
                            {{# twitter }}
                                <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-1"><i class="icon fa fa-twitter" aria-hidden="true"></i></a>
                            {{/ twitter }}
                            {{# quora }}
                                <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest"><i class="icon fa fa-quora" aria-hidden="true"></i></a>
                            {{/ quora }}
                            {{# linkedin }}
                                <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-1"><i class="icon fa fa-linkedin" aria-hidden="true"></i></a>
                            {{/ linkedin }}
                            {{# gplus }}
                                <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-1"><i class="icon fa fa-google-plus" aria-hidden="true"></i></a>
                            {{/ gplus }}
                            {{# instagram }}
                                <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-1"><i class="icon fa fa-instagram" aria-hidden="true"></i></a>
                            {{/ instagram }}
                            {{# youtube }}
                                <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-1"><i class="icon fa fa-youtube" aria-hidden="true"></i></a>
                            {{/ youtube }}
                            {{# pinterest }}
                                <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-1"><i class="icon fa fa-pinterest" aria-hidden="true"></i></a>
                            {{/ pinterest }}
                        </p>
                    </div>
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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' text-xs-center">
';
                $buffer .= $indent . '                    <div class="py-2 px-1">
';
                $buffer .= $indent . '                        <h4 class="card-title mt-1 text-white font-weight-normal font-size-18">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE3fb2f17b1f054f7dd01e69c8c533992($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        <p class="card-text">
';
                // 'facebook' section
                $value = $context->find('facebook');
                $buffer .= $this->section091c80bca0da7d317e4f8f305fc0fd42($context, $indent, $value);
                // 'twitter' section
                $value = $context->find('twitter');
                $buffer .= $this->section37035bc5eb2b8541a4b7c3aabd2247e2($context, $indent, $value);
                // 'quora' section
                $value = $context->find('quora');
                $buffer .= $this->section44901a24d7b4da2f4a6240590f7f039e($context, $indent, $value);
                // 'linkedin' section
                $value = $context->find('linkedin');
                $buffer .= $this->section2046666b303e5db7339bb6997cc8c94d($context, $indent, $value);
                // 'gplus' section
                $value = $context->find('gplus');
                $buffer .= $this->sectionDa17898a76dce3e75c0b19b89f49ca93($context, $indent, $value);
                // 'instagram' section
                $value = $context->find('instagram');
                $buffer .= $this->section57e0cb1fb2d44d5c84841e398027cbc5($context, $indent, $value);
                // 'youtube' section
                $value = $context->find('youtube');
                $buffer .= $this->section7cf65723f14d9019d7ef2400823dd04c($context, $indent, $value);
                // 'pinterest' section
                $value = $context->find('pinterest');
                $buffer .= $this->section2165a67a8abb214f7d53892dc67bc8c1($context, $indent, $value);
                $buffer .= $indent . '                        </p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2d5335613e625f97c91fba6125c780d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'custommenu, admin';
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
                
                $buffer .= 'custommenu, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5686da0cb2f6fb2f8716f5a64e11fce7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <ul class="list-unstyled pt-3">
                            {{> theme_remui/custom_menu_footer }}
                        </ul>
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
                
                $buffer .= $indent . '                        <ul class="list-unstyled pt-3">
';
                if ($partial = $this->mustache->loadPartial('theme_remui/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2143849f7ac2ba7f01ca7cf1e800ff02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' poweredby, theme_remui ';
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
                
                $buffer .= ' poweredby, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBad423ce9ded6c445c1ef100974e92e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank" >{{# str }} poweredby, theme_remui {{/ str }}</a>
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
                
                $buffer .= $indent . '                    <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank" >';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2143849f7ac2ba7f01ca7cf1e800ff02($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf9a995f6394f0d90b8366fe530f27b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container-fluid">
        <div class="container">
            <div class="row m-0 p-0">
                {{# sections }}
                <div class="{{ classes }} text-xs-center">
                    <div class="p-2">
                        <h4 class="card-title mt-1 text-white font-weight-normal font-size-18">{{{ title }}}</h4>
                        <div class="card-text text-white">{{{ content }}}</div>
                    </div>
                </div>
                {{/ sections }}

                {{# social }}
                <div class="{{ classes }} text-xs-center">
                    <div class="py-2 px-1">
                        <h4 class="card-title mt-1 text-white font-weight-normal font-size-18">{{# str }} followus, theme_remui {{/ str }}</h4>
                        <p class="card-text">
                            {{# facebook }}
                                <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-1"><i class="icon fa fa-facebook" aria-hidden="true"></i></a>
                            {{/ facebook }}
                            {{# twitter }}
                                <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-1"><i class="icon fa fa-twitter" aria-hidden="true"></i></a>
                            {{/ twitter }}
                            {{# quora }}
                                <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest"><i class="icon fa fa-quora" aria-hidden="true"></i></a>
                            {{/ quora }}
                            {{# linkedin }}
                                <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-1"><i class="icon fa fa-linkedin" aria-hidden="true"></i></a>
                            {{/ linkedin }}
                            {{# gplus }}
                                <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-1"><i class="icon fa fa-google-plus" aria-hidden="true"></i></a>
                            {{/ gplus }}
                            {{# instagram }}
                                <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-1"><i class="icon fa fa-instagram" aria-hidden="true"></i></a>
                            {{/ instagram }}
                            {{# youtube }}
                                <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-1"><i class="icon fa fa-youtube" aria-hidden="true"></i></a>
                            {{/ youtube }}
                            {{# pinterest }}
                                <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-1"><i class="icon fa fa-pinterest" aria-hidden="true"></i></a>
                            {{/ pinterest }}
                        </p>
                    </div>
                </div>
                {{/ social }}
            </div>
        </div>

        <div class="footer-bottom row mx-3 px-0 py-2">
            <div class="site-footer-legal pt-2 col-md-6">
                <nav class="nav navbar-nav d-none" aria-label="{{#str}}custommenu, admin{{/str}}">
                    {{# output.custom_menu_flat }}
                        <ul class="list-unstyled pt-3">
                            {{> theme_remui/custom_menu_footer }}
                        </ul>
                    {{/ output.custom_menu_flat }}
                </nav>
                <a href="{{ bottomlink }}">{{{ bottomtext }}}</a>
            </div>
            <div class="site-footer-right pt-2 col-md-6 text-right">
                {{# poweredby }}
                    <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank" >{{# str }} poweredby, theme_remui {{/ str }}</a>
                {{/ poweredby }}
                {{{ output.login_info }}}
                <div class="tool_usertours-resettourcontainer"></div>
                {{{ output.standard_footer_html }}}
            </div>
        </div>
        <div id="course-footer">{{{ output.course_footer }}}</div>
        {{{ output.standard_end_of_body_html }}}
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
                
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="row m-0 p-0">
';
                // 'sections' section
                $value = $context->find('sections');
                $buffer .= $this->section45be6c549947ccc4fb17dfad88f89525($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'social' section
                $value = $context->find('social');
                $buffer .= $this->section93ab2fb8cbd40bdfe92e986b18fdd0c4($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="footer-bottom row mx-3 px-0 py-2">
';
                $buffer .= $indent . '            <div class="site-footer-legal pt-2 col-md-6">
';
                $buffer .= $indent . '                <nav class="nav navbar-nav d-none" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB2d5335613e625f97c91fba6125c780d($context, $indent, $value);
                $buffer .= '">
';
                // 'output.custom_menu_flat' section
                $value = $context->findDot('output.custom_menu_flat');
                $buffer .= $this->section5686da0cb2f6fb2f8716f5a64e11fce7($context, $indent, $value);
                $buffer .= $indent . '                </nav>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('bottomlink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('bottomtext'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="site-footer-right pt-2 col-md-6 text-right">
';
                // 'poweredby' section
                $value = $context->find('poweredby');
                $buffer .= $this->sectionBad423ce9ded6c445c1ef100974e92e1($context, $indent, $value);
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.login_info'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer"></div>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div id="course-footer">';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
