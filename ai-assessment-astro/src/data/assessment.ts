export const readinessTiers = [
  {
    level: "Not Ready",
    min: 30,
    max: 60,
    color: "#E63946",
    description:
      "Foundational work is needed before AI can deliver reliable value. Focus first on data organization, process documentation, and technology basics. This investment now will make any future AI initiative significantly more successful.",
  },
  {
    level: "Emerging",
    min: 61,
    max: 90,
    color: "#F7B733",
    description:
      "Some building blocks are in place. A focused pilot in the strongest area is a smart next step because it builds confidence, surfaces gaps, and creates momentum before a broader rollout.",
  },
  {
    level: "Developing",
    min: 91,
    max: 120,
    color: "#3BAFDA",
    description:
      "There is a solid foundation for targeted AI adoption. Identify two or three workflows where AI can deliver measurable results, assign clear ownership, and establish success metrics before expanding further.",
  },
  {
    level: "Ready",
    min: 121,
    max: 138,
    color: "#1FAA59",
    description:
      "The organization is well positioned to adopt AI and see real returns. A strategic, phased expansion across departments with governance and change management built in is the right approach from here.",
  },
  {
    level: "Optimized",
    min: 139,
    max: 150,
    color: "#0A7A3D",
    description:
      "The organization is operating at a high level of AI readiness. It is well suited for advanced capabilities including predictive analytics, intelligent automation, and AI-assisted decision-making at scale.",
  },
];

export const scoringLabels = {
  1: {
    label: "Totally Broken",
    meaning: "Not in place at all — a serious liability that must be fixed first.",
  },
  2: {
    label: "Needs Work",
    meaning: "Inconsistent and unreliable, with significant gaps that limit AI value.",
  },
  3: {
    label: "OK",
    meaning: "A workable baseline, but with clear room to improve.",
  },
  4: {
    label: "Good",
    meaning: "Solid and consistent, with only minor gaps.",
  },
  5: {
    label: "Great",
    meaning: "A clear organizational strength with no meaningful gaps.",
  },
};

export const sections = [
  {
    id: "data",
    title: "Data Quality & Visibility",
    description:
      "This section evaluates whether the organization has the data foundation that AI tools require to function effectively.",
    playbook:
      "Assign a clear data owner and run a focused 30-day cleanup of naming, duplicates, and access so AI tools work from records the team actually trusts.",
    dimensions: [
      {
        id: "data_volume",
        name: "Data Volume",
        statement:
          "The organization has sufficient data in key business areas to support meaningful analysis and AI-driven decisions.",
        levels: {
          5: "Rich historical deal, portfolio, finance, and client data — more than enough to spot patterns and guide AI without guesswork.",
          4: "Solid data in most key areas; enough for reliable analysis with only minor blind spots.",
          3: "Workable data in core areas, but thin spots still force some guesswork.",
          2: "Sparse, scattered data; most analysis still relies on intuition.",
          1: "Almost no usable historical data for AI to learn from.",
        },
      },
      {
        id: "data_cleanliness",
        name: "Data Cleanliness",
        statement:
          "The organization's data is accurate, consistent, and free from significant duplicates or missing fields.",
        levels: {
          5: "Records are consistently named, current, deduplicated, and complete — trusted without manual cleanup.",
          4: "Mostly clean; occasional duplicates or blank fields, but broadly reliable.",
          3: "Usable after some manual cleanup; naming and completeness are inconsistent.",
          2: "Frequent duplicates, stale entries, and missing fields undermine trust.",
          1: "Riddled with errors and duplicates; effectively unusable as-is.",
        },
      },
      {
        id: "data_accessibility",
        name: "Data Accessibility",
        statement:
          "Key business data can be easily retrieved from core systems without significant manual effort.",
        levels: {
          5: "Authorized users pull what they need from core systems instantly — no chasing files or rebuilding exports.",
          4: "Most data is easy to retrieve; a few sources still need manual exports.",
          3: "Data is retrievable but often requires manual exports or someone's help.",
          2: "Pulling data is slow, manual, and depends on specific people.",
          1: "Key data is locked away, undocumented, or only one person can find it.",
        },
      },
      {
        id: "data_structure",
        name: "Data Structure",
        statement:
          "The organization's data is stored in structured, consistent formats that systems can reliably read and process.",
        levels: {
          5: "Important data lives in structured fields, controlled templates, and connected systems AI can read reliably.",
          4: "Mostly structured; a few important areas still live in free-form documents.",
          3: "A mix of structured and unstructured data; AI can use some of it directly.",
          2: "Largely unstructured — loose files, emails, and inconsistent formats.",
          1: "No consistent structure anywhere; everything is ad hoc.",
        },
      },
      {
        id: "data_ownership",
        name: "Data Ownership",
        statement:
          "A specific person or team is responsible for data quality and actively maintains it.",
        levels: {
          5: "Data quality has a clear owner, regular hygiene routines, and the authority to fix issues.",
          4: "An owner exists and stays on top of most issues, though routines are informal.",
          3: "Someone loosely owns data quality, but maintenance is reactive.",
          2: "No real owner; data quality is everyone's job and therefore no one's.",
          1: "Nobody is responsible; data quality is left entirely to chance.",
        },
      },
    ],
  },
  {
    id: "staff",
    title: "Staff & AI Literacy",
    description:
      "This section evaluates whether the team has the knowledge and mindset to work effectively alongside AI tools.",
    playbook:
      "Run hands-on AI training for a small group and let a credible internal champion model responsible, high-value use before any wider rollout.",
    dimensions: [
      {
        id: "general_awareness",
        name: "General Awareness",
        statement:
          "Employees have a realistic understanding of what AI can and cannot do in a business context.",
        levels: {
          5: "The team understands practical AI use cases, limits, privacy risks, and where human judgment still matters.",
          4: "Solid working understanding, with only minor misconceptions.",
          3: "Basic awareness; some realistic ideas mixed with hype or fear.",
          2: "Mostly hype or skepticism, with little grounded understanding.",
          1: "No meaningful understanding of what AI can or cannot do.",
        },
      },
      {
        id: "current_tool_use",
        name: "Current Tool Use",
        statement:
          "Staff are already using AI tools productively as part of their day-to-day work.",
        levels: {
          5: "AI is already used responsibly in repeatable work — summarizing, drafting, research, analysis, and reporting.",
          4: "Several people use AI regularly for real work, with good results.",
          3: "Some occasional, ad hoc use by a few individuals.",
          2: "Rare, experimental use with little to show for it.",
          1: "No one is using AI tools in their work.",
        },
      },
      {
        id: "prompt_ability",
        name: "Prompt Ability",
        statement:
          "Employees can give AI tools clear, specific instructions and evaluate whether outputs are on target.",
        levels: {
          5: "Users write clear prompts with context, constraints, sources, and format, and check quality themselves.",
          4: "Most users get useful results, with occasional coaching.",
          3: "Basic prompting; results are hit or miss.",
          2: "Vague prompts and frustration; users give up quickly.",
          1: "No ability to direct AI tools effectively at all.",
        },
      },
      {
        id: "critical_evaluation",
        name: "Critical Evaluation",
        statement:
          "The team verifies AI outputs and understands the importance of human oversight rather than blind acceptance.",
        levels: {
          5: "AI output is routinely checked against sources, business rules, and expert judgment before anyone acts on it.",
          4: "Outputs are usually verified, with rare lapses.",
          3: "Some checking, but trust often outruns verification.",
          2: "Outputs are frequently accepted at face value.",
          1: "AI output is trusted blindly with no review.",
        },
      },
      {
        id: "internal_champions",
        name: "Internal Champions",
        statement:
          "At least one person is genuinely enthusiastic about AI and has the credibility to lead adoption from within.",
        levels: {
          5: "A respected internal champion tests tools, coaches peers, gathers feedback, and drives adoption.",
          4: "A capable champion exists, with growing influence.",
          3: "Someone is interested but lacks the time or credibility to lead.",
          2: "Only passing interest; no one is stepping up.",
          1: "No champion and no appetite to lead adoption.",
        },
      },
    ],
  },
  {
    id: "process",
    title: "Process Documentation",
    description:
      "This section evaluates whether workflows are defined clearly enough to be supported or enhanced by AI.",
    playbook:
      "Document and assign owners to your two or three highest-volume workflows so they become reliable, repeatable candidates for AI support.",
    dimensions: [
      {
        id: "process_mapping",
        name: "Process Mapping",
        statement:
          "Core workflows are documented and accessible to the people who need them.",
        levels: {
          5: "Key workflows are mapped step by step — owners, inputs, systems, handoffs, approvals, and outputs.",
          4: "Most core workflows are documented and reasonably current.",
          3: "Some workflows are documented; others live only in people's heads.",
          2: "Little documentation; processes are mostly tribal knowledge.",
          1: "Nothing is documented; every process is improvised.",
        },
      },
      {
        id: "consistency",
        name: "Consistency",
        statement:
          "Employees follow documented processes consistently rather than improvising based on habit or preference.",
        levels: {
          5: "The team follows the same documented workflow nearly every time, with few workarounds.",
          4: "Processes are usually followed, with occasional shortcuts.",
          3: "Followed about half the time; personal variations are common.",
          2: "Frequent improvising, side channels, and spreadsheet workarounds.",
          1: "Everyone does it their own way; there is no shared process.",
        },
      },
      {
        id: "repeatability",
        name: "Repeatability",
        statement:
          "The organization has specific workflows that run the same way every time with predictable inputs and outputs.",
        levels: {
          5: "High-volume, repeatable workflows with predictable triggers, inputs, rules, and outputs.",
          4: "Several repeatable workflows exist, with minor variation.",
          3: "Some repeatability, but inputs and outputs still vary.",
          2: "Most work is one-off or unpredictable.",
          1: "Nothing runs the same way twice.",
        },
      },
      {
        id: "exception_handling",
        name: "Exception Handling",
        statement:
          "There are defined processes for handling edge cases and exceptions, rather than escalating or guessing.",
        levels: {
          5: "Edge cases have defined routing, escalation paths, and decision rules that are documented.",
          4: "Most exceptions have a known path, even if informal.",
          3: "Exceptions are handled case by case, with some recurring patterns.",
          2: "Exceptions cause confusion and inconsistent handling.",
          1: "Every exception is a fire drill with no rules.",
        },
      },
      {
        id: "process_ownership",
        name: "Process Ownership",
        statement:
          "Each core process has a named owner who keeps it current and ensures the team follows it.",
        levels: {
          5: "Each major workflow has an accountable owner who maintains it, trains users, and approves changes.",
          4: "Most processes have an owner, though upkeep is uneven.",
          3: "Ownership is loose or shared informally.",
          2: "Few processes have a real owner.",
          1: "No process ownership anywhere.",
        },
      },
    ],
  },
  {
    id: "technology",
    title: "Technology Infrastructure",
    description:
      "This section evaluates whether the technology environment can support AI tools securely and effectively.",
    playbook:
      "Close the priority security and integration gaps and scope a realistic budget that covers training and change management, not just license cost.",
    dimensions: [
      {
        id: "integration_capability",
        name: "Integration Capability",
        statement:
          "Core platforms support the connections needed for AI tools to access and act on business data.",
        levels: {
          5: "The core stack has APIs, exports, and connectors that allow controlled AI access without brittle copy-paste.",
          4: "Most systems integrate; a few still require manual workarounds.",
          3: "Some integration is possible, but much is still manual.",
          2: "Mostly closed systems; integration is painful.",
          1: "No integration options; everything is manual copy-paste.",
        },
      },
      {
        id: "security_posture",
        name: "Security Posture",
        statement:
          "The current security posture is strong enough to introduce AI tools without creating unacceptable risk.",
        levels: {
          5: "MFA, access controls, endpoint protection, logging, and vendor review are strong enough for sensitive deal data.",
          4: "Solid security with a few gaps still to close.",
          3: "Basic protections in place, but notable gaps remain.",
          2: "Weak controls; sensitive data is at real risk.",
          1: "Little to no security; adding AI would be reckless.",
        },
      },
      {
        id: "compliance_readiness",
        name: "Compliance Readiness",
        statement:
          "Compliance obligations are well understood and have been evaluated against the data practices of AI vendors being considered.",
        levels: {
          5: "Legal, regulatory, LP, client, and vendor data-use requirements are reviewed before AI is approved.",
          4: "Obligations are mostly understood, with review underway.",
          3: "Some awareness, but no formal review against specific AI vendors.",
          2: "Compliance obligations are unclear and unexamined.",
          1: "No understanding of compliance exposure at all.",
        },
      },
      {
        id: "stack_stability",
        name: "Stack Stability",
        statement:
          "The technology stack is stable and well understood, providing a reliable foundation for new tools.",
        levels: {
          5: "Systems are stable, documented, supported, and not constantly breaking, migrating, or being replaced.",
          4: "Generally stable, with occasional disruptions.",
          3: "Mostly works, but with known fragility or pending migrations.",
          2: "Frequent breakages or constant change.",
          1: "The stack is chaotic and unreliable.",
        },
      },
      {
        id: "budget_realism",
        name: "Budget Realism",
        statement:
          "There is a realistic understanding of the full investment required, including tools, implementation, and change management.",
        levels: {
          5: "Budget covers software, integration, security, training, redesign, support, and measurement — not just licenses.",
          4: "Budget is realistic for most of the rollout, with a few gaps.",
          3: "Some budget is set aside, but it underestimates the full cost.",
          2: "Only license cost is considered; the rest is ignored.",
          1: "No realistic budget; expectations are magical thinking.",
        },
      },
    ],
  },
  {
    id: "culture",
    title: "Leadership & Culture",
    description:
      "This section evaluates whether leadership and organizational culture are positioned to support a successful AI adoption.",
    playbook:
      "Secure visible executive sponsorship and have leadership name one specific, measurable outcome AI must deliver before committing to tools.",
    dimensions: [
      {
        id: "executive_sponsorship",
        name: "Executive Sponsorship",
        statement:
          "Leadership is actively committed to AI adoption and willing to fund it, champion it, and remove obstacles.",
        levels: {
          5: "Senior leadership has committed budget, attention, decision authority, and visible sponsorship.",
          4: "Leadership is supportive and engaged, if not fully resourced.",
          3: "Leadership is open but largely hands-off.",
          2: "Leadership pays lip service but won't commit.",
          1: "No leadership interest or support.",
        },
      },
      {
        id: "change_track_record",
        name: "Change Track Record",
        statement:
          "The organization has successfully adopted new technology or made meaningful operational changes within the last two to three years.",
        levels: {
          5: "The firm recently rolled out meaningful change with strong adoption and measurable improvement.",
          4: "A recent change went reasonably well overall.",
          3: "A mixed history — some changes stuck, others didn't.",
          2: "Recent changes struggled or stalled.",
          1: "Change efforts consistently fail or are abandoned.",
        },
      },
      {
        id: "team_attitude",
        name: "Team Attitude",
        statement:
          "The predominant attitude among staff toward AI is curious and constructive rather than fearful or resistant.",
        levels: {
          5: "Most people are open to experimenting, raise practical concerns, and want to shed low-value work.",
          4: "Generally positive, with a few skeptics.",
          3: "Mixed — curiosity and resistance in roughly equal measure.",
          2: "Predominantly wary or resistant.",
          1: "Active fear or hostility toward AI.",
        },
      },
      {
        id: "experiment_mindset",
        name: "Experiment Mindset",
        statement:
          "The organization is willing to run pilots, accept early imperfection, and refine the approach based on what they learn.",
        levels: {
          5: "The firm can run controlled pilots with clear scope, feedback loops, metrics, and tolerance for iteration.",
          4: "Willing to pilot, with reasonable patience for refinement.",
          3: "Open to trying, but expects quick, polished results.",
          2: "Low tolerance for imperfection or experimentation.",
          1: "Demands perfection immediately; no room to learn.",
        },
      },
      {
        id: "strategic_clarity",
        name: "Strategic Clarity",
        statement:
          "Leadership can articulate a specific, measurable outcome they want AI to help achieve.",
        levels: {
          5: "Leadership can name a measurable AI target — faster CIM review, cleaner VDR processing, or shorter reporting cycles.",
          4: "A clear general goal, even if not yet fully quantified.",
          3: "A vague sense of wanting AI, without a specific target.",
          2: "No real objective beyond \"do something with AI.\"",
          1: "No strategy; chasing AI for its own sake.",
        },
      },
    ],
  },
  {
    id: "legal",
    title: "Legal Exposure",
    description:
      "This section screens whether AI adoption could create legal, contractual, confidentiality, or regulatory exposure. It is not legal advice.",
    playbook:
      "Set clear rules for what data may enter AI tools, review vendor terms before approval, and require human sign-off on AI output used externally.",
    dimensions: [
      {
        id: "confidential_data_controls",
        name: "Confidential Data Controls",
        statement:
          "The organization has clear controls for preventing confidential client, deal, employee, investor, or portfolio data from being entered into unapproved AI tools.",
        levels: {
          5: "Users know exactly what data may and may not go into AI tools, and policy plus technical controls enforce it.",
          4: "Clear rules exist and are mostly followed and enforced.",
          3: "Some guidance exists, but enforcement is inconsistent.",
          2: "Rules are vague; sensitive data could easily leak.",
          1: "No controls; confidential data could go anywhere.",
        },
      },
      {
        id: "vendor_terms_review",
        name: "Vendor Terms Review",
        statement:
          "AI vendor terms, data-use policies, retention practices, and model-training rights are reviewed before tools are approved.",
        levels: {
          5: "Legal or leadership reviews vendor terms for confidentiality, retention, training use, and breach obligations before rollout.",
          4: "Vendor terms are reviewed, if not exhaustively.",
          3: "Terms get a cursory look before adoption.",
          2: "Terms are rarely read before tools are used.",
          1: "Tools are adopted with no review of terms at all.",
        },
      },
      {
        id: "contractual_restrictions",
        name: "Contractual Restrictions",
        statement:
          "The organization understands whether client agreements, NDAs, LP requirements, portfolio-company agreements, or transaction documents restrict AI use.",
        levels: {
          5: "NDAs, client agreements, LP side letters, and transaction restrictions are checked for AI limits before processing sensitive content.",
          4: "Key agreements have been reviewed for AI implications.",
          3: "Some awareness of restrictions, but no systematic check.",
          2: "Little understanding of contractual limits on AI use.",
          1: "No awareness; AI use could breach existing agreements.",
        },
      },
      {
        id: "regulated_data_awareness",
        name: "Regulated Data Awareness",
        statement:
          "The organization can identify regulated or sensitive data categories that require special treatment before AI tools are used.",
        levels: {
          5: "The team can identify and protect PII, financials, HR data, material nonpublic information, and other regulated data.",
          4: "Most sensitive categories are recognized and handled appropriately.",
          3: "Some categories are understood, but gaps remain.",
          2: "Limited ability to spot regulated data.",
          1: "No awareness of regulated data categories.",
        },
      },
      {
        id: "human_review_accountability",
        name: "Human Review & Accountability",
        statement:
          "There is a defined human review process for AI-generated work before it is shared externally, relied on for decisions, or included in client or deal materials.",
        levels: {
          5: "AI-generated analysis, diligence notes, and client deliverables are reviewed by an accountable person before use.",
          4: "Review happens for most external-facing work.",
          3: "Review is inconsistent and depends on the individual.",
          2: "Little review before AI output is used.",
          1: "No human review; AI output goes out unchecked.",
        },
      },
    ],
  },
];

export const assessmentData = {
  readinessTiers,
  scoringLabels,
  sections,
};
