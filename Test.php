<?php

function HTMLValidation($input)
{
    $pattern = "/<(\"[^\"]*\"|'[^']*'|[^'\">])*>/";

    if (preg_match($pattern, $input))
        return 1;
    return 0;
}

echo HTMLValidation('<diasva>Hello, its <strong>me</strong> youre <i>looking</i> for <span class="blink">;)</span>!</diasva>');
