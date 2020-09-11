<div class="upload__box">
	<form action="/php/upload.php" enctype="multipart/form-data" name="upload_form" method="POST">
		<h1>Please select an image from your computer</h1>
		<div class="browse__box">
			<div class="field__wrapper">
				<input name="image" type="file" id="field__file-2" class="field field__file" accept="image/*">
				<label class="field__file-wrapper" for="field__file-2">
					<div class="field__file-fake"></div>
					<div class="field__file-button">Browse</div>
					<input class="field__file-submit" type="submit" value="Upload image">
				</label>
			</div>
		</div>
	</form>
</div>