<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.98194400 1346876450";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"D:\wamp\www\paylibo-form\www\_\app\templates\@layout.latte";i:2;i:1346876449;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"eb558ae released on 2012-04-04";}}}?><?php

// source file: D:\wamp\www\paylibo-form\www\_\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'r0qb1fdaix')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbe740a727ba_head')) { function _lbe740a727ba_head($_l, $_args) { extract($_args)
;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="description" content="Formulář pro snadné získání platebního QR kodu Paylibo" />
<?php if (isset($robots)): ?>        <meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>

        <title>Paylibo formulář - získej snadno platební QR kód...</title>

        <link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/screen.css" type="text/css" />
        <link rel="stylesheet" media="print" href="<?php echo htmlSpecialChars($basePath) ?>/css/print.css" type="text/css" />
        <link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" type="image/x-icon" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>


        <link href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap.css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap.js"></script>
        
        <script type="text/javascript">
        /* <![CDATA[ */
            (function() {
                var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
                s.type = 'text/javascript';
                s.async = true;
                s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
                t.parentNode.insertBefore(s, t);
            })();
        /* ]]> */</script>        

	<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

    </head>

    <body>
        <script> document.body.className+=' js' </script>

        <div class="container" id="">

            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li class="active">
                                <a href="<?php echo htmlSpecialChars($basePath) ?>">Home</a>
                            </li>
                            <li><a href="#">šablony</a></li>
                                            </ul>  
                    </div>
                </div>
            </div>              

            <br /><br /><br />

            <div class="hero-unit">                
                
                <h1>Smartplatba (ex Paylibo)</a></h1>
                <h2>platební QR kód </a></h2>
            </div>                                    

<?php $iterations = 0; foreach ($flashes as $flash): ?>            <div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>

<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
            
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                var disqus_shortname = 'paylibo3teckycz'; // required: replace example with your forum shortname

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>


            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        
                        <ul class="nav">
                            <li class="">
                                <a href="http://paylibo.com/">Smartplatba</a>
                            </li>
                            <li class="">
                                <a href="http://paylibo.com/development/restful-api/">Smartplatba restful API specifikace</a>
                            </li>
                            <li class="">
                                <a href="https://github.com/smartpayment/paylibo-restapi/">Smartplatba restful API / GitHub</a>
                            </li>                                                        
                        </ul>  

                        <ul class="nav pull-right">
                            <li class="">
                                <a href="https://github.com/knedle/paylibo-form">Paylibo form / GitHub</a>
                            </li>                              
                            <li class="active">
                                <a>by</a>
                            </li>                                                                   
                            <li class="">
                                <a href="https://twitter.com/3knedle">@3knedle</a>
                            </li>                                                         
                        </ul>  
                        
                    </div>
                </div>
            </div>             
        </div>

    </body>
</html>
