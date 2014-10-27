<?php

Blade::extend(function($view, $compiler){
    $pattern = $compiler->createPlainMatcher('meta');

    return preg_replace($pattern, '<?php echo Meta::render();?>', $view);
});


Blade::extend(function($view, $compiler){
    $pattern = $compiler->createPlainMatcher('selectlang');

    return preg_replace($pattern, '<?php echo Meta::render_selectlang();?>', $view);
});