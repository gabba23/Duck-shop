$(document).ready(function() {
    $("#pdfDownloader").click(function() {
  
      var doc = new jsPDF('l','mm',[297, 210]);

      doc.setFont("helvetica");
  
      doc.addHTML($('#pdfSheet').get(0), 15, 15, {

      }, function (dispose) {
      doc.save('invoice.pdf');
      });
    });
  
  
  })