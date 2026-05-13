import html2canvas from 'html2canvas';
import jsPDF from 'jspdf';

export async function exportPDF(element, companyName) {
  if (!element) return;

  const canvas = await html2canvas(element, {
    scale: 2,
    useCORS: true,
    backgroundColor: '#ffffff',
    logging: false,
  });

  const imgData = canvas.toDataURL('image/png');
  const pdf = new jsPDF('p', 'mm', 'a4');

  const pageWidth = pdf.internal.pageSize.getWidth();
  const pageHeight = pdf.internal.pageSize.getHeight();
  const margin = 10;
  const contentWidth = pageWidth - margin * 2;
  const imgHeight = (canvas.height * contentWidth) / canvas.width;

  // If image is taller than the page, scale it down to fit
  const finalHeight = Math.min(imgHeight, pageHeight - margin * 2);
  const finalWidth = imgHeight > pageHeight - margin * 2
    ? (canvas.width * finalHeight) / canvas.height
    : contentWidth;

  const xOffset = (pageWidth - finalWidth) / 2;

  pdf.addImage(imgData, 'PNG', xOffset, margin, finalWidth, finalHeight);

  const safeName = companyName.replace(/[^a-zA-Z0-9]/g, '_').toLowerCase();
  pdf.save(`${safeName}_deal_scorecard.pdf`);
}
