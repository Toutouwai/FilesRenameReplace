<?php namespace ProcessWire;
/**
 * @var int $id
 * @var Pagefile $pagefile
 * @var InputfieldFile $inputfield
 *
 **/
?>
<div class="rr-wrap">
	<div class='rr-show'><?= $this->_('Rename / Replace...') ?></div>
	<div class='rr-container'>
		<div class="rr-inputs">
			<div class='rr-rename rr-input'>
				<label for="rename_<?= $id ?>"><?= $this->_('Rename') ?></label>
				<input type="text" id="rename_<?= $id ?>" name="rename_<?= $id ?>" placeholder="<?= $pagefile->basename(false) ?>">
				<span class="ext">.<?= $pagefile->ext ?></span>
			</div>
			<?php $replace_options = $inputfield->value->find("basename!={$pagefile->basename}"); ?>
			<?php if($replace_options->count): ?>
				<div class='rr-replace rr-input'>
					<label for="replacewith_<?= $id ?>"><?= $this->_('Replace with') ?></label>
					<select id="replacewith_<?= $id ?>" name="replacewith_<?= $id ?>">
						<option value=""></option>
						<?php foreach($replace_options as $file): ?>
							<?php if($file->basename !== $pagefile->basename): ?>
								<option value="<?= $file->basename ?>"><?= $file->basename ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
