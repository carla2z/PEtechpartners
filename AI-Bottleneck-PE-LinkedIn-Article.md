# The Real AI Bottleneck in Private Equity Isn't the Model

Middle Market Growth's Fall 2025 cover story made a point worth sitting with: the PE firms pulling ahead with AI aren't necessarily the ones with the biggest tech budgets. They're the ones whose portfolio companies are actually positioned to use it.

That's a much harder problem than it sounds.

I spend most of my week inside middle-market portcos. Manufacturing, professional services, healthcare-adjacent businesses doing $30M to $300M in revenue. The kind of company a fund buys, holds for five to seven years, and writes up.

Here's what I'm seeing: nearly every PE firm I talk to has an AI thesis at the firm level. Internal copilots, LP-facing decks, sourcing automation, IC tooling. Some of it is genuinely working.

Then I walk into one of their portcos and it's a different planet.

## The disconnect

Most middle-market portcos aren't ready to deploy AI. Not because the models aren't good enough. Not because the use cases aren't there. Because the underlying stack — identity, data, security, endpoints — was duct-taped together by a small internal IT team or an MSP that's been coasting since 2019.

You can't drop a productivity copilot onto a company where half the file shares still live on a server in a closet, identity is split across five different systems with no SSO, sensitive data has no classification and no governance, a third of laptops have local admin rights and no EDR, and the CRM is a SQL database somebody's nephew built.

Pick any one of those and your AI rollout stalls. Hit a couple of them — which is the norm, not the exception — and AI becomes a security incident waiting to happen.

## Why this matters now, not next year

Operating partners and CIOs are getting graded on portco-level AI adoption. Boards are asking. LPs are asking. The temptation is to push tools down without fixing what's underneath.

The cost of doing that: sensitive data winds up in models you don't control, privileged access gets blown wide open by agentic workflows, pilots fail loudly and the next attempt gets harder politically, and cyber events from AI misconfigurations show up in QofE on the next sale.

I've watched two portcos this year try to roll out AI without fixing the foundation. One ended up paying for the same Microsoft 365 tenant migration twice. The other had a copilot indexing financial data the CFO didn't even know was on a public-permissioned SharePoint.

These weren't AI failures. They were IT-maturity failures wearing AI clothes.

## What "AI-ready" actually looks like in a middle-market portco

The good news: this isn't a year-long project. The stack you need is well-understood and the lift is mostly sequencing, not invention. Here's the rough order I run it in:

**1. Identity consolidation.** One identity provider, SSO across the major systems, conditional access turned on. If you can't tell me who has access to what in 30 seconds, AI isn't your priority.

**2. Endpoint hygiene.** Modern MDM, EDR everywhere, local admin removed, patching automated. AI agents that touch endpoints will inherit whatever sloppiness lives there.

**3. Data classification and governance.** You don't need a Fortune 500 program. You need to know what's sensitive, where it lives, and what policies travel with it. This is the single biggest gap I see.

**4. Cloud and SaaS rationalization.** Kill the dead tenants, consolidate the overlap, get visibility into shadow IT. AI rollouts amplify whatever sprawl already exists.

**5. A defensible network and backup posture.** Segmented networks, immutable backups, tested recovery. Boring, mandatory.

Once those are in place, the AI conversation gets easy. Copilots, agents, automation — all of them assume the foundation. Without it, you're not deploying AI. You're deploying risk.

## The PE-firm angle

If you're at the GP level, this changes how you think about value creation. The firms I see winning aren't pushing AI down to portcos as a tool initiative. They're treating IT and security modernization as the AI enabler — and they're doing it during the first 12 months of the hold, not the last 12 before a sale.

A few practical moves. Add an AI-readiness lens to tech diligence: not "do they use AI," but "could they, safely, in the next six months?" Sequence identity, endpoint, and data work into the 100-day plan ahead of any AI tooling — cheaper to do early, painful to retrofit. Most middle-market portcos don't need a full-time CIO; they need someone senior enough to run the playbook above and unblock the AI agenda. And the same foundation that enables AI takes pressure off the cyber insurance and SEC disclosure conversation. Two birds.

## The real question

The race in PE right now isn't "who has the best AI strategy at the firm." It's "who can actually operationalize AI inside the businesses they own." That gap is where the next cycle of value creation either happens or doesn't.

Most firms I talk to underestimate it. The ones that don't are pulling ahead quietly.

---

If your firm is thinking through what AI readiness looks like across the portfolio — or you're a portco operator staring at this same gap from the inside — I'm always happy to compare notes. No pitch. Just an honest conversation about what's working and what isn't.

---

**Suggested hashtags (post as first comment):**
#PrivateEquity #MiddleMarket #PortfolioOps #AIAdoption #Cybersecurity

**Alt title options:**
- Your Firm's AI Strategy Dies at the Portfolio Level
- PE Has an AI Strategy. Most Portcos Can't Run It.
- Why AI Pilots Stall Inside Middle-Market Portcos
