<?php
// source: /home/pavel-zehnula/development/paylibo-form/www/_/app/templates/Paylibo/default.latte

use Latte\Runtime as LR;

final class Templateed2577ef86 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'head' => 'blockHead',
	];

	public $blockTypes = [
		'content' => 'html',
		'head' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) ?>




<?php
		$this->renderBlock('head', get_defined_vars());
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['key' => '32', 'value' => '32'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockContent(array $ʟ_args): void
	{
		extract($ʟ_args);
?>
<div class="row">
    <div class="span5">
        <h2>Vložte data platby</h2>
        
<?php
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("payliboForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>

    </div>
    <div class="span6">

<?php
		if (!empty($values)) {
?>
        
        <h2>QR Platba kód</h2>        
        <hr>

<?php
			if (empty($error404)) {
?>
        <div>
            <h3 class="">Platební QR kód</h3>
            <div class="well ac"><img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($qrCodeUrl)) /* line 21 */ ?>"></div>
            <p class="ar"><a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($qrCodeUrl)) /* line 22 */ ?>" title="<?php
				echo LR\Filters::escapeHtmlAttr($qrCodeUrl) /* line 22 */ ?>">QR Platba generátor - QR code</a></p>
            <hr>
            <h3 class="">QR Platba řetězec</h3>
            <pre><?php echo LR\Filters::escapeHtmlText($payliboString) /* line 25 */ ?></pre>
            <p class="ar"><a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($stringUrl)) /* line 26 */ ?>" title="<?php
				echo LR\Filters::escapeHtmlAttr($stringUrl) /* line 26 */ ?>">QR Platba generátor - řetězec</a></p>
            <hr>
        </div>
<?php
			}
?>

        <h3 class="">Zaslaná data</h3>
        <pre><?php
			$iterations = 0;
			foreach ($iterator = $this->global->its[] = new LR\CachingIterator($values) as $key=>$value) {
				echo LR\Filters::escapeHtmlText($key) /* line 32 */ ?>: <?php
				echo LR\Filters::escapeHtmlText($value) /* line 32 */;
				if (!$iterator->isLast()) {
?>

<?php
				}
				$iterations++;
			}
			array_pop($this->global->its);
			$iterator = end($this->global->its);
?></pre>        
<?php
		}
?>
&nbsp;
    </div>
    <div class="span1">

            <a class="FlattrButton fr" style="display:none;" href="http://paylibo.3tecky.cz/"></a>
            <noscript><a href="http://flattr.com/thing/736201/Paylibo-platebni-QR-kod-" target="_blank">
            <img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0"></a></noscript>        
        
    </div>
</div>

<?php
	}


	public function blockHead(array $ʟ_args): void
	{
		
	}

}
