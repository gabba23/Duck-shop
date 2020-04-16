$(document).ready(function() {
    $("#pdfDownloader").click(function() {
  
      var doc = new jsPDF({
        unit: 'px',
      });
  
      doc.addHTML($('#page-wrap').get(0), 15, 15, {
        'width': 800
      }, function (dispose) {
      doc.save('thisMotion.pdf');
      });
    });
  
  
  })