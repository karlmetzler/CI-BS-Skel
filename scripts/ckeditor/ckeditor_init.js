function ckeditor_init(el,folder) {
	CKEDITOR.editorConfig = function(config) {
			config.toolbar = 'myToolbar';
			config.toolbar_myToolbar = 
			[
				['Styles', 'Format'],
				['Bold', 'Italic', 'Underline','TextColor'],
				['NumberedList', 'BulletedList', 'Blockquote'],
				['Link', 'Unlink', 'Anchor'],
				['Image', 'Table', 'SpecialChar']
			]
		}	
		var editor = CKEDITOR.replace(
			el,
			{
				toolbar:
				[
					['Format'],
					['Bold', 'Italic', 'Underline', 'TextColor'],
					['NumberedList', 'BulletedList'],
					['Link', 'Unlink'],
					['Image', 'Table', 'SpecialChar', 'PasteFromWord', 'Source']
				],
				//filebrowserUploadUrl : folder,
				filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : '/scripts/ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : '/scripts/ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : '/scripts/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : '/scripts/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : '/scripts/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

				
				uiColor : '#CCCCCC',
				height : '400px'
			}
			
			
			
		);
		
		
}