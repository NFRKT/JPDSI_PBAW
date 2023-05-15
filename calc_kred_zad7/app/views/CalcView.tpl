{extends file="main.tpl"}

{block name=footer}Miłego obliczania{/block}

{block name=content}

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$conf->action_url}calcCompute" method="post">
		<fieldset>

			<label for="x">Kwota kredytu: </label>
			<input id="x" type="text" placeholder="kwota" name="x" value="">

			<label for="y">Liczba lat spłaty: </label>
			<input id="y" type="text" placeholder="lata" name="y" value="">

			<label for="z">Oprocentowanie: </label>
			<input id="z" type="text" placeholder="%" name="z" value="">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}


{if isset($result->result)}
	<h4>Wynik:</h4>
	<p class="res">
	{$result->result}
	</p>

{/if}

</div>
</div>

{/block}