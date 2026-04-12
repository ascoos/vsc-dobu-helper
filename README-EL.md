<p align="center">
  <img src="https://dl.ascoos.com/images/ascoos.png" height="120" alt="Ascoos OS" />
</p>

# Ascoos DoBu Helper

**Official VS Code Snippet Extension for DoBu — Documentation Builder for Ascoos OS**

[![VS Code](https://img.shields.io/badge/VS%20Code-007ACC?logo=visual-studio-code&logoColor=white)](https://code.visualstudio.com/)
[![Version](https://img.shields.io/badge/version-0.0.1-blue.svg)](https://github.com/ascoos/dobu)
[![License: AGL](https://img.shields.io/badge/license-AGL-purple.svg)](http://docs.ascoos.com/lics/ascoos/AGL.html)
![GitHub Downloads (all assets, all releases)](https://img.shields.io/github/downloads/ascoos/vsc-dobu-helper/total?color=%230E80C0) 
![GitHub Release](https://img.shields.io/github/v/release/ascoos/vsc-dobu-helper) 
![GitHub Release Date](https://img.shields.io/github/release-date/ascoos/vsc-dobu-helper?color=%230E80C0)
![GitHub repo size](https://img.shields.io/github/repo-size/ascoos/vsc-dobu-helper) 

Το **Ascoos DoBu Helper** είναι το επίσημο πακέτο snippets για το **DoBu** μέσα στο Visual Studio Code.

Σου επιτρέπει να δημιουργείς γρήγορα και σωστά **DoBu documentation blocks** σε PHP, CSS, JavaScript, C++ και άλλες γλώσσες.

---

## Τι είναι το DoBu;

Το **DoBu** (DOcumentation BUilder) είναι ένα **Documentation DSL** ειδικά σχεδιασμένο για το **Ascoos OS** οικοσύστημα.

Είναι ένα σημασιολογικό στρώμα τεκμηρίωσης που ζει μέσα σε απλά docblocks και υποστηρίζει πολυγλωσσικά μεταδεδομένα, μαθηματικούς τύπους, συμπεριφορές, εξαγωγή σε πολλαπλά formats και πολλά άλλα.

Διάβασε το **[επίσημο README του DoBu](https://github.com/ascoos/dobu/blob/main/README-EL.md)** για περισσότερες λεπτομέρειες.

---

## Κύρια Χαρακτηριστικά

- **Πάνω από 40 έτοιμα snippets** για DoBu syntax
- Υποστήριξη για **PHP • CSS • JavaScript • C++ • Plaintext**
- Πλήρες **File Skeleton** με Ascoos OS branding
- Έτοιμα templates για κλάσεις, μεθόδους, ιδιότητες, σταθερές, παραμέτρους, formulas κ.ά.
- Πολυγλωσσικά blocks (`en` / `el`)
- Αυτόματη συμπλήρωση ημερομηνιών, ονομάτων αρχείων, namespaces κ.λπ.

---

## Εγκατάσταση

**Προς το παρόν η εγκατάσταση γίνεται μόνο χειροκίνητα μέσω VSIX.**

1. Κατέβασε το αρχείο `.vsix` από το repository
2. Άνοιξε το VS Code
3. Πήγαινε στο Extensions view (Ctrl+Shift+X)
4. Κάνε κλικ στο **...** πάνω δεξιά → **Install from VSIX...**
5. Επίλεξε το αρχείο που κατέβασες

---

## Πώς να το χρησιμοποιήσεις

Απλά πληκτρολόγησε έναν από τους παρακάτω **prefixes** και πάτα `Tab`:

### Βασικά & Χρήσιμα Snippets

| Prefix                              | Περιγραφή                                              |
|-------------------------------------|--------------------------------------------------------|
| `@dobu-file-skeleton`               | Πλήρες DoBu File Skeleton                              |
| `php-dobu-file-skeleton`            | **Πλήρες PHP αρχείο** με DoBu header (προτεινόμενο)    |
| `@dobu-class-skeleton`              | Σκελετός κλάσης με methods                             |
| `@dobu-class-method`                | Μία μέθοδος μέσα σε κλάση                              |
| `@dobu-docblock-skeleton`           | Βασικό DoBu dockblock                                  |
| `@dobu-skeleton-ascoos`             | Ascoos OS block                                        |
| `@dobu-skeleton-project`            | Project block                                          |
| `@dobu-skeleton-license`            | Επιλογή άδειας χρήσης                                  |
| `@dobu-skeleton-author`             | Πληροφορίες συγγραφέα                                 |

### Πολυγλωσσικά & Περιγραφικά Snippets

- `@dobu-intro` → Εισαγωγή
- `@dobu-summary` → Περίληψη
- `@dobu-desc` → Αναλυτική περιγραφή
- `@dobu-category` / `@dobu-subcategory`
- `@dobu-params-method-skeleton` → Παράμετροι μεθόδου
- `@dobu-return-method` → Return value
- `@dobu-throws` → Εξαιρέσεις
- `@dobu-formula` → Μαθηματικός τύπος (LaTeX / MathML)

**Tip**: Γράψε `@dobu` για να δεις **όλα** τα διαθέσιμα snippets ταυτόχρονα.

---

## Παραδείγματα

### Παράδειγμα: Επιλογή Άδειας Χρήσης (License)

Όταν χρησιμοποιείς snippets που περιέχουν πεδίο `license`, εμφανίζεται έτοιμο dropdown με όλες τις διαθέσιμες άδειες του Ascoos OS:

![Επιλογή Άδειας Χρήσης](https://cdn.ascoos.com/images/vscode/dobu-helper/sreen00002.png)

### Παράδειγμα: Πλήρες PHP File Skeleton

Πληκτρολογώντας `php-dobu-file-skeleton` και πατώντας `Tab`, εισάγεται αυτόματα ένας πλήρης σκελετός αρχείου:

![Επιλογή τύπου κλάσεων πυρήνα στο namespace](https://cdn.ascoos.com/images/vscode/dobu-helper/sreen00001.png)

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

![Επιλογή τύπου κλάσεων πυρήνα στο namespace](https://cdn.ascoos.com/images/vscode/dobu-helper/sreen00003.png)

### Παράδειγμα: Προσθήκη Μεθόδου σε Κλάση

```php
method:id(`myMethod`),name(`myMethod`),syntax(`myMethod(string $param)`),return(`bool`),langs {
    en {`Description in English`},
    el {`Περιγραφή στα Ελληνικά`}
},
```

---

## Σύνδεσμοι

- **Repository**: [https://github.com/ascoos/dobu](https://github.com/ascoos/dobu)
- **DoBu Documentation (EL)**: [Επίσημο README του DoBu](https://github.com/ascoos/dobu/blob/main/README-EL.md)
- **DoBu Documentation (EN)**: [Επίσημο README του DoBu](https://github.com/ascoos/dobu/blob/main/README.md)
- **Issues / Bugs**: [https://issues.ascoos.com](https://issues.ascoos.com)
- **Website**: [https://www.ascoos.com](https://www.ascoos.com)

## Συγγραφέας

**Christos Drogidis**  
Ascoos OS Team

## Άδεια

Το extension διανέμεται υπό την **AGL (Ascoos General License)**.

Δείτε λεπτομέρειες εδώ: [http://docs.ascoos.com/lics/ascoos/AGL.html](http://docs.ascoos.com/lics/ascoos/AGL.html)

---

<p align="center">
  <strong>Δημιουργημένο με ❤️ για την κοινότητα του Ascoos OS</strong>
</p>