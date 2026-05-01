<p align="center">
  <img src="https://dl.ascoos.com/images/ascoos.png" height="120" alt="Ascoos OS" />
</p>

# Ascoos DoBu Helper

**Official VS Code Snippet Extension for DoBu — Documentation Builder for Ascoos OS**

[![VS Code](https://img.shields.io/badge/VS%20Code-007ACC?logo=visual-studio-code&logoColor=white)](https://code.visualstudio.com/)
[![Version](https://img.shields.io/badge/version-0.0.2-blue.svg)](https://github.com/ascoos/dobu)
[![License: AGL](https://img.shields.io/badge/license-AGL-purple.svg)](http://docs.ascoos.com/lics/ascoos/AGL.html)
![GitHub Downloads (all assets, all releases)](https://img.shields.io/github/downloads/ascoos/vsc-dobu-helper/total?color=%230E80C0) 
![GitHub Release](https://img.shields.io/github/v/release/ascoos/vsc-dobu-helper) 
![GitHub Release Date](https://img.shields.io/github/release-date/ascoos/vsc-dobu-helper?color=%230E80C0)
![GitHub repo size](https://img.shields.io/github/repo-size/ascoos/vsc-dobu-helper) 

**Ascoos DoBu Helper** is the official snippet package for **DoBu** inside Visual Studio Code.

It allows you to quickly and correctly create **DoBu documentation blocks** in PHP, CSS, JavaScript, C++ and other languages.

---

## What is DoBu?

**DoBu** (DOcumentation BUilder) is a **Documentation DSL** specifically designed for the **Ascoos OS** ecosystem.

It is a semantic documentation layer that lives inside simple docblocks and supports multilingual metadata, mathematical formulas, behavioral descriptions, export to multiple formats, and much more.

Read the **[official DoBu README](https://github.com/ascoos/dobu/blob/main/README.md)** for more details.

---

## Key Features

- **Over 40 ready-made snippets** for DoBu syntax
- Support for **PHP • CSS • JavaScript • C++ • Plaintext**
- Full **File Skeleton** with Ascoos OS branding
- Ready templates for classes, methods, properties, constants, parameters, formulas, etc.
- Multilingual blocks (`en` / `el`)
- Automatic filling of dates, filenames, namespaces, etc.

---

## Installation

**The extension is currently distributed only as a VSIX file.**

### Download & Install

1. Go to the [Releases page](https://github.com/ascoos/vsc-dobu-helper/releases)
2. Download the latest `ascoos-dobu-helper-x.x.x.vsix` (or newer)
3. Open Visual Studio Code
4. Go to the Extensions view (`Ctrl+Shift+X`)
5. Click on the **`...`** in the top right → **`Install from VSIX...`**
6. Select the downloaded `.vsix` file

> **Tip**: After the first release, you can also install it directly from the VS Code Marketplace (coming soon).

---

## How to Use

Simply type one of the following **prefixes** and press `Tab`:

### Basic & Useful Snippets

| Prefix                              | Description                                            |
|-------------------------------------|--------------------------------------------------------|
| `@dobu-file-skeleton`               | Full DoBu File Skeleton                                |
| `php-dobu-file-skeleton`            | **Full PHP file** with DoBu header (recommended)       |
| `@dobu-class-skeleton`              | Class skeleton with methods                            |
| `@dobu-class-method`                | Single method inside a class                           |
| `@dobu-docblock-skeleton`           | Basic DoBu dockblock                                   |
| `@dobu-skeleton-ascoos`             | Ascoos OS block                                        |
| `@dobu-skeleton-project`            | Project block                                          |
| `@dobu-skeleton-license`            | License selection                                      |
| `@dobu-skeleton-author`             | Author information                                     |

### Multilingual & Descriptive Snippets

- `@dobu-intro` → Introduction
- `@dobu-summary` → Summary
- `@dobu-desc` → Detailed description
- `@dobu-category` / `@dobu-subcategory`
- `@dobu-params-method-skeleton` → Method parameters
- `@dobu-return-method` → Return value
- `@dobu-throws` → Exceptions
- `@dobu-formula` → Mathematical formula (LaTeX / MathML)

**Tip**: Type `@dobu` to see **all** available snippets at once.

---

## Examples

### Example: License Selection

When using snippets that contain a `license` field, a ready dropdown appears with all available Ascoos OS licenses:

![License Selection](https://cdn.ascoos.com/images/vscode/dobu-helper/sreen00002.png)

### Example: Full PHP File Skeleton

By typing `php-dobu-file-skeleton` and pressing `Tab`, a complete file skeleton is automatically inserted:

![Namespace class type selection](https://cdn.ascoos.com/images/vscode/dobu-helper/sreen00001.png)

```php
<?php
/*
dobu {
    file:id(`FILE-ID`),name(`${TM_FILENAME_BASE}`) {
        ascoos { ... },
        project { ... }
    }
}
*/
declare(strict_types=1);
namespace ASCOOS\OS\...;
defined("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");
...
?>
```

![Namespace class type selection](https://cdn.ascoos.com/images/vscode/dobu-helper/sreen00003.png)

### Example: Adding a Method to a Class

```php
method:id(`myMethod`),name(`myMethod`),syntax(`myMethod(string $param)`),return(`bool`),langs {
    en {`Description in English`},
    el {`Περιγραφή στα Ελληνικά`}
},
```

---

## Links

- **Repository**: [https://github.com/ascoos/dobu](https://github.com/ascoos/dobu)
- **DoBu Documentation (EL)**: [Official DoBu README (Greek)](https://github.com/ascoos/dobu/blob/main/README-EL.md)
- **DoBu Documentation (EN)**: [Official DoBu README (English)](https://github.com/ascoos/dobu/blob/main/README.md)
- **Issues / Bugs**: [https://issues.ascoos.com](https://issues.ascoos.com)
- **Website**: [https://www.ascoos.com](https://www.ascoos.com)

## Author

**Christos Drogidis**  
Ascoos OS Team

## License

This extension is distributed under the **AGL (Ascoos General License)**.

See details here: [http://docs.ascoos.com/lics/ascoos/AGL.html](http://docs.ascoos.com/lics/ascoos/AGL.html)

---

<p align="center">
  <strong>Made with ❤️ for the Ascoos OS Community</strong>
</p>