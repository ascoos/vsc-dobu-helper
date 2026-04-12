<?php
/*
dobu {
    file:id(`2`),name(`create-dobu-class`) {
        ascoos {
            logo {`
                  __ _  ___  ___ ___   ___   ___     ___   ___
                 / _V |/  / / __/ _ \ / _ \ /  /    / _ \ /  /
                | (_| |\  \| (_| (_) | (_) |\  \   | (_) |\  \
                 \__,_|/__/ \___\___/ \___/ /__/    \___/ /__/
            `},
            name {`ASCOOS OS`},
            version {`1.0.0`},
            category {`Web OS`},
            subcategory {`Web5 / WebAI`},
            description {`A Web 5.0 and Web AI Kernel for decentralized web and IoT applications`},
            creator {`Drogidis Christos`},
            site {`https://www.ascoos.com`},
            issues {`https://issues.ascoos.com`},
            support {`support@ascoos.com`},
            license {`[Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html`},
            copyright {`Copyright (c) 2007 - 2026, AlexSoft Software.`}
        },
        project {
            package:langs {
                en {`DoBu code sample`},
                el {`Δείγμα κώδικα DoBu`}
            },
            subpackage:langs {
                en {`DoBu code sample for classes and methods`},
                el {`Δείγμα κώδικα DoBu για κλάσεις και μεθόδους`}
            },
            category:langs {
                en {`Examples`},
                el {`Παραδείγματα`}
            },
            subcategory:langs {
                en {`DoBu for classes`},
                el {`DoBu για κλάσεις`}
            },
            source {`examples/create-dobu-class.php`},
            description:langs {
                en {`This file is a complete example of docblock writing and DoBu structure.`},
                el {`Το αρχείο αυτό αποτελεί ένα ολοκληρωμένο παράδειγμα σύνταξης docblock, δομής DoBu`}
            },
            fileNo {`2`},
            version {`1.0.0`},
            build {`15`},
            created {`2026-02-12 09:25:03`},
            updated {`2026-02-12 09:51:43`},
            author {`Drogidis Christos`},
            authorSite {`https://www.ascoos.com`},
            support {`support@ascoos.com`},
            license {`AGL-F (ASCOOS General License - FREE)`},
            since {`1.0.0`},
            sincePHP {`8.3.0+`}
        }
    }
}
*/
declare(strict_types=1);
namespace ASCOOS\OS\Kernel\MyClass;
defined("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");
defined("ASCOOS_OS_RUN") or die("Prohibition of Access.");

use ASCOOS\OS\Kernel\Core\TObject;

/******************************************************************************
 * @startcode TMyClass
 *****************************************************************************/
/*
dobu {
    class:id(`tmyclass`),name(`TMyClass`),extends(`TObject`),implements(``),namespace(`ASCOOS\OS\Kernel\MyClass`),hierarchy(`TObject, TMyClass`),version(`0.0.1`),since(`1.0.0`),sincePHP(`8.3.0`) {
        category:langs {
            en {`Objects`},
            el {`Αντικείμενα`}
        },
        intro:langs {
            en {`Multilines Introduction Text`},
            el {`Κείμενο Εισαγωγής Πολλαπλών Γραμμών`}
        },        
        summary:langs {
            en {`Creating a new Ascoos OS class.`},
            el {`Δημιουργία μιας νέας Ascoos OS κλάσης.`}
        },
        desc:langs {
            en {`This class is a typical example of a prototype for the Ascoos ecosystem`},
            el {`Η κλάση αυτή είναι ένα τυπικό δείγμα προτοτύπου για το οικοσύστημα Ascoos`}
        },
        methods:active(`idx,toc`) {
            method:id(`construct`),name(`__construct`),syntax(`__construct(array $properties = [])`),return(`void`),langs {
                en {`Initializes the class with an array, and optional properties.`},
                el {`Αρχικοποιεί την κλάση με έναν πίνακα και προαιρετικές ιδιότητες.`}
            },
            method:id(`getinstance`),name(`getInstance`),syntax(`&getInstance(array $properties = []): TMyClass`),return(`TMyClass&`),langs {
                en {`We see if the object is already loaded, otherwise we create a new load of the object`},
                el {`Βλέπουμε εάν υπάρχει ήδη φορτωμένο το αντικείμενο αλλιώς δημιουργούμε μια νέα φόρτωση του αντικειμένου`}
            },
            method:id(`blackscholesputdividend`),name(`blackScholesPutDividend`),syntax(`blackScholesPutDividend(float $spot, float $strike, float $riskFreeRate, float $dividendYield, float $volatility, float $timeToMaturity): float`),return(`float`),langs {
                en {`We see if the object is already loaded, otherwise we create a new load of the object`},
                el {`Βλέπουμε εάν υπάρχει ήδη φορτωμένο το αντικείμενο αλλιώς δημιουργούμε μια νέα φόρτωση του αντικειμένου`}
            }
        }
    }
}
*/
#[\AllowDynamicProperties]
class TMyClass extends TObject
{

    /*
    dobu {
        method:classid(`tmyclass`),id(`construct`),name(`__construct`),syntax(`__construct(array $properties = [])`),return(`void`),version(`1.0.0`) {
            category:langs {
                en {`Constructor`},
                el {`Κατασκευαστής`}
            },
            intro:langs {
                en {`Constructors are ordinary methods which are called during the instantiation of their corresponding object.
                     As such, they may define an arbitrary number of arguments, which may be required, may have a type, 
                     and may have a default value.
                    `},
                el {`Οι κατασκευαστές είναι συνηθισμένες μέθοδοι που καλούνται κατά την στιγμιοποίηση του αντίστοιχου αντικειμένου τους.
                     Ως τέτοιοι, μπορούν να καθορίσουν έναν αυθαίρετο αριθμό ορισμάτων, που μπορεί να είναι υποχρεωτικά, 
                     μπορεί να έχουν τύπο, και μπορεί να έχουν προεπιλεγμένη τιμή.
                    `}
            },          
            summary:langs {
                en {`Constructor.`},
                el {`Κατασκευαστής.`}
            },
            desc:langs {
                en {`Initialize the class. It must be called by the offspring if the classes are initialized.`},
                el {`Αρχικοποιεί την κλάση. Πρέπει να καλείται από τα παραγόμενα αν οι κλάσεις αρχικοποιούνται.`}
            },
            params:active(`table:{name,type,default}`) {
                param:id(`properties`),name(`$properties`),type(`array`),default(`[]`),langs {
                    en {`Initializes the class with optional properties.`},
                    el {`Αρχικοποιεί την κλάση με προαιρετικές ιδιότητες.`}
                }
            },
            return:langs {
                en {`It doesn't return anything.`},
                el {`Δεν επιστρέφει τίποτα.`}
            },
            throws:langs {
                en {`It does not implement any exceptions.`},
                el {`Δεν υλοποιεί καμία εξαίρεση.`}
            }
        }
    }
    */
    public function __construct(array $properties = []) {
        parent::__construct($properties);
    }


    /*
    dobu {
        method:classid(`tmyclass`),id(`getinstance`),name(`getInstance`),syntax(`&getInstance(array $properties = [])`),return(`TMyClass`),version(`1.0.0`) {
            category:langs {
                en {`Instance`},
                el {`Κατασκευαστής`}
            },
            intro:langs {
                en {`Multilines Introduction Text`},
                el {`Κείμενο Εισαγωγής Πολλαπλών Γραμμών`}
            },        
            summary:langs {
                en {`Instance.`},
                el {`Κατασκευαστής.`}
            },
            desc:langs {
                en {`We see if the object is already loaded, otherwise we create a new load of the object.`},
                el {`Βλέπουμε εάν υπάρχει ήδη φορτωμένο το αντικείμενο αλλιώς δημιουργούμε μια νέα φόρτωση του αντικειμένου`}
            },
            params:active(`table:{name,type,default,langs}`) {
                param:id(`properties`),name(`$properties`),type(`array`),default(`[]`),langs {
                    en {`An associative array of properties to initialize the class with.`},
                    el {`Ένας συσχετιστικός πίνακας ιδιοτήτων για την αρχικοποίηση της κλάσης`}
                }
            },
            return:type(`object`),value(`TMyClass`),langs {
                en {`Reference to the new instance.`},
                el {`Αναφορά στην νέα περίπτωση.`}
            },
            throws:langs {
                en {`It does not implement any exceptions.`},
                el {`Δεν υλοποιεί καμία εξαίρεση.`}
            }
        }
    }
    */
   public static function &getInstance(array $properties = []): TMyClass
   {
        static $instance;
        if (!is_object($instance)) $instance = new TMyClass($properties);
        return $instance;

   }


    /*
    dobu {
        method:classid(`tmyclass`),id(`blackscholesputdividend`),name(`blackScholesPutDividend`),syntax(`blackScholesPutDividend(float $spot, float $strike, float $riskFreeRate, float $dividendYield, float $volatility, float $timeToMaturity)`),return(`float`),version(`1.0.0`),sincePHP(`8.3.0`) {
            category:langs {
                en {`Derivatives - Black–Scholes with Dividends`},
                el {`Παράγωγα - Black–Scholes με Μερίσματα`}
            },
            intro:langs {
                en {`Multilines Introduction Text`},
                el {`Κείμενο Εισαγωγής Πολλαπλών Γραμμών`}
            },        
            summary:langs {
                en {`Prices a European put option with continuous dividend yield q.`},
                el {`Αποτιμά ένα ευρωπαϊκό put option με συνεχή μερισματική απόδοση q.`}
            },
            desc:langs {
                en {`Extends the Black–Scholes put formula to include a continuous dividend yield on the underlying, using the (r − q) drift and discounted underlying S₀ e^{-qT}.`},
                el {`Επεκτείνει τον τύπο Black–Scholes για put ώστε να περιλαμβάνει συνεχή μερισματική απόδοση στο υποκείμενο, με drift (r − q) και προεξοφλημένο S₀ e^{-qT}.`}
            },
            params:active(`table:{name,type}`) {
                param:id(`spot`),name(`$spot`),type(`float`),langs {
                    en {`Current underlying price S₀.`},
                    el {`Τρέχουσα τιμή υποκείμενου S₀.`}
                },
                param:id(`strike`),name(`$strike`),type(`float`),langs {
                    en {`Strike price K.`},
                    el {`Τιμή εξάσκησης K.`}
                },
                param:id(`riskFreeRate`),name(`$riskFreeRate`),type(`float`),langs {
                    en {`Risk‑free rate r.`},
                    el {`Επιτόκιο χωρίς κίνδυνο r.`}
                },
                param:id(`dividendYield`),name(`$dividendYield`),type(`float`),langs {
                    en {`Continuous dividend yield q.`},
                    el {`Συνεχής μερισματική απόδοση q.`}
                },
                param:id(`volatility`),name(`$volatility`),type(`float`),langs {
                    en {`Volatility σ.`},
                    el {`Μεταβλητότητα σ.`}
                },
                param:id(`timeToMaturity`),name(`$timeToMaturity`),type(`float`),langs {
                    en {`Time to maturity T (in years).`},
                    el {`Χρόνος μέχρι τη λήξη T (σε έτη).`}
                }
            },
            formula:type(`latex`),value(`\[ P = K e^{-rT} N(-d_2) - S_0 e^{-qT} N(-d_1) \]`),analysis(`
                    d₁ = [ln(S₀/K) + (r − q + σ²/2) T] / (σ √T)
                    d₂ = d₁ − σ √T
                `),langs {
                    en {`Uses the same d₁, d₂ as the dividend‑adjusted call, but applies the put payoff structure with discounted underlying and strike. Inputs: S₀, K, r, q, σ, T. Output: put price with dividends.`},
                    el {`Χρησιμοποιεί τα ίδια d₁, d₂ όπως στο call με μερίσματα, αλλά εφαρμόζει τη δομή payoff του put με προεξοφλημένο υποκείμενο και strike. Είσοδοι: S₀, K, r, q, σ, T. Έξοδος: τιμή put με μερίσματα.`}
            },
            example:type(`pre,code`),langs {
                all {`$putDiv = $math->blackScholesPutDividend(100, 100, 0.05, 0.02, 0.20, 1.0);`}
            },
            input-convention:langs {
                en {`All interest rates (r, q), volatility (σ), and dividend yield are given in **decimal form** (not percentage).
                    Example: 5% → 0.05`},
                el {`Όλα τα επιτόκια (r, q), η μεταβλητότητα (σ) και η μερισματική απόδοση δίνονται σε **δεκαδική μορφή** (όχι ποσοστιαία).
                    Παράδειγμα: 5% → 0.05`}
            },
            numerical-behavior:langs {
                en {`
                    - When T ≤ 0 → returns max(K - S₀, 0) (intrinsic value)
                    - When σ ≤ 0 → returns discounted intrinsic value
                    - When σ > 10 (1000%) → uses asymptotic approximation to avoid overflow
                `},
                el {`
                    - Όταν T ≤ 0 → επιστρέφει max(K - S₀, 0) (ενδογενής αξία)
                    - Όταν σ ≤ 0 → επιστρέφει την προεξοφλημένη ενδογενή αξία
                    - Όταν σ > 10 (1000%) → χρησιμοποιεί ασύμπτωτη προσέγγιση για να αποφευχθεί υπερχείλιση
                `}
            },
            precision:langs {
                en {`Expected accuracy: ~1e-10 under typical market conditions. 
                    Uses the normal distribution CDF with double-precision accuracy (~15 decimal places)`},
                el {`Αναμενόμενη ακρίβεια: ~1e-10 σε τυπικές συνθήκες αγοράς.
                    Χρησιμοποιεί cdf φυσιολογικής κατανομής με ακρίβεια διπλής ακρίβειας (~15 δεκαδικά ψηφία)`}
            },
            references:type(`ul`),langs {
                all {`
                    - John C. Hull - "Options, Futures, and Other Derivatives" (10th ed.), Chapter 17, pp. 380–382
                    - Espen Gaarder Haug - "The Complete Guide to Option Pricing Formulas", Chapter 1
                    - Wilmott on Quantitative Finance, Vol 2, Section 8.3
                `}
            },
            see:langs {
                en {`
                    - blackScholesCallDividend() - corresponding call for call
                    - blackScholesPut() - without dividends
                    - binomialPutEuropean() - alternative numerical method
                `},
                el {`
                    - blackScholesCallDividend() - αντίστοιχη κλήση για call
                    - blackScholesPut() - χωρίς μερίσματα
                    - binomialPutEuropean() - εναλλακτική αριθμητική μέθοδος
                `}
            },
            verification-cases:langs {
                en {`
                    - Hull p.381, Example 17.1 → expected value ≈ 6.58
                    - Haug Table 1.2, case 3 → expected ≈ 4.2833
                `},
                el {`
                    - Hull p.381, Example 17.1 → αναμενόμενη τιμή ≈ 6.58
                    - Haug Table 1.2, case 3 → αναμενόμενη ≈ 4.2833
                `}
            },
            performance:langs {
                all {`~120–180 ns per call (AMD Ryzen 9 5950X, PHP 8.2 JIT)`}
            },
            return:type(`float`),langs {
                en {`Put option price with dividends.`},
                el {`Τιμή put option με μερίσματα.`}
            },
            throws:type(`InvalidArgumentException`),langs {
                en {`If volatility or time are non‑positive.`},
                el {`Αν η μεταβλητότητα ή ο χρόνος είναι μη θετικοί.`}
            }
        }
    }
    */
    public function blackScholesPutDividend(float $spot, float $strike, float $riskFreeRate, float $dividendYield, float $volatility, float $timeToMaturity): float { return 0.0;}

}
/******************************************************************************
 * @endcode TMyClass
 *****************************************************************************/
?>