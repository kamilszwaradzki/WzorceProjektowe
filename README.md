# WzorceProjektowe
Moje implementacje kodów z książki "Rusz głową! Wzorce Projektowe" wyd. 1
1) Rozdział Pierwszy - wzorzec Strategia
>**Wzorzec Strategia** definiuje rodzinę algorytmów, pakuje je jako osobne klasy i powoduje, że są one w pełni wymienne. Zastosowanie tego wzorca pozwala na to, aby zmiany w implementacji algorytmów przetwarzania były całkowicie niezależne od strony klienta, który z nich korzysta.
2) Rozdział Drugi - wzorzec Obserwator
>**Wzorzec Obserwator** definiuje pomiędzy obiektami relację jeden-do-wielu w taki sposób, że kiedy wybrany obiekt zmienia swój stan, to wszystkie jego obiekty zależne zostają o tym powiadomione i automatycznie zaktualizowane.
3) Rozdział Trzeci - wzorzec Dekorator
>**Wzorzec Dekorator** pozwala na dynamiczne przydzielanie danemu obiektowi nowych zachowań. Dekoratory dają elastyczność podobną do tej, jaką daje dziedziczenie, oferując jednak w zamian znacznie rozszerzoną funkcjonalność.
4) Rozdział Czwarty - wzorzec Fabryka
>**Wzorzec Metoda Fabrykująca** definiuje interfejs pozwalający na tworzenie obiektów, ale pozwala klasom podrzędnym decydować, jakiej klasy obiekt zostanie utworzony. Wzorzec Metoda Fabrykująca przekazuje odpowiedzialność za tworzenie obiektów do klas podrzędnych.

>**Wzorzec Fabryka Abstrakcyjna** dostarcza interfejs do tworzenia całych rodzin spokrewnionych lub zależnych od siebie obiektów bez konieczności określania ich klas rzeczywistych.
5) Rozdział Piąty - wzorzec Singleton
>**Wzorzec Singleton** zapewnia, że dana klasa będzie miała tylko i wyłącznie jedną instancję obiektu, i zapewnia globalny punkt dostępu do tej instancji.
6) Rozdział Szósty - wzorzec Polecenie
>**Wzorzec Polecenie** hermetyzuje żądania w postaci obiektów, co umożliwia parametryzowanie różnych obiektów zróżnicowanymi żądaniami (takimi jak np. żądania kolejkowania lub rejestracji) oraz obsługiwanie operacji, które można wycofać.
7) Rozdział Siódmy - wzorzec Adapter(Kaczka/Indyk) oraz wzorzec Fasada(Kino Domowe)
>**Wzorzec Adapter** dokonuje konwersji interfejsu danej klasy do postaci innego interfejsu, zgodnego z oczekiwaniami klienta. Adapter pozwala na wzajemną współpracę klas, które ze względu na niekompatybilne interfejsy wcześniej nie mogły ze sobą współpracować.

>**Wzorzec Fasada** zapewnia jeden, zunifikowany interfejs dla całego zestawu interfejsów określonego podsystemu. Fasada tworzy nowy interfejs wysokiego poziomu, który powoduje, że korzystanie z całego podsystemu staje się zdecydowanie łatwiejsze.
8) Rozdział Ósmy - wzorzec Metoda Szablonowa
>**Wzorzec Metoda Szablonowa** definiuje szkielet danego algorytmu w określonej metodzie, przekazując realizację niektórych jego kroków do klas podrzędnych. Wzorzec ten pozwala klasom podrzędnym na redefiniowanie pewnych kroków algorytmu, ale jednocześnie uniemożliwia zmianę jego struktury.
9) Rozdział Dziewiąty - wzorzec Iterator(DinerMenu/PancakeHouseMenu) oraz wzorzec Kompozyt(Menu)
>**Wzorzec Iterator** zapewnia metodę dostępu sekwencyjnego do elementów obiektu zagregowanego bez ujawniania jego reprezentacji wewnętrznej.

>**Wzorzec Kompozyt** pozwala łączyć obiekty w struktury drzewiaste, które reprezentują hierarchie część-całość. Jego zastosowanie pozwala klientom jednolicie obsługiwać zarówno pojedyncze obiekty, jak i ich kompozycje.
10) Rozdział Dziesiąty - wzorzec Stan
>**Wzorzec Stan** umożliwia obiektowi zmianę zachowania wraz ze zmianą jego wewnętrznego stanu. Po takiej zmianie funkcjonuje on jak inna klasa, jednocześnie nie zmieniając klasy tego obiektu.
11) Rozdział Jedynasty - wzorzec Proxy
>**Wzorzec Proxy** prowadzi do utworzenia obiektu pośredniczącego, który kontroluje dostęp do innego obiektu.
