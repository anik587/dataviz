<?php

class __Mustache_d82166ebc4064516a5e7077094d1cdaf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="card-deck dashboard-card-deck ';
        $blockFunction = $context->findInBlock('classes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= ' slick-slider" data-region="card-deck" role="list" id="card-deck-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'courses' section
        $value = $context->find('courses');
        $buffer .= $this->section1aa8c121a9be7823308d167c1bbc9a9f($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section3764ed2d9370f959b898b86b7f37bff4($context, $indent, $value);

        return $buffer;
    }

    private function section770d421ad5e692e1604f4cccb1a279f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseimage, core_course';
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
                
                $buffer .= 'aria:courseimage, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38a131d3566f5afbeceacdf81327f8dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseshortname, core_course';
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
                
                $buffer .= 'aria:courseshortname, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4cf681e69c0da078ce7b58fae1335c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="text-muted muted w-100 mb-1 text-truncate">
                                {{{shortname}}}
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
                
                $buffer .= $indent . '                            <div class="text-muted muted w-100 mb-1 text-truncate">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section812e363a880e32990e0f434e718baef5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:coursename, core_course';
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
                
                $buffer .= 'aria:coursename, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50e2b5307468e24d3d837834573bd7c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' viewcourse, theme_remui ';
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
                
                $buffer .= ' viewcourse, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1aa8c121a9be7823308d167c1bbc9a9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="card dashboard-card m-0 my-2 position-relative" role="listitem"
        data-region="course-content"
        data-course-id="{{{id}}}">
        <div class="card-body p-0 mx-2">
            <figure class="overlay overlay-hover rounded">
                <div class="card-img dashboard-card-img" style=\'background-image: url("{{{courseimage}}}");background-size: cover;background-position: center;height: 110px;\'>
                    <span class="sr-only">{{#str}}aria:courseimage, core_course{{/str}}</span>
                </div>
                <div id="course-info-container-{{id}}-{{uniqid}}" class="card-body overlay-figure overlay-scale text-white font-weight-bold wdm-course-card-body" style="background-color: {{ color }};">
                    <div class="d-flex mb-1 flex-wrap font-size-13" style="letter-spacing: 0.4px;">
                        {{$coursecategory}}{{/coursecategory}}
                    </div>
                    <div class="d-flex align-items-start" >
                        <a href = "{{ viewurl }}"  class="text-white text-truncate">
                            <!-- <span class="sr-only">
                                {{#str}}aria:courseshortname, core_course{{/str}}
                            </span> -->
                            {{#showshortname}}
                            <div class="text-muted muted w-100 mb-1 text-truncate">
                                {{{shortname}}}
                            </div>
                            {{/showshortname}}
                            {{> core_course/favouriteicon }}
                            <span class="sr-only">
                                {{#str}}aria:coursename, core_course{{/str}}
                            </span>
                            <span class="coursename">{{$coursename}}{{/coursename}}</span>
                        </a>
                    </div>
                    <div class="wdm-course-card-progress">
                        {{$progress}}{{/progress}}
                    </div>
                </div>
                <figcaption onclick="location.href=\'{{ viewurl }}\';" class="overlay-panel overlay-background overlay-fade d-flex align-items-center justify-content-center w-100" style="cursor: pointer;">
                    <a href = "{{ viewurl }}" class="btn text-white font-weight-600 font-size-18 vertical-align-middle">{{#str}} viewcourse, theme_remui {{/str}}</a>
                </figcaption>
            </figure>
            <div class="wdm-course-card-actions position-absolute">
                {{$menu}}{{/menu}}
            </div>
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
                
                $buffer .= $indent . '    <div class="card dashboard-card m-0 my-2 position-relative" role="listitem"
';
                $buffer .= $indent . '        data-region="course-content"
';
                $buffer .= $indent . '        data-course-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="card-body p-0 mx-2">
';
                $buffer .= $indent . '            <figure class="overlay overlay-hover rounded">
';
                $buffer .= $indent . '                <div class="card-img dashboard-card-img" style=\'background-image: url("';
                $value = $this->resolveValue($context->find('courseimage'), $context);
                $buffer .= $value;
                $buffer .= '");background-size: cover;background-position: center;height: 110px;\'>
';
                $buffer .= $indent . '                    <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section770d421ad5e692e1604f4cccb1a279f2($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div id="course-info-container-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="card-body overlay-figure overlay-scale text-white font-weight-bold wdm-course-card-body" style="background-color: ';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';">
';
                $buffer .= $indent . '                    <div class="d-flex mb-1 flex-wrap font-size-13" style="letter-spacing: 0.4px;">
';
                $buffer .= $indent . '                        ';
                $blockFunction = $context->findInBlock('coursecategory');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                }
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="d-flex align-items-start" >
';
                $buffer .= $indent . '                        <a href = "';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"  class="text-white text-truncate">
';
                $buffer .= $indent . '                            <!-- <span class="sr-only">
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section38a131d3566f5afbeceacdf81327f8dd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span> -->
';
                // 'showshortname' section
                $value = $context->find('showshortname');
                $buffer .= $this->sectionA4cf681e69c0da078ce7b58fae1335c0($context, $indent, $value);
                if ($partial = $this->mustache->loadPartial('core_course/favouriteicon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                            <span class="sr-only">
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section812e363a880e32990e0f434e718baef5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                            <span class="coursename">';
                $blockFunction = $context->findInBlock('coursename');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                }
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="wdm-course-card-progress">
';
                $buffer .= $indent . '                        ';
                $blockFunction = $context->findInBlock('progress');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                }
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <figcaption onclick="location.href=\'';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\';" class="overlay-panel overlay-background overlay-fade d-flex align-items-center justify-content-center w-100" style="cursor: pointer;">
';
                $buffer .= $indent . '                    <a href = "';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn text-white font-weight-600 font-size-18 vertical-align-middle">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section50e2b5307468e24d3d837834573bd7c6($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </figcaption>
';
                $buffer .= $indent . '            </figure>
';
                $buffer .= $indent . '            <div class="wdm-course-card-actions position-absolute">
';
                $buffer .= $indent . '                ';
                $blockFunction = $context->findInBlock('menu');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                }
                $buffer .= '
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

    private function section3764ed2d9370f959b898b86b7f37bff4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'theme_remui/slick\'], function($) {

    $( document ).ready(function() {

        enableSlickSlider(\'.block_myoverview\');
        enableSlickSlider(\'.block-starredcourses\');
        
        function enableSlickSlider(blockname){
            var colors = [\'#f39f45\', \'#f95e5f\', \'#2fb0bf\', \'#2fb786\', \'#526069\', \'#46657d\'];
            $(blockname +\' .wdm-course-card-body\').each(function(index, element) {
                index >= colors.length ? index = index % colors.length : index = index;
                $(element).css(\'background-color\', colors[index]);
            });
            var deck = $(blockname + \' .dashboard-card-deck#card-deck-{{uniqid}}\');

            deck.css("overflow", "unset");

            if (!deck.is(\'.slick-initialized\')) {
                deck.slick({
                    dots: false,
                    arrows: true,
                    infinite: false,
                    rtl: ($("html").attr("dir") == "rtl") ? true : false,
                    opacity: 0,
                    speed: 500,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                        }, {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                        }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                        }
                    ]
                });
            }

            var interval = setInterval(function() {
                if (deck.is(\':hidden\')) {
                    if (deck.closest(\'[data-region="paged-content-page"]\').is(\'.hidden\')) {
                        clearInterval(interval);
                    }
                    return;
                }
                clearInterval(interval);
                deck.slick(\'setPosition\');
            }, 250);
        }
    });

    if (window[\'wdmPagingInitialized\'] == undefined &&
        $(\'[data-block="myoverview"].block_myoverview [data-region="paging-bar"] [data-region="page-item"]\').length != 0) {
        $(\'[data-block="myoverview"].block_myoverview [data-region="paging-bar"] [data-region="page-item"]\').click(function(){
            setTimeout(function() {
                $(\'.block_myoverview [data-region="paged-content-page"]:not(.hidden)\')
                .find(\'.dashboard-card-deck\').slick(\'setPosition\')
            }, 100);
        });
        window[\'wdmPagingInitialized\'] = true;
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
                
                $buffer .= $indent . 'require([\'jquery\', \'theme_remui/slick\'], function($) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $( document ).ready(function() {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        enableSlickSlider(\'.block_myoverview\');
';
                $buffer .= $indent . '        enableSlickSlider(\'.block-starredcourses\');
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        function enableSlickSlider(blockname){
';
                $buffer .= $indent . '            var colors = [\'#f39f45\', \'#f95e5f\', \'#2fb0bf\', \'#2fb786\', \'#526069\', \'#46657d\'];
';
                $buffer .= $indent . '            $(blockname +\' .wdm-course-card-body\').each(function(index, element) {
';
                $buffer .= $indent . '                index >= colors.length ? index = index % colors.length : index = index;
';
                $buffer .= $indent . '                $(element).css(\'background-color\', colors[index]);
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '            var deck = $(blockname + \' .dashboard-card-deck#card-deck-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            deck.css("overflow", "unset");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if (!deck.is(\'.slick-initialized\')) {
';
                $buffer .= $indent . '                deck.slick({
';
                $buffer .= $indent . '                    dots: false,
';
                $buffer .= $indent . '                    arrows: true,
';
                $buffer .= $indent . '                    infinite: false,
';
                $buffer .= $indent . '                    rtl: ($("html").attr("dir") == "rtl") ? true : false,
';
                $buffer .= $indent . '                    opacity: 0,
';
                $buffer .= $indent . '                    speed: 500,
';
                $buffer .= $indent . '                    slidesToShow: 4,
';
                $buffer .= $indent . '                    slidesToScroll: 4,
';
                $buffer .= $indent . '                    responsive: [{
';
                $buffer .= $indent . '                        breakpoint: 1024,
';
                $buffer .= $indent . '                        settings: {
';
                $buffer .= $indent . '                            slidesToShow: 3,
';
                $buffer .= $indent . '                            slidesToScroll: 3
';
                $buffer .= $indent . '                        }
';
                $buffer .= $indent . '                        }, {
';
                $buffer .= $indent . '                        breakpoint: 800,
';
                $buffer .= $indent . '                        settings: {
';
                $buffer .= $indent . '                            slidesToShow: 2,
';
                $buffer .= $indent . '                            slidesToScroll: 2
';
                $buffer .= $indent . '                        }
';
                $buffer .= $indent . '                        }, {
';
                $buffer .= $indent . '                        breakpoint: 480,
';
                $buffer .= $indent . '                        settings: {
';
                $buffer .= $indent . '                            slidesToShow: 1,
';
                $buffer .= $indent . '                            slidesToScroll: 1
';
                $buffer .= $indent . '                        }
';
                $buffer .= $indent . '                        }
';
                $buffer .= $indent . '                    ]
';
                $buffer .= $indent . '                });
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            var interval = setInterval(function() {
';
                $buffer .= $indent . '                if (deck.is(\':hidden\')) {
';
                $buffer .= $indent . '                    if (deck.closest(\'[data-region="paged-content-page"]\').is(\'.hidden\')) {
';
                $buffer .= $indent . '                        clearInterval(interval);
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                    return;
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                clearInterval(interval);
';
                $buffer .= $indent . '                deck.slick(\'setPosition\');
';
                $buffer .= $indent . '            }, 250);
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    if (window[\'wdmPagingInitialized\'] == undefined &&
';
                $buffer .= $indent . '        $(\'[data-block="myoverview"].block_myoverview [data-region="paging-bar"] [data-region="page-item"]\').length != 0) {
';
                $buffer .= $indent . '        $(\'[data-block="myoverview"].block_myoverview [data-region="paging-bar"] [data-region="page-item"]\').click(function(){
';
                $buffer .= $indent . '            setTimeout(function() {
';
                $buffer .= $indent . '                $(\'.block_myoverview [data-region="paged-content-page"]:not(.hidden)\')
';
                $buffer .= $indent . '                .find(\'.dashboard-card-deck\').slick(\'setPosition\')
';
                $buffer .= $indent . '            }, 100);
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        window[\'wdmPagingInitialized\'] = true;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
