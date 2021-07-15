<?php

class __Mustache_8ae39d4d7dc894b0c37ca43975e8654f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'cannotview' inverted section
        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="add_notes">
';
            $buffer .= $indent . '  <div class="add-notes-select">
';
            $buffer .= $indent . '    <select class="form-control">
';
            $buffer .= $indent . '    <option value="">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section2e0e9635253b1160542a90cb7917794d($context, $indent, $value);
            $buffer .= '</option>
';
            // 'courses' section
            $value = $context->find('courses');
            $buffer .= $this->section7727dd5d6bbc2fa604108ea295efd352($context, $indent, $value);
            $buffer .= $indent . '    </select>
';
            $buffer .= $indent . '  </div>
';
            $buffer .= $indent . '  <br>
';
            $buffer .= $indent . '  <select class="select2-studentlist form-control"></select>
';
            $buffer .= $indent . '  <br><br>
';
            $buffer .= $indent . '    <div class="row px-15">
';
            $buffer .= $indent . '      <div class="add-notes-button">
';
            $buffer .= $indent . '        <a href="#" class="btn btn-xs p-1 btn-info site-note">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section5fe5258fa5741b59a5654bfc8c84bb70($context, $indent, $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '      <div class="add-notes-button mx-auto">
';
            $buffer .= $indent . '        <a href="#" class="btn btn-xs p-1 btn-info course-note">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionB5f4636cfb58c74093d46fed09fb6542($context, $indent, $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '      <div class="add-notes-button">
';
            $buffer .= $indent . '        <a href="#" class="btn btn-xs p-1 btn-info personal-note">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionFae3de5102ccecc81ae6f18f984a0720($context, $indent, $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->section8456e2b48c235cbd6e6323c1c3053f8d($context, $indent, $value);
        }

        return $buffer;
    }

    private function section2e0e9635253b1160542a90cb7917794d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectacourse, block_remuiblck';
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
                
                $buffer .= 'selectacourse, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7727dd5d6bbc2fa604108ea295efd352(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <option id="{{ id }}">{{ shortname }}</option>
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
                
                $buffer .= $indent . '    <option id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fe5258fa5741b59a5654bfc8c84bb70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addsitenote, block_remuiblck';
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
                
                $buffer .= 'addsitenote, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5f4636cfb58c74093d46fed09fb6542(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcoursenote, block_remuiblck';
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
                
                $buffer .= 'addcoursenote, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFae3de5102ccecc81ae6f18f984a0720(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addpersonalnote, block_remuiblck';
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
                
                $buffer .= 'addpersonalnote, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8456e2b48c235cbd6e6323c1c3053f8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/notes\'], function(){

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
                
                $buffer .= $indent . 'require([\'block_remuiblck/notes\'], function(){
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
