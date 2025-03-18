# Contributing to Houses on The Air

Thank you for your interest in contributing to the Houses on The Air (HOTA) project! We welcome contributions from developers of all skill levels and backgrounds. This document provides guidelines and instructions for contributing to our codebase.

## Table of Contents
- [Code of Conduct](#code-of-conduct)
- [Getting Started](#getting-started)
- [Development Environment Setup](#development-environment-setup)
- [Contribution Process](#contribution-process)
- [Coding Standards](#coding-standards)
- [Pull Request Process](#pull-request-process)
- [Issue Reporting](#issue-reporting)
- [Feature Requests](#feature-requests)
- [Community Communication](#community-communication)

## Code of Conduct

We are committed to providing a friendly, safe, and welcoming environment for all contributors. By participating in this project, you agree to abide by our [Code of Conduct](CODE_OF_CONDUCT.md).

## Getting Started

1. **Fork the repository** - Create your own fork of the project on GitHub.
2. **Clone your fork** - `git clone https://github.com/YOUR-USERNAME/hota.org.uk.git`
3. **Set up your development environment** - See the [Development Environment Setup](#development-environment-setup) section below.
4. **Create a branch** - Create a new branch for your contribution.
5. **Make your changes** - Implement your feature or fix.
6. **Test your changes** - Ensure your changes work as expected and don't introduce regressions.
7. **Submit a pull request** - Create a PR from your branch to our main repository.

## Development Environment Setup

### Prerequisites
- PHP 8.1 or higher
- MySQL/MariaDB 10.5 or higher
- Composer
- Node.js and npm (for front-end assets)

### Setup Steps
1. Install dependencies:
   ```
   composer install
   npm install
   ```

2. Configure your environment:
   - Copy `.env.example` to `.env`
   - Update the database settings in `.env`

3. Set up the database:
   ```
   php cli/setup-database.php
   ```

4. Start the development server:
   ```
   php -S localhost:8000
   ```

5. Access the site at http://localhost:8000

## Contribution Process

1. **Check existing issues** - Look for open issues or create a new one to discuss your planned contribution.
2. **Branch naming convention** - Create a branch with a descriptive name:
   - For features: `feature/short-description`
   - For bugfixes: `fix/issue-number-short-description`
   - For documentation: `docs/what-is-being-documented`

3. **Commit messages** - Write clear, meaningful commit messages:
   ```
   type(scope): brief description

   Longer description if needed, explaining the context or why the change is necessary.

   References #issue-number
   ```
   Types: `feat`, `fix`, `docs`, `style`, `refactor`, `test`, `chore`

4. **Keep changes focused** - Each PR should address a single feature, bugfix, or documentation update.

## Coding Standards

We follow PSR-12 for PHP code and adhere to the following guidelines:

### PHP Guidelines
- Use meaningful variable and function names
- Add docblocks to functions and classes
- Follow object-oriented principles
- Write unit tests for new functionality
- Keep functions focused and small

### JavaScript Guidelines
- Use ES6+ features where appropriate
- Add comments for complex logic
- Follow functional programming patterns where possible
- Use descriptive variable and function names

### HTML/CSS Guidelines
- Follow BEM methodology for CSS naming
- Keep CSS selectors as simple as possible
- Ensure responsive design works on mobile devices
- Maintain accessibility (WCAG 2.1 AA compliance)

## Pull Request Process

1. **Create a pull request** from your branch to our `main` branch.
2. **Fill out the PR template** with all relevant information.
3. **Link any related issues** in the PR description.
4. **Request a review** from maintainers if needed.
5. **Update your PR** based on feedback from reviewers.
6. **Squash commits** if requested by maintainers.
7. Once approved, a maintainer will merge your PR.

## Issue Reporting

When reporting an issue, please include:

- A clear, descriptive title
- Steps to reproduce the issue
- Expected and actual results
- Screenshots if applicable
- Your environment details (browser, OS, device)
- Any relevant logs or error messages

Use issue templates when available.

## Feature Requests

Feature requests are welcome. Please provide:

- A clear description of the feature
- The problem it solves
- How it benefits HOTA users
- Any implementation ideas you have

## Community Communication

- **Discord**: Join our [Discord server](https://discord.gg/MurHvvkc4W) for real-time discussion.
- **GitHub Discussions**: Use [GitHub Discussions](https://github.com/hotaorg/hota.org.uk/discussions) for longer-form questions or ideas.
- **Issue Tracker**: For bugs and feature requests.

## Recognition

All contributors will be recognized in our [CONTRIBUTORS.md](CONTRIBUTORS.md) file and on our website's [Contributors Page](https://hota.org.uk/?page=contributors).

Thank you for contributing to Houses on The Air!
