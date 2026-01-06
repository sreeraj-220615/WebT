# Copilot instructions — WebT (Job Portal)

This repository is a small, static multi-page front-end for a job-portal UI. The guidance below explains the project's structure, important patterns, and the most useful edits you can make as an AI coding agent.

- Project summary: simple static site (HTML/CSS/JS). No build tooling, no server-side code, and no tests.
- Key files: [login.html](login.html), [dashboard.html](dashboard.html), [jobs.html](jobs.html), [resume.html](resume.html), [script.js](script.js), [style.css](style.css).

Big picture
- Multi-page static frontend: pages are linked by relative anchors. Visual styling and layout live in [style.css](style.css). Minimal interactive behaviour is in [script.js](script.js).
- No backend/API: there are no network endpoints or environment files in the repo. Treat any data or form submissions as client-side stubs unless the user adds an API.

Patterns & conventions discovered
- CSS-first layout: large portions of the UI are implemented with utility-like classes and grid layouts (examples: `.top-nav`, `.hero`, `.dashboard-layout`, `.sidebar`). Keep style edits centralized in [style.css](style.css).
- JS is small and global-scoped: `script.js` uses top-level variables and plain functions (e.g. `greet()`). When adding behaviour, append to `script.js` and include the `<script src="script.js"></script>` tag on pages that require it (currently present in [dashboard.html](dashboard.html) only).
- Assets: fonts are loaded from Google Fonts; images use external URLs (Unsplash). Do not expect a local `assets/` directory.

Developer workflows (how to run & test locally)
- No build step. To serve pages locally use a static server or the VS Code Live Server extension.
  - Example (PowerShell):
    ```powershell
    npx http-server . -p 8080
    # then open http://localhost:8080/login.html
    ```
  - Or install `http-server` globally: `npm i -g http-server` and run `http-server . -p 8080`.
- Quick test: open files directly in the browser for simple visual checks, but use a static server when testing fetch/XHR behaviours.

Common edits and examples
- Add client-side form handling for login:
  - Modify [login.html](login.html) to include a `<form id="loginForm">` and add a `<script src="script.js"></script>` before `</body>`.
  - In `script.js`, add an event listener: `document.getElementById('loginForm').addEventListener('submit', handleLogin)`.
- Add interactive components to the dashboard: update [dashboard.html](dashboard.html) and append behaviour in `script.js` (elements use class names like `.search-bar`, `.btn-primary`).

Integration & external dependencies
- External: Google Fonts and image URLs (Unsplash). No npm dependencies or package.json present.
- If adding dependencies, include a `package.json` and document install/run commands in the repo root.

Editing and commit guidance
- Keep changes minimal and focused. Prefer editing the existing CSS classes rather than adding many new utility classes.
- For UI changes, include before/after screenshots in PR description when possible.

What not to assume
- Do not assume any backend exists or any secret keys—none are present.
- Do not add server-side changes unless the user explicitly requests introducing a backend.

If something is unclear or you need more context (APIs, data formats, or desired UX), ask the user before implementing features that require external services.

---
Please review these instructions and tell me if you want more examples (form handlers, modularizing `script.js`, or scaffolding a minimal dev toolchain). 
