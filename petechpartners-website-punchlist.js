const fs = require("fs");
const { Document, Packer, Paragraph, TextRun, Table, TableRow, TableCell,
        Header, Footer, AlignmentType, HeadingLevel, BorderStyle, WidthType,
        ShadingType, LevelFormat, PageNumber, PageBreak } = require("docx");

const noBorder = { style: BorderStyle.NONE, size: 0 };
const noBorders = { top: noBorder, bottom: noBorder, left: noBorder, right: noBorder };
const border = { style: BorderStyle.SINGLE, size: 1, color: "CCCCCC" };
const borders = { top: border, bottom: border, left: border, right: border };
const cellMargins = { top: 60, bottom: 60, left: 120, right: 120 };

function headerCell(text, width) {
  return new TableCell({
    borders,
    width: { size: width, type: WidthType.DXA },
    shading: { fill: "1B3A5C", type: ShadingType.CLEAR },
    margins: cellMargins,
    verticalAlign: "center",
    children: [new Paragraph({ children: [new TextRun({ text, bold: true, color: "FFFFFF", font: "Arial", size: 20 })] })]
  });
}

function cell(text, width, opts = {}) {
  const runs = [];
  if (opts.bold) {
    runs.push(new TextRun({ text, bold: true, font: "Arial", size: 20 }));
  } else {
    runs.push(new TextRun({ text, font: "Arial", size: 20 }));
  }
  return new TableCell({
    borders,
    width: { size: width, type: WidthType.DXA },
    shading: opts.shading ? { fill: opts.shading, type: ShadingType.CLEAR } : undefined,
    margins: cellMargins,
    children: [new Paragraph({ children: runs })]
  });
}

function priorityCell(level, width) {
  const colors = { "HIGH": "FADBD8", "MEDIUM": "FEF9E7", "LOW": "D5F5E3" };
  const textColors = { "HIGH": "922B21", "MEDIUM": "7D6608", "LOW": "1E8449" };
  return new TableCell({
    borders,
    width: { size: width, type: WidthType.DXA },
    shading: { fill: colors[level] || "FFFFFF", type: ShadingType.CLEAR },
    margins: cellMargins,
    children: [new Paragraph({
      alignment: AlignmentType.CENTER,
      children: [new TextRun({ text: level, bold: true, color: textColors[level] || "000000", font: "Arial", size: 20 })]
    })]
  });
}

function sectionHeader(text) {
  return new Table({
    width: { size: 9360, type: WidthType.DXA },
    columnWidths: [9360],
    rows: [new TableRow({
      children: [new TableCell({
        borders: { top: noBorder, bottom: { style: BorderStyle.SINGLE, size: 6, color: "1B3A5C" }, left: noBorder, right: noBorder },
        width: { size: 9360, type: WidthType.DXA },
        margins: { top: 40, bottom: 80, left: 0, right: 0 },
        children: [new Paragraph({
          children: [new TextRun({ text, bold: true, color: "1B3A5C", font: "Arial", size: 26 })]
        })]
      })]
    })]
  });
}

// Column widths: # | Page | Item | Priority | Notes
const colW = [500, 1200, 3860, 900, 2900];

function headerRow() {
  return new TableRow({
    children: [
      headerCell("#", colW[0]),
      headerCell("Page", colW[1]),
      headerCell("Action Item", colW[2]),
      headerCell("Priority", colW[3]),
      headerCell("Details / Notes", colW[4]),
    ]
  });
}

function itemRow(num, page, item, priority, notes, alt = false) {
  const bg = alt ? "F8F9FA" : undefined;
  return new TableRow({
    children: [
      cell(String(num), colW[0], { shading: bg }),
      cell(page, colW[1], { shading: bg, bold: true }),
      cell(item, colW[2], { shading: bg }),
      priorityCell(priority, colW[3]),
      cell(notes, colW[4], { shading: bg }),
    ]
  });
}

const doc = new Document({
  styles: {
    default: { document: { run: { font: "Arial", size: 22 } } },
    paragraphStyles: [
      { id: "Heading1", name: "Heading 1", basedOn: "Normal", next: "Normal", quickFormat: true,
        run: { size: 36, bold: true, font: "Arial", color: "1B3A5C" },
        paragraph: { spacing: { before: 120, after: 200 }, outlineLevel: 0 } },
      { id: "Heading2", name: "Heading 2", basedOn: "Normal", next: "Normal", quickFormat: true,
        run: { size: 28, bold: true, font: "Arial", color: "1B3A5C" },
        paragraph: { spacing: { before: 200, after: 120 }, outlineLevel: 1 } },
    ]
  },
  numbering: {
    config: [{
      reference: "bullets",
      levels: [{ level: 0, format: LevelFormat.BULLET, text: "\u2022", alignment: AlignmentType.LEFT,
        style: { paragraph: { indent: { left: 720, hanging: 360 } } } }]
    }]
  },
  sections: [{
    properties: {
      page: {
        size: { width: 12240, height: 15840 },
        margin: { top: 1440, right: 1440, bottom: 1440, left: 1440 }
      }
    },
    headers: {
      default: new Header({
        children: [new Paragraph({
          border: { bottom: { style: BorderStyle.SINGLE, size: 4, color: "1B3A5C", space: 4 } },
          children: [
            new TextRun({ text: "PE-Tech-Partners Website Punchlist", bold: true, font: "Arial", size: 18, color: "1B3A5C" }),
            new TextRun({ text: "\tMarch 2, 2026", font: "Arial", size: 18, color: "888888" }),
          ],
          tabStops: [{ type: "right", position: 9360 }],
        })]
      })
    },
    footers: {
      default: new Footer({
        children: [new Paragraph({
          alignment: AlignmentType.CENTER,
          children: [
            new TextRun({ text: "Page ", font: "Arial", size: 16, color: "888888" }),
            new TextRun({ children: [PageNumber.CURRENT], font: "Arial", size: 16, color: "888888" }),
          ]
        })]
      })
    },
    children: [
      // Title
      new Paragraph({
        alignment: AlignmentType.CENTER,
        spacing: { after: 80 },
        children: [new TextRun({ text: "petechpartners.com", font: "Arial", size: 44, bold: true, color: "1B3A5C" })]
      }),
      new Paragraph({
        alignment: AlignmentType.CENTER,
        spacing: { after: 40 },
        children: [new TextRun({ text: "Website Revision Punchlist", font: "Arial", size: 32, color: "555555" })]
      }),
      new Paragraph({
        alignment: AlignmentType.CENTER,
        spacing: { after: 300 },
        children: [new TextRun({ text: "Based on feedback from Tim  |  Prepared for Replit implementation", font: "Arial", size: 20, color: "888888" })]
      }),

      // SECTION 1: HOMEPAGE - HERO
      sectionHeader("HOMEPAGE \u2014 Hero Section"),
      new Paragraph({ spacing: { after: 120 }, children: [] }),
      new Table({
        width: { size: 9360, type: WidthType.DXA },
        columnWidths: colW,
        rows: [
          headerRow(),
          itemRow(1, "Home", "Remove the redundant logo/text overlay from center of hero image", "HIGH",
            "The company name already appears in the nav bar. Remove the centered overlay text to declutter the hero."),
          itemRow(2, "Home", "Move the hero overlay text to the main headline area", "HIGH",
            "Take the descriptive text that was in the center overlay and use it as the hero headline/subheadline instead.", true),
          itemRow(3, "Home", "Change tagline to \u201CStrategic IT Solutions\u201D", "HIGH",
            "Update the hero headline to read \u201CStrategic IT Solutions\u201D for clarity on the IT/tech focus."),
          itemRow(4, "Home", "Remove the \u201COpen Classified Tech Brief\u201D CTA button", "MEDIUM",
            "Keep only one CTA. The dual buttons create confusion. Remove this one and keep \u201CSecure a Strategic Debrief.\u201D", true),
          itemRow(5, "Home", "Consider renaming \u201CSecure a Strategic Debrief\u201D", "MEDIUM",
            "The name may not be immediately clear to outsiders. Consider a plainer name if conversion is low. Test and iterate."),
        ]
      }),

      new Paragraph({ spacing: { after: 300 }, children: [] }),

      // SECTION 2: HOMEPAGE - CONTENT BLOCKS
      sectionHeader("HOMEPAGE \u2014 Content Blocks & Spacing"),
      new Paragraph({ spacing: { after: 120 }, children: [] }),
      new Table({
        width: { size: 9360, type: WidthType.DXA },
        columnWidths: colW,
        rows: [
          headerRow(),
          itemRow(6, "Home", "Reduce white space in the second content block by ~50%", "MEDIUM",
            "Cut the top and bottom padding/margin roughly in half. Keep some breathing room but reduce excessive scroll."),
          itemRow(7, "Home", "Add a section title/header to the \u201Cchallenges\u201D content block", "HIGH",
            "This is the only block without a heading. Add a title like \u201CThe Problems You\u2019re Facing\u201D or similar so visitors instantly know the context.", true),
          itemRow(8, "Home", "Add business outcomes to the \u201Csecurity holes\u201D bullet", "MEDIUM",
            "Instead of just \u201Csecurity holes everywhere,\u201D state the business consequence (e.g., deal risk, compliance failure, data exposure)."),
          itemRow(9, "Home", "Reduce white space in the tools/platforms section to match other blocks", "MEDIUM",
            "The spacing here is noticeably larger than other content blocks. Make it consistent.", true),
          itemRow(10, "Home", "Change \u201CLocked Down & Compliant\u201D to a business outcome", "MEDIUM",
            "In the \u201CWhat Winning Looks Like\u201D section, reframe this as the business result of being compliant (e.g., \u201CDeal-Ready Security\u201D or \u201CCompliance That Closes Deals\u201D)."),
        ]
      }),

      new Paragraph({ spacing: { after: 300 }, children: [] }),

      // SECTION 3: HOMEPAGE - CTAs
      sectionHeader("HOMEPAGE \u2014 Calls to Action"),
      new Paragraph({ spacing: { after: 120 }, children: [] }),
      new Table({
        width: { size: 9360, type: WidthType.DXA },
        columnWidths: colW,
        rows: [
          headerRow(),
          itemRow(11, "Home", "Use only ONE primary CTA throughout the homepage", "HIGH",
            "Remove alternate CTA buttons. Stick to a single, consistent call to action across the entire page."),
          itemRow(12, "Home", "Add the explainer text below every CTA instance", "MEDIUM",
            "The \u201CNo cost, no pressure, high clarity\u201D line works well. Include it beneath every CTA button placement.", true),
          itemRow(13, "Home", "Add the CTA button every other content block", "HIGH",
            "Currently the CTA only appears at top and bottom. Insert it roughly every 2 content blocks so visitors never have to scroll far to take action."),
        ]
      }),

      new Paragraph({ spacing: { after: 300 }, children: [] }),

      // SECTION 4: HOMEPAGE - CREDIBILITY
      sectionHeader("HOMEPAGE \u2014 Credibility & Social Proof"),
      new Paragraph({ spacing: { after: 120 }, children: [] }),
      new Table({
        width: { size: 9360, type: WidthType.DXA },
        columnWidths: colW,
        rows: [
          headerRow(),
          itemRow(14, "Home", "Add testimonials near the \u201CWhy Us\u201D section", "HIGH",
            "Place client testimonials right before or after the \u201CWhy Us\u201D block. This is the ideal location for social proof."),
          itemRow(15, "Home", "Add a \u201CSoftware We Know\u201D content block with platform logos", "MEDIUM",
            "Show logos for DealCloud, Affinity, PitchBook, VDRs, etc. Builds instant credibility with PE firms that use these tools.", true),
          itemRow(16, "Home", "Add any relevant certifications or badges", "LOW",
            "If certifications exist for DealCloud, Affinity, etc., display those badges. If not, skip for now."),
        ]
      }),

      new Paragraph({ spacing: { after: 300 }, children: [] }),

      // SECTION 5: HOMEPAGE - PROCESS LINK
      sectionHeader("HOMEPAGE \u2014 Process Page Cross-Links"),
      new Paragraph({ spacing: { after: 120 }, children: [] }),
      new Table({
        width: { size: 9360, type: WidthType.DXA },
        columnWidths: colW,
        rows: [
          headerRow(),
          itemRow(17, "Home", "Add links/teasers on homepage that drive to the Our Process page", "MEDIUM",
            "In the \u201CHow to Fix It\u201D section (or similar), add a brief reference to the process and a link to the full Our Process page."),
        ]
      }),

      new Paragraph({ children: [new PageBreak()] }),

      // SECTION 6: TESTIMONIALS PAGE
      sectionHeader("TESTIMONIALS PAGE"),
      new Paragraph({ spacing: { after: 120 }, children: [] }),
      new Table({
        width: { size: 9360, type: WidthType.DXA },
        columnWidths: colW,
        rows: [
          headerRow(),
          itemRow(18, "Testimonials", "Make the CTA consistent with the homepage CTA", "HIGH",
            "Currently this page has a different CTA label than the homepage. Use the exact same button text and link everywhere."),
        ]
      }),

      new Paragraph({ spacing: { after: 300 }, children: [] }),

      // SECTION 7: OUR PROCESS PAGE
      sectionHeader("OUR PROCESS PAGE"),
      new Paragraph({ spacing: { after: 120 }, children: [] }),
      new Table({
        width: { size: 9360, type: WidthType.DXA },
        columnWidths: colW,
        rows: [
          headerRow(),
          itemRow(19, "Process", "Add the primary CTA in multiple locations on this page", "HIGH",
            "The CTA doesn\u2019t appear often enough. Insert it in several places throughout the page content."),
          itemRow(20, "Process", "Make the CTA label consistent with homepage", "HIGH",
            "This page uses \u201Cfree 30-minute strategy call.\u201D Match it to whatever the final CTA name is across the site.", true),
        ]
      }),

      new Paragraph({ spacing: { after: 300 }, children: [] }),

      // SECTION 8: SITEWIDE
      sectionHeader("SITEWIDE \u2014 Consistency"),
      new Paragraph({ spacing: { after: 120 }, children: [] }),
      new Table({
        width: { size: 9360, type: WidthType.DXA },
        columnWidths: colW,
        rows: [
          headerRow(),
          itemRow(21, "All Pages", "Standardize the CTA name across every page", "HIGH",
            "Currently the CTA is called different things on different pages: \u201CSecure a Strategic Debrief,\u201D \u201Cfree 30-min strategy call,\u201D \u201CStorm the Data Room.\u201D Pick ONE name and use it everywhere."),
          itemRow(22, "All Pages", "Rename or replace \u201CStorm the Data Room\u201D", "MEDIUM",
            "This label in the nav/header links to the strategic debrief booking. Make it match the chosen CTA name for clarity.", true),
          itemRow(23, "All Pages", "Ensure CTA explainer text appears below every CTA button sitewide", "MEDIUM",
            "The \u201CNo cost, no pressure, high clarity\u201D subtext should follow every CTA button on every page."),
        ]
      }),

      new Paragraph({ spacing: { after: 400 }, children: [] }),

      // SUMMARY
      new Paragraph({
        heading: HeadingLevel.HEADING_2,
        spacing: { before: 200, after: 160 },
        children: [new TextRun({ text: "Summary", font: "Arial" })]
      }),

      new Table({
        width: { size: 5000, type: WidthType.DXA },
        columnWidths: [3000, 2000],
        rows: [
          new TableRow({ children: [
            new TableCell({ borders, width: { size: 3000, type: WidthType.DXA }, shading: { fill: "1B3A5C", type: ShadingType.CLEAR }, margins: cellMargins,
              children: [new Paragraph({ children: [new TextRun({ text: "Category", bold: true, color: "FFFFFF", font: "Arial", size: 20 })] })] }),
            new TableCell({ borders, width: { size: 2000, type: WidthType.DXA }, shading: { fill: "1B3A5C", type: ShadingType.CLEAR }, margins: cellMargins,
              children: [new Paragraph({ alignment: AlignmentType.CENTER, children: [new TextRun({ text: "Count", bold: true, color: "FFFFFF", font: "Arial", size: 20 })] })] }),
          ]}),
          new TableRow({ children: [
            cell("Total Items", 3000),
            cell("23", 2000),
          ]}),
          new TableRow({ children: [
            cell("HIGH Priority", 3000, { shading: "F8F9FA" }),
            cell("10", 2000, { shading: "F8F9FA" }),
          ]}),
          new TableRow({ children: [
            cell("MEDIUM Priority", 3000),
            cell("12", 2000),
          ]}),
          new TableRow({ children: [
            cell("LOW Priority", 3000, { shading: "F8F9FA" }),
            cell("1", 2000, { shading: "F8F9FA" }),
          ]}),
        ]
      }),

      new Paragraph({ spacing: { after: 200 }, children: [] }),
      new Paragraph({
        spacing: { after: 80 },
        children: [new TextRun({ text: "Recommended approach: Start with all HIGH priority items first, then MEDIUM, then LOW. The CTA consistency items (#21\u201322) are the highest-impact changes since they affect every page.", font: "Arial", size: 20, italics: true, color: "555555" })]
      }),
    ]
  }]
});

Packer.toBuffer(doc).then(buffer => {
  fs.writeFileSync("/sessions/serene-loving-turing/mnt/PE-Tech-Partners 5/petechpartners-website-punchlist.docx", buffer);
  console.log("Punchlist created successfully!");
});
