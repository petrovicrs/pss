/*
Mrežni Sistemi
*/

/**
 * @file Download manual in pdf
 */
(function() {
  CKEDITOR.plugins.add('downloadmanual', {
    init : function(editor) {
      //adding button
      editor.ui.addButton('DownloadManual', {
        label : 'Download Manual',
        command : 'downloadPDF',
        icon : this.path + 'images/icon.gif'
      });

      //opening imce window
      editor.addCommand('downloadPDF', {
        exec : function() {
          window.open(Drupal.settings.basePath + 'sites/default/files/manual.pdf', '_blank');
        }
      });

    }
  });

} )();