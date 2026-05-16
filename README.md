# wp-theme-base

Foundational custom WordPress theme built on Tailwind CSS (JIT). No page-builder dependency. Used as the base for all client projects.

## Requirements

- PHP 8.1+
- WordPress 6.4+
- Node.js 20+ / npm 10+

## Local Development Setup

### 1. Clone the repo into your WordPress themes directory

```bash
cd wp-content/themes/
git clone https://github.com/stevetoews/wp-theme-base.git
```

### 2. Install Node dependencies

```bash
cd wp-theme-base
npm install
```

### 3. Build assets

```bash
# Development (watch mode — recompiles on change)
npm run start

# Production build
npm run build
```

### 4. Activate the theme

In the WordPress admin go to **Appearance → Themes** and activate **WP Theme Base**.

---

## npm Scripts

| Command | Description |
|---|---|
| `npm run build` | Production build — compiles Tailwind CSS + JS bundles |
| `npm run start` | Watch mode — rebuilds on file change |
| `npm run lint` | Run JS and CSS linting |
| `npm run lint:js` | Lint JavaScript with `@wordpress/scripts` |
| `npm run lint:css` | Lint CSS with `@wordpress/scripts` |
| `npm run format` | Auto-format JS files |

---

## Project Structure

```
wp-theme-base/
├── assets/           # Compiled output (git-ignored)
│   ├── css/
│   │   ├── main.css
│   │   └── editor.css
│   └── js/
│       ├── main.js
│       └── main.asset.php
├── inc/
│   ├── enqueue.php   # Asset enqueueing
│   ├── setup.php     # Theme setup / supports
│   └── image-sizes.php
├── src/
│   ├── css/
│   │   ├── main.css  # Tailwind entry point
│   │   └── editor.css
│   └── js/
│       └── main.js   # JS entry point
├── template-parts/   # Reusable template partials
├── 404.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── postcss.config.js
├── single.php
├── style.css         # WordPress theme header
├── tailwind.config.js
└── theme.json        # Gutenberg editor settings
```

---

## Tailwind Configuration

The Tailwind config (`tailwind.config.js`) ships with sensible defaults. To add brand colors, fonts, or spacing overrides, edit the `theme.extend` section and run a production build.

---

## Deploy Workflow

```
Local dev → GitHub (feature branch) → PR → merge to main
  → SpinupWP push-to-deploy → staging → production
```

See [SpinupWP push-to-deploy docs](https://spinupwp.com/doc/configuring-push-to-deploy/) for server-side setup.
