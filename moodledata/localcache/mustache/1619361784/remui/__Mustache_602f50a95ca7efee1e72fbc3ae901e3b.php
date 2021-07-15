<?php

class __Mustache_602f50a95ca7efee1e72fbc3ae901e3b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="enrolled_users_stats_block">
';
        // 'hascategory' section
        $value = $context->find('hascategory');
        $buffer .= $this->sectionC61fc26011dbd5985003da3ad604ad27($context, $indent, $value);
        // 'hascategory' inverted section
        $value = $context->find('hascategory');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="enroll-stats-error alert alert-info">
';
            $buffer .= $indent . '      ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section0bd845db9465bc0d8c0c8db6f81af5fd($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section9440442ecb151ccfda5d9d1550675961(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectcategory, block_remuiblck';
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
                
                $buffer .= 'selectcategory, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e0f186e69b4e9d954359fc32ef39d00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option data-id="{{ key }}">{{{categoryname}}}</option>
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
                
                $buffer .= $indent . '            <option data-id="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('categoryname'), $context);
                $buffer .= $value;
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdd2f8149d7c1eb0d0f6838d9c94954c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'problemwhileloadingdata, block_remuiblck';
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
                
                $buffer .= 'problemwhileloadingdata, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91f9ec669bc1383f466c183c99bae363(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nousersincoursecategoryfound, block_remuiblck';
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
                
                $buffer .= 'nousersincoursecategoryfound, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC61fc26011dbd5985003da3ad604ad27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row">
      <div class="col-md-5">
        <div class="chart-responsive">
          <canvas id="pieChartblock"></canvas>
        </div>
      </div>
      <div class="col-md-7">
        <label class="font-weight-400 blue-grey-600 font-size-14">{{#str}}selectcategory, block_remuiblck{{/str}} :</label>
        <select id=\'coursecategorylistblock\' class=\'coursecategorylistblock form-control mb-10\'>
          {{# category }}
            <option data-id="{{ key }}">{{{categoryname}}}</option>
          {{/ category }}
        </select>
        <ul class="chart-legend list-group list-group-full clearfix"></ul>
      </div>
    </div>
    <div class="enroll-stats-error alert alert-danger" style="display:none">
      {{#str}}problemwhileloadingdata, block_remuiblck{{/str}}
    </div>
    <div class="enroll-stats-nouserserror alert alert-info" style="display:none">
      {{#str}}nousersincoursecategoryfound, block_remuiblck{{/str}}
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
                
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '      <div class="col-md-5">
';
                $buffer .= $indent . '        <div class="chart-responsive">
';
                $buffer .= $indent . '          <canvas id="pieChartblock"></canvas>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="col-md-7">
';
                $buffer .= $indent . '        <label class="font-weight-400 blue-grey-600 font-size-14">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9440442ecb151ccfda5d9d1550675961($context, $indent, $value);
                $buffer .= ' :</label>
';
                $buffer .= $indent . '        <select id=\'coursecategorylistblock\' class=\'coursecategorylistblock form-control mb-10\'>
';
                // 'category' section
                $value = $context->find('category');
                $buffer .= $this->section6e0f186e69b4e9d954359fc32ef39d00($context, $indent, $value);
                $buffer .= $indent . '        </select>
';
                $buffer .= $indent . '        <ul class="chart-legend list-group list-group-full clearfix"></ul>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="enroll-stats-error alert alert-danger" style="display:none">
';
                $buffer .= $indent . '      ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBdd2f8149d7c1eb0d0f6838d9c94954c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="enroll-stats-nouserserror alert alert-info" style="display:none">
';
                $buffer .= $indent . '      ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section91f9ec669bc1383f466c183c99bae363($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bd845db9465bc0d8c0c8db6f81af5fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocoursecategoryfound, block_remuiblck';
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
                
                $buffer .= 'nocoursecategoryfound, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
