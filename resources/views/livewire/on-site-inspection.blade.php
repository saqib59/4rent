<div>
    <form action="{{ route('create_property') }}" method="get">
        <div wire:id="eoB1kcK3hYOE227uwrLO" class="md:grid md:grid-cols-4">
            <div class="md:col-span-4  justify-between">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="col-span-6 sm:col-span-6">
                        <label class="block font-medium text-lg text-gray-700" for="type">On Site Inspection</label>
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <label class="block font-medium text-sm text-gray-700" for="type">The following Checklists
                            should help you to be well prepared to become a real estate investor. Alle Lists are only
                            proposals.</label>
                        {{-- <label class="block font-medium text-sm text-gray-700" for="type">Let's start with some questions</label> --}}
                    </div>
                    <div class="col-span-6 sm:col-span-6 border">
                        <label class="block font-medium text-lg text-black-700" for="type">
                            <p>Die nachfolgende Liste soll dir helfen, bei der Besichtigung die wichtigsten Merkmale der
                                Wohnung zu prüfen.</p>
                            <p>Immer wenn von einer vVohnung gesprochen wird, Ist jede Immobilie gleichermalsen gemeint.
                                ES kommt also nicht
                                darauf an, ob du nun eine Wohnung oder ein Haus besichtigst.</p>
                            <p>
                                Die Liste ist nur ein Orientierungspunkt und erhebt keinen Anspruch auf Vollständigkeit.
                            </p>
                            <p>
                                Unser Tipp: <br>
                                Warte nach jeder Besichtigung noch mal kurz vor dem Haus und sprech mit anderen
                                Bewohnern von dem Haus.
                                Diese können dir nicht selten wertvolle Tipps über Probleme im Haus oder störende
                                Lagemerkmale geben.
                            </p>
                        </label>
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        {{-- <label class="block font-medium text-sm text-gray-700" for="type">Ihe following Checklists
                            should help you to be well prepared to become a real estate investor. Alle Lists are only
                            proposals.</label> --}}
                        <label class="block font-medium text-sm text-gray-700" for="type">Let's start with some
                            questions</label>
                    </div>
                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Örtliche Gegebenheiten
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist eine Geruchsbelästigung festzustellen? Wenn ja,
                                        woher kommt es? Dauerhaft oder vorrübergehend?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IsteineGeruchsbelästigung1"
                                            name="IsteineGeruchsbelästigung" value="Alles okay">
                                        <label for="IsteineGeruchsbelästigung1">Alles okay</label><br>
                                        <input type="radio" id="IsteineGeruchsbelästigung2"
                                            name="IsteineGeruchsbelästigung" value="Anmerkung">
                                        <label for="IsteineGeruchsbelästigung2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist der Geräuschpegel in Ordnung? Bei geschlossenen und
                                        offenen Fenster prüfen.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstderGeräuschpegel1" name="IstderGeräuschpegel"
                                            value="Alles okay">
                                        <label for="IstderGeräuschpegel1">Alles okay</label><br>
                                        <input type="radio" id="IstderGeräuschpegel2" name="IstderGeräuschpegel"
                                            value="Anmerkung">
                                        <label for="IstderGeräuschpegel2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Macht die Lage einen angenehmen Eindruck? Würdest du
                                        hier selber wohnen wollen?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="MachtdieLageeinen1" name="MachtdieLageeinen"
                                            value="Alles okay">
                                        <label for="MachtdieLageeinen1">Alles okay</label><br>
                                        <input type="radio" id="MachtdieLageeinen2" name="MachtdieLageeinen"
                                            value="Anmerkung">
                                        <label for="MachtdieLageeinen2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Werden neue Gebäude in der Umgebung erbaut, die den
                                        Wert beeinflussen könnten?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WerdenneueGebäude1" name="WerdenneueGebäude"
                                            value="Alles okay">
                                        <label for="WerdenneueGebäude1">Alles okay</label><br>
                                        <input type="radio" id="WerdenneueGebäude2" name="WerdenneueGebäude"
                                            value="Anmerkung">
                                        <label for="WerdenneueGebäude2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Außerer Anschein des Gebäudes
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Weist die Fassade Risse oder Putzschäden auf?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WeistdieFassadeRisse1" name="WeistdieFassadeRisse"
                                            value="Alles okay">
                                        <label for="WeistdieFassadeRisse1">Alles okay</label><br>
                                        <input type="radio" id="WeistdieFassadeRisse2" name="WeistdieFassadeRisse"
                                            value="Anmerkung">
                                        <label for="WeistdieFassadeRisse2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist die Farbe altersentsprechend oder ist sie bereits
                                        stark ausgeblichen?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstdieFarbealtersentsprechend1"
                                            name="IstdieFarbealtersentsprechend" value="Alles okay">
                                        <label for="IstdieFarbealtersentsprechend1">Alles okay</label><br>
                                        <input type="radio" id="IstdieFarbealtersentsprechend2"
                                            name="IstdieFarbealtersentsprechend" value="Anmerkung">
                                        <label for="IstdieFarbealtersentsprechend2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist das Dach noch ausreichend gedeckt oder fehlen
                                        Ziegel?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstdasDachnochausreichend1"
                                            name="IstdasDachnochausreichend" value="Alles okay">
                                        <label for="IstdasDachnochausreichend1">Alles okay</label><br>
                                        <input type="radio" id="IstdasDachnochausreichend2"
                                            name="IstdasDachnochausreichend" value="Anmerkung">
                                        <label for="IstdasDachnochausreichend2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist der Allgemeinzustand des Dachs angemessen?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstderAllgemeinzustanddes1"
                                            name="IstderAllgemeinzustanddes" value="Alles okay">
                                        <label for="IstderAllgemeinzustanddes1">Alles okay</label><br>
                                        <input type="radio" id="IstderAllgemeinzustanddes2"
                                            name="IstderAllgemeinzustanddes" value="Anmerkung">
                                        <label for="IstderAllgemeinzustanddes2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Innenzustand Gebäude
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist die Haustür beschädigt?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstdieHaustür1" name="IstdieHaustür" value="Alles okay">
                                        <label for="IstdieHaustür1">Alles okay</label><br>
                                        <input type="radio" id="IstdieHaustür2" name="IstdieHaustür" value="Anmerkung">
                                        <label for="IstdieHaustür2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist der Zustand des Treppenhaus ansprechend? Gibt es
                                        Putzschãden?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstderZustanddesTreppenhaus1"
                                            name="IstderZustanddesTreppenhaus" value="Alles okay">
                                        <label for="IstderZustanddesTreppenhaus1">Alles okay</label><br>
                                        <input type="radio" id="IstderZustanddesTreppenhaus2"
                                            name="IstderZustanddesTreppenhaus" value="Anmerkung">
                                        <label for="IstderZustanddesTreppenhaus2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gibt es einen Aufzug? Wenn ja, ist er betriebsbereit
                                        und geplegt?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GibteseinenAufzug1" name="GibteseinenAufzug"
                                            value="Alles okay">
                                        <label for="GibteseinenAufzug1">Alles okay</label><br>
                                        <input type="radio" id="GibteseinenAufzug2" name="GibteseinenAufzug"
                                            value="Anmerkung">
                                        <label for="GibteseinenAufzug2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Kann die Wohnungstür barrierefrei mit einem Rollstuhl
                                        erreicht werden?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="KanndieWohnungstürbarrierefrei1"
                                            name="KanndieWohnungstürbarrierefrei" value="Alles okay">
                                        <label for="KanndieWohnungstürbarrierefrei1">Alles okay</label><br>
                                        <input type="radio" id="KanndieWohnungstürbarrierefrei2"
                                            name="KanndieWohnungstürbarrierefrei" value="Anmerkung">
                                        <label for="KanndieWohnungstürbarrierefrei2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wirkt der Eingangsbereich gepflegt und sauber?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WirktderEingangsbereich1" name="WirktderEingangsbereich"
                                            value="Alles okay">
                                        <label for="WirktderEingangsbereich1">Alles okay</label><br>
                                        <input type="radio" id="WirktderEingangsbereich2" name="WirktderEingangsbereich"
                                            value="Anmerkung">
                                        <label for="WirktderEingangsbereich2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Eingangsbereich Wohnung
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist die Wohnungstür beschädigt? Schließt sie
                                        ordentlich?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="dieWohnungstürbeschädigt1"
                                            name="dieWohnungstürbeschädigt" value="Alles okay">
                                        <label for="dieWohnungstürbeschädigt1">Alles okay</label><br>
                                        <input type="radio" id="dieWohnungstürbeschädigt2"
                                            name="dieWohnungstürbeschädigt" value="Anmerkung">
                                        <label for="dieWohnungstürbeschädigt2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Welcher Bodenbelag befindet sich in der Wohnung? Schaut
                                        dieser hochwertig aus?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WelcherBodenbelagbefindet1"
                                            name="WelcherBodenbelagbefindet" value="Alles okay">
                                        <label for="WelcherBodenbelagbefindet1">Alles okay</label><br>
                                        <input type="radio" id="WelcherBodenbelagbefindet2"
                                            name="WelcherBodenbelagbefindet" value="Anmerkung">
                                        <label for="WelcherBodenbelagbefindet2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind die Wande und Decken in einem guten Zustand?
                                        Schaden erkennbar?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SinddieWandeundDecken1" name="SinddieWandeundDecken"
                                            value="Alles okay">
                                        <label for="SinddieWandeundDecken1">Alles okay</label><br>
                                        <input type="radio" id="SinddieWandeundDecken2" name="SinddieWandeundDecken"
                                            value="Anmerkung">
                                        <label for="SinddieWandeundDecken2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind Schranke oder andere Einrichtungsgegenstände
                                        verbaut? Verbleiben diese in der Wohnung?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SindSchrankeoderandere1" name="SindSchrankeoderandere"
                                            value="Alles okay">
                                        <label for="SindSchrankeoderandere1">Alles okay</label><br>
                                        <input type="radio" id="SindSchrankeoderandere2" name="SindSchrankeoderandere"
                                            value="Anmerkung">
                                        <label for="SindSchrankeoderandere2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Feuchtigkeit (in der gesamten Immobilie zu
                                        prüfen)
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind offensichtliche Feuchtigkeitsflecken erkennbar?
                                        Sind diese noch immer feucht?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SindoffensichtlicheFe1" name="SindoffensichtlicheFe"
                                            value="Alles okay">
                                        <label for="SindoffensichtlicheFe1">Alles okay</label><br>
                                        <input type="radio" id="SindoffensichtlicheFe2" name="SindoffensichtlicheFe"
                                            value="Anmerkung">
                                        <label for="SindoffensichtlicheFe2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">
                                        Sind Feuchtigkeitsschäden hinter Schränken versteckt?<br>
                                        Tipp: Auch mal hinter ein paar Schränke schauen, häufig werden diese so
                                        positioniert, das sie Schäden kaschieren.
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SindFeuchtigkeitsschädenhinter1"
                                            name="SindFeuchtigkeitsschädenhinter" value="Alles okay">
                                        <label for="SindFeuchtigkeitsschädenhinter1">Alles okay</label><br>
                                        <input type="radio" id="SindFeuchtigkeitsschädenhinter2"
                                            name="SindFeuchtigkeitsschädenhinter" value="Anmerkung">
                                        <label for="SindFeuchtigkeitsschädenhinter2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Hangen Bilder an ungewöhnlichen Stellen? Sind dahinter
                                        Feuchtigkeitsflecken?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="HangenBilderanungewöhnlichen1"
                                            name="HangenBilderanungewöhnlichen" value="Alles okay">
                                        <label for="HangenBilderanungewöhnlichen1">Alles okay</label><br>
                                        <input type="radio" id="HangenBilderanungewöhnlichen2"
                                            name="HangenBilderanungewöhnlichen" value="Anmerkung">
                                        <label for="HangenBilderanungewöhnlichen2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist unterhalb des Fensters Feuchtigkeit zu erkennen?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstunterhalbdesFensters1" name="IstunterhalbdesFensters"
                                            value="Alles okay">
                                        <label for="IstunterhalbdesFensters1">Alles okay</label><br>
                                        <input type="radio" id="IstunterhalbdesFensters2" name="IstunterhalbdesFensters"
                                            value="Anmerkung">
                                        <label for="IstunterhalbdesFensters2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Türen und Fenster (in der gesamten Immobilie
                                        zu prüfen)
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Schließen die Fenster Ordnungsgemaß? Holzfenster: Ist
                                        eine Verwitterung zu erkennen?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SchließendieFenster1" name="SchließendieFenster"
                                            value="Alles okay">
                                        <label for="SchließendieFenster1">Alles okay</label><br>
                                        <input type="radio" id="SchließendieFenster2" name="SchließendieFenster"
                                            value="Anmerkung">
                                        <label for="SchließendieFenster2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind die Fenster gut isoliert? Hört man Straßenlarm bei
                                        offenen/geschlossenem Fenster?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">SinddieFenstergut1" name=">SinddieFenstergut"
                                            value="Alles okay">
                                        <label for=">SinddieFenstergut1">Alles okay</label><br>
                                        <input type="radio" id=">SinddieFenstergut2" name=">SinddieFenstergut"
                                            value="Anmerkung">
                                        <label for=">SinddieFenstergut2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">SchlieBen alle Türen? Sind sie offensichtlich
                                        beschadigt?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SchlieBenalleTüren1" name="SchlieBenalleTüren"
                                            value="Alles okay">
                                        <label for="SchlieBenalleTüren1">Alles okay</label><br>
                                        <input type="radio" id="SchlieBenalleTüren2" name="SchlieBenalleTüren"
                                            value="Anmerkung">
                                        <label for="SchlieBenalleTüren2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Badezimmer
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Passt die Ausstattung zum Niveau der Wohnung?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="PasstdieAusstattung1" name="PasstdieAusstattung"
                                            value="Alles okay">
                                        <label for="PasstdieAusstattung1">Alles okay</label><br>
                                        <input type="radio" id="PasstdieAusstattung2" name="PasstdieAusstattung"
                                            value="Anmerkung">
                                        <label for="PasstdieAusstattung2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind die Wände hoch gefliest?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">SinddieWändehoch1" name=">SinddieWändehoch"
                                            value="Alles okay">
                                        <label for=">SinddieWändehoch1">Alles okay</label><br>
                                        <input type="radio" id=">SinddieWändehoch2" name=">SinddieWändehoch"
                                            value="Anmerkung">
                                        <label for=">SinddieWändehoch2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gibt es Besonderheiten?<br>
                                        Tipp: Dusche und Badewanne oder ebenerdige Dusche</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GibtesBesonderheiten1" name="GibtesBesonderheiten"
                                            value="Alles okay">
                                        <label for="GibtesBesonderheiten1">Alles okay</label><br>
                                        <input type="radio" id="GibtesBesonderheiten2" name="GibtesBesonderheiten"
                                            value="Anmerkung">
                                        <label for="GibtesBesonderheiten2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gibt es ein Fenster?<br>
                                        Gibt es kein Fenster, so muss ein funktionierender Lüfter vorhanden sein um
                                        Schimmel zu vermeiden.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GibteseinFenster1" name="GibteseinFenster"
                                            value="Alles okay">
                                        <label for="GibteseinFenster1">Alles okay</label><br>
                                        <input type="radio" id="GibteseinFenster2" name="GibteseinFenster"
                                            value="Anmerkung">
                                        <label for="GibteseinFenster2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Kann eine Waschmaschine im Bad angeschlossen
                                        werden?<br>
                                        Gibt es alternative Waschmoglichkeiten?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eineWaschmaschine1" name="eineWaschmaschine"
                                            value="Alles okay">
                                        <label for="eineWaschmaschine1">Alles okay</label><br>
                                        <input type="radio" id="eineWaschmaschine2" name="eineWaschmaschine"
                                            value="Anmerkung">
                                        <label for="eineWaschmaschine2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist ein separates Klo vorhanden oder ist es innerhalb
                                        des Bads?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Isteinseparates1" name="Isteinseparates"
                                            value="Alles okay">
                                        <label for="Isteinseparates1">Alles okay</label><br>
                                        <input type="radio" id="Isteinseparates2" name="Isteinseparates"
                                            value="Anmerkung">
                                        <label for="Isteinseparates2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gibt es einen Heizkörper?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GibteseinenHeizkörper1" name="GibteseinenHeizkörper"
                                            value="Alles okay">
                                        <label for="GibteseinenHeizkörper1">Alles okay</label><br>
                                        <input type="radio" id="GibteseinenHeizkörper2" name="GibteseinenHeizkörper"
                                            value="Anmerkung">
                                        <label for="GibteseinenHeizkörper2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Küche
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind die Wände (besonders im Kochbereich) gefliest?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SinddieWände1" name="SinddieWände" value="Alles okay">
                                        <label for="SinddieWände1">Alles okay</label><br>
                                        <input type="radio" id="SinddieWände2" name="SinddieWände" value="Anmerkung">
                                        <label for="SinddieWände2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gehört die Küche zur Immobilie oder muss eine neue
                                        gekauft werden?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GehörtdieKüchezur1" name="GehörtdieKüchezur"
                                            value="Alles okay">
                                        <label for="GehörtdieKüchezur1">Alles okay</label><br>
                                        <input type="radio" id="GehörtdieKüchezur2" name="GehörtdieKüchezur"
                                            value="Anmerkung">
                                        <label for="GehörtdieKüchezur2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Funktionieren die Elektrogeräte?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">FunktionierendieElektrogeräte1"
                                            name=">FunktionierendieElektrogeräte" value="Alles okay">
                                        <label for=">FunktionierendieElektrogeräte1">Alles okay</label><br>
                                        <input type="radio" id=">FunktionierendieElektrogeräte2"
                                            name=">FunktionierendieElektrogeräte" value="Anmerkung">
                                        <label for=">FunktionierendieElektrogeräte2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>



                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Zimmer
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind die Zimmer vorteilhaft geschnitten?<br>
                                        Tipp: Zimmer nach dem Grundriss nummerieren oder benennen</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SinddieZimmervorteilhaft1"
                                            name="SinddieZimmervorteilhaft" value="Alles okay">
                                        <label for="SinddieZimmervorteilhaft1">Alles okay</label><br>
                                        <input type="radio" id="SinddieZimmervorteilhaft2"
                                            name="SinddieZimmervorteilhaft" value="Anmerkung">
                                        <label for="SinddieZimmervorteilhaft2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind die Wande in einem Ordnungsgemäßen Zustand?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SinddieWandeineinem1" name="SinddieWandeineinem"
                                            value="Alles okay">
                                        <label for="SinddieWandeineinem1">Alles okay</label><br>
                                        <input type="radio" id="SinddieWandeineinem2" name="SinddieWandeineinem"
                                            value="Anmerkung">
                                        <label for="SinddieWandeineinem2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Fallen besondere Merkmale auf? (z.B. dauerhaft verbaute
                                        Möbel)
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">FallenbesondereMerkmale1"
                                            name=">FallenbesondereMerkmale" value="Alles okay">
                                        <label for=">FallenbesondereMerkmale1">Alles okay</label><br>
                                        <input type="radio" id=">FallenbesondereMerkmale2"
                                            name=">FallenbesondereMerkmale" value="Anmerkung">
                                        <label for=">FallenbesondereMerkmale2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind die Böden in Ordnung? Welcher Bodenbelag befindet
                                        sich darunter (bei Vinyl-Böden)<br>
                                        Tipp: Oft verstecken sich wahre Schätze unter Vinyl-Böden, wie z.B. Parkett
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">SinddieBödeninOrdnung1"
                                            name=">SinddieBödeninOrdnung" value="Alles okay">
                                        <label for=">SinddieBödeninOrdnung1">Alles okay</label><br>
                                        <input type="radio" id=">SinddieBödeninOrdnung2"
                                            name=">SinddieBödeninOrdnung" value="Anmerkung">
                                        <label for=">SinddieBödeninOrdnung2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>



                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Elektrik
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ein Blick in den Sicherungskasten lohnt sicht. Ist dieser Ordnungsgemaß?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="EinBlickindenSicherungskasten1"
                                            name="EinBlickindenSicherungskasten" value="Alles okay">
                                        <label for="EinBlickindenSicherungskasten1">Alles okay</label><br>
                                        <input type="radio" id="EinBlickindenSicherungskasten2"
                                            name="EinBlickindenSicherungskasten" value="Anmerkung">
                                        <label for="EinBlickindenSicherungskasten2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Hängen Kabel aus den Wänden raus?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="HängenKabelausden1" name="HängenKabelausden"
                                            value="Alles okay">
                                        <label for="HängenKabelausden1">Alles okay</label><br>
                                        <input type="radio" id="HängenKabelausden2" name="HängenKabelausden"
                                            value="Anmerkung">
                                        <label for="HängenKabelausden2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind ausreichend Steckdosen in der Wohnung?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">SindausreichendSteckdosen1"
                                            name=">SindausreichendSteckdosen" value="Alles okay">
                                        <label for=">SindausreichendSteckdosen1">Alles okay</label><br>
                                        <input type="radio" id=">SindausreichendSteckdosen2"
                                            name=">SindausreichendSteckdosen" value="Anmerkung">
                                        <label for=">SindausreichendSteckdosen2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind TV-Anschluss und Internetanschluss vorhanden?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">SindTVAnschluss1"
                                            name=">SindTVAnschluss" value="Alles okay">
                                        <label for=">SindTVAnschluss1">Alles okay</label><br>
                                        <input type="radio" id=">SindTVAnschluss2"
                                            name=">SindTVAnschluss" value="Anmerkung">
                                        <label for=">SindTVAnschluss2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Heizung
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Welche Heizungsart ist verbaut?<br>
                                        Tipp: Heizungsarbeiten können hohe Kosten verursachen!</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WelcheHeizungsartist1"
                                            name="WelcheHeizungsartist" value="Alles okay">
                                        <label for="WelcheHeizungsartist1">Alles okay</label><br>
                                        <input type="radio" id="WelcheHeizungsartist2"
                                            name="WelcheHeizungsartist" value="Anmerkung">
                                        <label for="WelcheHeizungsartist2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Baujahr der Heizung? Funktioniert sie ohne Probleme?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="BaujahrderHeizung1" name="BaujahrderHeizung"
                                            value="Alles okay">
                                        <label for="BaujahrderHeizung1">Alles okay</label><br>
                                        <input type="radio" id="BaujahrderHeizung2" name="BaujahrderHeizung"
                                            value="Anmerkung">
                                        <label for="BaujahrderHeizung2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Dachboden und Keller
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist das Dach zeitgemäß isoliert?<br>
                                        Tipp: Liegt die Wohnung unter dem Dach, verursacht unzureichende Dämmung erhebliche Mehrkosten
                                        beim heizen</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstdasDachzeitgemäß1"
                                            name="IstdasDachzeitgemäß" value="Alles okay">
                                        <label for="IstdasDachzeitgemäß1">Alles okay</label><br>
                                        <input type="radio" id="IstdasDachzeitgemäß2"
                                            name="IstdasDachzeitgemäß" value="Anmerkung">
                                        <label for="IstdasDachzeitgemäß2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Beinhaltet die Wohnung ein Keller-/Dachbodenabteil? Ist dieses trocken?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="BeinhaltetdieWohnungeinKeller1" name="BeinhaltetdieWohnungeinKeller"
                                            value="Alles okay">
                                        <label for="BeinhaltetdieWohnungeinKeller1">Alles okay</label><br>
                                        <input type="radio" id="BeinhaltetdieWohnungeinKeller2" name="BeinhaltetdieWohnungeinKeller"
                                            value="Anmerkung">
                                        <label for="BeinhaltetdieWohnungeinKeller2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Stellplatz
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gehört ein Stellplatz zu der Wohnung? Welche Mehrkosten entstehen?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GehörteinStellplatzzu1"
                                            name="GehörteinStellplatzzu" value="Alles okay">
                                        <label for="GehörteinStellplatzzu1">Alles okay</label><br>
                                        <input type="radio" id="GehörteinStellplatzzu2"
                                            name="GehörteinStellplatzzu" value="Anmerkung">
                                        <label for="GehörteinStellplatzzu2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wenn nicht, sind ausreichend Stelliplatze in der Umgebung verfügbar?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Wennnichtsindausreichend1" name="Wennnichtsindausreichend"
                                            value="Alles okay">
                                        <label for="Wennnichtsindausreichend1">Alles okay</label><br>
                                        <input type="radio" id="Wennnichtsindausreichend2" name="Wennnichtsindausreichend"
                                            value="Anmerkung">
                                        <label for="Wennnichtsindausreichend2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Mieter
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist der Mieter zufrieden mit der Wohnung?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstderMieterzufrieden1"
                                            name="IstderMieterzufrieden" value="Alles okay">
                                        <label for="IstderMieterzufrieden1">Alles okay</label><br>
                                        <input type="radio" id="IstderMieterzufrieden2"
                                            name="IstderMieterzufrieden" value="Anmerkung">
                                        <label for="IstderMieterzufrieden2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Hat er vor auszuziehen oder will er dort wohnen bleiben?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Hatervorauszuziehenoder1" name="Hatervorauszuziehenoder"
                                            value="Alles okay">
                                        <label for="Hatervorauszuziehenoder1">Alles okay</label><br>
                                        <input type="radio" id="Hatervorauszuziehenoder2" name="Hatervorauszuziehenoder"
                                            value="Anmerkung">
                                        <label for="Hatervorauszuziehenoder2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>


                    <div class="col-span-6 sm:col-span-6" style="margin-top: 50px">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">eigene Fragen
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_1_1"
                                            name="eigeneFragen_r_1_" value="Alles okay">
                                        <label for="eigeneFragen_r_1_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_1_2"
                                            name="eigeneFragen_r_1_" value="Anmerkung">
                                        <label for="eigeneFragen_r_1_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>  
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_2_1"
                                            name="eigeneFragen_r_2_" value="Alles okay">
                                        <label for="eigeneFragen_r_2_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_2_2"
                                            name="eigeneFragen_r_2_" value="Anmerkung">
                                        <label for="eigeneFragen_r_2_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>  
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_3_1"
                                            name="eigeneFragen_r_3_" value="Alles okay">
                                        <label for="eigeneFragen_r_3_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_3_2"
                                            name="eigeneFragen_r_3_" value="Anmerkung">
                                        <label for="eigeneFragen_r_3_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>  
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_4_1"
                                            name="eigeneFragen_r_4_" value="Alles okay">
                                        <label for="eigeneFragen_r_4_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_4_2"
                                            name="eigeneFragen_r_4_" value="Anmerkung">
                                        <label for="eigeneFragen_r_4_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>  
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_5_1"
                                            name="eigeneFragen_r_5_" value="Alles okay">
                                        <label for="eigeneFragen_r_5_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_5_2"
                                            name="eigeneFragen_r_5_" value="Anmerkung">
                                        <label for="eigeneFragen_r_5_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>                              
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
