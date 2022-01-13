<style>
    table tr td:nth-child(2) {
        background-color: gray;
    }

    table thead tr td:nth-child(2) {
        background-color: #e8e4e4 !important;
    }
</style>

<div>
    <form action="" method="get">
        <div wire:id="eoB1kcK3hYOE227uwrLO" class="md:grid md:grid-cols-4">
            <div class="md:col-span-4  justify-between">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                
                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="col-span-6 sm:col-span-6">
                        <label  class="block font-medium text-lg text-gray-700" for="type">Bank Paket</label>
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <label  class="block font-medium text-sm text-gray-700" for="type">Diese Checkliste hilft Ihnen, alle Dokumente rund um Ihren Banktermin strukturiert zu organisieren. </label>
                        <label class="block font-medium text-sm text-gray-700" for="type">Schritt für Schritt alles abhaken</label>
                    </div>
                    <div class="col-span-6 sm:col-span-6" >
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Persönliche Unterlagen and Bonitätsunteriagen</td>
                                    <td class="border px-6 py-4 col-md-3">Erledigt?</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Personalausweiskopie</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Personalausweiskopie1" name="Personalausweiskopie" value="ja">
                                        <label for="Personalausweiskopie1" class="color-green">ja</label><br>

                                        <input type="radio" id="Personalausweiskopie2" name="Personalausweiskopie" value="noch zu erledigen">
                                        <label for="Personalausweiskopie2"  class="color-red">noch zu erledigen</label><br>  

                                        <input type="radio" id="Personalausweiskopie3" name="Personalausweiskopie" checked value="nicht zutreffend">
                                        <label for="Personalausweiskopie3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Lohn-/Gehaltsabrechnungen der letzten drei Monate</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Gehaltsabrechnungen1" name="Gehaltsabrechnungen" value="ja">
                                        <label for="Gehaltsabrechnungen1" class="color-green">ja</label><br>
                                        <input type="radio" id="Gehaltsabrechnungen2" name="Gehaltsabrechnungen" value="noch zu erledigen">
                                        <label for="Gehaltsabrechnungen2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Gehaltsabrechnungen3" name="Gehaltsabrechnungen" checked value="nicht zutreffend">
                                        <label for="Gehaltsabrechnungen3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Letzter Est-Bescheid (ersatzweise Kopie Lst-Bescheinigung, Lohn-Gehaltsabrechnung Dezember)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Letzter1" name="Letzter" value="ja">
                                        <label for="Letzter1" class="color-green">ja</label><br>
                                        <input type="radio" id="Letzter2" name="Letzter" value="noch zu erledigen">
                                        <label for="Letzter2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Letzter3" name="Letzter" checked value="nicht zutreffend">
                                        <label for="Letzter3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">Eigenkapitalnachweis (Konto- u. DepotauSzüge, Ruckkaufswerte LV, Schenkungsnachweise, etc.)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Eigenkapitalnachweis-Konto1" name="Eigenkapitalnachweis-Konto" value="ja">
                                        <label for="Eigenkapitalnachweis-Konto1" class="color-green">ja</label><br>
                                        <input type="radio" id="Eigenkapitalnachweis-Konto2" name="Eigenkapitalnachweis-Konto" value="noch zu erledigen">
                                        <label for="Eigenkapitalnachweis-Konto2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Eigenkapitalnachweis-Konto3" name="Eigenkapitalnachweis-Konto" checked value="nicht zutreffend">
                                        <label for="Eigenkapitalnachweis-Konto3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Nachweise zu weiteren Fremdmitteln (Bausparverträge, öffentliche Mittel, etc. )</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Nachweise1" name="Nachweise" value="ja">
                                        <label for="Nachweise1" class="color-green">ja</label><br>
                                        <input type="radio" id="Nachweise2" name="Nachweise" value="noch zu erledigen">
                                        <label for="Nachweise2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Nachweise3" name="Nachweise" checked value="nicht zutreffend">
                                        <label for="Nachweise3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Vertrage zu bestehenden Kleinkredtvertragen (Ratenkredite, Leasings, etc.)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Vertrage1" name="Vertrage" value="ja">
                                        <label for="Vertrage1" class="color-green">ja</label><br>
                                        <input type="radio" id="Vertrage2" name="Vertrage" value="noch zu erledigen">
                                        <label for="Vertrage2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Vertrage3" name="Vertrage" checked value="nicht zutreffend">
                                        <label for="Vertrage3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Letzte Einkommenssteuererklrung</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Letzte1" name="Letzte" value="ja">
                                        <label for="Letzte1" class="color-green">ja</label><br>
                                        <input type="radio" id="Letzte2" name="Letzte" value="noch zu erledigen">
                                        <label for="Letzte2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Letzte3" name="Letzte" checked value="nicht zutreffend">
                                        <label for="Letzte3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Nachweis private Krankenversicherung (falls vorhanden)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Nachweis1" name="Nachweis" value="ja">
                                        <label for="Nachweis1" class="color-green">ja</label><br>
                                        <input type="radio" id="Nachweis2" name="Nachweis" value="noch zu erledigen">
                                        <label for="Nachweis2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Nachweis3" name="Nachweis" checked value="nicht zutreffend">
                                        <label for="Nachweis3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Scheidungs-/Unterhaltsurteile/Gütertrennung/Ehescheidungsfolgevereinbarung</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Scheidungs1" name="Scheidungs" value="ja">
                                        <label for="Scheidungs1" class="color-green">ja</label><br>
                                        <input type="radio" id="Scheidungs2" name="Scheidungs" value="noch zu erledigen">
                                        <label for="Scheidungs2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Scheidungs3" name="Scheidungs" checked value="nicht zutreffend">
                                        <label for="Scheidungs3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Eigenkapitalnachweis (Konto- u. Depotauszuge, Ruckkaufswerte Lv, Schenkungsnachweise, etc.)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Eigenkapitalnachweis1" name="Eigenkapitalnachweis" value="ja">
                                        <label for="Eigenkapitalnachweis1" class="color-green">ja</label><br>
                                        <input type="radio" id="Eigenkapitalnachweis2" name="Eigenkapitalnachweis" value="noch zu erledigen">
                                        <label for="Eigenkapitalnachweis2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Eigenkapitalnachweis3" name="Eigenkapitalnachweis" checked value="nicht zutreffend">
                                        <label for="Eigenkapitalnachweis3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Darlenensvertrage ZZgl. Kontoauszuge der letzien 2 Janre (bei umschuldung/Forward und weiteren
                                        Immobilendarienen)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Darlenensvertrage1" name="Darlenensvertrage" value="ja">
                                        <label for="Darlenensvertrage1" class="color-green">ja</label><br>
                                        <input type="radio" id="Darlenensvertrage2" name="Darlenensvertrage" value="noch zu erledigen">
                                        <label for="Darlenensvertrage2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Darlenensvertrage3" name="Darlenensvertrage" checked value="nicht zutreffend">
                                        <label for="Darlenensvertrage3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">
                                        <input type="text" name="" id="" class="border-transparent focus:border-transparent block w-full" placeholder="own notice">
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="own_not_1-1" name="own_not_1-" value="ja">
                                        <label for="own_not_1-1" class="color-green">ja</label><br>
                                        <input type="radio" id="own_not_1-2" name="own_not_1-" value="noch zu erledigen">
                                        <label for="own_not_1-2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="own_not_1-3" name="own_not_1-" checked value="nicht zutreffend">
                                        <label for="own_not_1-3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">
                                        <input type="text" name="" id="" class="border-transparent focus:border-transparent block w-full" placeholder="own notice">
                                    </td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="own_not_2-1" name="own_not_2-" value="ja">
                                        <label for="own_not_2-1" class="color-green">ja</label><br>
                                        <input type="radio" id="own_not_2-2" name="own_not_2-" value="noch zu erledigen">
                                        <label for="own_not_2-2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="own_not_2-3" name="own_not_2-" checked value="nicht zutreffend">
                                        <label for="own_not_2-3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top: 50px" class="col-span-6 sm:col-span-6">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Objectspecific</td>
                                    <td class="border px-6 py-4 col-md-3">Erledigt?</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Bei Zwangsversteigerung: Gutachten, da die anderen Unterlagen meist nicht vorliegen</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Bei_Zwangsversteigerung1" name="Bei_Zwangsversteigerung" value="ja">
                                        <label for="Bei_Zwangsversteigerung1" class="color-green">ja</label><br>
                                        <input type="radio" id="Bei_Zwangsversteigerung2" name="Bei_Zwangsversteigerung" value="noch zu erledigen">
                                        <label for="Bei_Zwangsversteigerung2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Bei_Zwangsversteigerung3" name="Bei_Zwangsversteigerung" checked value="nicht zutreffend">
                                        <label for="Bei_Zwangsversteigerung3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Farbfotos des Objektes (Vorder- und Rückseite, ggf. auch Innenfotos)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Farbfotos_des1" name="Farbfotos_des" value="ja">
                                        <label for="Farbfotos_des1" class="color-green">ja</label><br>
                                        <input type="radio" id="Farbfotos_des2" name="Farbfotos_des" value="noch zu erledigen">
                                        <label for="Farbfotos_des2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Farbfotos_des3" name="Farbfotos_des" checked value="nicht zutreffend">
                                        <label for="Farbfotos_des3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Wohnflächenberechnung</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Wohnflächenberechnung1" name="Wohnflächenberechnung" value="ja">
                                        <label for="Wohnflächenberechnung1" class="color-green">ja</label><br>
                                        <input type="radio" id="Wohnflächenberechnung2" name="Wohnflächenberechnung" value="noch zu erledigen">
                                        <label for="Wohnflächenberechnung2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Wohnflächenberechnung3" name="Wohnflächenberechnung" checked value="nicht zutreffend">
                                        <label for="Wohnflächenberechnung3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Berechnung des umbauten Raumes (Kubatur)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Berechnung_des1" name="Berechnung_des" value="ja">
                                        <label for="Berechnung_des1" class="color-green">ja</label><br>
                                        <input type="radio" id="Berechnung_des2" name="Berechnung_des" value="noch zu erledigen">
                                        <label for="Berechnung_des2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Berechnung_des3" name="Berechnung_des" checked value="nicht zutreffend">
                                        <label for="Berechnung_des3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Grundriss mit Maßangaben</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Grundriss_mit1" name="Grundriss_mit" value="ja">
                                        <label for="Grundriss_mit1" class="color-green">ja</label><br>
                                        <input type="radio" id="Grundriss_mit2" name="Grundriss_mit" value="noch zu erledigen">
                                        <label for="Grundriss_mit2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Grundriss_mit3" name="Grundriss_mit" checked value="nicht zutreffend">
                                        <label for="Grundriss_mit3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Schnittzeichnung mit Maßangaben bei Hauserm</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Schnittzeichnung_mit1" name="Schnittzeichnung_mit" value="ja">
                                        <label for="Schnittzeichnung_mit1" class="color-green">ja</label><br>
                                        <input type="radio" id="Schnittzeichnung_mit2" name="Schnittzeichnung_mit" value="noch zu erledigen">
                                        <label for="Schnittzeichnung_mit2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Schnittzeichnung_mit3" name="Schnittzeichnung_mit" checked value="nicht zutreffend">
                                        <label for="Schnittzeichnung_mit3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Baubeschreibung</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Baubeschreibung1" name="Baubeschreibung" value="ja">
                                        <label for="Baubeschreibung1" class="color-green">ja</label><br>
                                        <input type="radio" id="Baubeschreibung2" name="Baubeschreibung" value="noch zu erledigen">
                                        <label for="Baubeschreibung2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Baubeschreibung3" name="Baubeschreibung" checked value="nicht zutreffend">
                                        <label for="Baubeschreibung3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Lageplan/Flurkarte</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Lageplan_Flurkarte1" name="Lageplan_Flurkarte" value="ja">
                                        <label for="Lageplan_Flurkarte1" class="color-green">ja</label><br>
                                        <input type="radio" id="Lageplan_Flurkarte2" name="Lageplan_Flurkarte" value="noch zu erledigen">
                                        <label for="Lageplan_Flurkarte2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Lageplan_Flurkarte3" name="Lageplan_Flurkarte" checked value="nicht zutreffend">
                                        <label for="Lageplan_Flurkarte3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Kostenaufstellung der Baumaßnah men (für Neubau, Umbau, Renovierung)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Kostenaufstellung_der1" name="Kostenaufstellung_der" value="ja">
                                        <label for="Kostenaufstellung_der1" class="color-green">ja</label><br>
                                        <input type="radio" id="Kostenaufstellung_der2" name="Kostenaufstellung_der" value="noch zu erledigen">
                                        <label for="Kostenaufstellung_der2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Kostenaufstellung_der3" name="Kostenaufstellung_der" checked value="nicht zutreffend">
                                        <label for="Kostenaufstellung_der3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Aufstellung der geplanten Eigenleistung</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Aufstellung_der1" name="Aufstellung_der" value="ja">
                                        <label for="Aufstellung_der1" class="color-green">ja</label><br>
                                        <input type="radio" id="Aufstellung_der2" name="Aufstellung_der" value="noch zu erledigen">
                                        <label for="Aufstellung_der2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Aufstellung_der3" name="Aufstellung_der" checked value="nicht zutreffend">
                                        <label for="Aufstellung_der3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Werkvertrag für das Bauvorhaben (bzw. Entwurt)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Werkvertragf1" name="Werkvertragf" value="ja">
                                        <label for="Werkvertragf1" class="color-green">ja</label><br>
                                        <input type="radio" id="Werkvertragf2" name="Werkvertragf" value="noch zu erledigen">
                                        <label for="Werkvertragf2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Werkvertragf3" name="Werkvertragf" checked value="nicht zutreffend">
                                        <label for="Werkvertragf3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>


                                
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Grundbuchauszug (nicht alter als 3 Monate, unbeglaubigt genügt)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Grundbuchauszugp21" name="Grundbuchauszugp2" value="ja">
                                        <label for="Grundbuchauszugp21" class="color-green">ja</label><br>
                                        <input type="radio" id="Grundbuchauszugp22" name="Grundbuchauszugp2" value="noch zu erledigen">
                                        <label for="Grundbuchauszugp22"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Grundbuchauszugp23" name="Grundbuchauszugp2" checked value="nicht zutreffend">
                                        <label for="Grundbuchauszugp23"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Kaufvertrag (bZw. Entwurf) zum Objekt/Grundstück</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Kaufvertragbzw1" name="Kaufvertragbzw" value="ja">
                                        <label for="Kaufvertragbzw1" class="color-green">ja</label><br>
                                        <input type="radio" id="Kaufvertragbzw2" name="Kaufvertragbzw" value="noch zu erledigen">
                                        <label for="Kaufvertragbzw2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Kaufvertragbzw3" name="Kaufvertragbzw" checked value="nicht zutreffend">
                                        <label for="Kaufvertragbzw3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Teilungserklärung und Aufteilungsplan (bei Eigentumswohnungen)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Teilungserklärungund1" name="Teilungserklärungund" value="ja">
                                        <label for="Teilungserklärungund1" class="color-green">ja</label><br>
                                        <input type="radio" id="Teilungserklärungund2" name="Teilungserklärungund" value="noch zu erledigen">
                                        <label for="Teilungserklärungund2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Teilungserklärungund3" name="Teilungserklärungund" checked value="nicht zutreffend">
                                        <label for="Teilungserklärungund3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>


                                
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Bei Erbbauchrecht: Erbbaurechtsvertrag (bzw. Entwurt)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="BeiErbbauchrecht1" name="BeiErbbauchrecht" value="ja">
                                        <label for="BeiErbbauchrecht1" class="color-green">ja</label><br>
                                        <input type="radio" id="BeiErbbauchrecht2" name="BeiErbbauchrecht" value="noch zu erledigen">
                                        <label for="BeiErbbauchrecht2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="BeiErbbauchrecht3" name="BeiErbbauchrecht" checked value="nicht zutreffend">
                                        <label for="BeiErbbauchrecht3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                
                                
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Nachweis Wohngebäudeversicherung</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="NachweisWohn1" name="NachweisWohn" value="ja">
                                        <label for="NachweisWohn1" class="color-green">ja</label><br>
                                        <input type="radio" id="NachweisWohn2" name="NachweisWohn" value="noch zu erledigen">
                                        <label for="NachweisWohn2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="NachweisWohn3" name="NachweisWohn" checked value="nicht zutreffend">
                                        <label for="NachweisWohn3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top: 50px" class="col-span-6 sm:col-span-6">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead style="background-color: #e8e4e4">
                                <tr class="text-center font-bold">
                                    <td class="border px-6 py-4 col-md-6">Self employed and ceo</td>
                                    <td class="border px-6 py-4 col-md-3">Erledigt?</td>
                                    <td class="border px-6 py-4 col-md-3">Annotation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-6 py-4">Letzten 3 Jahresabschlüsse (unterschrieben)</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Letzten31" name="Letzten3" value="ja">
                                        <label for="Letzten31" class="color-green">ja</label><br>
                                        <input type="radio" id="Letzten32" name="Letzten3" value="noch zu erledigen">
                                        <label for="Letzten32"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Letzten33" name="Letzten3" checked value="nicht zutreffend">
                                        <label for="Letzten33"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">Aktuelle BWA mit Summen- und Saldenlisten</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="AktuelleBWA1" name="AktuelleBWA" value="ja">
                                        <label for="AktuelleBWA1" class="color-green">ja</label><br>
                                        <input type="radio" id="AktuelleBWA2" name="AktuelleBWA" value="noch zu erledigen">
                                        <label for="AktuelleBWA2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="AktuelleBWA3" name="AktuelleBWA" checked value="nicht zutreffend">
                                        <label for="AktuelleBWA3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">Letzte ESt-Erklärung inklusive aller Anlagen</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="LetzteESt1" name="LetzteESt"  value="ja">
                                        <label for="LetzteESt1" class="color-green">ja</label><br>
                                        <input type="radio" id="LetzteESt2" name="LetzteESt" value="noch zu erledigen">
                                        <label for="LetzteESt2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="LetzteESt3" name="LetzteESt" checked value="nicht zutreffend">
                                        <label for="LetzteESt3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">Letzten 2 ESt-Bescheide</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Letzten2ESt1" name="Letzten2ESt" value="ja">
                                        <label for="Letzten2ESt1" class="color-green">ja</label><br>
                                        <input type="radio" id="Letzten2ESt2" name="Letzten2ESt" value="noch zu erledigen">
                                        <label for="Letzten2ESt2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Letzten2ESt3" name="Letzten2ESt" checked value="nicht zutreffend">
                                        <label for="Letzten2ESt3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="border px-6 py-4">Gesellschaftsvertrag. Handelsregisterauszug</td>
                                    <td class="text-left border px-6 py-4 font-bold">
                                        <input type="radio" id="Gesellschaftsvertrag1" name="Gesellschaftsvertrag" value="ja">
                                        <label for="Gesellschaftsvertrag1" class="color-green">ja</label><br>
                                        <input type="radio" id="Gesellschaftsvertrag2" name="Gesellschaftsvertrag" value="noch zu erledigen">
                                        <label for="Gesellschaftsvertrag2"  class="color-red">noch zu erledigen</label><br>  
                                        <input type="radio" id="Gesellschaftsvertrag3" name="Gesellschaftsvertrag" checked value="nicht zutreffend">
                                        <label for="Gesellschaftsvertrag3"  class="color-grey">nicht zutreffend</label>
                                    </td>
                                    <td class="border px-6 py-4"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="w-full flex" style="justify-content: end;">
                            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                Als PDF Speichern
                            </button>
                            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                Drucken
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@section('js')
<script>
    $('input[type=radio]').change(function() {

        let cell = $(this).closest('td');


        if (this.value == 'ja') {
            cell.css('background-color', 'green');
        }
        else if (this.value == 'noch zu erledigen') {
            cell.css('background-color', 'red');
        }
        else if (this.value == 'nicht zutreffend') {
            cell.css('background-color', 'gray');
        }
    });
</script>
@endsection
