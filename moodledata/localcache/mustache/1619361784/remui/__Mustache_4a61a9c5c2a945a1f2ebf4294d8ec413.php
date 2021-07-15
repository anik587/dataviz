<?php

class __Mustache_4a61a9c5c2a945a1f2ebf4294d8ec413 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionB3a714e6ffa42a9a3d3f268096494cf6($context, $indent, $value);

        return $buffer;
    }

    private function section1e13d244c807086c442de529fedb6df2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^editingenabled}}
        require([\'theme_remui/dictionary\'], function(dictionary) {
            dictionary.init();
        });
        {{/editingenabled}}
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
                
                // 'editingenabled' inverted section
                $value = $context->find('editingenabled');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        require([\'theme_remui/dictionary\'], function(dictionary) {
';
                    $buffer .= $indent . '            dictionary.init();
';
                    $buffer .= $indent . '        });
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d6b93722ae2204a6519ec5badb20196(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'theme_remui/course\'], function(course){
            course.init({{focusdata.on}});
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
                
                $buffer .= $indent . '        require([\'theme_remui/course\'], function(course){
';
                $buffer .= $indent . '            course.init(';
                $value = $this->resolveValue($context->findDot('focusdata.on'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3a714e6ffa42a9a3d3f268096494cf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#enabledictionary}}
        {{^editingenabled}}
        require([\'theme_remui/dictionary\'], function(dictionary) {
            dictionary.init();
        });
        {{/editingenabled}}
    {{/enabledictionary}}
    
    {{#focusdata.enabled}}
        require([\'theme_remui/course\'], function(course){
            course.init({{focusdata.on}});
        });
    {{/focusdata.enabled}}

    require([\'theme_remui/loader\']);
    require([\'theme_remui/drawer\'], function(mod) {
        mod.init();
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
                
                // 'enabledictionary' section
                $value = $context->find('enabledictionary');
                $buffer .= $this->section1e13d244c807086c442de529fedb6df2($context, $indent, $value);
                $buffer .= $indent . '    
';
                // 'focusdata.enabled' section
                $value = $context->findDot('focusdata.enabled');
                $buffer .= $this->section8d6b93722ae2204a6519ec5badb20196($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    require([\'theme_remui/loader\']);
';
                $buffer .= $indent . '    require([\'theme_remui/drawer\'], function(mod) {
';
                $buffer .= $indent . '        mod.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
