<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.64314500 1342095837";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:61:"C:\wamp\www\playlibo-form\app\templates\Paylibo\default.latte";i:2;i:1342095836;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"eb558ae released on 2012-04-04";}}}?><?php

// source file: C:\wamp\www\playlibo-form\app\templates\Paylibo\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '0k2v4dwr43')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd0b2280bb9_content')) { function _lbd0b2280bb9_content($_l, $_args) { extract($_args)
?><div class="row">
    <div class="span6">
        <h2>Vložte data platby</h2>
        
<?php $_ctrl = $_control->getComponent("payliboForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
        
    </div>
    <div class="span6">
            
<?php if (!empty($values)): ?>
        <div>
            
            <h2>Získaný Paylibo QR kód</h2>
            
            <h3 class="">Paylibo QR kód</h3>
            <div class="well ac"><img src="<?php echo htmlSpecialChars($qrCodeUrl) ?>" /></div>
            <p class="ar"><a href="<?php echo htmlSpecialChars($qrCodeUrl) ?>" title="<?php echo htmlSpecialChars($qrCodeUrl) ?>">Paylibo generator - QR code</a></p>
            <hr />
            <h3 class="">Paylibo řetězec</h3>
            <pre><?php echo Nette\Templating\Helpers::escapeHtml($payliboString, ENT_NOQUOTES) ?></pre>
            <p class="ar"><a href="<?php echo htmlSpecialChars($stringUrl) ?>" title="<?php echo htmlSpecialChars($stringUrl) ?>">Paylibo generator - řetězec</a></p>
            <hr />
            <h3 class="">Zaslaná data</h3>
            <pre><?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($values) as $key=>$value): echo Nette\Templating\Helpers::escapeHtml($key, ENT_NOQUOTES) ?>
: <?php echo Nette\Templating\Helpers::escapeHtml($value, ENT_NOQUOTES) ;if (!$iterator->isLast()): ?>

<?php endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?></pre>
        </div>        
<?php endif ?>
    </div>
</div>

<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbbd815332cb_head')) { function _lbbd815332cb_head($_l, $_args) { extract($_args)
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 