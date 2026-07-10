# AI Agent Setup Guide for PC and Mac

Last reviewed: May 14, 2026

This guide installs and connects the core tools needed to use Claude Cowork, OpenAI Codex, Claude Code in the terminal, Git, and GitHub on a Windows PC or Mac.

## What You Will Install

| Tool | What it is for | Best for |
| --- | --- | --- |
| Claude Desktop + Cowork | Visual Claude agent for multi-step work without using the terminal | Business users, research, document work, file organization |
| OpenAI Codex app | Visual coding-agent workspace from OpenAI | Website edits, code review, multi-agent coding work |
| Claude Code | Claude's terminal coding agent | Advanced website/code edits directly from Terminal or PowerShell |
| Git | Tracks file changes locally | Saving work, reverting mistakes, collaborating |
| GitHub | Hosts repositories online | Backups, branches, pull requests, deployment workflows |
| GitHub Desktop | Visual GitHub app | Beginners or non-terminal users |
| GitHub CLI | GitHub from the terminal through the `gh` command | Advanced users, automation, pull requests |
| Node.js + npm | Runtime and package manager used by many AI coding tools | Installing Codex CLI, Claude Code npm fallback, web projects |

## Accounts Needed

Create or confirm access before installing tools:

1. Claude account with a paid plan for Cowork: Pro, Max, Team, or Enterprise.
2. ChatGPT/OpenAI account for Codex.
3. GitHub account.
4. Access to the GitHub repositories you plan to edit.
5. Optional: Replit account if you will continue editing the site in Replit.

## Setup Path

Use this sequence:

1. Install core developer utilities.
2. Install Git and GitHub tools.
3. Configure GitHub login.
4. Install Claude Desktop and enable Cowork.
5. Install Codex app.
6. Install advanced terminal tools: Claude Code and Codex CLI.
7. Clone a repository and run the first safe workflow.

## Safety Rules Before Using AI Agents

1. Work in a Git repository whenever possible.
2. Create a new branch before letting an AI tool edit files.
3. Review the diff before committing.
4. Never paste API keys, passwords, private client data, or production credentials into prompts.
5. Connect only the folders and repositories the agent actually needs.
6. Pull the latest changes before starting work.
7. Push changes to GitHub and use a pull request for review before merging.

## Mac Setup

### 1. Update macOS

1. Open System Settings.
2. Go to General > Software Update.
3. Install available updates.
4. Restart if required.

### 2. Open Terminal

1. Press `Command + Space`.
2. Type `Terminal`.
3. Press Enter.

### 3. Install Apple Command Line Tools

Run:

```bash
xcode-select --install
```

If prompted, approve the install. This provides Apple developer utilities that many command-line tools expect.

### 4. Install Homebrew

Homebrew is the standard Mac package manager. Install it from the official Homebrew command at:

https://brew.sh/

After installing, verify:

```bash
brew --version
```

### 5. Install Git, GitHub CLI, and Node.js

Run:

```bash
brew install git gh node
```

Verify:

```bash
git --version
gh --version
node -v
npm -v
```

### 6. Configure Git Identity

Use the name and email tied to your GitHub account:

```bash
git config --global user.name "Your Name"
git config --global user.email "you@example.com"
git config --global init.defaultBranch main
```

Check the config:

```bash
git config --global --list
```

### 7. Sign In to GitHub CLI

Run:

```bash
gh auth login
```

Recommended answers:

1. GitHub.com
2. HTTPS
3. Yes, authenticate Git with GitHub credentials
4. Login with a web browser

Verify:

```bash
gh auth status
```

### 8. Install GitHub Desktop

1. Go to https://desktop.github.com/
2. Download for macOS.
3. Open the downloaded file.
4. Move GitHub Desktop to Applications if prompted.
5. Sign in with your GitHub account.

Use GitHub Desktop if you prefer buttons for clone, branch, commit, push, and pull request workflows.

### 9. Install Claude Desktop and Cowork

1. Go to https://claude.ai/download
2. Download Claude Desktop for Mac.
3. Open the installer.
4. Sign in with your Claude account.
5. In Claude Desktop, open the Cowork tab.
6. If prompted, run the Cowork readiness check.
7. Connect only the folders Cowork should be allowed to use.

Important: Cowork is not a separate app. It is accessed inside Claude Desktop on paid Claude plans.

### 10. Install OpenAI Codex App

1. Go to https://openai.com/codex/
2. Download Codex for macOS.
3. Open the installer.
4. Sign in with your ChatGPT/OpenAI account.
5. Connect your project folder or GitHub repository when prompted.
6. Start with a safe prompt such as:

```text
Review this repository and explain the folder structure. Do not edit files yet.
```

### 11. Advanced: Install Claude Code in Terminal

Recommended native install:

```bash
curl -fsSL https://claude.ai/install.sh | bash
```

Alternative Homebrew install:

```bash
brew install --cask claude-code
```

Alternative npm install:

```bash
npm install -g @anthropic-ai/claude-code@latest
```

Verify:

```bash
claude --version
claude
```

On first run, follow the login prompt. Inside a project folder, start Claude Code with:

```bash
cd /path/to/your/project
claude
```

Good first prompt:

```text
Analyze this codebase and explain how it is organized. Do not make changes yet.
```

### 12. Advanced: Install Codex CLI

Run:

```bash
npm i -g @openai/codex
```

Verify:

```bash
codex --version
codex
```

Upgrade later:

```bash
npm i -g @openai/codex@latest
```

Good first prompt:

```text
Explain this repo and identify the safest files to edit for a homepage copy change. Do not edit yet.
```

## Windows PC Setup

### 1. Update Windows

1. Open Settings.
2. Go to Windows Update.
3. Install all available updates.
4. Restart if required.

Recommended: Windows 10 64-bit or later. Windows 11 is preferred for developer workflows.

### 2. Install Windows Terminal

1. Open Microsoft Store.
2. Search for Windows Terminal.
3. Install it if it is not already installed.
4. Open Windows Terminal from the Start menu.

Use PowerShell tabs for native Windows commands. Use Ubuntu/WSL tabs for Linux-style development.

### 3. Install Git for Windows

1. Go to https://git-scm.com/download/win
2. Download Git for Windows.
3. Run the installer.
4. Keep the default settings unless your IT team requires otherwise.
5. Make sure Git Bash is installed.

Verify in PowerShell:

```powershell
git --version
```

### 4. Install Node.js LTS

1. Go to https://nodejs.org/
2. Download the LTS installer for Windows.
3. Run the installer.
4. Keep npm selected.
5. Restart Windows Terminal.

Verify:

```powershell
node -v
npm -v
```

### 5. Install GitHub CLI

Option A, using WinGet:

```powershell
winget install --id GitHub.cli
```

Option B:

1. Go to https://cli.github.com/
2. Open installation instructions.
3. Download and install the Windows MSI.

Verify:

```powershell
gh --version
```

### 6. Configure Git Identity

Run:

```powershell
git config --global user.name "Your Name"
git config --global user.email "you@example.com"
git config --global init.defaultBranch main
```

Check:

```powershell
git config --global --list
```

### 7. Sign In to GitHub CLI

Run:

```powershell
gh auth login
```

Recommended answers:

1. GitHub.com
2. HTTPS
3. Yes, authenticate Git with GitHub credentials
4. Login with a web browser

Verify:

```powershell
gh auth status
```

### 8. Install GitHub Desktop

1. Go to https://desktop.github.com/
2. Download for Windows.
3. Run the installer.
4. Sign in with your GitHub account.

### 9. Optional but Recommended: Install WSL2

WSL2 gives Windows a Linux development environment. It is useful when tools expect Linux-style commands.

Open PowerShell as Administrator and run:

```powershell
wsl --install
```

Restart if prompted. Then open Ubuntu from the Start menu and create a Linux username/password.

Verify:

```powershell
wsl -l -v
```

### 10. Install Claude Desktop and Cowork

1. Go to https://claude.ai/download
2. Download Claude Desktop for Windows.
3. Install and open Claude Desktop.
4. Sign in with your Claude paid account.
5. Open the Cowork tab.
6. If prompted, run the Cowork readiness check.
7. Connect only the folders Cowork needs.

Important: Cowork runs inside Claude Desktop. It is intended for agentic work beyond coding and can access local files only where you grant access.

### 11. Install OpenAI Codex App

1. Go to https://openai.com/codex/
2. Download Codex for Windows.
3. If redirected, install from Microsoft Store.
4. Sign in with your ChatGPT/OpenAI account.
5. Connect your project folder or GitHub repository.
6. Start with a read-only prompt:

```text
Review this repository and explain the folder structure. Do not edit files yet.
```

### 12. Advanced: Install Claude Code in PowerShell

Recommended native install:

```powershell
irm https://claude.ai/install.ps1 | iex
```

Alternative WinGet install:

```powershell
winget install Anthropic.ClaudeCode
```

Alternative npm install:

```powershell
npm install -g @anthropic-ai/claude-code@latest
```

Verify:

```powershell
claude --version
claude
```

If Claude Code cannot find Git Bash, set the Git Bash path:

```powershell
[Environment]::SetEnvironmentVariable("CLAUDE_CODE_GIT_BASH_PATH", "C:\Program Files\Git\bin\bash.exe", "User")
```

Close and reopen Windows Terminal.

### 13. Advanced: Install Claude Code in WSL

Open Ubuntu/WSL and run:

```bash
curl -fsSL https://claude.ai/install.sh | bash
```

Verify:

```bash
claude --version
claude
```

Use this path if your project uses Linux tooling or deploys to a Linux server.

### 14. Advanced: Install Codex CLI

Native PowerShell:

```powershell
npm i -g @openai/codex
codex --version
codex
```

WSL:

```bash
npm i -g @openai/codex
codex --version
codex
```

Codex CLI can run natively on Windows PowerShell or in WSL2 if you need a Linux-native environment.

## How to Use GitHub

### Key Terms

| Term | Meaning |
| --- | --- |
| Repository / repo | Project folder stored in GitHub |
| Clone | Download a copy of a repo to your computer |
| Branch | Separate workspace for a change |
| Commit | Saved checkpoint of file changes |
| Push | Upload commits to GitHub |
| Pull | Download latest commits from GitHub |
| Pull request / PR | Request to review and merge a branch |
| Merge | Apply approved PR changes into the main branch |

### Beginner Workflow with GitHub Desktop

1. Open GitHub Desktop.
2. Sign in.
3. Click File > Clone Repository.
4. Pick the repository.
5. Choose a local folder.
6. Click Clone.
7. Click Current Branch > New Branch.
8. Name the branch, for example `website-homepage-update`.
9. Edit files using Replit, VS Code, Codex, Claude Code, or another editor.
10. Return to GitHub Desktop.
11. Review changed files.
12. Write a short commit message.
13. Click Commit to branch.
14. Click Push origin.
15. Click Create Pull Request.
16. Add summary and testing notes.
17. Request review if needed.
18. Merge only after review and checks pass.

### Advanced Workflow with Terminal

Clone a repo:

```bash
gh repo clone OWNER/REPO
cd REPO
```

Pull latest changes:

```bash
git checkout main
git pull
```

Create a branch:

```bash
git checkout -b website-homepage-update
```

Check status:

```bash
git status
```

Review changes:

```bash
git diff
```

Stage and commit:

```bash
git add .
git commit -m "Update homepage copy"
```

Push branch:

```bash
git push -u origin website-homepage-update
```

Create pull request:

```bash
gh pr create --title "Update homepage copy" --body "Updates homepage messaging and CTA copy."
```

Open PR in browser:

```bash
gh pr view --web
```

After approval, merge:

```bash
gh pr merge --squash --delete-branch
```

### Daily GitHub Habit

Before starting:

```bash
git checkout main
git pull
git checkout -b short-description-of-work
```

Before asking AI to make changes:

```bash
git status
```

After AI makes changes:

```bash
git diff
git status
```

Before pushing:

```bash
git add .
git commit -m "Short clear message"
git push -u origin your-branch-name
```

## How to Use Claude Code with GitHub

Open a repository:

```bash
cd /path/to/repo
claude
```

Useful prompts:

```text
Analyze this repository and tell me what each major folder does. Do not edit files.
```

```text
Create a safe implementation plan for updating the homepage CTA. Do not edit yet.
```

```text
Make the homepage CTA update. Keep changes limited to the homepage files. After editing, summarize changed files and suggested tests.
```

```text
Review my uncommitted changes for bugs, broken links, or accidental unrelated edits.
```

```text
Create a clear commit message for these changes.
```

Claude Code can help with Git tasks conversationally:

```text
What files changed?
```

```text
Create a branch called website-homepage-update.
```

```text
Commit my changes with a descriptive message.
```

Even when the AI can run Git commands, still review the diff before committing or pushing.

## How to Use Codex with GitHub

In the Codex app:

1. Connect the GitHub repository or local project folder.
2. Start with a read-only repository analysis prompt.
3. Ask Codex to create a plan before editing.
4. Let Codex work on a branch or worktree.
5. Review the diff in Codex.
6. Commit or create a pull request from the app when ready.

In Codex CLI:

```bash
cd /path/to/repo
codex
```

Safe first prompts:

```text
Explain this codebase. Do not make changes.
```

```text
Find where the contact form is implemented. Do not edit files.
```

```text
Implement this change on the current branch and run the relevant checks if available.
```

## Replit Workflow

If you are editing the website in Replit:

1. Keep GitHub as the source of truth.
2. Connect Replit to the GitHub repo.
3. Pull latest changes before editing.
4. Make edits in Replit.
5. Commit and push from Replit or GitHub Desktop.
6. Use a pull request when changes are important.
7. Deploy only after the correct branch is merged.

If using Claude Code or Codex locally, do not make separate Replit edits at the same time unless you are careful to pull/push between environments.

## Recommended First Test Project

Use a low-risk repository or a small test branch.

1. Clone the repo.
2. Create a branch called `ai-agent-test`.
3. Ask Claude Code or Codex to explain the repo only.
4. Ask it to make a tiny README change.
5. Review the diff.
6. Commit the change.
7. Push the branch.
8. Create a pull request.
9. Merge or close the PR.

## Troubleshooting

### `node` or `npm` is not recognized

Close and reopen Terminal or PowerShell. If still broken, reinstall Node.js LTS and ensure it is added to PATH.

### `gh auth login` works but `git push` fails

Run:

```bash
gh auth setup-git
gh auth status
```

Then retry:

```bash
git push
```

### Claude Code npm install permission errors on Mac

Do not use `sudo npm install -g` unless official support explicitly tells you to. Prefer the native installer or Homebrew install.

### Claude Code on Windows cannot run commands

Install Git for Windows, then set:

```powershell
[Environment]::SetEnvironmentVariable("CLAUDE_CODE_GIT_BASH_PATH", "C:\Program Files\Git\bin\bash.exe", "User")
```

Restart Windows Terminal.

### Codex or Claude sees the wrong files

Stop and check:

```bash
pwd
git status
```

Make sure you started the agent from the correct project folder.

### AI made too many changes

Review the diff:

```bash
git diff
```

If nothing has been committed and you want to discard all local edits:

```bash
git restore .
```

Use this carefully. It removes uncommitted changes.

## Quick Verification Checklist

Run these commands after setup.

Mac:

```bash
git --version
gh --version
node -v
npm -v
claude --version
codex --version
gh auth status
```

Windows PowerShell:

```powershell
git --version
gh --version
node -v
npm -v
claude --version
codex --version
gh auth status
```

Expected result: every command returns a version or authenticated status.

## Official References

- Claude Cowork: https://support.claude.com/en/articles/13345190-get-started-with-claude-cowork
- Claude Desktop and Cowork availability: https://support.claude.com/en/articles/10065433-install-claude-desktop
- Claude Code quickstart: https://code.claude.com/docs/en/quickstart
- Claude Code setup and advanced install notes: https://code.claude.com/docs/en/getting-started
- OpenAI Codex app: https://openai.com/codex/
- OpenAI Codex CLI: https://developers.openai.com/codex/cli
- Node.js and npm install guidance: https://docs.npmjs.com/downloading-and-installing-node-js-and-npm/
- GitHub Desktop install: https://docs.github.com/en/desktop/installing-and-authenticating-to-github-desktop/installing-github-desktop
- GitHub CLI quickstart: https://docs.github.com/en/github-cli/github-cli/quickstart
- GitHub flow: https://docs.github.com/en/get-started/using-github/github-flow
- Creating a pull request: https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request
- WSL install: https://learn.microsoft.com/en-us/windows/wsl/install
