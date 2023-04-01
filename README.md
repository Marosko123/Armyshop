# Armyshop

## Autori

-   Andel Tomáš
-   Bednár Maroš
-   Darovec Michal

## Inštalácia

### Pre správne fungovanie je potrebné mať nainštalovaný softvér

-   [XAMPP](https://sourceforge.net/projects/xampp/)
-   [Composer](https://getcomposer.org/)

### Po inštalovaní softvéru je potrebné spustiť server a to tak:

-   Otvoriť terminál v súbore Armyshop a spustiť príkazy

```console
    cd .\backend\
    npm run build_all
```

Alebo postupne v jednotlivých krokoch

```console
    cd .\backend\
    npm run db_wipe
    npm run db_migrate
    npm run db_seed
    npm run api_serve
```

Následne sa je možné pripojiť na stránku

```console
    http://127.0.0.1:8000/armyshop
```

## Zámer, základný opis funkcionality

Aplikácia s názvom Armyshop má za úlohu zjednodušiť nakupovanie armádneho vybavenia. Docieli to tak,
že miesto predávania tovaru v kamennej predajní umožní nakúpiť tovar z pohodlia domova
prostredníctvom mobilnej aplikácie s jednoduchým a príjemným rozhraním.

Užívateľ bude mať možnosť nakupovať rôzne druhy tovarov. Počnúc oblečením a doplnkami až po
vojenskú výbavu ako zbrane, vozidlá či výbušniny. Avšak nie všetky kategórie budú sprístupnené pre nákup
bežnému užívateľovi. Všetky kategórie budú povolené nakupovať iba registrovaným užívateľom, ktorí
spĺňajú bezpečnostné požiadavky ako: zbrojný pas, vek či iné.. Všetky tieto nastavenia budú ponúknuté
pri registrácií alebo doplnkovým pridaním v nastaveniach profilu.

Ak by mal zákazník problém s tovarom, má možnosť skontaktovať náš tím odborníkov prostredníctvom
správ alebo videohovoru. Tí sa budú snažiť zákazníkovi pomôcť okamžite, online. Takúto možnosť môže
objaviť v profile, v kolónke HELP.

### Medzi možnosti používateľa tak patrí:

-   Registrácia/Prihlásenie
-   Sken zbrojného pasu
-   Lajkovanie tovaru
-   Kontaktovanie podpory chatom/videohovorom
-   Kúpa ponúkaného tovaru

## Opis prípadov použitia

1.  ### Prehliadanie vojenského oblečenia a vybavenia:

    Používatelia môžu hľadať produkty v aplikácii a pridávať ich do košíka. Môžu si vybrať z kategórií a podkategórií, aby našli presne to, čo chcú.

    #### Prípad použitia je určený pre:

    -   Neprihlásený používateľ
    -   Prihlásený používateľ bez zbrojného pasu
    -   Prihlásený používateľ so zbrojným pasom
    -   Administrátor

2.  ### Detail a kúpa produktov:

    V detaile produktu bude možnosť kúpiť si produkt alebo ho presunúť do košíka. Používateľ bude mať možnosť vybrať si, či si chce kúpiť iba tento jeden produkt, alebo ho presunúť do košíka, v ktorom už môže mať vybraté ďalšie veci.

    #### Prípad použitia je určený pre:

    -   Neprihlásený používateľ
    -   Prihlásený používateľ bez zbrojného pasu – iba produkty, na ktoré nie je treba zbrojný pas
    -   Prihlásený používateľ so zbrojným pasom – všetky produkty

3.  ### Lajkovanie produktov:

    Používateľ bude mať možnosť označiť, že sa mu produkt páči. Takto si používateľ bude môcť ukladať svoje obľúbené produkty do svojho zoznamu obľúbených vecí.

    #### Prípad použitia je určený pre:

    -   Prihlásený používateľ bez zbrojného pasu
    -   Prihlásený používateľ so zbrojným pasom

4.  Sken zbrojného pasu: Používateľ bude mať možnosť oskenovať svoj zbrojný pas prostredníctvom
    fotky. Bude tak môcť urobiť počas registrácie alebo kedykoľvek po nej.

    #### Prípad použitia je určený pre:

    -   Prihlásený používateľ bez zbrojného pasu – nahratie nového zbrojného pasu
    -   Prihlásený používateľ so zbrojným pasom – aktualizácia zbrojného pasu

5.  ### Funkcionality košíka a platba:

    V nákupnom košíku budeme vidieť všetky produkty, ktoré sme doň pridali. Budeme tu vidieť celkovú cenu za všetky produkty, budeme môcť odstraňovať veci z košíka a mať možnosť kúpiť produkty. Po rozhodnutí kúpiť sa nám objavia možnosti dopravy a spôsob platby. Ďalej už bude nasledovať platobná brána.

    #### Prípad použitia je určený pre:

    -   Prihlásený používateľ bez zbrojného pasu – iba produkty, na ktoré nie je treba zbrojný pas
    -   Prihlásený používateľ so zbrojným pasom – všetky produkty

## Inštalácia

-   zatial nie je potrebná
-   teraz je možné prezerať iba modely obrazoviek

## Model databazy

![model-databazy](https://user-images.githubusercontent.com/91140372/227771434-887f14b2-3322-4398-89ce-7821566927c8.png)

## Screenshooty z aplikácie

![landing-page](https://user-images.githubusercontent.com/91140372/227772269-20362dcf-d6d3-455e-8325-570bce3bb03a.png)

![login-register](https://user-images.githubusercontent.com/91140372/227771797-5801579c-c794-4eaf-baac-c55cfc1d4176.png)

![order-and-pay](https://user-images.githubusercontent.com/91140372/227771821-28d1abec-a01b-4f4f-a598-0f1339efe9e2.png)

![product-detail](https://user-images.githubusercontent.com/91140372/227771848-b0e436cc-9f0f-48de-91d2-c100bb6dc1bd.png)

![products](https://user-images.githubusercontent.com/91140372/227771867-9c2879ef-2eae-4965-881b-a0e4fe5deea6.png)

![shopping-cart](https://user-images.githubusercontent.com/91140372/227771883-d2ce847c-0316-4c3b-8a15-0f76167db2e9.png)

![user-profile](https://user-images.githubusercontent.com/91140372/227771897-791a888b-6d40-4992-a6db-625311f0e605.png)
