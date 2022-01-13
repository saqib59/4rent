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
                        <label class="block font-medium text-sm text-gray-700" for="type">The tollowing Checkists should
                            hep you to be well prepared to become a real estate investor. Alle Lists are only
                            proposals.</label>
                        {{-- <label class="block font-medium text-sm text-gray-700" for="type">Let's start with some questions</label> --}}
                    </div>
                    <div class="col-span-6 sm:col-span-6 border">
                        <label class="block font-medium text-lg text-black-700" for="type">
                            <p>Die nachfolgende Liste soll dir helfen, bei der durchschau der Dokumente die wichtigsten
                                Merkmale der Wohnung
                                zu prüfen.</p>
                            <p>Insbesondere Modernisierungsmašnahmen können sehr kostspielig werden. Daher solltest du
                                die vorliegenden
                                Dokumente sehr genau prüfen.</p>

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
                                    <td class="border px-6 py-4 col-md-6">Protokolle der Wohnungseigentümergemeinschaft
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gehören die Protokolle zu der Immobilie?<br>
                                        Tipp: Manchmal werden Häuser in einer WEG verbunden und es werden die falschen
                                        Protokolle
                                        übermittelt.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GehörendieProtokolle1" name="GehörendieProtokolle"
                                            value="Alles okay">
                                        <label for="GehörendieProtokolle1">Alles okay</label><br>
                                        <input type="radio" id="GehörendieProtokolle2" name="GehörendieProtokolle"
                                            value="Anmerkung">
                                        <label for="GehörendieProtokolle2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gibt es beschlossene oder geplante Sanierungen? Wenn
                                        ja, sind die Kosten bereits abgerechnet?<br>
                                        Tipp: In den Protokollen sind alle geplanten Maišnahmen eñthalten und diese
                                        können Mehrkosten in
                                        Form von Sonderumlagen hervorrufen.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Gibtesbeschlosseneoder1" name="Gibtesbeschlosseneoder"
                                            value="Alles okay">
                                        <label for="Gibtesbeschlosseneoder1">Alles okay</label><br>
                                        <input type="radio" id="Gibtesbeschlosseneoder2" name="Gibtesbeschlosseneoder"
                                            value="Anmerkung">
                                        <label for="Gibtesbeschlosseneoder2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist eine Sonderumlage geplant und wenn ja, wie hoch ist
                                        diese?<br>
                                        Tipp: Addiere sie direkt auf den Kaufpreis, bzw. verhandel einen Rabatt in Höhe
                                        dieser.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IsteineSonderumlagegeplant1"
                                            name="IsteineSonderumlagegeplant" value="Alles okay">
                                        <label for="IsteineSonderumlagegeplant1">Alles okay</label><br>
                                        <input type="radio" id="IsteineSonderumlagegeplant2"
                                            name="IsteineSonderumlagegeplant" value="Anmerkung">
                                        <label for="IsteineSonderumlagegeplant2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind die Protokolle professionell erstellt?<br>
                                        Tipp: Sind die Protokolle schlampig geführt, weist es auf eine mangelhafte
                                        Hausverwaltung hin.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SinddieProtokolleprofessionell1"
                                            name="SinddieProtokolleprofessionell" value="Alles okay">
                                        <label for="SinddieProtokolleprofessionell1">Alles okay</label><br>
                                        <input type="radio" id="SinddieProtokolleprofessionell2"
                                            name="SinddieProtokolleprofessionell" value="Anmerkung">
                                        <label for="SinddieProtokolleprofessionell2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gibt es wiederkehrende Tagesordnungspunkte die einen
                                        negativen Einfluss auf die Wohnung haben?<br>
                                        Tipp: Hier ist es besonders Interessant, ob die Gemeinschaft gegen einzelne
                                        Eigentümer den Rechtsweg
                                        gesucht hat.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GibteswiederkehrendeTagesordnungspunkte1"
                                            name="GibteswiederkehrendeTagesordnungspunkte" value="Alles okay">
                                        <label for="GibteswiederkehrendeTagesordnungspunkte1">Alles okay</label><br>
                                        <input type="radio" id="GibteswiederkehrendeTagesordnungspunkte2"
                                            name="GibteswiederkehrendeTagesordnungspunkte" value="Anmerkung">
                                        <label for="GibteswiederkehrendeTagesordnungspunkte2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Hausgeldabrechnungen
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Liegen die Kosten im Rahmen der Vorauszahlung oder
                                        müssen regelmăsig nachzahlungen geleistet
                                        werden?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="LiegendieKostenimRahmen1" name="LiegendieKostenimRahmen"
                                            value="Alles okay">
                                        <label for="LiegendieKostenimRahmen1">Alles okay</label><br>
                                        <input type="radio" id="LiegendieKostenimRahmen2" name="LiegendieKostenimRahmen"
                                            value="Anmerkung">
                                        <label for="LiegendieKostenimRahmen2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wie hoch ist die Instandhaltungsrücklage?<br>
                                        Tipp: Ist die Rücklage gering, so können Heizungssanierungen oder Dacharbeiten
                                        schnell zu einer
                                        Sonderumlage fuhren.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WiehochistdieInstandh1" name="WiehochistdieInstandh"
                                            value="Alles okay">
                                        <label for="WiehochistdieInstandh1">Alles okay</label><br>
                                        <input type="radio" id="WiehochistdieInstandh2" name="WiehochistdieInstandh"
                                            value="Anmerkung">
                                        <label for="WiehochistdieInstandh2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wie hoch ist die Instandhalitungsrücklage deiner
                                        Wohnung?<br>
                                        Tipp: Die Rückage ist fast wie "bares Geld", daher kann einé hohe Rücklage den
                                        Wert der Wohnung
                                        positiv beeintlussen.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">WiehochistdieInstandhalitungsrücklage1"
                                            name=">WiehochistdieInstandhalitungsrücklage" value="Alles okay">
                                        <label for=">WiehochistdieInstandhalitungsrücklage1">Alles okay</label><br>
                                        <input type="radio" id=">WiehochistdieInstandhalitungsrücklage2"
                                            name=">WiehochistdieInstandhalitungsrücklage" value="Anmerkung">
                                        <label for=">WiehochistdieInstandhalitungsrücklage2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist eine Erhöhung der Rücklagenzuführung geplant?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IsteineErhöhungderRücklagenzuführung1"
                                            name="IsteineErhöhungderRücklagenzuführung" value="Alles okay">
                                        <label for="IsteineErhöhungderRücklagenzuführung1">Alles okay</label><br>
                                        <input type="radio" id="IsteineErhöhungderRücklagenzuführung2"
                                            name="IsteineErhöhungderRücklagenzuführung" value="Anmerkung">
                                        <label for="IsteineErhöhungderRücklagenzuführung2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Wirtschaftsplan
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Weicht der Wirtschaftsplan des nächsten Jahres stark
                                        von dem des vorherigen ab?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WeichtderWirtschaftsplandesnächsten1"
                                            name="WeichtderWirtschaftsplandesnächsten" value="Alles okay">
                                        <label for="WeichtderWirtschaftsplandesnächsten1">Alles okay</label><br>
                                        <input type="radio" id="WeichtderWirtschaftsplandesnächsten2"
                                            name="WeichtderWirtschaftsplandesnächsten" value="Anmerkung">
                                        <label for="WeichtderWirtschaftsplandesnächsten2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wie hoch sind die nicht umlagefähigen Kosten (hier
                                        zänlt auch die Rücklage rein)?<br>
                                        Tipp: nicht umlagefähige Kosten musst du als Vermieter selber tragen und kannst
                                        sie nicht weitergeben.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Wiehochsinddienichtumlagefähigen1"
                                            name="Wiehochsinddienichtumlagefähigen" value="Alles okay">
                                        <label for="Wiehochsinddienichtumlagefähigen1">Alles okay</label><br>
                                        <input type="radio" id="Wiehochsinddienichtumlagefähigen2"
                                            name="Wiehochsinddienichtumlagefähigen" value="Anmerkung">
                                        <label for="Wiehochsinddienichtumlagefähigen2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist der Wirtschaftsplan konstant?<br>
                                        Tipp: Ist der Wirts chaftsplan konstant über die letzten Jahre, verschafft er
                                        eine gewisse
                                        Planungssicherheit.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstderWirtschaftsplankonstant1"
                                            name="IstderWirtschaftsplankonstant" value="Alles okay">
                                        <label for="IstderWirtschaftsplankonstant1">Alles okay</label><br>
                                        <input type="radio" id="IstderWirtschaftsplankonstant2"
                                            name="IstderWirtschaftsplankonstant" value="Anmerkung">
                                        <label for="IstderWirtschaftsplankonstant2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Bestehender Mietvertrag
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist die Wohnung aktuelle fremd vermietet? Dann musst du
                                        die folgenden Fragen berücksichtigen.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstdieWohnungaktuellefremdvermietet1"
                                            name="IstdieWohnungaktuellefremdvermietet" value="Alles okay">
                                        <label for="IstdieWohnungaktuellefremdvermietet1">Alles okay</label><br>
                                        <input type="radio" id="IstdieWohnungaktuellefremdvermietet2"
                                            name="IstdieWohnungaktuellefremdvermietet" value="Anmerkung">
                                        <label for="IstdieWohnungaktuellefremdvermietet2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wie hoch ist die aktuelle Kaltmiete? Entspricht Sie der
                                        Ortsüblichen Miete?<br>
                                        Tipp: Die Ortsübliche Miete findest du in unserem Preisatlas</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WiehochistdieaktuelleKaltmiete1"
                                            name="WiehochistdieaktuelleKaltmiete" value="Alles okay">
                                        <label for="WiehochistdieaktuelleKaltmiete1">Alles okay</label><br>
                                        <input type="radio" id="WiehochistdieaktuelleKaltmiete2"
                                            name="WiehochistdieaktuelleKaltmiete" value="Anmerkung">
                                        <label for="WiehochistdieaktuelleKaltmiete2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist eine Index- oder Staffelmiete vereinbart?<br>
                                        Tipp: Diese Vertragsarten schrānken dich bei Mieterhöhungen stark ein.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="steineIndexoderStaffelmiete1"
                                            name="steineIndexoderStaffelmiete" value="Alles okay">
                                        <label for="steineIndexoderStaffelmiete1">Alles okay</label><br>
                                        <input type="radio" id="steineIndexoderStaffelmiete2"
                                            name="steineIndexoderStaffelmiete" value="Anmerkung">
                                        <label for="steineIndexoderStaffelmiete2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wann war die letzte Mlieterhöhung? Welcher %-Teil wurde
                                        die letzten 3 Jahre erhöht?<br>
                                        Tipp: Innerhalb von 3 Jahren darf die Miete maximal um 20% (einige Regionen 156)
                                        erhõht werden</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WannwardieletzteMlieterhöhung1"
                                            name="WannwardieletzteMlieterhöhung" value="Alles okay">
                                        <label for="WannwardieletzteMlieterhöhung1">Alles okay</label><br>
                                        <input type="radio" id="WannwardieletzteMlieterhöhung2"
                                            name="WannwardieletzteMlieterhöhung" value="Anmerkung">
                                        <label for="WannwardieletzteMlieterhöhung2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                {{-- * --}}
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wurde eine Kaution hinterlegt und wie hoch ist diese?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WurdeeineKautionhinterlegt1"
                                            name="WurdeeineKautionhinterlegt" value="Alles okay">
                                        <label for="WurdeeineKautionhinterlegt1">Alles okay</label><br>
                                        <input type="radio" id="WurdeeineKautionhinterlegt2"
                                            name="WurdeeineKautionhinterlegt" value="Anmerkung">
                                        <label for="WurdeeineKautionhinterlegt2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wurde die Wohnung mit Möbiliar vermietet?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WurdedieWohnungmitMöbiliar1"
                                            name="WurdedieWohnungmitMöbiliar" value="Alles okay">
                                        <label for="WurdedieWohnungmitMöbiliar1">Alles okay</label><br>
                                        <input type="radio" id="WurdedieWohnungmitMöbiliar2"
                                            name="WurdedieWohnungmitMöbiliar" value="Anmerkung">
                                        <label for="WurdedieWohnungmitMöbiliar2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">In welchem Zustand muss der Mieter die Wohnung
                                        hinterlassen?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="InwelchemZustandmussder1" name="InwelchemZustandmussder"
                                            value="Alles okay">
                                        <label for="InwelchemZustandmussder1">Alles okay</label><br>
                                        <input type="radio" id="InwelchemZustandmussder2" name="InwelchemZustandmussder"
                                            value="Anmerkung">
                                        <label for="InwelchemZustandmussder2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Macht der Mieter einen zuverlāssigen Eindruck? Kommen
                                        die Mietzahlungen regelmäßig?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="MachtderMietereinenzuverlāssigen1"
                                            name="MachtderMietereinenzuverlāssigen" value="Alles okay">
                                        <label for="MachtderMietereinenzuverlāssigen1">Alles okay</label><br>
                                        <input type="radio" id="MachtderMietereinenzuverlāssigen2"
                                            name="MachtderMietereinenzuverlāssigen" value="Anmerkung">
                                        <label for="MachtderMietereinenzuverlāssigen2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist der Mietvertrag befristet?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstderMietvertragbefristet?1"
                                            name="Ist derMietvertragbefriste?" value="Alles okay">
                                        <label for="IstderMietvertragbefristet?1">Alles okay</label><br>
                                        <input type="radio" id="IstderMietvertragbefristet?2"
                                            name="Ist derMietvertragbefriste?" value="Anmerkung">
                                        <label for="IstderMietvertragbefristet?2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wielang besteht der Mietvertrag?<br>
                                        Tipp: Wenn Mietverträge länger als 5/8 Jahre laufen, so verlängert sich die
                                        Kündigungsfrist bei
                                        Eigenbedarf von 3 auf 6/9 Monate.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WielangbestehtderMietvertrag1"
                                            name="WielangbestehtderMietvertrag" value="Alles okay">
                                        <label for="WielangbestehtderMietvertrag1">Alles okay</label><br>
                                        <input type="radio" id="WielangbestehtderMietvertrag2"
                                            name="WielangbestehtderMietvertrag" value="Anmerkung">
                                        <label for="WielangbestehtderMietvertrag2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Grundbuchauszug
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Passt der Grundbuchauszug zu der Wohnung?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="PasstderGrundbuchauszugzu1"
                                            name="PasstderGrundbuchauszugzu" value="Alles okay">
                                        <label for="PasstderGrundbuchauszugzu1">Alles okay</label><br>
                                        <input type="radio" id="PasstderGrundbuchauszugzu2"
                                            name="PasstderGrundbuchauszugzu" value="Anmerkung">
                                        <label for="PasstderGrundbuchauszugzu2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">
                                        Weist Abteilung II Besonderheiten auf?<br>
                                        Tipp: In Abteilung ll sind alle Lasten und Beschrānkungen aufgeführt
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="WeistAbteilungIIBesonderheitenauf1"
                                            name="WeistAbteilungIIBesonderheitenauf" value="Alles okay">
                                        <label for="WeistAbteilungIIBesonderheitenauf1">Alles okay</label><br>
                                        <input type="radio" id="WeistAbteilungIIBesonderheitenauf2"
                                            name="WeistAbteilungIIBesonderheitenauf" value="Anmerkung">
                                        <label for="WeistAbteilungIIBesonderheitenauf2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind Benutzungsrechte im Bestandsverzeichnis eingetragen?<br>
                                        Tipp: Benutzungsrechte müssen eingetragen sein, damit sie auch rechtssicher bestehen. Beispiele sind
                                        ein Garten, ein Parkplatz oder eine Terasse.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SindBenutzungsrechteimBestandsverzeichnis1"
                                            name="SindBenutzungsrechteimBestandsverzeichnis" value="Alles okay">
                                        <label for="SindBenutzungsrechteimBestandsverzeichnis1">Alles okay</label><br>
                                        <input type="radio" id="SindBenutzungsrechteimBestandsverzeichnis2"
                                            name="SindBenutzungsrechteimBestandsverzeichnis" value="Anmerkung">
                                        <label for="SindBenutzungsrechteimBestandsverzeichnis2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Teilungserklärung
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Sind hier Sondernutzungsrechte für deine Wohnung eingetragen?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="SindhierSondernutzungsrechtefürdeine1" name="SindhierSondernutzungsrechtefürdeine"
                                            value="Alles okay">
                                        <label for="SindhierSondernutzungsrechtefürdeine1">Alles okay</label><br>
                                        <input type="radio" id="SindhierSondernutzungsrechtefürdeine2" name="SindhierSondernutzungsrechtefürdeine"
                                            value="Anmerkung">
                                        <label for="SindhierSondernutzungsrechtefürdeine2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Grundriss und Wohnflächenberechnung
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Stimmt die Wohnfläche mit der im Exposee überein?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="StimmtdieWohnflächemit1" name="StimmtdieWohnflächemit"
                                            value="Alles okay">
                                        <label for="StimmtdieWohnflächemit1">Alles okay</label><br>
                                        <input type="radio" id="StimmtdieWohnflächemit2" name="StimmtdieWohnflächemit"
                                            value="Anmerkung">
                                        <label for="StimmtdieWohnflächemit2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Energieausweis
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist ein Energieausweis vorhanden?
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IsteinEnergieausweisvorhanden1" name="IsteinEnergieausweisvorhanden" value="Alles okay">
                                        <label for="IsteinEnergieausweisvorhanden1">Alles okay</label><br>
                                        <input type="radio" id="IsteinEnergieausweisvorhanden2" name="IsteinEnergieausweisvorhanden" value="Anmerkung">
                                        <label for="IsteinEnergieausweisvorhanden2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Werden Modernisierungsmaßnahmen durch den Energieberater vorgeschlagen?<br>
                                        Tipp: Eine Heizungssanierung liegt nicht selten im mittleren 5- bis 6-stelligen Bereich</td>
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
                                        <input type="radio" id="eigeneFragen_r_1_1" name="eigeneFragen_r_1_"
                                            value="Alles okay">
                                        <label for="eigeneFragen_r_1_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_1_2" name="eigeneFragen_r_1_"
                                            value="Anmerkung">
                                        <label for="eigeneFragen_r_1_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_2_1" name="eigeneFragen_r_2_"
                                            value="Alles okay">
                                        <label for="eigeneFragen_r_2_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_2_2" name="eigeneFragen_r_2_"
                                            value="Anmerkung">
                                        <label for="eigeneFragen_r_2_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_3_1" name="eigeneFragen_r_3_"
                                            value="Alles okay">
                                        <label for="eigeneFragen_r_3_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_3_2" name="eigeneFragen_r_3_"
                                            value="Anmerkung">
                                        <label for="eigeneFragen_r_3_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_4_1" name="eigeneFragen_r_4_"
                                            value="Alles okay">
                                        <label for="eigeneFragen_r_4_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_4_2" name="eigeneFragen_r_4_"
                                            value="Anmerkung">
                                        <label for="eigeneFragen_r_4_2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4"></td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="eigeneFragen_r_5_1" name="eigeneFragen_r_5_"
                                            value="Alles okay">
                                        <label for="eigeneFragen_r_5_1">Alles okay</label><br>
                                        <input type="radio" id="eigeneFragen_r_5_2" name="eigeneFragen_r_5_"
                                            value="Anmerkung">
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
