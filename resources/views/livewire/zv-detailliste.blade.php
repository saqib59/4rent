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
                        <label class="block font-medium text-lg text-gray-700" for="type">ZV Detailliste</label>
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <label class="block font-medium text-sm text-gray-700" for="type">The following Checkists should
                            hep you to be well prepared to become a real estate investor. Alle Lists are only
                            proposals.</label>
                        {{-- <label class="block font-medium text-sm text-gray-700" for="type">Let's start with some questions</label> --}}
                    </div>
                    <div class="col-span-6 sm:col-span-6 border">
                        <label class="block font-medium text-lg text-black-700" for="type">
                            <p>
                                Die nachfolgende Liste soll dir helfen, beim Zwangsversteigerungstermin erfolgreich eine
                                Immobilie zu ersteigern.
                            </p>
                            <p>
                                Unser Tipp hierfür: Spreche mit den anwesenden Menschen. Häufig finden sich hierrunter
                                auch Eigentümer aus
                                dem gleichen Haus. Diese können wertvolle Tipps zu der Immobilie geben. Man muss
                                allerdings vorsichtig sein,
                                da diese auch irreführende Auskünfte geben können um den Preis zu drücken.
                            </p>
                            <p>
                                Interessant ist allerdings immer der Punkt, an dem diese Personen das Bieten aufhören.
                                Hören sie deutlich früher
                                mit dem bieten auf als alle anderen, könnten ihnen besondere Hinweise zu dem
                                betreffenden Objekt vorliegen.
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
                                    <td class="border px-6 py-4 col-md-6">Recherche
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Hast du das Gutachten ausführlich durchgelesen?<br>
                                        Tipp: Am Termin hast du nochmal die Chance das Gutachten zu lesen.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="HastdudasGutachtenausführlich1" name="HastdudasGutachtenausführlich"
                                            value="Alles okay">
                                        <label for="HastdudasGutachtenausführlich1">Alles okay</label><br>
                                        <input type="radio" id="HastdudasGutachtenausführlich2" name="HastdudasGutachtenausführlich"
                                            value="Anmerkung">
                                        <label for="HastdudasGutachtenausführlich2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Hast du alle Informationen berücksichtigt die dir zur
                                        Verfügung stehen?</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Hastdualleberücksichtigt1" name="Hastdualleberücksichtigt"
                                            value="Alles okay">
                                        <label for="Hastdualleberücksichtigt1">Alles okay</label><br>
                                        <input type="radio" id="Hastdualleberücksichtigt2" name="Hastdualleberücksichtigt"
                                            value="Anmerkung">
                                        <label for="Hastdualleberücksichtigt2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Hast du dir ein Limit gesetzt?
                                        Tipp: Besonders bei Bietverfahren verfallen viele Menschen schnell in ein
                                        "Biet-Fieber", um das zu
                                        vermeiden, ist es wichtig sich vorher ein Höchstgebot zu überlegen. Wlrd dieses
                                        auch nur um wenige
                                        Euro uberboten, solltest du dennoch aussteigen.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Hastdudireingesetzt1"
                                            name="Hastdudireingesetzt" value="Alles okay">
                                        <label for="Hastdudireingesetzt1">Alles okay</label><br>
                                        <input type="radio" id="Hastdudireingesetzt2"
                                            name="Hastdudireingesetzt" value="Anmerkung">
                                        <label for="Hastdudireingesetzt2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Vor dem Termin
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Hast du die Sicherheitsleistung überwiesen oder einen Scheck besorgt?<br>
                                        Tipp: Du kannst die Sicherheitsleistung i.H.v. 10% des Verkehrswert überweisen oder als bestātigten
                                        Scheck mit zu dem Termin bringen.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="HastdudieSicherheitsleistung1" name="HastdudieSicherheitsleistung"
                                            value="Alles okay">
                                        <label for="HastdudieSicherheitsleistung1">Alles okay</label><br>
                                        <input type="radio" id="HastdudieSicherheitsleistung2" name="HastdudieSicherheitsleistung"
                                            value="Anmerkung">
                                        <label for="HastdudieSicherheitsleistung2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Ist der Termin noch aktuell?<br>
                                        Tipp: Es kann vorkommen, das der Termin kurzfristig abgesagt wird, daher solitest du am Abend vorher
                                        nochmal uberprüfen ob der Temin noch aktuell ist.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="IstderTerminnochaktuell1" name="IstderTerminnochaktuell"
                                            value="Alles okay">
                                        <label for="IstderTerminnochaktuell1">Alles okay</label><br>
                                        <input type="radio" id="IstderTerminnochaktuell2" name="IstderTerminnochaktuell"
                                            value="Anmerkung">
                                        <label for="IstderTerminnochaktuell2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Hast du deinen Personalausweis eingepackt?<br>
                                        Tipp: Ohne diesen kannst du kein Gebôt àbgeben.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id=">HastdudeinenPersonalausweis1"
                                            name=">HastdudeinenPersonalausweis" value="Alles okay">
                                        <label for=">HastdudeinenPersonalausweis1">Alles okay</label><br>
                                        <input type="radio" id=">HastdudeinenPersonalausweis2"
                                            name=">HastdudeinenPersonalausweis" value="Anmerkung">
                                        <label for=">HastdudeinenPersonalausweis2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Bietest du für eine Firma? Dann brauchst du einen Handelsregisterauszug und eine
                                        Vertretungsvollmacht.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="BietestdufüreineFirma1"
                                            name="BietestdufüreineFirma" value="Alles okay">
                                        <label for="BietestdufüreineFirma1">Alles okay</label><br>
                                        <input type="radio" id="BietestdufüreineFirma2"
                                            name="BietestdufüreineFirma" value="Anmerkung">
                                        <label for="BietestdufüreineFirma2">Anmerkung</label>
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
                                    <td class="border px-6 py-4 col-md-6">Im Termin
                                    </td>
                                    <td class="border px-6 py-4 col-md-3">Wenn alles okay ist, mach einen Haken</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gibt es überraschende Verlautbarungen vom Rechtspfieger?<br>
                                        Tipp: Der zuständige Rechtspfieger gibt wertvolle Informationen zum Grundbuch und dem Objekt.
                                        Zwischen dem ZV-Termin und der Gutachtenerstellung kann es noch Informationen geben, die nicht
                                        veröffentlicht werden.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="GibtesüberraschendeVerlautbarungen1"
                                            name="GibtesüberraschendeVerlautbarungen" value="Alles okay">
                                        <label for="GibtesüberraschendeVerlautbarungen1">Alles okay</label><br>
                                        <input type="radio" id="GibtesüberraschendeVerlautbarungen2"
                                            name="GibtesüberraschendeVerlautbarungen" value="Anmerkung">
                                        <label for="GibtesüberraschendeVerlautbarungen2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Denke an dein Höchstgebot __________________</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="DenkeandeinHöchstgebot1"
                                            name="DenkeandeinHöchstgebot" value="Alles okay">
                                        <label for="DenkeandeinHöchstgebot1">Alles okay</label><br>
                                        <input type="radio" id="DenkeandeinHöchstgebot2"
                                            name="DenkeandeinHöchstgebot" value="Anmerkung">
                                        <label for="DenkeandeinHöchstgebot2">Anmerkung</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Höre aufmerksam zu! <br>
                                        Tipp: Manche Rechtspfieger geben den Anwesenden die Chance, Fragen zu stellen. Nutze diese und
                                        werde alle deine Fragen los.</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="MancheRechtspfiegergeben1"
                                            name="MancheRechtspfiegergeben" value="Alles okay">
                                        <label for="MancheRechtspfiegergeben1">Alles okay</label><br>
                                        <input type="radio" id="MancheRechtspfiegergeben2"
                                            name="MancheRechtspfiegergeben" value="Anmerkung">
                                        <label for="MancheRechtspfiegergeben2">Anmerkung</label>
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
