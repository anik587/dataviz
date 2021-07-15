<?php

class __Mustache_fc9c85c131c2a3dd5e6524793475e7f9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="list-group" aria-label="';
        $value = $this->resolveValue($context->find('firstcollectionlabel'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'flatnavigation' section
        $value = $context->find('flatnavigation');
        $buffer .= $this->section301b26170c6be55258b5c57d525e9437($context, $indent, $value);
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function section0468e6ee1bf594ca5cef94c349c2f5f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
</nav>
<nav class="list-group border-top" aria-label="{{get_collectionlabel}}">
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
                
                $buffer .= $indent . '</nav>
';
                $buffer .= $indent . '<nav class="list-group border-top" aria-label="';
                $value = $this->resolveValue($context->find('get_collectionlabel'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2233087813f2f0dc85c21e6f8a0b28de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-parent-key="{{.}}"';
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
                
                $buffer .= 'data-parent-key="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c636b8d211c8807beb0b37869ad3b26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}';
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
                
                $value = $this->resolveValue($context->findDot('icon.pix'), $context);
                $buffer .= $value;
                $buffer .= ', ';
                $value = $this->resolveValue($context->findDot('icon.component'), $context);
                $buffer .= $value;
                $buffer .= ', ';
                $value = $this->resolveValue($context->findDot('icon.alt'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97e358293a0541173f4794abee22184b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="media-left">
                    {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                </span>
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
                
                $buffer .= $indent . '                <span class="media-left">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0c636b8d211c8807beb0b37869ad3b26($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section645adc7c68819cafa47a127ec9f62a53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} aria-label="{{text}}">
        <div class="ml-{{get_indent}}">
            <div class="media">
            {{#icon.pix}}
                <span class="media-left">
                    {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                </span>
            {{/icon.pix}}
                <span class="media-body">{{{text}}}</span>
            </div>
        </div>
    </a>
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
                
                $buffer .= $indent . '    <a class="list-group-item list-group-item-action ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isexpandable="';
                $value = $this->resolveValue($context->find('isexpandable'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-indent="';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-showdivider="';
                $value = $this->resolveValue($context->find('showdivider'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-nodetype="';
                $value = $this->resolveValue($context->find('nodetype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-collapse="';
                $value = $this->resolveValue($context->find('collapse'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-forceopen="';
                $value = $this->resolveValue($context->find('forceopen'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isactive="';
                $value = $this->resolveValue($context->find('isactive'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-hidden="';
                $value = $this->resolveValue($context->find('hidden'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '" data-preceedwithhr="';
                $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'parent.key' section
                $value = $context->findDot('parent.key');
                $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                $buffer .= ' aria-label="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="ml-';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="media">
';
                // 'icon.pix' section
                $value = $context->findDot('icon.pix');
                $buffer .= $this->section97e358293a0541173f4794abee22184b($context, $indent, $value);
                $buffer .= $indent . '                <span class="media-body">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe8ba0cc7ac3c48b870ff405e9bb0545(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#action}}
    <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} aria-label="{{text}}">
        <div class="ml-{{get_indent}}">
            <div class="media">
            {{#icon.pix}}
                <span class="media-left">
                    {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                </span>
            {{/icon.pix}}
                <span class="media-body">{{{text}}}</span>
            </div>
        </div>
    </a>
    {{/action}}
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
                
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->section645adc7c68819cafa47a127ec9f62a53($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ea74201a9a55085845cdb5b1bf8c825(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="media-left">
                        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                    </span>
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
                
                $buffer .= $indent . '                    <span class="media-left">
';
                $buffer .= $indent . '                        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0c636b8d211c8807beb0b37869ad3b26($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC641f5c5eba946e12b6f06e1f46da666(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accordioncontrolmycourses, theme_remui';
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
                
                $buffer .= 'accordioncontrolmycourses, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a87aee62a5b3281b938fab80062bfcf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="media-left">
                                {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                            </span>
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
                
                $buffer .= $indent . '                            <span class="media-left">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0c636b8d211c8807beb0b37869ad3b26($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16205188cc97f748c7bfe6afbf2fe886(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                 <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="1" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} role="menuitem" tabindex="-1">
                    <div class="ml-1">
                        <div class="media">
                        {{#icon.pix}}
                            <span class="media-left">
                                {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                            </span>
                        {{/icon.pix}}
                            <span class="media-body">{{{text}}}</span>
                        </div>
                    </div>
                </a>
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
                
                $buffer .= $indent . '                 <a class="list-group-item list-group-item-action ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isexpandable="';
                $value = $this->resolveValue($context->find('isexpandable'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-indent="1" data-showdivider="';
                $value = $this->resolveValue($context->find('showdivider'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-nodetype="';
                $value = $this->resolveValue($context->find('nodetype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-collapse="';
                $value = $this->resolveValue($context->find('collapse'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-forceopen="';
                $value = $this->resolveValue($context->find('forceopen'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isactive="';
                $value = $this->resolveValue($context->find('isactive'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-hidden="';
                $value = $this->resolveValue($context->find('hidden'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '" data-preceedwithhr="';
                $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'parent.key' section
                $value = $context->findDot('parent.key');
                $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                $buffer .= ' role="menuitem" tabindex="-1">
';
                $buffer .= $indent . '                    <div class="ml-1">
';
                $buffer .= $indent . '                        <div class="media">
';
                // 'icon.pix' section
                $value = $context->findDot('icon.pix');
                $buffer .= $this->section2a87aee62a5b3281b938fab80062bfcf($context, $indent, $value);
                $buffer .= $indent . '                            <span class="media-body">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99b04a3ed946c58a8c47ad7d2ecdda92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{mycoursesurl}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} aria-label="My Courses Link">
            <div class="ml-{{get_indent}}">
                <div class="media">
                {{#icon.pix}}
                    <span class="media-left">
                        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                    </span>
                {{/icon.pix}}
                    <div class="media-body justify-content-between align-items-center">
                        {{{text}}}
                        <span>
                            <i class="fa fa-angle-right align-items-center justify-content-center toggle-menu show" data-key="{{key}}" tabindex="0" aria-label="{{#str}}accordioncontrolmycourses, theme_remui{{/str}}" aria-controls="mycoursessubmenu" aria-expanded="false" role="button"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>

        <div id="mycoursessubmenu" class="mycoursesubmenu" data-parent-key="mycourses" role="menu" aria-label="My courses list">
            {{#mycourseschild}}
                 <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="1" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} role="menuitem" tabindex="-1">
                    <div class="ml-1">
                        <div class="media">
                        {{#icon.pix}}
                            <span class="media-left">
                                {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                            </span>
                        {{/icon.pix}}
                            <span class="media-body">{{{text}}}</span>
                        </div>
                    </div>
                </a>
            {{/mycourseschild}}
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
                
                $buffer .= $indent . '        <a class="list-group-item list-group-item-action ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('mycoursesurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isexpandable="';
                $value = $this->resolveValue($context->find('isexpandable'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-indent="';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-showdivider="';
                $value = $this->resolveValue($context->find('showdivider'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-nodetype="';
                $value = $this->resolveValue($context->find('nodetype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-collapse="';
                $value = $this->resolveValue($context->find('collapse'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-forceopen="';
                $value = $this->resolveValue($context->find('forceopen'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isactive="';
                $value = $this->resolveValue($context->find('isactive'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-hidden="';
                $value = $this->resolveValue($context->find('hidden'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '" data-preceedwithhr="';
                $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'parent.key' section
                $value = $context->findDot('parent.key');
                $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                $buffer .= ' aria-label="My Courses Link">
';
                $buffer .= $indent . '            <div class="ml-';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <div class="media">
';
                // 'icon.pix' section
                $value = $context->findDot('icon.pix');
                $buffer .= $this->section9ea74201a9a55085845cdb5b1bf8c825($context, $indent, $value);
                $buffer .= $indent . '                    <div class="media-body justify-content-between align-items-center">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        <span>
';
                $buffer .= $indent . '                            <i class="fa fa-angle-right align-items-center justify-content-center toggle-menu show" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" tabindex="0" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC641f5c5eba946e12b6f06e1f46da666($context, $indent, $value);
                $buffer .= '" aria-controls="mycoursessubmenu" aria-expanded="false" role="button"></i>
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div id="mycoursessubmenu" class="mycoursesubmenu" data-parent-key="mycourses" role="menu" aria-label="My courses list">
';
                // 'mycourseschild' section
                $value = $context->find('mycourseschild');
                $buffer .= $this->section16205188cc97f748c7bfe6afbf2fe886($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9775237e59c9edff399d36aa401f340(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^action}}
    {{#mycoursestab}}
        <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{mycoursesurl}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} aria-label="My Courses Link">
            <div class="ml-{{get_indent}}">
                <div class="media">
                {{#icon.pix}}
                    <span class="media-left">
                        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                    </span>
                {{/icon.pix}}
                    <div class="media-body justify-content-between align-items-center">
                        {{{text}}}
                        <span>
                            <i class="fa fa-angle-right align-items-center justify-content-center toggle-menu show" data-key="{{key}}" tabindex="0" aria-label="{{#str}}accordioncontrolmycourses, theme_remui{{/str}}" aria-controls="mycoursessubmenu" aria-expanded="false" role="button"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>

        <div id="mycoursessubmenu" class="mycoursesubmenu" data-parent-key="mycourses" role="menu" aria-label="My courses list">
            {{#mycourseschild}}
                 <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="1" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} role="menuitem" tabindex="-1">
                    <div class="ml-1">
                        <div class="media">
                        {{#icon.pix}}
                            <span class="media-left">
                                {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                            </span>
                        {{/icon.pix}}
                            <span class="media-body">{{{text}}}</span>
                        </div>
                    </div>
                </a>
            {{/mycourseschild}}
        </div>
    {{/mycoursestab}}
    {{^mycoursestab}}
        <div class="list-group-item" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
            <div class="ml-{{get_indent}}">
                <div class="media">
                {{#icon.pix}}
                    <span class="media-left">
                        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                    </span>
                {{/icon.pix}}
                    <div class="media-body d-flex justify-content-between align-items-center">
                        {{{text}}}
                        <span>
                            <i class="fa fa-angle-down align-items-center justify-content-center toggle-menu" data-key="{{key}}" aria-hidden="true"></i>
                            <i class="fa fa-angle-right align-items-center justify-content-center toggle-menu show" data-key="{{key}}" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    {{/mycoursestab}}
    {{/action}}
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
                
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    // 'mycoursestab' section
                    $value = $context->find('mycoursestab');
                    $buffer .= $this->section99b04a3ed946c58a8c47ad7d2ecdda92($context, $indent, $value);
                    // 'mycoursestab' inverted section
                    $value = $context->find('mycoursestab');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '        <div class="list-group-item" data-key="';
                        $value = $this->resolveValue($context->find('key'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-isexpandable="';
                        $value = $this->resolveValue($context->find('isexpandable'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-indent="';
                        $value = $this->resolveValue($context->find('get_indent'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-showdivider="';
                        $value = $this->resolveValue($context->find('showdivider'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-type="';
                        $value = $this->resolveValue($context->find('type'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-nodetype="';
                        $value = $this->resolveValue($context->find('nodetype'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-collapse="';
                        $value = $this->resolveValue($context->find('collapse'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-forceopen="';
                        $value = $this->resolveValue($context->find('forceopen'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-isactive="';
                        $value = $this->resolveValue($context->find('isactive'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-hidden="';
                        $value = $this->resolveValue($context->find('hidden'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" title="';
                        $value = $this->resolveValue($context->find('text'), $context);
                        $buffer .= $value;
                        $buffer .= '" data-preceedwithhr="';
                        $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" ';
                        // 'parent.key' section
                        $value = $context->findDot('parent.key');
                        $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                        $buffer .= '>
';
                        $buffer .= $indent . '            <div class="ml-';
                        $value = $this->resolveValue($context->find('get_indent'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '">
';
                        $buffer .= $indent . '                <div class="media">
';
                        // 'icon.pix' section
                        $value = $context->findDot('icon.pix');
                        $buffer .= $this->section9ea74201a9a55085845cdb5b1bf8c825($context, $indent, $value);
                        $buffer .= $indent . '                    <div class="media-body d-flex justify-content-between align-items-center">
';
                        $buffer .= $indent . '                        ';
                        $value = $this->resolveValue($context->find('text'), $context);
                        $buffer .= $value;
                        $buffer .= '
';
                        $buffer .= $indent . '                        <span>
';
                        $buffer .= $indent . '                            <i class="fa fa-angle-down align-items-center justify-content-center toggle-menu" data-key="';
                        $value = $this->resolveValue($context->find('key'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" aria-hidden="true"></i>
';
                        $buffer .= $indent . '                            <i class="fa fa-angle-right align-items-center justify-content-center toggle-menu show" data-key="';
                        $value = $this->resolveValue($context->find('key'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" aria-hidden="true"></i>
';
                        $buffer .= $indent . '                        </span>
';
                        $buffer .= $indent . '                    </div>
';
                        $buffer .= $indent . '                </div>
';
                        $buffer .= $indent . '            </div>
';
                        $buffer .= $indent . '        </div>
';
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section301b26170c6be55258b5c57d525e9437(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showdivider}}
</nav>
<nav class="list-group border-top" aria-label="{{get_collectionlabel}}">
    {{/showdivider}}
    {{#show}}
    {{#action}}
    <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} aria-label="{{text}}">
        <div class="ml-{{get_indent}}">
            <div class="media">
            {{#icon.pix}}
                <span class="media-left">
                    {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                </span>
            {{/icon.pix}}
                <span class="media-body">{{{text}}}</span>
            </div>
        </div>
    </a>
    {{/action}}
    {{/show}}
    {{#show}}
    {{^action}}
    {{#mycoursestab}}
        <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{mycoursesurl}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} aria-label="My Courses Link">
            <div class="ml-{{get_indent}}">
                <div class="media">
                {{#icon.pix}}
                    <span class="media-left">
                        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                    </span>
                {{/icon.pix}}
                    <div class="media-body justify-content-between align-items-center">
                        {{{text}}}
                        <span>
                            <i class="fa fa-angle-right align-items-center justify-content-center toggle-menu show" data-key="{{key}}" tabindex="0" aria-label="{{#str}}accordioncontrolmycourses, theme_remui{{/str}}" aria-controls="mycoursessubmenu" aria-expanded="false" role="button"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>

        <div id="mycoursessubmenu" class="mycoursesubmenu" data-parent-key="mycourses" role="menu" aria-label="My courses list">
            {{#mycourseschild}}
                 <a class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="1" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}} role="menuitem" tabindex="-1">
                    <div class="ml-1">
                        <div class="media">
                        {{#icon.pix}}
                            <span class="media-left">
                                {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                            </span>
                        {{/icon.pix}}
                            <span class="media-body">{{{text}}}</span>
                        </div>
                    </div>
                </a>
            {{/mycourseschild}}
        </div>
    {{/mycoursestab}}
    {{^mycoursestab}}
        <div class="list-group-item" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" title="{{{text}}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
            <div class="ml-{{get_indent}}">
                <div class="media">
                {{#icon.pix}}
                    <span class="media-left">
                        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
                    </span>
                {{/icon.pix}}
                    <div class="media-body d-flex justify-content-between align-items-center">
                        {{{text}}}
                        <span>
                            <i class="fa fa-angle-down align-items-center justify-content-center toggle-menu" data-key="{{key}}" aria-hidden="true"></i>
                            <i class="fa fa-angle-right align-items-center justify-content-center toggle-menu show" data-key="{{key}}" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    {{/mycoursestab}}
    {{/action}}
    {{/show}}
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
                
                // 'showdivider' section
                $value = $context->find('showdivider');
                $buffer .= $this->section0468e6ee1bf594ca5cef94c349c2f5f9($context, $indent, $value);
                // 'show' section
                $value = $context->find('show');
                $buffer .= $this->sectionFe8ba0cc7ac3c48b870ff405e9bb0545($context, $indent, $value);
                // 'show' section
                $value = $context->find('show');
                $buffer .= $this->sectionA9775237e59c9edff399d36aa401f340($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
