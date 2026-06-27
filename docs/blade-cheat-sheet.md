Blade è il potente e leggero motore di template di Laravel.

Non aggiunge sovrastruttura all'applicazione perché tutti i file Blade vengono compilati in normale codice PHP speculare e memorizzati in cache fino a quando non vengono modificati. \[[1](https://kinsta.com/it/blog/laravel-blade/), [2](https://kinsta.com/it/blog/laravel-blade/)\]

Ecco una panoramica completa e immediata delle sue caratteristiche principali:

1\. Visualizzazione dei Dati ed Escaping

* **{{ $variabile }}**: Stampa il contenuto applicando automaticamente la protezione XSS tramite la funzione PHP htmlspecialchars.
* **{\!\! $variabile \!\!}**: Stampa il contenuto grezzo (raw), utile per l'HTML sicuro generato dal backend (es. da un editor di testo).

2\. Strutture di Controllo (Direttive)

Sostituiscono i costrutti PHP standard rendendo il codice estremamente pulito:

* **Condizionali**: @if, @elseif, @else, @endif.
* **Verifiche rapide**: @isset($v), @empty($v), @auth, @guest.
* **Cicli**: @foreach, @for, @while.
* **Ciclo avanzato**: @forelse (esegue un ciclo @foreach, ma prevede un blocco @empty se l'array è vuoto).
* **Variabile $loop**: Disponibile automaticamente nei cicli per conoscere l'indice corrente ($loop-\>index), se è il primo elemento ($loop-\>first) o l'ultimo ($loop-\>last). \[[1](https://aulab.it/guide-avanzate/template-blade-in-laravel), [2](https://aulab.it/guide-avanzate/template-blade-in-laravel)\]

3\. Layout ed Ereditarietà

Permette di creare una struttura di pagina master condivisibile:

* **@extends('layout')**: Dice a Blade quale pagina master estendere.
* **@section('nome', 'valore')**: Definisce il contenuto da iniettare nel layout.
* **@yield('nome')**: Usato nel file master per indicare dove mostrare i contenuti delle sezioni. \[[1](https://www.laramind.com/blog/laravel-blade/)\]

4\. Componenti Blade (L'approccio moderno)

Permettono di creare elementi HTML riutilizzabili (come pulsanti o card) memorizzati in resources/views/components/: \[[1](https://aulab.it/guide-avanzate/blade-component-in-laravel)\]

* **@props**: Dichiara le variabili accettate dal componente.
* **$attributes**: Oggetto speciale che raccoglie tutti gli attributi HTML non dichiarati in @props.
* **$slot**: Variabile predefinita che ospita il contenuto inserito all'interno dei tag del componente.
* **Sintassi di richiamo**: \<x-nome-componente /\>.

5\. Direttive di Utilità e Sicurezza

* **@csrf**: Genera un campo di input nascosto con il token di sicurezza obbligatorio per proteggere i moduli (form) dagli attacchi CSRF.
* **@method('PUT')**: Simula i metodi HTTP (PUT, PATCH, DELETE) non supportati nativamente dai form HTML.
* **@class(\[...\])**: Permette di concatenare classi CSS in modo condizionale in base a espressioni booleane.
* **@error('campo')**: Verifica rapidamente la presenza di errori di validazione per un determinato campo di input. \[[1](https://aulab.it/guide-avanzate/template-blade-in-laravel)\]

6\. Integrazione con JavaScript

* **@vite(\[...\])**: Direttiva per caricare e compilare automaticamente gli asset CSS e JS con Vite.
* **@json($array)**: Trasforma istantaneamente un array PHP in un oggetto JavaScript valido.

---

