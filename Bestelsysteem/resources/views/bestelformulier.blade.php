@extends('layouts.app')
@section('content')
    <div class="container col-9 p-3 bg-primary bg-opacity-25 rounded">
        <h1>Bestelformulier</h1>
        <form action="{{route('bestelformulier/opslaan')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Afdeling van budgethouder</label>
                </div>
                <div class="col-5">
                    <select name="afdeling_naam" id="afdeling_naam" class="form-select" aria-label="Default select example">
                        <option value="afdeling1">Afdeling1</option>
                        <option value="afdeling2">Afdeling2</option>
                        <option value="afdeling3">Afdeling3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Budgethouder</label>
                </div>
                <div class="col-5">
                    <select name="budgethouder_naam" id="budgethouder_naam" class="form-select" aria-label="Default select example">
                        <option value="budgethouder1">Budgethouder1</option>
                        <option value="budgethouder2">Budgethouder2</option>
                        <option value="budgethouder3">Budgethouder3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label class="w-auto">Waar heeft de bestelling betrekking op?</label>
                </div>
                <div class="col-5">
                    <select name="kostenplaats_type" id="kostenplaats_type" class="form-select" aria-label="Default select example">
                        <option value="betrekking1">Betrekking1</option>
                        <option value="betrekking2">Betrekking2</option>
                        <option value="betrekking3">Betrekking3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Kostenplaats</label>
                </div>
                <div class="col-5">
                    <select name="kostenplaats_naam" id="kostenplaats_naam" class="form-select" aria-label="Default select example">
                        <option value="kostenplaats1">
                            {{-- value="$kostenplaats->id" --}}
                            {{-- $kostenplaats->id .'-'. $kostenplaats->naam --}}
                            Kostenplaats1
                        </option>
                        <option value="kostenplaats2">Kostenplaats2</option>
                        <option value="kostenplaats3">Kostenplaats3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Categorie van kostensoort</label>
                </div>
                <div class="col-5">
                    <select name="categorie_naam" id="categorie_naam" class="form-select" aria-label="Default select example">
                        {{-- foreach() --}}
                        <option value="categorie1">
                            Categorie1
                            {{-- economische_categorie --}}
                        </option>
                        <option value="categorie2">Categorie2</option>
                        <option value="categorie3">Categorie3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Kostensoort<br><small>(Hoofdrekeningnummer)</small></label>
                </div>
                <div class="col-5">
                    <select name="kostensoort" id="kostensoort" class="form-select" aria-label="Default select example">
                        <option value="kostensoort1">Kostensoort1</option>
                            {{-- hoofdrekeningnummer --}}
                        <option value="kostensoort2">Kostensoort2</option>
                        <option value="kostensoort3">Kostensoort3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Kostencode<br><small>(Subrekeningnummer)</small></label>
                </div>
                <div class="col-5">
                    <select name="kostencode" id="kostencode" class="form-select" aria-label="Default select example">
                        <option value="kostencode1">Kostencode1</option>
                        <option value="kostencode2">Kostencode2</option>
                        <option value="kostencode3">Kostencode3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Fio-route</label>
                </div>
                <div class="col-5">
                    <select name="fio_route" id="fio_route" class="form-select" aria-label="Default select example">
                        <option value="fio1">Fio1</option>
                        <option value="fio2">Fio2</option>
                        <option value="fio3">Fio3</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Bedrag</label>
                </div>
                <div class="col-5 d-flex">
                    <input type="text" class="form-control w-50" name="bedrag" id="bedrag" pattern="^\d+(,\d{1,2})?">
                    <input type="checkbox" class="ms-2 me-1" name="bedrag_bestelbon" id="bedrag_bestelbon" value="1">
                    <label class="pt-2" for="bedrag_bestelbon">Vermelden op bestelbon?</label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Omschrijving</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="korte_omschrijving" id="korte_omschrijving"></input>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label for="start">Leverdatum:</label>
                </div>
                <input type="date" id="leverdatum" name="leverdatum" value="">
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Is er een contract?</label>
                </div>
                <input class="" type="checkbox" id="enterprise_contract" name="enterprise_contract" value="1">
                <label class="ms-2" for="enterprise_contract">Ja</label>
            </div>
            <hr>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Bestaat in Enterprise One?</label>
                </div>
                <input type="checkbox" name="enterprise_one_number"  id="enterprise_one_number" onclick="toggleInputs(this.checked)"/>
                <label class="ms-2" for="enterprise_one_number">Ja</label>
            </div>
            
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Naam leverancier</label>
                </div>
                <input type="text" name="naam_leverancier" id="naam_leverancier" disabled/><br/>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Adres</label>
                </div>
                <input type="text" name="adres_leverancier" id="adres_leverancier" disabled/><br/>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Postcode</label>
                </div>
                <input type="text" name="postcode_leverancier" id="postcode_leverancier" disabled/><br/>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Woonplaats</label>
                </div>
                <input type="text" name="plaats_leverancier" id="plaats_leverancier" disabled/><br/>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>KVK-nummer</label>
                </div>
                <input type="text" name="kvknummer" id="kvknummer" disabled/><br/>
            </div>

            <script>
                function toggleInputs(checked) {
                    document.getElementById('naam_leverancier').disabled = !checked;
                    document.getElementById('adres_leverancier').disabled = !checked;
                    document.getElementById('postcode_leverancier').disabled = !checked;
                    document.getElementById('plaats_leverancier').disabled = !checked;
                    document.getElementById('kvknummer').disabled = !checked;
                }
            </script>

            <div class="buttons my-2 mx-auto col-4">
                <button type="button" class="rounded bg-white bg-opacity-75 col-4 border border-primary border-opacity-50 bg-gradient shadow-sm me-3 text-center p-2">Annuleren</button>
                <button type="submit" class="text-white rounded bg-primary bg-opacity-75 col-4 border border-primary border-opacity-50 bg-gradient shadow-sm text-center p-2">Accepteren</button>
            </div>
        </form>
@endsection
