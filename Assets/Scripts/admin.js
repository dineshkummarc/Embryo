//
//  Admin
//
//  Created by Storm Creative on 2010-12-14.
//  Copyright (c) Storm Creative. All rights reserved.
//
var Storm = {
	/**
	 * Following method creates a new instance of CKEditor for the specified element.
	 * 
	 * @param settings { Object } map of individual options for the WYSIWYG editor to be instantiated.
	 */
	editor: function(settings) {	
		// Intialise WYSIWYG editor
		// if required settings are missing then we use the OR operator || to fallback to standard pre-sets
		CKEDITOR.replace(settings.id, {
			height: settings.height || '190', 
			width: settings.width || '400',
			// the below toolbar property consists of an Array which contains sub-Arrays.
			// This is how CKEditor adds additional options.
			// e.g. [ [UI-Array], [PLUGIN], [PLUGIN] ]
			toolbar: settings.ui || [[ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ]]
		});
	},
	
	/**
	 * Following method is the main uploading mechanism which uses callback methods to determine what action to take
	 * 
	 * @param config { Object } map of individual options for the WYSIWYG editor to be instantiated.
	 */
	uploadify: function(config){		
		// Set-up variables
		// Using an object literal {} for our 'config' argument means we can more easily add new conditions in the future
		var width = config.width,
			 height = config.height,
			 thumbwidth = config.thumb_width,
			 thumbheight = config.thumb_height,
			 script = config.script,
			 data = config.data,
			 fileQueue = config.fileQueue,
			 callback = config.callback
			 args = config.callback_args || {}; // arguments for the callback are optional
		
		$('#image').uploadify({
			'uploader'       : '../Assets/Includes/uploadify.swf',
			'script'         : '../Assets/Includes/' + script + '.php',
			'cancelImg'      : '../Assets/Images/Admin/cancel.png',
			'folder'         : '../Assets/uploads',
			
			// I don't know how 'scriptData' works, 
			// so if config.data is false 
			// then setting this property to an empty string might cause an error?
			// I've used a ternary opertator (expression) ? true : false; rather than a long winded if()else{} statement
			'scriptData'     : (data) ?  { 'width':width, 'height':height, 'thumbwidth':thumbwidth, 'thumbheight':thumbheight } : '',
			
			'queueID'        : fileQueue,
			'fileDesc'		  : 'Standard image formats (*.jpeg; *.jpg; *.gif; *.bmp; *.png)',
			'fileExt'        : '*.jpeg; *.jpg; *.gif; *.bmp; *.png',
			'auto'           : true,
			'multi'          : false,
			'onComplete'	  : function(event, queueID, fileObj, response){
				// Augment the 'config.callback_args' object with the status response
				// Notice we don't send the full response, but a split version of it
				args.response = response.split(";");
				
				// Execure the callback
				callback(args);
			}
		});
	},
	
	/**
	 * Following method uploads a single image
	 * 
	 * @param args { Object } map of individual options.
	 */
	upload_image: function(args){
		jQuery(args.img_cell).html(args.response[0]);
		jQuery(args.name_field).val(args.response[1]);
	},
	
	/**
	 * Following method uploads a single document
	 * 
	 * @param args { Object } map of individual options.
	 */
	upload_doc: function(args){
		jQuery(args.title_field).val(args.response[0]);
		jQuery(args.doc_type).val(args.response[1]);
		jQuery(args.name_field).val(args.response[2]);
	},
	
	/**
	 * Following method uploads multiple documents
	 * 
	 * @param args { Object } map of individual options.
	 */
	upload_multidoc: function(args){
		jQuery(args.file_space).append('<tr><td>'+
			'<input type="hidden" name="attname[]" value="'+args.response[1]+'">'+
			'<input type="text" name="att_title[]" id="'+args.response[1]+'" value="'+args.response[0]+'" />'+
			'</td><td>'+
			'<input type="button" name="deleteattachment" class="deleteattachment" id="'+args.response[1]+'" value="Delete">'+
			'</td></tr>');
	},
	
	// 
	/**
	 * Initialisation checks
	 * 
	 * @param component { Object } map of individual options for initialising the current page.
	 */
	init: function(component) {	
		// If no 'component' object is passed through then we create an empty one so as to prevent errors from being displayed
		if (typeof component === "undefined") {
			component = {};
		}
		
		if (component.editor) {
			this.editor({ id:'wysiwyg', width:'400', height:'291', ui: [[ 'Bold', 'Italic', '-', 'NumberedList' ]] });
			this.editor({ id:'anotherEditor' });
		}
		
		if (component.upload_image) {
			this.uploadify({
				fileQueue: 'fileQueue0',
				width: 750,
				height: 350,
				thumb_width: 120,
				thumb_height: 100,
				script: 'uploadify',
				data: true,
				callback: this.upload_image,
				callback_args: { img_cell: '#imagecell', name_field: '#imagename' }
			});
		}
		
		
		if (component.upload_doc) {
			this.uploadify({
				fileQueue: 'fileQueue1',
				script: 'attachments',
				data: false,
				callback: this.upload_doc,
				callback_args: { title_field: '#title', doc_type: '#filetype', name_field: '#filename' }
			});
		}
		
		
		if (component.upload_multidoc) {
			this.uploadify({
				fileQueue: 'fileQueue2',
				script: 'attachments',
				data: false,
				callback: this.upload_multidoc,
				callback_args: { file_space: '#files' }
			});
		}
	}
};