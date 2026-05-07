<?php
/*
dobu {
    file:id(`FILE-ID`),name(`Untitled`) {
        ascoos {
            logo {`
                  __ _  ___  ___ ___   ___   ___     ___   ___
                 / _` |/  / / __/ _ \ / _ \ /  /    / _ \ /  /
                | (_| |\  \| (_| (_) | (_) |\  \   | (_) |\  \
                 \__,_|/__/ \___\___/ \___/ /__/    \___/ /__/
            `},
            name {`ASCOOS OS`},
            version {`1.0.0`},
            category {`Web OS`},
            subcategory {`Web5 / WebAI`},
            description {`A Web 5.0 and Web AI Kernel for decentralized web and IoT applications`},
            creator {`Drogidis Christos`},
            website {`https://www.ascoos.com`},
            issues {`https://support.ascoos.com`},
            support {`support@ascoos.com`},
            license {`[Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html`},
            copyright {`Copyright (c) 2007 - 2026, AlexSoft Software.`},
        },
        project {
            package:langs {
                en {`PACKAGE DESCRIPTION IN ENGLISH`},
                el {`PACKAGE DESCRIPTION IN GREEK`}
            },
            subpackage:langs {
                en {`SUBPACKAGE DESCRIPTION IN ENGLISH`},
                el {`SUBPACKAGE DESCRIPTION IN GREEK`}
            },
            category:langs {
                en {`CATEGORY DESCRIPTION IN ENGLISH`},
                el {`CATEGORY DESCRIPTION IN GREEK`}
            },
            subcategory:langs {
                en {`SUBCATEGORY DESCRIPTION IN ENGLISH`},
                el {`SUBCATEGORY DESCRIPTION IN GREEK`}
            },
            source {`/Untitled.php`},
            intro:langs {
                en {`DESCRIPTION IN ENGLISH`},
                el {`DESCRIPTION IN GREEK`}
            },
            summary:langs {
                en {`DESCRIPTION IN ENGLISH`},
                el {`DESCRIPTION IN GREEK`}
            },
            description:langs {
                en {`DESCRIPTION IN ENGLISH`},
                el {`DESCRIPTION IN GREEK`}
            },
            fileNo {`FILE-ID`},
            version {`1.0.0`},
            build {`1`},
            created {`2026-05-07 17:10:59`},
            updated {`2026-05-07 17:10:59`},
            author {`AUTHOR NAME`},
            authorSite {`https://www.example.com`},
            support {`support@example.com`},
            license {`Freeware`},
            since {`1.0.0`},
            sincePHP {`8.4.0`}
        }
    }
}
*/
declare(strict_types=1);
namespace ASCOOS\OS\Extras\NAMESPACE;
defined("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");
defined("ASCOOS_OS_RUN") or die("Prohibition of Access.");

use ASCOOS\OS\Kernel\Core\TObject;

/*
dobu {
    dobu {
        class:id(`tmyclass`),name(`TMyClass`),extends(`TObject`)namespace(`ASCOOS\OS\Extras\NAMESPACE`),hierarchy(`TObject, TMyClass`),version(`1.0.0`),build(`1`),created(`2026-05-07 17:14:54`),updated(`2026-05-07 17:14:54`),since(`1.0.0`),sincePHP(`8.4.0`),licence(`Freeware`),difficulty(`1`) {
            category:langs {
                en {``},
                el {``}
            },
            intro:langs {
                en {``},
                el {``}
            },
            summary:langs {
                en {``},
                el {``}
            },
            desc:langs {
                en {``},
                el {``}
            },
            methods:active(`idx,toc`) {
                method:id(`construct`),name(`__construct`),syntax(`__construct(array properties = [])`),return(`void`),langs {
                    en {`Initializes the class with an array of optional properties.`},
                    el {`Αρχικοποιεί την κλάση με έναν πίνακα από προαιρετικές ιδιότητες.`}
                },
                method:id(`getinstance`),name(`getInstance`),syntax(`&getInstance(array properties = []): TMyClass`),return(`TMyClass&`),langs {
                    en {`We see if the object is already loaded, otherwise we create a new load of the object`},
                    el {`Βλέπουμε εάν υπάρχει ήδη φορτωμένο το αντικείμενο αλλιώς δημιουργούμε μια νέα φόρτωση του αντικειμένου`}
                }
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
        dobu {
            method:classid(`tmyclass`),id(`construct`),name(`__construct`),syntax(`__construct(array $properties = [])`),return(`void`),version(`1.0.0`),build(`1`),created(`2026-05-07 17:16:35`),updated(`2026-05-07 17:16:35`),since(`1.0.0`),sincePHP(`8.4.0`),licence(`Freeware`),difficulty(`1`) {
                category:langs {
                    en {``},
                    el {``}
                },
                intro:langs {
                    en {``},
                    el {``}
                },
                summary:langs {
                    en {`Initializes the class with an array of optional properties.`},
                    el {`Αρχικοποιεί την κλάση με έναν πίνακα από προαιρετικές ιδιότητες.`}
                },
                desc:langs {
                    en {``},
                    el {``}
                },
                        return:type(`void`),langs {
                    en {`It doesn't return anything.`},
                    el {`Δεν επιστρέφει τίποτα.`}
                },
                throws:types(`none`),langs {
                    en {`It does not implement any exceptions.`},
                    el {`Δεν υλοποιεί καμία εξαίρεση.`}
                }
            }
        }
    }
    */
    public function __construct(array $properties = [])
    {
        parent::__construct($properties);
    }

    
    /*
    dobu {
        dobu {
            method:classid(`tmyclass`),id(`getinstance`),name(`getInstance`),syntax(`&getInstance(array $properties = []): TMyClass`),return(`TMyClass&`),version(`1.0.0`),build(`1`),created(`2026-05-07 17:21:14`),updated(`2026-05-07 17:21:14`),since(`1.0.0`),sincePHP(`8.4.0`),licence(`Freeware`),difficulty(`1`) {
                category:langs {
                    en {``},
                    el {``}
                },
                intro:langs {
                    en {``},
                    el {``}
                },
                summary:langs {
                    en {`We see if the object is already loaded, otherwise we create a new load of the object`},
                    el {`Βλέπουμε εάν υπάρχει ήδη φορτωμένο το αντικείμενο αλλιώς δημιουργούμε μια νέα φόρτωση του αντικειμένου`}
                },
                desc:langs {
                    en {``},
                    el {``}
                },
                        return:type(`TMyClass`),langs {
                    en {`Reference to the singleton instance.`},
                    el {`Αναφορά στη μοναδική παρουσία της κλάσης.`}
                },
                throws:types(`none`),langs {
                    en {`It does not implement any exceptions.`},
                    el {`Δεν υλοποιεί καμία εξαίρεση.`}
                }
            }
        }
    }
    */
    public function &getInstance(array $properties = []): TMyClass
    {
    	static $instance;
	    if (!is_object($instance)) $instance = new TMyClass($properties);
    	return $instance;        
    }
}
?>