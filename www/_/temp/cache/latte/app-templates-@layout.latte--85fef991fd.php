<?php
// source: /home/pavel-zehnula/development/paylibo-form/www/_/app/templates/@layout.latte

use Latte\Runtime as LR;

final class Template85fef991fd extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
	];

	public $blockTypes = [
		'head' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="description" content="Formulář pro snadné získání platebního QR kodu Paylibo">
<?php
		if (isset($robots)) {
			?>        <meta name="robots" content="<?php echo LR\Filters::escapeHtmlAttr($robots) /* line 18 */ ?>">
<?php
		}
?>

        <title>QR Platba (exPaylibo) formulář - získej snadno platební QR kód...</title>

        <link rel="stylesheet" media="screen,projection,tv" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */ ?>/css/screen.css" type="text/css">
        <link rel="stylesheet" media="print" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */ ?>/css/print.css" type="text/css">
        <link rel="shortcut icon" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 24 */ ?>/favicon.ico" type="image/x-icon">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */ ?>/js/netteForms.js"></script>


        <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 30 */ ?>/css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 31 */ ?>/js/bootstrap.js"></script>

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

        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-314942-33']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>

	<?php
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('head', get_defined_vars()) ?>

    </head>

    <body>
        <script> document.body.className+=' js' </script>

        <div class="container" id="">

            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li class="active">
                                <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 71 */ ?>">Home</a>
                            </li>
                            <li><a href="#">šablony</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <br><br><br>

            <div class="hero-unit">

                <h1>QR Platba (ex Paylibo)</h1>
                <h2>formulář pro získání platebního QR kódu</h2>
            </div>

<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>            <div class="flash <?php echo LR\Filters::escapeHtmlAttr($flash->type) /* line 88 */ ?>"><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 88 */ ?></div>
<?php
			$iterations++;
		}
?>

<?php
		$this->renderBlock('content', $this->params, 'html');
?>

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
                                <a href="http://qr-platba.cz/">QR Platba</a>
                            </li>
                            <li class="">
                                <a href="http://qr-platba.cz/pro-vyvojare/restful-api/">QR Platba restful API specifikace</a>
                            </li>
                            <li class="">
                                <a href="https://github.com/spayd/paylibo-restapi/">QR Platba restful API / GitHub</a>
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
<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '88'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockHead(array $ʟ_args): void
	{
		
	}

}
